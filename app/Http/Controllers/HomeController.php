<?php

namespace App\Http\Controllers;

use App\Models\Expert;
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
        $totalExpertDev = Expert::count();
        return view('homepage', compact('totalproject', 'totalExpertDev'));
    }
    public function experts(){
        $experts = Expert::all();
        return view('experts', compact('experts'))  ;
    }
}
