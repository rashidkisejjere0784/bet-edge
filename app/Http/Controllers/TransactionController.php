<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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

        return redirect()->route('page', ['page' => 'Withdraw']);
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
