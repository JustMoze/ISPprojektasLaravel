<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function getHome(){
    return view('home');
  }

  public function getProfile(){
    return view('profile');
  }

  public function getLogin(){
    return view('login');
  }

  public function getRegistration(){
    return view('registration');
  }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
