<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SettingController as AdminSettingController;
// use App\Http\Controllers\admin\SkillController as AdminSkillController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.home.index');
// });

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home.index');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->prefix('admin')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard.index');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    // Route::get('/experience', function () {
    //     return view('admin.Experience.create');
    // });
    Route::resource("experience", ExperienceController::class);
    Route::resource("project", ProjectController::class);
    Route::resource("skill", SkillController::class);
    Route::resource("contact", ContactController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('setting', [AdminSettingController::class, 'edit'])->name('admin.setting.index');
    Route::post('setting', [AdminSettingController::class, 'update'])->name('admin.setting.update');
});

require __DIR__ . '/auth.php';
