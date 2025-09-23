<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Display the project portfolio page.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $projects = Project::latest()->get();
        
        return view('portfolio', compact('projects'));
    }

    /**
     * Display the specified project.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show(string $slug): View
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        
        // Get related projects from the same category
        $relatedProjects = Project::where('category', $project->category)
            ->where('id', '!=', $project->id)
            ->latest()
            ->limit(2)
            ->get();
        
        return view('project-detail', compact('project', 'relatedProjects'));
    }
}