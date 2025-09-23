<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
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
        return view('careers');
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
}