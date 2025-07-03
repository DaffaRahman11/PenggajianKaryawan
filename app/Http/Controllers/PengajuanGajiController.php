<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\GajiLog;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProsesGajiController;

class PengajuanGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gajiPendings = Gaji::with(['gajiKaryawan.karyawanDivisi', 'gajiStatus'])
                        ->where('gaji_IdStatus', 1)
                        ->get();
        return view('halamanGaji.halamanGajiFinance.pengajuanGaji', compact('gajiPendings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataKaryawans = Karyawan::get();
        return view('halamanGaji.halamanGajiFinance.tambahPengajuanGaji', compact('dataKaryawans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gaji_IdKaryawan' => 'required|exists:karyawans,id',
            'gajiPokok' => 'required|integer',
            'bonus' => 'required|integer',
        ],[
            'gajiPokok.integer' => 'Harap Inputkan Nominal Gaji Tanpa . atau ,',
            'bonus.integer' => 'Harap Inputkan Nominal Banus Tanpa . atau ,'
        ]);
        try{

            DB::beginTransaction();
            
            // Ambil input
            $gajiPokok = (int) $request->gajiPokok;
            $bonus = (int) $request->bonus;

            // Hitung persentase PPh
            if ($gajiPokok <= 5000000) {
                $Pph = 0.05;
                $persenPPH = '5%';
            } elseif ($gajiPokok <= 20000000) {
                $Pph = 0.10;
                $persenPPH = '10%';
            } else {
                $Pph = 0.15;
                $persenPPH = '15%';
            }

            // Hitung nominal PPh dan gaji bersih
            $nominalPPH = ($gajiPokok + $bonus) * $Pph;
            $gajiBersih = ($gajiPokok + $bonus) - $nominalPPH;

            // $periodeGaji = CarbonCarbon::

            // Simpan ke tabel `gajis`
            $gaji = Gaji::create([
                'gaji_IdKaryawan' => $request->gaji_IdKaryawan,
                'gajiPokok' => $gajiPokok,
                'bonus' => $bonus,
                'nominalPPH' => (int) $nominalPPH,
                'pph' => $persenPPH,
                'gajiBersih' => (int) $gajiBersih,
                'periodeGaji' => now()->addMonth()->translatedFormat('F Y'),  
                'gaji_IdStatus' => 1,
            ]);

            // Simpan ke tabel `gaji_logs`
            GajiLog::create([
                'logs_IdGaji' => $gaji->id,
                'logs_IdStatus' => $gaji->gaji_IdStatus,
                'logs_IdUser' => Auth::user()->id,
                'catatan' => 'Gaji Diajukan',
                'created_at' => now(),
            ]);
            
            
            DB::commit(); 

            return redirect('/dashboardFinance/PengajuanGaji')->with('succes', 'Gaji atas nama '. $gaji->gajiKaryawan->namaKaryawan . ' Telah Di Ajukan');
        }catch (\Exception $e){

            DB::rollBack(); 
            return redirect('/dashboardFinance/PengajuanGaji')->with('error', 'Gagal Menambahkan Data Curas Baru'. $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            
            $gaji = Gaji::with('gajiKaryawan')->findOrFail($id);

            return view('halamanGaji.halamanGajiFinance.detailPengajuanGaji',compact('gaji'));
        } catch (\Exception $e) {
            abort(404); // Jika dekripsi gagal, tampilkan halaman 404
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gaji $gaji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gaji $gaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            
            $gaji = Gaji::with('gajiKaryawan')->findOrFail($id);

            
            GajiLog::create([
                'logs_IdGaji' => $gaji->id,
                'logs_IdStatus' => '5',
                'logs_IdUser' => Auth::user()->id,
                'catatan' => 'Data Gaji Batal Di Ajukan'
            ]);

           
            $gaji->delete();

            DB::commit();

            return redirect()->back()->with('succes', 'Data gaji Berhasil Terhapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
