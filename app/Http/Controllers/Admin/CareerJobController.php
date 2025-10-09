<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Careerjob;
use App\Models\Internship;
use App\Models\JobApplication;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class CareerJobController extends Controller
{
    public function index()
    {
        $jobs = CareerJob::with('category')->latest()->get();
        $categories = JobCategory::all();
        return view('admin.careers.createcareerjob', compact('jobs', 'categories'));
    }


    public function create()
    {
        $categories = JobCategory::all();
        $jobs = CareerJob::with('category')->latest()->get();
        return view('admin.careers.createcareerjob', compact('categories', 'jobs'));
    }

    // Show create job form
    // public function create()
    // {
    //     $categories = JobCategory::all();
    //     return view('admin.careers.createcareerjob', compact('categories'));
    // }

    // Store a new job
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:jobcategories,id',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'salary' => 'required|string|max:255',
            'description' => 'required|string',
            'skills' => 'nullable|string',
        ]);

        Careerjob::create($request->all());

        return redirect()->route('admin.careerjobs.index')->with('success', 'Job added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $job = CareerJob::findOrFail($id);
        $categories = JobCategory::all();
        return view('admin.careers.editcareerjob', compact('job', 'categories'));
    }

    // Update a job
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:jobcategories,id',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'salary' => 'required|string|max:255',
            'description' => 'required|string',
            'skills' => 'nullable|string',
        ]);

        $job = CareerJob::findOrFail($id);
        $job->update($request->all());

        return redirect()->route('admin.careerjobs.index')->with('success', 'Job updated successfully!');
    }



    public function destroy($id)
    {
        $job = CareerJob::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.careerjobs.index')->with('success', 'Job deleted successfully!');

    }



    public function indexPublic()
    {
        $categories = JobCategory::all();
        $jobs = CareerJob::with('category')->latest()->get();
        return view('careers', compact('categories', 'jobs'));
    }
    public function show($id)
    {
        $job = CareerJob::with('category')->findOrFail($id);
        return view('admin.careers.index', compact('job'));
    }


    public function filterByCategoryPublic($id)
    {
        $categories = JobCategory::all();
        $jobs = CareerJob::with('category')->where('category_id', $id)->latest()->get();
        $internship = Internship::all();
        return view('careers', compact('categories', 'jobs','internship'));
    }
public function applications()
{
    $applications = JobApplication::with('careerjob')->latest()->paginate(10);
    return view('admin.job_applications.index', compact('applications'));
}

public function viewApplication($id)
{
    $application = JobApplication::with('careerjob')->findOrFail($id);
    return view('admin.job_applications.show', compact('application'));
}

public function deleteApplication($id)
{
    $application = JobApplication::findOrFail($id);
    // Delete the resume file if exists
    if ($application->resume && file_exists(storage_path('app/public/'.$application->resume))) {
        unlink(storage_path('app/public/'.$application->resume));
    }
    $application->delete();
    return redirect()->route('admin.applications.index')->with('success', 'Application deleted successfully!');
}

public function addInternship(){
    return view('admin.careers.addInternship');
}
public function addInternshipSubmit(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'skills_required' => 'required',
        'description' => 'required|string',
        'duration' => 'nullable|string|max:100',
        'stipend' => 'nullable|string|max:100',
        'questions' => 'nullable|array',
        'questions.*' => 'nullable|string|max:255',
    ]);

    Internship::create([
        'title' => $validated['title'],
        'skills_required' => $validated['skills_required'],
        'description' => $validated['description'],
        'duration' => $validated['duration'] ?? null,
        'stipend' => $validated['stipend'] ?? null,
        'questions' => $validated['questions'] ?? [],
    ]);

    return redirect()->back()->with('success', 'Internship added successfully!');
}

}
