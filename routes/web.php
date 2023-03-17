<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SubKategoriController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\SKM_Controller;

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

Route::get('/home', function() {
    return view('home');
})->name("home");


Route::get('/kategori', [App\Http\Controllers\kategoriController::class, 'index'])->name('kategori');
// Route::get('/kategori/tambah-data', [App\Http\Controllers\kategoriController::class, 'create'])->name('kategori/tambah-data');
Route::get('/kategori/get-data', [App\Http\Controllers\kategoriController::class, 'show'])->name('kategori/get-data');
Route::post('/kategori/tambah-data/proses', [App\Http\Controllers\kategoriController::class, 'store'])->name('kategori/tambah-data/proses');
Route::post('/kategori/edit-data/proses', [App\Http\Controllers\kategoriController::class, 'update'])->name('kategori/edit-data/proses');
Route::get('/kategori/data/hapus/{id}', [App\Http\Controllers\kategoriController::class, 'destroy'])->name('kategori/data/hapus');


Route::get('/sub-kategori', [App\Http\Controllers\SubKategoriController::class, 'index'])->name('sub-kategori');
Route::get('/sub-kategori/get-data', [App\Http\Controllers\SubKategoriController::class, 'show'])->name('sub-kategori/get-data');
Route::post('/sub-kategori/tambah-data/proses', [App\Http\Controllers\SubKategoriController::class, 'store'])->name('sub-kategori/tambah-data/proses');
Route::post('/sub-kategori/edit-data/proses', [App\Http\Controllers\SubKategoriController::class, 'update'])->name('sub-kategori/edit-data/proses');
Route::get('/sub-kategori/data/hapus/{id}', [App\Http\Controllers\SubKategoriController::class, 'destroy'])->name('sub-kategori/data/hapus');

Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('/client/get-data', [App\Http\Controllers\ClientController::class, 'show'])->name('client/get-data');
Route::post('/client/tambah-data/proses', [App\Http\Controllers\ClientController::class, 'store'])->name('client/tambah-data/proses');
Route::post('/client/edit-data/proses', [App\Http\Controllers\ClientController::class, 'update'])->name('client/edit-data/proses');
Route::get('/client/data/hapus/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('client/data/hapus');


Route::get('/respon', function() {
    return view('respon');
})->name("respon");

Route::get('/form', function() {
    return view('form');
})->name("form");