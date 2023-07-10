<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//ikan
use App\Http\Controllers\AdminController;
Route::controller(AdminController::class)->group(function(){
    Route::get('ikan/', 'index');
    Route::get('ikan/add', 'add');
    Route::post('ikan/store', 'store');
    Route::get('ikan/delete/{id}','delete');
    Route::get('ikan/edit/{id}', 'edit');
    Route::post('ikan/update/{id}','update');
    Route::get('dashboard/', 'dashboard');
});


//pembudidaya
use App\Http\Controllers\UserController;
Route::controller(UserController::class)->group(function(){
    Route::get('pembudidaya/','index');
    Route::get('pembudidaya/standar','standar');
    Route::get('/blog','blog');
    Route::get('/contact','contact');
    Route::get('/','home');
    Route::get('/konsultasi','konsultasi');
    Route::get('/spk','spk');
});


//spk
use App\Http\Controllers\SPKController;
Route::controller(SPKController::class)->group(function(){
    // Route::get('pembudidaya/add','addPbd');
    Route::post('pembudidaya/store','storePbd');
    Route::get('spk/kriteria', 'krite');
});

use App\Http\Controllers\LoginController;
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginprocces',[LoginController::class, 'loginprocces'])->name('loginprocces');
});