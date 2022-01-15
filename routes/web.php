<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [App\Http\Controllers\HomeController::class, 'references'])->name('references');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/categorytreatments/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'categorytreatments'])->name('categorytreatments');
Route::get('/treatment/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'treatment'])->name('treatment');
Route::post('/gettreatment', [App\Http\Controllers\HomeController::class, 'gettreatment'])->name('gettreatment');
Route::get('/treatmentlist/{search}', [App\Http\Controllers\HomeController::class, 'treatmentlist'])->name('treatmentlist');


Route::middleware("auth")->prefix('admin')->group(function () {


    //Admin Role
    Route::middleware("admin")->group(function () {

        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

        //Categories
        Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('/category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('/category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

        //Treatments
        Route::prefix('treatments')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\TreatmentController::class, 'index'])->name('admin_treatments');
            Route::get('create', [App\Http\Controllers\Admin\TreatmentController::class, 'create'])->name('admin_treatment_add');
            Route::post('store', [App\Http\Controllers\Admin\TreatmentController::class, 'store'])->name('admin_treatment_store');
            Route::get('edit/{id}', [App\Http\Controllers\Admin\TreatmentController::class, 'edit'])->name('admin_treatment_edit');
            Route::post('update/{id}', [App\Http\Controllers\Admin\TreatmentController::class, 'update'])->name('admin_treatment_update');
            Route::get('delete/{id}', [App\Http\Controllers\Admin\TreatmentController::class, 'destroy'])->name('admin_treatment_delete');
            Route::get('show', [App\Http\Controllers\Admin\TreatmentController::class, 'show'])->name('admin_treatment_show');
        });

        //Messages
        Route::prefix('messages')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_messages');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_messages_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_messages_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_messages_delete');
            Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_messages_show');
        });


        //Images
        Route::prefix('image')->group(function () {
            Route::get('create/{treatment_id}', [App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{treatment_id}', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{treatment_id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });


        //Reviews
        Route::prefix('review')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });


        //Settings
        Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        //Faqs
        Route::prefix('faq')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
        });

        //Users
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });

        //Reviews
        Route::prefix('randevu')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\RandevuController::class, 'adminindex'])->name('admin_randevu');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'edit'])->name('admin_randevu_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'update'])->name('admin_randevu_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'destroy'])->name('admin_randevu_delete');
            Route::get('approve/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'approve'])->name('admin_randevu_approval');
            Route::get('approve-cancel/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'approve_cancel'])->name('admin_randevu_approval_cancel');

        });

        //Process
        Route::prefix('process')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ProcessController::class, 'index'])->name('admin_process');

        });


    }); #end admin






});

//Randevu
Route::middleware("auth")->prefix('randevu')->group(function () {
    Route::get('/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'index'])->name('randevu_main');
    Route::post('store/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'store'])->name('randevu_add');
});



Route::middleware("auth")->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('profile.show');
    Route::get('/myreviews', [\App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [\App\Http\Controllers\UserController::class, 'destroymyreview'])->name('user_review_delete');
    Route::get('/myapointmentlist', [\App\Http\Controllers\UserController::class, 'doctorrandevushow'])->name('doctor_randevu_show');
    Route::get('/mytreatmentlist', [\App\Http\Controllers\UserController::class, 'userrandevushow'])->name('user_randevu_show');

});

Route::middleware("auth")->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userpofile');

});





//admin_login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
