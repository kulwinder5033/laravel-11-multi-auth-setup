<?php

use App\Http\Controllers\Guest\IndexController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

# Home Page Route
Route::get('/', [IndexController::class, 'index'])->name('index');

# About Us Page Route
Route::get('about-us', [IndexController::class, 'aboutUs'])->name('about-us');

# Terms and Conditions Page Route
Route::get('terms-and-conditions', [IndexController::class, 'termsAndConditions'])->name('terms-and-conditions');

# Privacy Policy Page Route
Route::get('privacy-policy', [IndexController::class, 'privacyPolicy'])->name('privacy-policy');

# Contact Us Page Route
Route::get('contact-us', [IndexController::class, 'contactUs'])->name('contact-us');

# Medical Support Listing Page Route
Route::get('medical-help', [IndexController::class, 'medicalHelp'])->name('medical-help');

# Individual Medical Case Page Route
Route::get('medical-help/{id}', [IndexController::class, 'caseDetail'])
    ->whereNumber('id')
    ->name('case-detail');

# Udaan Free Learning Center Page Route
Route::get("udaan-free-learning-center", [IndexController::class, "udaan"])->name("udaan");

# Marketplace Page Route
Route::get('gallery', [IndexController::class, 'gallery'])->name('gallery');

Route::get('donation', [IndexController::class, 'donation'])->name('donation');

# Customer Authentication Routes
Auth::routes();

# Customer Dashboard Route
Route::get('home', [HomeController::class, 'index'])->name('home');
