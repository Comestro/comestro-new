<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        $totalproject = Project::count();
        return view('homepage', compact('totalproject'));
    }
}
