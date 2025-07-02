<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halamanLogin.Login');
});

Route::get('/karyawan', function () {
    return view('halamanDataKaryawan.dataKaryawan');
});

Route::get('/dashboard', function () {
    return view('halamanDashboard.dashboardDirektur');
});

Route::get('/gajiBayar', function () {
    return view('halamanGaji.halamanGajiFinance.gajiTerbayar');
});

Route::get('/tambahGaji', function () {
    return view('halamanGaji.halamanGajiFinance.tambahPengajuanGaji');
});
