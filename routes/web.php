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
    Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('/category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    //Treatments
    //Category

    Route::prefix('treatments')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\TreatmentController::class, 'index'])->name('admin_treatments');
        Route::get('create', [App\Http\Controllers\Admin\TreatmentController::class, 'create'])->name('admin_treatment_add');
        Route::post('store', [App\Http\Controllers\Admin\TreatmentController::class, 'store'])->name('admin_treatment_store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\TreatmentController::class, 'edit'])->name('admin_treatment_edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\TreatmentController::class, 'update'])->name('admin_treatment_update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\TreatmentController::class, 'destroy'])->name('admin_treatment_delete');
        Route::get('show', [App\Http\Controllers\Admin\TreatmentController::class, 'show'])->name('admin_treatment_show');


    });
});

//admin_login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
