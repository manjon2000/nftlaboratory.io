<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function home()
    {
        return view('front-end.home');
    }

    public function services()
    {
        return view('front-end.services');
    }
    public function contact()
    {
        return view('front-end.contact');
    }
}
