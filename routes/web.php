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

# Repair Services Page Route
Route::get('repair-services', [IndexController::class, 'repairServices'])->name('repair-services');

# Sell Your Electronics Page Route
Route::get('sell-your-electronics', [IndexController::class, 'sellYourElectronics'])->name('sell-your-electronics');

# Marketplace Page Route
Route::get('marketplace', [IndexController::class, 'marketplace'])->name('marketplace');

# Customer Authentication Routes
Auth::routes();

# Customer Dashboard Route
Route::get('home', [HomeController::class, 'index'])->name('home');
