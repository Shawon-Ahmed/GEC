<?php

use App\Http\Controllers\backend\categoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\teamController;
use App\Http\Controllers\frontend\aboutUsController;
use App\Http\Controllers\frontend\projectController;
use App\Http\Controllers\frontend\serviceController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\frontend\homepageController;
use App\Http\Controllers\frontend\contactUsController;

// Route::get('/', function () {
//     return view('frontend.homepage');
// });

//frontend Controller and route setup

Route::group( ['prefix' => '/'], function() {
    route::get('/',[homepageController::class, 'index'])->name('homepage');
    route::get('/about-us',[aboutUsController::class, 'aboutUs'])->name('aboutUs');
    route::get('/services', [serviceController::class , 'service'])->name('service');
    route::get('/service/details', [serviceController::class , 'serviceDetails'])->name('service.details');
    route::get('/projects', [projectController::class , 'project'])->name('project');
    route::get('/project/details', [projectController::class , 'projectDetails'])->name('project.details');
    route::get('/team', [teamController::class , 'team'])->name('team');
    route::get('/team/details', [teamController::class , 'teamDetails'])->name('team.details');
    route::get('/contact-us',[contactUsController::class, 'contactUs'])->name('contactUs');
    route::get('/blogs',[blogController::class, 'blog'])->name('blog');
});


// backend route list start here

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
        Route::group(['prefix' => '/category'], function () {
            Route::get('/manage', [categoryController::class, 'manage'])->name('category.manage');
            Route::get('/create', [categoryController::class, 'create'])->name('category.create');
        });
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
