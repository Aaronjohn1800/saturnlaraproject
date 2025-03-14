<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

// Default welcome route
Route::get('/', function () {
    return view('welcome');
});

// Register route
Route::get('/register', function () {
    return view('auth.register');
})->name('register'); // Changed to 'register'

// Handle user registration
Route::post('/register', [RegistrationController::class, 'register']);

// Show the login form
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Handle user login
Route::post('/login', [LoginController::class, 'login']);

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected dashboard route (only for authenticated users)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');