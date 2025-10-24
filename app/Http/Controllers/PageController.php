<?php

namespace App\Http\Controllers;

use App\Models\Careerjob;
use App\Models\Expert;
use App\Models\Internship;
use App\Models\InternshipApplication;
use App\Models\JobApplication;
use App\Models\jobcategory;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the about page.
     *
     * @return \Illuminate\View\View
     */

    public function applyForm($id)
    {
        $job = Careerjob::findOrFail($id);
        return view('applyForm', compact('job'));
    }

    public function submitApplication(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'dob' => 'required|date',
            'degree' => 'required|string',
            'college' => 'required|string',
            'year' => 'required|integer',
            'percentage' => 'required',
            'resume' => 'required|mimes:pdf|max:2048',
        ]);

        // Handle file upload
        $resumePath = $request->file('resume')->store('resumes', 'public');

        JobApplication::create([
            'careerjob_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'degree' => $request->degree,
            'college' => $request->college,
            'year' => $request->year,
            'percentage' => $request->percentage,
            'experience' => $request->experience,
            'previous_company' => $request->previous_company,
            'role' => $request->role,
            'skills' => $request->skills,
            'location' => $request->location,
            'salary' => $request->salary,
            'notice_period' => $request->notice_period,
            'resume' => $resumePath,
            'cover_letter' => $request->cover_letter,
        ]);

        return redirect()->route('careers')->with('success', 'Application submitted successfully!');
    }
    public function about()
    {
        $totalprojects = Project::count();
        $totalExpertsDev = Expert::count();
        return view('about', compact('totalprojects', 'totalExpertsDev'));
    }

    /**
     * Show the services page.
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Show the training overview page.
     *
     * @return \Illuminate\View\View
     */
    public function training()
    {
        return view('training');
    }

    /**
     * Show the training courses page.
     *
     * @return \Illuminate\View\View
     */
    public function trainingCourses()
    {
        return view('training.courses');
    }

    /**
     * Show the training workshops page.
     *
     * @return \Illuminate\View\View
     */
    public function trainingWorkshops()
    {
        return view('training.workshops');
    }

    /**
     * Show the training placements page.
     *
     * @return \Illuminate\View\View
     */
    public function trainingPlacements()
    {
        return view('training.placements');
    }

    /**
     * Show the training achievements page.
     *
     * @return \Illuminate\View\View
     */
    public function trainingAchievements()
    {
        return view('training.achievements');
    }

    /**
     * Show the careers page.
     *
     * @return \Illuminate\View\View
     */
    public function careers()
    {
        $categories = jobcategory::all();
        $jobs = Careerjob::with('category')->latest()->get();
        $internships = Internship::all();
        return view('careers', compact('categories', 'jobs', 'internships'));
    }



    /**
     * Show the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
    //  public function filterByCategory($id)
    // {
    //     $categories = JobCategory::all();
    //     $jobs = CareerJob::with('category')->where('category_id', $id)->latest()->get();
    //     return view('careers.index', compact('categories', 'jobs'));
    // }

    /**
     * Show the portfolio page.
     *
     * @return \Illuminate\View\View
     */
    public function portfolio()
    {
        return view('portfolio');
    }

    /**
     * Show the Game Zone Management Software page.
     *
     * @return \Illuminate\View\View
     */
    public function gameZoneManagement()
    {
        return view('services.game-zone');
    }

    /**
     * Show the Hospital Appointment System page.
     *
     * @return \Illuminate\View\View
     */
    public function hospitalAppointmentSystem()
    {
        return view('services.hospital');
    }

    public function viewInternship($id)
    {
        $internship = Internship::findOrFail($id);
        return view('viewInternship', compact('internship'));
    }
    // public function applyInternship()
    // {
    //     return view('applyInternship');
    // }

 public function applyInternship($id)
{

    $internship = Internship::findOrFail($id);

    
    return view('applyInternship', compact('internship'));
}
 
    public function submit(Request $request, $id)
    {
        $internship = Internship::findOrFail($id);

       
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'qualification' => 'nullable|string|max:255',
            'college' => 'nullable|string|max:255',
            'skills' => 'nullable|string',
            'motivation' => 'required|string',
            'resume' => 'nullable|mimes:pdf|max:2048',
        ]);

        
        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

      
        InternshipApplication::create([
            'internship_id' => $internship->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'qualification' => $validated['qualification'] ?? null,
            'college' => $validated['college'] ?? null,
            'skills' => $validated['skills'] ?? null,
            'motivation' => $validated['motivation'],
            'answers' => json_encode($request->input('answers', [])),
            'resume' => $resumePath,
        ]);

        
        return redirect('careers')->with('success', 'Your application has been submitted successfully!');
    }

}