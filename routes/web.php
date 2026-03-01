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
    Route::put('logofb/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logofb'])->name('logo-fb');
    Route::put('logotiktok/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logotiktok'])->name('logo-tiktok');
    Route::put('logoig/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logoig'])->name('logo-ig');
    Route::put('logoyt/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logoyt'])->name('logo-yt');
    Route::put('sekolah/update/{id}', [App\Http\Controllers\Admin\SekolahController::class,'update'])->name('update-sekolah');
    Route::resource('admin/page/post', App\Http\Controllers\Admin\PostController::class);
    Route::resource('admin/page/category', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('admin/page/slider', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('admin/page/agenda', App\Http\Controllers\Admin\AgendaController::class);
    Route::resource('admin/page/photo', App\Http\Controllers\Admin\PhotoController::class);
    Route::resource('admin/page/video', App\Http\Controllers\Admin\VideoController::class);
    Route::resource('admin/page/widget', App\Http\Controllers\Admin\WidgetController::class);
    Route::resource('admin/page/info', App\Http\Controllers\Admin\InfoController::class);
    Route::get('admin/page/info/index/{string}', [App\Http\Controllers\Admin\InfoController::class,'index'])->name('list-info');
    Route::get('admin/page/info/create/{string}', [App\Http\Controllers\Admin\InfoController::class,'create'])->name('create');
    Route::get('admin/page/post/category/{id}', [App\Http\Controllers\Admin\PostController::class,'delcategory'])->name('delcategory');

});

//Homepage

    Route::get('page/berita/read/{slug}', [App\Http\Controllers\Page\BeritaController::class,'read'])->name('read');
    Route::get('page/profil', [App\Http\Controllers\Page\ProfilController::class,'index'])->name('profil');
    Route::get('page/profil/read/{slug}', [App\Http\Controllers\Page\ProfilController::class,'read'])->name('read');
    Route::get('page/agenda', [App\Http\Controllers\Page\AgendaController::class,'index'])->name('agenda');
    Route::get('page/artikel/read/{slug}', [App\Http\Controllers\Page\InfoController::class,'read'])->name('read-artikel');
    Route::get('page/profil/read/{slug}', [App\Http\Controllers\Page\ProfilController::class,'read'])->name('profil.read');





