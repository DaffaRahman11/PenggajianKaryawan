<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class ManagerProsesGajiController extends Controller
{
    public function indexPengajuanGaji() {
        
        $gajiPendings = Gaji::with(['gajiKaryawan.karyawanDivisi', 'gajiStatus'])
                        ->where('gaji_IdStatus', 1)
                        ->get();
        return view('halamanGaji.halamanGajiManager.pengajuanGaji', compact('gajiPendings'));
    
    }
    
    public function detailPengajuanManager($id) {
        

         try {
            
            $gaji = Gaji::with('gajiKaryawan')->findOrFail($id);

            return view('halamanGaji.halamanGajiManager.detailPengajuanGajiManager', compact('gaji'));
        } catch (\Exception $e) {
            abort(404); 
        }
        
        
    
    }
}
