<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SekolahController;


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('login', [AuthController::class,'login']);
Route::get('logout', [AuthController::class,'logout'])->name('logout');
Route::post('loginpost', [AuthController::class,'loginpost'])->name('loginpost');


Route::group(['middleware'=>'admin'], function(){
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('userlist', [AuthController::class,'userlist'])->name('userlist');
    Route::get('userdelete/{id}', [AuthController::class,'delete'])->name('userdelete');

    Route::get('registrasi', [AuthController::class,'registrasi']);
    Route::post('registrasipost', [AuthController::class,'registrasipost'])->name('registrasipost');
    Route::get('sekolah', [App\Http\Controllers\Admin\SekolahController::class,'dataskl'])->name('data-sekolah');
    Route::put('logo/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logo'])->name('logo-sekolah');
    Route::put('sekolah/update/{id}', [App\Http\Controllers\Admin\SekolahController::class,'update'])->name('update-sekolah');
    Route::resource('admin/page/post', App\Http\Controllers\Admin\PostController::class);
    Route::resource('admin/page/category', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('admin/page/slider', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('admin/page/agenda', App\Http\Controllers\Admin\AgendaController::class);




});

//Homepage





