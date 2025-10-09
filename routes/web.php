<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CareerJobController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;


// Home route
Route::get('/', [HomeController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Static pages routes
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/applyForm/{id}', [PageController::class, 'applyForm'])->name('careers.applyForm');
Route::post('/applyForm/{id}', [PageController::class, 'submitApplication'])->name('careers.submitApplication');
Route::get('/viewIntership/{id}', [PageController::class, 'viewInternship'])->name('viewIntern');
Route::get('/applyInternship/{id}', [PageController::class, 'applyInternship'])->name('applyInternship');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Training routes
Route::get('/training', [PageController::class, 'training'])->name('training');
Route::get('/training/courses', [PageController::class, 'trainingCourses'])->name('training.courses');
Route::get('/training/workshops', [PageController::class, 'trainingWorkshops'])->name('training.workshops');
Route::get('/training/placements', [PageController::class, 'trainingPlacements'])->name('training.placements');
Route::get('/training/achievements', [PageController::class, 'trainingAchievements'])->name('training.achievements');
Route::get('/internship/apply/{id}', [PageController::class, 'apply'])->name('internship.apply');
Route::post('/internship/apply/{id}', [PageController::class, 'submit'])->name('internship.apply.submit');


// Dynamic portfolio routes
Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [ProjectController::class, 'show'])->name('portfolio.show');

// Industry-specific service pages
Route::get('/services/game-zone-management', [PageController::class, 'gameZoneManagement'])->name('services.game-zone');
Route::get('/services/hospital-appointment-system', [PageController::class, 'hospitalAppointmentSystem'])->name('services.hospital');

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

   Route::get('/careers/category/{category}', [CareerJobController::class, 'filterByCategoryPublic'])->name('careers.category');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard

    // Route::get('careers/job_application/{id}', [CareerJobController::class, 'viewApplication'])->name('jobApplication.view');
    Route::get('/addInternship', [CareerJobController::class, 'addInternship'])->name('intern');
    Route::post('/admin/careers/add-internship', [CareerJobController::class, 'addInternshipSubmit'])->name('admin.internship.store');
    Route::get('/careers', [CareerJobController::class, 'indexPublic'])->name('admin.careers.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('jobcategories', JobCategoryController::class);
    Route::resource('careerjobs', CareerJobController::class);
    // routes/web.php
    Route::get('/allMessages', [AdminController::class, 'contactMessages'])->name('contacts');

    // Job Applications
    Route::get('/applications', [CareerJobController::class, 'applications'])->name('applications.index');
    Route::get('/applications/{id}', [CareerJobController::class, 'viewApplication'])->name('applications.show');
    Route::delete('/applications/{id}', [CareerJobController::class, 'deleteApplication'])->name('applications.destroy');


    // Projects
    Route::resource('projects', AdminProjectController::class);

    // Project status toggle
    Route::patch('/projects/{id}/toggle-status', [AdminProjectController::class, 'toggleStatus'])->name('projects.toggle-status');
    Route::patch('/projects/{id}/toggle-featured', [AdminProjectController::class, 'toggleFeatured'])->name('projects.toggle-featured');

    // User management (admin only)
    Route::middleware(['can:manage-users'])->group(function () {
        Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [RegisterController::class, 'register']);
    });


});
