<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/our-range', 'pages::homelist')->name('products');
Route::livewire('/services', 'pages::service')->name('services');
Route::livewire('/service/{slug?}', 'pages::service-view')->name('service.show');
Route::livewire('/profile', 'pages::profile')->name('profile');
Route::livewire('/why-choose-us', 'pages::whychooseus')->name('why-choose-us');
Route::livewire('/clientele', 'pages::clientele')->name('clientele');
Route::livewire('/contact', 'pages::contact')->name('contact');

// Guest Authentication Routes
Route::middleware('guest')->group(function () {
    Route::livewire('/login', 'auth::login')->name('login');
});

// Authenticated Admin Routes
Route::middleware('auth')->group(function () {
    Route::livewire('/admin', 'admin::dashboard')->name('admin.dashboard');
    Route::livewire('/admin/clients', 'admin::clients')->name('admin.clients');
    Route::livewire('/admin/testimonials', 'admin::testimonial')->name('admin.testimonials');
});
