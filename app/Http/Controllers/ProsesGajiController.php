<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\GajiLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProsesGajiController extends Controller
{
    public function indexGajiApproved()
    {
        $approvedGajis = Gaji::with(['gajiKaryawan.karyawanDivisi', 'gajiStatus'])
                        ->where('gaji_IdStatus', 2)
                        ->get();
        return view('halamanGaji.halamanGajiFinance.approvedGaji', compact('approvedGajis'));
    }
    
    public function tambahPembayaran($id)
    {
        try {
            
            $gaji = Gaji::with('gajiKaryawan')->findOrFail($id);

            return view('halamanGaji.halamanGajiFinance.tambahPembayaranGaji',compact('gaji'));
        } catch (\Exception $e) {
            abort(404); 
        }
    }
    
    public function uploadBuktiPembayaran(Request $request)
    {
         try {
            DB::beginTransaction();
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'gaji_id' => 'required|exists:gajis,id',
            ]);

            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('bukti', $filename, 'public');

            $gaji = Gaji::find($request->gaji_id);
            $gaji->update([
                'gaji_IdStatus' => '4',
                'tanggalDibayar' => now(),
                'buktiTransfer' => $path
            ]);

            GajiLog::create([
                'logs_IdGaji' => $request->gaji_id,
                'logs_IdStatus' => '4',
                'logs_IdUser' => Auth::user()->id,
                'catatan' => 'Gaji Telah Dibayar'
            ]);
            DB::commit();
            // return redirect('/dashboardFinance/GajiDisetujui')->with('succes', 'Gaji atas Telah Di Bayar');
            return response()->json([
                'success' => true,
                'redirect' => '/dashboardFinance/gajiTerbayar?message=Gaji berhasil dibayar',
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => true,
                'redirect' => '/dashboardFinance/GajiDisetujui?errorMessage=Gaji Gagal Di Bayar, Harap Melakukan Pembayaran Kembali',
            ]);
        }
    }

    public function gajiTerbayar()
    {
         try {
            
            $gajiTerbayars = Gaji::with(['gajiKaryawan.karyawanDivisi', 'gajiStatus'])
                            ->where('gaji_IdStatus', 4)
                            ->get();
            return view('halamanGaji.halamanGajiFinance.gajiTerbayar', compact('gajiTerbayars'));
        } catch (\Exception $e) {
            abort(404); 
        }
    }

     public function detailGajiTerbayar($id)
    {
        try {
            
            $gaji = Gaji::with('gajiKaryawan')->findOrFail($id);

            return view('halamanGaji.halamanGajiFinance.detailGajiTerbayar',compact('gaji'));
        } catch (\Exception $e) {
            abort(404); 
        }
    }

    public function gajiDitolak()
    {
         try {
            
            $gajiDitolaks = Gaji::with(['gajiKaryawan.karyawanDivisi', 'gajiStatus'])
                            ->where('gaji_IdStatus', 3)
                            ->get();
            return view('halamanGaji.halamanGajiFinance.gajiDitolak', compact('gajiDitolaks'));
        } catch (\Exception $e) {
            abort(404); 
        }
    }

     public function detailGajiDitolak($id)
    {
        try {
            
            $gaji = GajiLog::with('LogGaji.gajiKaryawan.karyawanDivisi', 'LogGajiStatus')
                ->where('logs_IdGaji', $id)
                ->where('logs_IdStatus', '3')
                ->latest() 
                ->firstOrFail();


            return view('halamanGaji.halamanGajiFinance.detailGajiDitolak',compact('gaji'));
        } catch (\Exception $e) {
            abort(404); 
        }
    }
}
