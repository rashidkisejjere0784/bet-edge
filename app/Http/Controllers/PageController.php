<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Constraint;
use App\Models\User;


class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if($page == "billing"){
            return view("pages.{$page}", [
                "games" => Game::all(),
                "constraint" => Constraint::find(1)
            ]);
        }

        if($page == "Deposit" || $page == "Withdraw"){
            return view("pages.{$page}", [
                "constraint" => Constraint::find(1)
            ]);
        }

        if($page == "user-management"){
            return view("pages.{$page}", [
                "users" => User::all(),
            ]);
        }

        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }

    public function vr()
    {
        return view("pages.virtual-reality");
    }

    public function rtl()
    {
        return view("pages.rtl");
    }

    public function profile()
    {
        return view("pages.profile-static");
    }

    public function signin()
    {
        return view("pages.sign-in-static");
    }

    public function signup()
    {
        return view("pages.sign-up-static");
    }
}
