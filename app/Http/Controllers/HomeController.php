<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Constraint;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(auth()->user()->id==1){
            return view('pages.dashboard', [
                'games' => Game::all(),
                'constraint' => Constraint::find(1)
            ]);
        }
        else{
            return  redirect ()->route('page', ['page' => 'billing']);
        }
}
}
