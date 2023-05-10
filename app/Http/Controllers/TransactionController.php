<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Stats;

class TransactionController extends Controller
{
   

    /**
     * Store a newly created resource in storage.
     */
    public function depositTransaction(Request $request)
    {
        $amount = $request->input("amount");

        $currentUser = User::find(auth()->user()->id);

        $currentUser->amount += $amount;

        $currentUser->save();

        $transaction = new Transaction();

        $transaction->userId = auth()->user()->id;
        $transaction->amount = $amount;
        $transaction->transaction = "deposit";

        $transaction->save();

        $stats = Stats::find(1);
        $stats->totalAmount += $amount;
        $stats->save();

        return redirect()->route('page', ['page' => 'Deposit']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function withdrawTransaction(Request $request)
    {
        $amount = $request->input("amount");

        $currentUser = User::find(auth()->user()->id);

        $currentUser->amount -= $amount;

        $currentUser->save();

        $transaction = new Transaction();

        $transaction->userId = auth()->user()->id;
        $transaction->amount = $amount;
        $transaction->transaction = "withdraw";

        $transaction->save();

        $stats = Stats::find(1);
        $stats->totalAmount -= $amount;
        $stats->save();

        return redirect()->route('page', ['page' => 'Withdraw']);
    }

  
}
