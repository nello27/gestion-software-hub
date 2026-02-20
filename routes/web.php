<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::view('/', 'welcome')->name('home');

Route::view('contacto','contact')->name('contact');

Route::get('blog',[PostController::class, 'index'])->name('blog');

Route::view('nosotros','about')->name('about');

