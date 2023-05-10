<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\BetSlip;
use App\Models\User;
use App\Models\Stats;

class BetSlipController extends Controller
{
    public function stopGame(Request $request){
        $markets = $request->input("market");
        $gameId = $request->input("gameId");

        if($markets){

            foreach($markets as $market){
                $Slips = BetSlip::select('*')
                        ->where("gameId", $gameId)
                        ->where("status", "pending")
                        ->get();


                
                foreach($Slips as $slip){
                    if($slip->market == $market){
                        //user predicted correctly
                        self::updateUserWin($slip->userId, $slip->gameId);
                    }
                    else{
                        //user predicted wrongly
                        echo " loop - ";

                        self::cancelUserGames($slip->userId);
                        
                        
                    }
                }
            }
        }

        Game::where("id", $gameId)
                ->delete();

        return redirect()->route('home');
    } 

    private function updateUserWin($userId, $gameId){
        BetSlip::where("userId", $userId)
        ->where("status", "pending")
        ->where("gameId", $gameId)
        ->update([
            "status" => "win"
        ]);

        //if the user has no more pending games he/she wins
        //check whether user has no more pending games
        $games = BetSlip::where("userId", $userId)
        ->where("status", "pending")
        ->get();

        if(count($games) == 0){
            $user = User::find($userId);
            $pottentialWin = $user->currentPotentialWin;
            $user->amount += $user->currentStake + $user->currentPotentialWin;
            $user->currentStake = 0;
            $user->currentPotentialWin = 0;

            $user->save();

            $stats = Stats::find(1);
            $stats->totalWins += 1;
            $stats->save();
        }
    }

    private function cancelUserGames($userId){
        $updates = BetSlip::where("userId", $userId)
            ->where("status", "pending")
            ->update([
                "status" => "lost"
            ]);

        echo $updates;

        if($updates > 0){
            $user = User::find($userId);

            $stats = Stats::find(1);
            $stats->totalLoses += 1;
            $stats->totalAmount += $user->currentStake;
            $stats->save();

            $user->currentStake = 0;
            $user->currentPotentialWin = 0;

            $user->save();
        }

        
    }

    public function stake(Request $request){
        $userId = auth()->user()->id;
        $pWining = $request->input('pWinning');
        $stakeAmount = $request->input('stakeAmount');

        $user = User::find($userId);
        $user->currentStake += $stakeAmount;
        $user->currentPotentialWin += $pWining;

        $user->amount -= $stakeAmount;

        $user->save();

        BetSlip::where("userId", $userId)
        ->where("status", "queue")
        ->update([
            "status" => "pending"
        ]);

        return redirect()->route('page', ['page' => 'History']);

    }

    public function addGame(Request $request)
    {
        $gameId = $request->input('gameId');
        $market = $request->input('market');
        $odd = $request->input('odd');
        $userId = auth()->user()->id;

        $game = Game::find($gameId);

        $Slip = BetSlip::select('*')
        ->where("userId", $userId)
        ->where("gameId", $gameId)
        ->where("status", "queue")
        ->get();

        if(count($Slip) == 0){
            $newSlip = new BetSlip();
            $newSlip->userId = $userId;
            $newSlip->gameId = $gameId;
            $newSlip->gameName = $game->teamOne . " " . $game->teamTwo;
            $newSlip->market = $market;
            $newSlip->odd = $odd;
            $newSlip->status = "queue";

            $newSlip->save();

            return redirect()->route('page', ['page' => 'billing']);
        }
        else{
            BetSlip::where("userId", $userId)
        ->where("gameId", $gameId)
        ->where("status", "queue")
        ->update([
            'market' => $market,
            'odd' => $odd
        ]);

        return redirect()->route('page', ['page' => 'billing']);
        }
     }

     public function removeGame(Request $request){
        $slipId = $request->input('id');

        BetSlip::where("userId", auth()->user()->id)
                ->where("id", $slipId)
                ->delete();

        return redirect()->route('page', ['page' => 'billing']);
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
