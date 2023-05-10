<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Stats;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'firstname' => 'required|max:255|min:2',
            'lastname' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required'
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        if(auth()->user()->id==1){

        return redirect('/dashboard');
        }
        else{
            $stat = Stats::find(1);
            $stat->totalUsers += 1;
            $stat->save();
            
            return  redirect ()->route('page', ['page' => 'billing']);
        }
    }
}
