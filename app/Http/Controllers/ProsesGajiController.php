<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class ProsesGajiController extends Controller
{
    public function indexGajiApproved()
    {
        $gajiPendings = Gaji::with(['gajiKaryawan.karyawanDivisi', 'gajiStatus'])
                        ->where('gaji_IdStatus', 2)
                        ->get();
        return view('halamanGaji.halamanGajiFinance.approvedGaji', compact('gajiPendings'));
    }
}
