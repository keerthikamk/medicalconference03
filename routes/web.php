<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ScientificController;
use App\Http\Controllers\Admin\AbstractController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\UserController;

// Front Page Routes
Route::get('/', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('organizing', [FrontController::class, 'organizing']);
Route::get('scientific', [FrontController::class, 'scientific']);
Route::get('abstract', [FrontController::class, 'abstract']);
Route::get('speaker', [FrontController::class, 'speaker']);
Route::get('sponsorship', [FrontController::class, 'sponsorship']);
Route::get('terms', [FrontController::class, 'terms']);
Route::get('privacy-policy', [FrontController::class, 'privacy']);
Route::get('refund-policy', [FrontController::class, 'refund']);
Route::get('contact-us', [FrontController::class, 'contact']);
Route::post('/', [FrontController::class, 'download']);
Route::post('abstract', [FrontController::class, 'abstract_sub']);
Route::post('contact', [FrontController::class, 'contactForm']);
Route::resource('register', RegisterController::class);

// Guest Routs
Route::middleware(['guest'])->group(function () {
    
    // Route::resource('register', RegisterController::class);
    Route::resource('login', LoginController::class);

});

// Admin Routs
Route::middleware(['admin'])->group(function () {
    
    Route::get('admin', [AdminController::class, 'index']);
    Route::resource('admin/pages', PageController::class);
    Route::resource('admin/sections', SectionController::class);
    Route::resource('admin/abstracts', AbstractController::class);
    Route::resource('admin/conferences', ConferenceController::class);
    Route::resource('admin/scientifics', ScientificController::class);
    Route::resource('admin/members', MemberController::class);
    Route::resource('admin/clients', ClientController::class);
    Route::resource('admin/mails', MailController::class);
    
});

// Auth Routs
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth');