<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/products', 'pages::homelist')->name('products');
Route::livewire('/profile', 'pages::profile')->name('profile');
Route::livewire('/contact', 'pages::contact')->name('contact');

