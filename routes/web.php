<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProsesGajiController;
use App\Http\Controllers\PengajuanGajiController;
use App\Http\Controllers\ManagerProsesGajiController;

Route::get('/karyawan', function () {
    return view('halamanDataKaryawan.dataKaryawan');
});

// Route Auth
Route::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function(){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/home', [AuthController::class, 'cekUser']);
    Route::get('/dashboardDirektur', [DashboardController::class, 'dashboardDirektur'])->middleware('HakAkses:1');
    
    // Akses Manager
    Route::get('/dashboardManager', [DashboardController::class, 'dashboardManager'])->middleware('HakAkses:2');
    Route::get('/dashboardManager/PengajuanGaji', [ManagerProsesGajiController::class, 'indexPengajuanGaji'])->middleware('HakAkses:2');
    Route::get('/dashboardManager/detailPengajuan/{id}', [ManagerProsesGajiController::class, 'detailPengajuanManager'])->middleware('HakAkses:2');
    Route::post('/dashboardManager/prosesGajiManager', [ManagerProsesGajiController::class, 'prosesGajiManager'])->middleware('HakAkses:2');
    Route::get('/dashboardManager/GajiDisetujui', [ManagerProsesGajiController::class, 'indexGajiDisetujui'])->middleware('HakAkses:2');
   
    Route::get('/dashboardManager/GajiDisetujui/{id}', [ManagerProsesGajiController::class, 'detailGajiDisetujui'])->middleware('HakAkses:2');
    Route::get('/dashboardManager/gajiTerbayar', [ManagerProsesGajiController::class, 'gajiTerbayar'])->middleware('HakAkses:3');
    Route::get('/dashboardManager/detailGajiTerbayar/{id}', [ManagerProsesGajiController::class, 'detailGajiTerbayar'])->middleware('HakAkses:3');
    Route::get('/dashboardManager/gajiDitolak', [ManagerProsesGajiController::class, 'gajiDitolak'])->middleware('HakAkses:3');
    Route::get('/dashboardManager/detailGajiDitolak/{id}', [ManagerProsesGajiController::class, 'detailGajiDitolak'])->middleware('HakAkses:3');
    
    // Akses Finance
    Route::get('/dashboardFinance', [DashboardController::class, 'dashboardFinance'])->middleware('HakAkses:3');
    Route::resource('/dashboardFinance/PengajuanGaji', PengajuanGajiController::class)->middleware('HakAkses:3');
    Route::get('/dashboardFinance/GajiDisetujui', [ProsesGajiController::class, 'indexGajiApproved'])->middleware('HakAkses:3');
    Route::get('/dashboardFinance/tambahPembayaran/{id}', [ProsesGajiController::class, 'tambahPembayaran'])->middleware('HakAkses:3');
    Route::post('/dashboardFinance/uploadBuktiPembayaran', [ProsesGajiController::class, 'uploadBuktiPembayaran'])->middleware('HakAkses:3');
    Route::get('/dashboardFinance/gajiTerbayar', [ProsesGajiController::class, 'gajiTerbayar'])->middleware('HakAkses:3');
    Route::get('/dashboardFinance/detailGajiTerbayar/{id}', [ProsesGajiController::class, 'detailGajiTerbayar'])->middleware('HakAkses:3');
    Route::get('/dashboardFinance/gajiDitolak', [ProsesGajiController::class, 'gajiDitolak'])->middleware('HakAkses:3');
    Route::get('/dashboardFinance/detailGajiDitolak/{id}', [ProsesGajiController::class, 'detailGajiDitolak'])->middleware('HakAkses:3');
});


