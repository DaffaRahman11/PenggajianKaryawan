<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login.Login');
});

Route::get('/karyawan', function () {
    return view('dataKaryawan.dataKaryawan');
});
