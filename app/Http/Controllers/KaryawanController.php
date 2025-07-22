<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $dataKaryawans = Karyawan::get();
        return view('halamanDataKaryawan.dataKaryawan', compact('dataKaryawans'));
    }
}
