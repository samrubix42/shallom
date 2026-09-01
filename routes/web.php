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
