<?php

use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.index');
});



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->middleware(['auth', 'verified'])->name('dashboard');
    // Route::get('/experience', function () {
    //     return view('admin.Experience.create');
    // });
    Route::resource("experience", ExperienceController::class);
});

require __DIR__ . '/auth.php';
