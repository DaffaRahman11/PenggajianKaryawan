<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\GajiLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function prosesGajiManager(Request $request)
    {
         try {
            DB::beginTransaction();
            $request->validate([
                'catatan' => 'required',
                'gaji_id' => 'required|exists:gajis,id',
                ]);

            if ($request->tombol_submit === 'terima') {

                $gaji = Gaji::find($request->gaji_id);
                $gaji->update([
                    'gaji_IdStatus' => '2',
                ]);

                GajiLog::create([
                    'logs_IdGaji' => $request->gaji_id,
                    'logs_IdStatus' => '2',
                    'logs_IdUser' => Auth::user()->id,
                    'catatan' => $request->catatan
                ]);
                DB::commit();
                return redirect('/dashboardManager/PengajuanGaji')->with('succes', 'Gaji atas nama '. $gaji->gajiKaryawan->namaKaryawan . ' Telah Di Setujui');
            
            } elseif ($request->tombol_submit === 'tolak') {
                
                $gaji = Gaji::find($request->gaji_id);
                $gaji->update([
                    'gaji_IdStatus' => '3',
                ]);

                GajiLog::create([
                    'logs_IdGaji' => $request->gaji_id,
                    'logs_IdStatus' => '3',
                    'logs_IdUser' => Auth::user()->id,
                    'catatan' => $request->catatan
                ]);
                DB::commit();
                return redirect('/dashboardManager/PengajuanGaji')->with('error', 'Gaji atas nama '. $gaji->gajiKaryawan->namaKaryawan . ' Ditolak');

            }

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => true,
                'redirect' => '/dashboardFinance/GajiDisetujui?errorMessage=Gaji Gagal Di Bayar, Harap Melakukan Pembayaran Kembali',
            ]);
        }
    }

    public function indexGajiDisetujui()
    {
        $approvedGajis = Gaji::with(['gajiKaryawan.karyawanDivisi', 'gajiStatus'])
                        ->where('gaji_IdStatus', 2)
                        ->get();
        return view('halamanGaji.halamanGajiManager.gajiDisetujui', compact('approvedGajis'));
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
