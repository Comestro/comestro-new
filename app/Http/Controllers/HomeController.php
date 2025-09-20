<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the homepage of the application.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('homepage');
    }
}
