<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $query = Project::query();
        
        // Apply search filters
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('client_name', 'like', "%{$search}%");
            });
        }
        
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category', $request->category);
        }
        
        if ($request->has('status') && $request->status !== '') {
            $query->where('active', $request->status);
        }
        
        // Order projects
        $query->orderBy('order', 'asc')
              ->orderBy('created_at', 'desc');
        
        $projects = $query->paginate(10);
        
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validateProject($request);
        
        $data = $request->all();
        
        // Generate slug if empty
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        
        // Handle checkboxes
        $data['featured'] = $request->has('featured');
        $data['active'] = $request->has('active');
        
        $project = Project::create($data);
        
        return redirect()->route('admin.projects.show', $project->id)
                         ->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validateProject($request, $id);
        
        $project = Project::findOrFail($id);
        $data = $request->all();
        
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        
        // Handle checkboxes
        $data['featured'] = $request->has('featured');
        $data['active'] = $request->has('active');
        
        $project->update($data);
        
        return redirect()->route('admin.projects.show', $project->id)
                         ->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        
        // Delete image if exists
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        
        $project->delete();
        
        return redirect()->route('admin.projects.index')
                         ->with('success', 'Project deleted successfully!');
    }
    
    /**
     * Toggle the active status of the project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleStatus($id)
    {
        $project = Project::findOrFail($id);
        $project->active = !$project->active;
        $project->save();
        
        $status = $project->active ? 'active' : 'draft';
        
        return redirect()->back()
                         ->with('success', "Project has been marked as {$status}.");
    }
    
    /**
     * Toggle the featured status of the project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleFeatured($id)
    {
        $project = Project::findOrFail($id);
        $project->featured = !$project->featured;
        $project->save();
        
        $message = $project->featured
            ? "Project has been added to featured projects."
            : "Project has been removed from featured projects.";
        
        return redirect()->back()->with('success', $message);
    }
    
    /**
     * Validate the project request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int|null  $id
     * @return array
     */
    protected function validateProject(Request $request, $id = null)
    {
        $rules = [
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:projects,slug' . ($id ? ",{$id}" : ''),
            'description' => 'required|max:255',
            'content' => 'required',
            'category' => 'required|max:100',
            'client_name' => 'nullable|max:100',
            'completion_date' => 'nullable|date',
            'technologies' => 'nullable|max:255',
            'website_url' => 'nullable|url|max:255',
            'case_study_url' => 'nullable|url|max:255',
            'order' => 'nullable|integer|min:0',
        ];
        
        // Only require image for new projects
        if (!$id) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        } else {
            $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048';
        }
        
        return $request->validate($rules);
    }
}