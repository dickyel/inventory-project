<?php

use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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


Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function (){

    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/users',[UserController::class,'index'])->name('index-users');
    Route::get('/users/create-users',[UserController::class,'create'])->name('add-users');
    Route::post('/users/save-users',[UserController::class,'save'])->name('save-users');
    Route::get('/users/edit-users/{id}',[UserController::class,'edit'])->name('edit-users');
    Route::put('/users/update-users/{id}',[UserController::class,'update'])->name('update-users');
    Route::get('/users/delete-users/{id}',[UserController::class,'destroy'])->name('delete-users');

    Route::get('/barang-masuks',[BarangMasukController::class,'index'])->name('index-barang-masuks');
    Route::get('/barang-masuks/create-barang-masuks',[BarangMasukController::class,'create'])->name('add-barang-masuks');
    Route::post('/barang-masuks/save-barang-masuks',[BarangMasukController::class,'save'])->name('save-barang-masuks');
    Route::get('/barang-masuks/edit-barang-masuks/{id}',[BarangMasukController::class,'edit'])->name('edit-barang-masuks');
    Route::put('/barang-masuks/update-barang-masuks/{id}',[BarangMasukController::class,'update'])->name('update-barang-masuks');
    Route::get('/barang-masuks/delete-barang-masuks/{id}',[BarangMasukController::class,'destroy'])->name('delete-barang-masuks');

    Route::get('/barang-keluars',[BarangKeluarController::class,'index'])->name('index-barang-keluars');
    Route::get('/barang-keluars/create-barang-keluars',[BarangKeluarController::class,'create'])->name('add-barang-keluars');
    Route::post('/barang-keluars/save-barang-keluars',[BarangKeluarController::class,'save'])->name('save-barang-keluars');
    Route::get('/barang-keluars/edit-barang-keluars/{id}',[BarangKeluarController::class,'edit'])->name('edit-barang-keluars');
    Route::put('/barang-keluars/update-barang-keluars/{id}',[BarangKeluarController::class,'update'])->name('update-barang-keluars');
    Route::get('/barang-keluars/delete-barang-keluars/{id}',[BarangKeluarController::class,'destroy'])->name('delete-barang-keluars');

});




