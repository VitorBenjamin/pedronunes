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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function galeria()
    {
        return view('galeria');
    }
    public function galeria2()
    {
        return view('layouts.galeria-teste');
    }
    public function produto()
    {
        return view('produto');
    }
}
