<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

// Home route
Route::get('/', [HomeController::class, 'index']);

// Static pages routes
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/training', [PageController::class, 'training'])->name('training');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
