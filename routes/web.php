<?php

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

// Static pages routes
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Training routes
Route::get('/training', [PageController::class, 'training'])->name('training');
Route::get('/training/courses', [PageController::class, 'trainingCourses'])->name('training.courses');
Route::get('/training/workshops', [PageController::class, 'trainingWorkshops'])->name('training.workshops');
Route::get('/training/placements', [PageController::class, 'trainingPlacements'])->name('training.placements');
Route::get('/training/achievements', [PageController::class, 'trainingAchievements'])->name('training.achievements');

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

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
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
