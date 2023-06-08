<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembagianController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authLogin']);
Route::get('/registration', [LoginController::class, 'regis']);
Route::post('/registration', [LoginController::class, 'authRegister']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/data-komen', [KomenController::class, 'index']);
Route::post('/data-komen', [KomenController::class, 'upload']);
Route::get('/hapus/{dKomen:id}', [KomenController::class, 'komenHapus']);
Route::get('/hapussemua', [KomenController::class, 'komenHapussemua']);
Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/pembagian-data', [PembagianController::class, 'index']);
Route::post('/pembagian-data', [PembagianController::class, 'pembagian']);
