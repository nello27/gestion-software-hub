<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('contacto','contact')->name('contact');

Route::view('blog','blog')->name('blog');

Route::view('nosotros','about')->name('about');

