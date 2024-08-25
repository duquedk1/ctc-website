<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [VisitorController::class, 'front'])->name('front');
Route::get('/about', [VisitorController::class, 'about'])->name('about');
Route::get('/events', [VisitorController::class, 'events'])->name('events');

Route::middleware('auth')->group(function () {
    Route::resource('visitor', VisitorController::class);
    Route::get('/home', [VisitorController::class, 'index'])->name('home');
});

Auth::routes(['register' => false]);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');