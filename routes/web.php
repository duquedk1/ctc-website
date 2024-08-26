<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Auth;


// Main route now points to the new 'index' view
Route::get('/', [VisitorController::class, 'index'])->name('index');

// Other routes remain unchanged
Route::get('/about', [VisitorController::class, 'about'])->name('about');
Route::get('/events', [VisitorController::class, 'events'])->name('events');

Route::middleware('auth')->group(function () {
    // Routes protected by authentication
    Route::resource('visitor', VisitorController::class);
    
    // Route for the 'admin' view, previously known as 'home'
    Route::get('/admin', [VisitorController::class, 'admin'])->name('admin');
});

// Enable authentication routes, including registration
Auth::routes();

// Custom logout route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');