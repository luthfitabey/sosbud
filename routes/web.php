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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //edit user
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('surats', \App\Http\Controllers\SuratController::class);
    Route::resource('roles', \App\Http\Controller\RoleController::class);
    Route::resource('jenis', \App\Http\Controller\JenisSuratController::class);

    Route::get('/surats/data',[DataController::class,'Surat'])->name('data-surat');
    Route::get('/jenis/data', [DataController::class,'Jenis'])->name('data-jenis');
    Route::get('/role/data', [DataController::class,'Role'])->name('data-role');
});
