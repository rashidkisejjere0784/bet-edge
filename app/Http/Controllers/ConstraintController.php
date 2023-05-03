<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Constraint;

class ConstraintController extends Controller
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
    public function deposit(Request $request)
    {
        $constraint = Constraint::find(1);
        $constraint->depositConstraint = $request->input('amount');
        $constraint->save();

        return redirect()->route('home');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function withdraw(Request $request)
    {
        $constraint = Constraint::find(1);
        $constraint->withdrawConstraint = $request->input('amount');
        $constraint->save();

        return redirect()->route('home');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function stake(Request $request)
    {
        $constraint = Constraint::find(1);
        $constraint->stakeConstraint = $request->input('amount');
        $constraint->save();

        return redirect()->route('home');
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
