<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KuesionerController;

Route::get('/login', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

// Route::get('/', function () {
//     return view('dashboard', ['show_logo' => 'show']);
// });

Route::get('/', [DashboardController::class, 'index']);
Route::get('/data-grafik-bar', [DashboardController::class, 'dataGrafikBar']);
Route::get('/dashboard-filter-layanan/{id_layanan}', [DashboardController::class, 'filterByLayanan']);


Route::get('/kuesioner/pendidikan', [KuesionerController::class, 'pendidikan']);
Route::get('/kuesioner/kesehatan', [KuesionerController::class, 'kesehatan']);
Route::get('/kuesioner/administratif', [KuesionerController::class, 'administratif']);
Route::get('/kuesioner/publik', [KuesionerController::class, 'publik']);
Route::get('/kuesioner/sarana', [KuesionerController::class, 'sarana']);
Route::get('/kuesioner/regulatif', [KuesionerController::class, 'regulatif']);
Route::post('/kuesioner/add-kuesioner', [KuesionerController::class, 'store']);

Route::post('/kuesioner/add-kuesioner', [KuesionerController::class, 'store']);

Route::get('/kosong', function () {
    return view('kosong');
});