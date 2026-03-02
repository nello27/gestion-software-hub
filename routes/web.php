<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;


Route::view('/', 'welcome')->name('home');

Route::view('contacto','contact')->name('contact');

Route::get('blog',[PostController::class, 'index'])->name('posts.index');

Route::get('/blog/create',[PostController::class, 'create'])->name('posts.create');

Route::get('services',[ServiceController::class,'index'])->name('services.index');

Route::get('/admin/services',[AdminServiceController::class,'index'])->name('services.Admin.list');

Route::get('/admin/services_edit/{service}',[AdminServiceController::class,'show'])->name('services.Admin.edit');

Route::get('/services/{service}',[ServiceController::class,'show'])->name('services.show');

Route::post('services_request',[ServiceRequestController::class,'store'])->name('services_request.store');

Route::get('/blog/{post}',[PostController::class, 'show'])->name('posts.show');


Route::view('nosotros','about')->name('about');

