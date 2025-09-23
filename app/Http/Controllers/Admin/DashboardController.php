<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Get project counts
        $projectCount = Project::count();
        $activeProjectCount = Project::where('active', true)->count();
        $userCount = User::count();
        
        // Get recent projects
        $recentProjects = Project::orderBy('created_at', 'desc')
                                ->limit(5)
                                ->get();
        
        return view('admin.dashboard', compact('projectCount', 'activeProjectCount', 'userCount', 'recentProjects'));
    }
}