<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home_2');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/referance', [App\Http\Controllers\HomeController::class, 'referance'])->name('shop');
Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('referance');
Route::post('/sendmessage', [App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');



Route::middleware("auth")->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

    //Category
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('/category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::post('/category/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('/category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

});

//admin_login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
