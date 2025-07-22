<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiDirekturController extends Controller
{
        public function gajiTerbayar()
    {
         try {
            
            $gajiTerbayars = Gaji::with(['gajiKaryawan.karyawanDivisi', 'gajiStatus'])
                            ->where('gaji_IdStatus', 4)
                            ->get();
            return view('halamanGaji.halamanGajiDirektur.gajiTerbayar', compact('gajiTerbayars'));
        } catch (\Exception $e) {
            abort(404); 
        }
    }
}
