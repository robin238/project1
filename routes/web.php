<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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



Route::get('/test', [App\Http\Controllers\TestController::class, 'test']);

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'register']);
Route::post('/actionRegister', [App\Http\Controllers\RegisterController::class, 'actionRegister']);


Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/checkLogin', [App\Http\Controllers\LoginController::class, 'checkLogin']);
Route::post('/actionLogin', [App\Http\Controllers\LoginController::class, 'actionLogin']);
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout']);

Route::group(['middleware' => 'admin'], function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });
    Route::get('/dashboard_admin', [App\Http\Controllers\DashboardController::class, 'index_admin']);
    //pengajuan sampah
    Route::get('/pengajuan_sampah/getpengajuan/{id}', [App\Http\Controllers\PengajuanSampahController::class, 'getpengajuan']);
    Route::post('/pengajuan_sampah/approve', [App\Http\Controllers\PengajuanSampahController::class, 'approve']);
    Route::get('/pengajuan_sampah/delete/{id}', [App\Http\Controllers\PengajuanSampahController::class, 'delete']);

    //pengajuan emas
    Route::get('/pengajuan_emas_approve/edit/{id}', [App\Http\Controllers\PengajuanEmasController::class, 'edit_approve']);
    Route::post('/pengajuan_emas_approve/update', [App\Http\Controllers\PengajuanEmasController::class, 'update_approve']);
    Route::get('/pengajuan_emas/delete/{id}', [App\Http\Controllers\PengajuanEmasController::class, 'delete']);


});

Route::group(['middleware' => 'nasabah'], function () {
    // Route::get('/dashboard_nasabah', function () {
    //     // return 'Dashboard Nasabah';
    //     return view('dashboard_nasabah');
    // });

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    // pengajuan sampah
    Route::get('/pengajuan_sampah/input', [App\Http\Controllers\PengajuanSampahController::class, 'input']);
    Route::post('/pengajuan_sampah/store', [App\Http\Controllers\PengajuanSampahController::class, 'store']);
    Route::get('/pengajuan_sampah/edit/{id}', [App\Http\Controllers\PengajuanSampahController::class, 'edit']);
    Route::post('/pengajuan_sampah/update', [App\Http\Controllers\PengajuanSampahController::class, 'update']);

    //pengajuan emas
    Route::get('/pengajuan_emas/input', [App\Http\Controllers\PengajuanEmasController::class, 'input']);
    Route::post('/pengajuan_emas/store', [App\Http\Controllers\PengajuanEmasController::class, 'store']);
    Route::get('/pengajuan_emas/edit/{id}', [App\Http\Controllers\PengajuanEmasController::class, 'edit']);
    Route::post('/pengajuan_emas/update', [App\Http\Controllers\PengajuanEmasController::class, 'update']);
});
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
// });

Route::get('/nasabah', [App\Http\Controllers\NasabahController::class, 'index']);
Route::get('/nasabah/detail/{id}', [App\Http\Controllers\NasabahController::class, 'detail']);


Route::get('/pengajuan_sampah', [App\Http\Controllers\PengajuanSampahController::class, 'index']);

Route::post('/pengajuan_sampah/cek_harga', [App\Http\Controllers\PengajuanSampahController::class, 'cek_harga']);


Route::get('/pengajuan_emas', [App\Http\Controllers\PengajuanEmasController::class, 'index']);

Route::post('/pengajuan_emas/cek_harga', [App\Http\Controllers\PengajuanEmasController::class, 'cek_harga']);