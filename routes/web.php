<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// front controllers

Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index'])
    ->name('front');

Route::get('/blog/{id}', [App\Http\Controllers\Front\FrontController::class, 'showBlog'])
    ->name('show-blog');

// front controllers

// admin and dashboard controller

Auth::routes();

Route::middleware('administrator')->group(function () {

    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->name('dashboard');

    Route::redirect('/admin', '/login');

    Route::get('/{locale}', function ($locale) {

        session()->put('locale', $locale);

        return redirect()->back();
    })->name('lang');


    Route::resource('admin/home', \App\Http\Controllers\Admin\HomeController::class)->parameters(['home' => 'id']);
    Route::resource('admin/about', \App\Http\Controllers\Admin\AboutController::class)->parameters(['about' => 'id']);
    Route::resource('admin/education', \App\Http\Controllers\Admin\EducationController::class)->parameters(['education' => 'id']);
    Route::resource('admin/contact', \App\Http\Controllers\Admin\ContactController::class)->parameters(['contact' => 'id']);
    Route::resource('admin/port-category', \App\Http\Controllers\Admin\PortCaregoryController::class)->parameters(['port-category' => 'id']);
});

// admin and dashboard controller
