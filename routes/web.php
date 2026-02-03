<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.index');
});

Route::get('/portfolio-detail', function () {
    return view('Frontend.portfolio-details');
});

Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/contacts/{id}', [ContactController::class, 'show'])
        ->name('contacts.show');
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])
        ->name('contacts.destroy');
});
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::resource('project', ProjectController::class);
    Route::resource('service', ServicesController::class);
});

require __DIR__ . '/auth.php';
