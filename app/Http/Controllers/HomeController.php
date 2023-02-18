<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //redirct to user page
    public function index()
    {
        return view('frontend.pages.home-page');
    }

    //redirct to admin Dashboard page
    public function adminHome()
    {
        return view('backend.pages.admin_pages.students');
    }

    //admin logout
    public function adminLogout(){
        Auth::logout();
        return redirect()->route('login')->with('success' , 'you have been successfuly logout');
    }

     //user logout
    public function userLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function getRoom(){
        return view('frontend.pages.take-room');
    }
}
