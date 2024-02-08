<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('dashboard');
    }

    public function cart()
    {
        return view('cart');
    }
}
