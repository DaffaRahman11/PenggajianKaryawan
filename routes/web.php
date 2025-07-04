<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProsesGajiController;
use App\Http\Controllers\PengajuanGajiController;

// Route::get('/', function () {
//     return view('halamanLogin.Login');
// });

Route::get('/karyawan', function () {
    return view('halamanDataKaryawan.dataKaryawan');
});


Route::get('/gajiBayar', function () {
    return view('halamanGaji.halamanGajiFinance.gajiTerbayar');
});

Route::get('/tambahGaji', function () {
    return view('halamanGaji.halamanGajiFinance.tambahPembayaranGaji');
});


// Route Auth

Route::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function(){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/dashboardDirektur', [DashboardController::class, 'dashboardDirektur'])->middleware('HakAkses:1');
    Route::get('/dashboardManager', [DashboardController::class, 'dashboardManager'])->middleware('HakAkses:2');
    Route::get('/dashboardFinance', [DashboardController::class, 'dashboardFinance'])->middleware('HakAkses:3');
    Route::resource('/dashboardFinance/PengajuanGaji', PengajuanGajiController::class)->middleware('HakAkses:3');
    Route::get('/dashboardFinance/GajiDisetujui', [ProsesGajiController::class, 'indexGajiApproved'])->middleware('HakAkses:3');

});

Route::get('/home', function () {
    return redirect('/dashboardDirektur');
});
