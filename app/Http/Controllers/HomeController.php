<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
       // return view('home');
        return view('properties.account');
    }
    /*
    public function show()
    {
        // return view('home');
        return view('properties.account-objects');
    }
    */
    public function account_support(){
        return view('properties.account-support');
    }
    public function account_support_success(){
        return view('properties.account-support-success');
    }
}
