<?php

use App\Http\Controllers\frontend\aboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\homepageController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\contactUsController;
use App\Http\Controllers\frontend\serviceController;

// Route::get('/', function () {
//     return view('frontend.homepage');
// });

//frontend Controller and route setup

Route::group( ['prefix' => '/'], function() {
    route::get('/',[homepageController::class, 'index'])->name('homepage');
    route::get('/about-us',[aboutUsController::class, 'aboutUs'])->name('aboutUs');
    route::get('/service',[serviceController::class, 'service'])->name('service');
    route::get('/contact-us',[contactUsController::class, 'contactUs'])->name('contactUs');
    route::get('/blog',[blogController::class, 'blog'])->name('blog');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
