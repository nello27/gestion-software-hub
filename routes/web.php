<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\ServicesRequestController as AdminServiceRequestController;

use Illuminate\Support\Facades\Mail;


Route::get('/test-email', function () {
    $data = ['name' => 'Visitante de mi Portafolio'];

    Mail::raw('¡Éxito! Laravel y Mailtrap están conectados correctamente.', function ($message) {
        $message->to(config('mail.from.address'))
                ->subject('Prueba de Conexión SMTP');
    });

    return "Revisa tu bandeja de entrada en Mailtrap.io";
});


Route::view('/', 'welcome')->name('home');

Route::view('contacto','contact')->name('contact');

Route::get('blog',[PostController::class, 'index'])->name('posts.index');

Route::get('/blog/create',[PostController::class, 'create'])->name('posts.create');

Route::get('services',[ServiceController::class,'index'])->name('services.index');


Route::get('/admin/services',[AdminServiceController::class,'index'])->name('services.Admin.list');

Route::get('/admin/servicesAdd',[AdminServiceController::class,'create'])->name('services.Admin.add');

Route::post('/admin/servicesstore',[AdminServiceController::class,'store'])->name('services.Admin.store');

Route::patch('/admin/services/{service}',[AdminServiceController::class,'update'])->name('services.Admin.update');

Route::get('/admin/services/{service}/edit',[AdminServiceController::class,'edit'])->name('services.Admin.edit');

Route::delete('/admin/services/{service}/destroy',[AdminServiceController::class,'destroy'])->name('services.Admin.destroy');


Route::get('/admin/services_request',[AdminServiceRequestController::class,'index'])->name('request.Admin.list');

Route::patch('/admin/services_request/{service_request}', [AdminServiceRequestController::class, 'update'])->name('request.Admin.update');

Route::get('/admin/services_request/{service_request}/edit',[AdminServiceRequestController::class,'edit'])->name('request.Admin.edit');


Route::get('/services/{service}',[ServiceController::class,'show'])->name('services.show');

Route::post('services_request',[ServiceRequestController::class,'store'])->name('services_request.store');

Route::get('/blog/{post}',[PostController::class, 'show'])->name('posts.show');


Route::get('/admin/categories',[CategoryController::class,'index'])->name('categories.Admin.list');

Route::get('/admin/categoriesadd',[CategoryController::class,'create'])->name('categories.Admin.add');

Route::post('/admin/categoriesstore',[CategoryController::class,'store'])->name('categories.Admin.store');

Route::get('/admin/categories/{category}/edit',[CategoryController::class,'edit'])->name('categories.Admin.edit');

Route::patch('/admin/categories/{category}/update',[CategoryController::class,'update'])->name('categories.Admin.update');

Route::delete('/admin/categories/{category}/destroy',[CategoryController::class,'destroy'])->name('categories.Admin.destroy');


Route::view('nosotros','about')->name('about');

