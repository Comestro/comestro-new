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
     * Show the training page.
     *
     * @return \Illuminate\View\View
     */
    public function training()
    {
        return view('training');
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
}