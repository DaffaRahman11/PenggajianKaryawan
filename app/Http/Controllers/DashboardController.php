<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboardDirektur(){
        $karyawanDashboardDirekturs = Karyawan::take(3)->get();
        $terbayarDashboardDirekturs = Gaji::where('gaji_IdStatus', 4)
                                        ->take(3)
                                        ->get();                        
        return view('halamanDashboard.dashboardDirektur', compact('karyawanDashboardDirekturs', 'terbayarDashboardDirekturs'));
    }
    
    public function dashboardManager(){
        
        $karyawanDashboardManagers = Karyawan::take(3)->get();
        $pengajuanDashboardManagers = Gaji::where('gaji_IdStatus', 1)
                                        ->take(3)
                                        ->get();
        $terbayarDashboardManagers = Gaji::where('gaji_IdStatus', 4)
                                        ->take(3)
                                        ->get();
        $ditolakDashboardManagers = Gaji::where('gaji_IdStatus', 3)
                                        ->take(3)
                                        ->get();                             
        return view('halamanDashboard.dashboardManager', compact('pengajuanDashboardManagers', 'karyawanDashboardManagers', 'terbayarDashboardManagers', 'ditolakDashboardManagers'));

    }
    
    public function dashboardFinance(){
        $karyawanDashboardFinances = Karyawan::take(3)->get();
        $pengajuanDashboardFinances = Gaji::where('gaji_IdStatus', 1)
                                        ->take(3)
                                        ->get();
        $terbayarDashboardFinances = Gaji::where('gaji_IdStatus', 4)
                                        ->take(3)
                                        ->get();
        $ditolakDashboardFinances = Gaji::where('gaji_IdStatus', 3)
                                        ->take(3)
                                        ->get();                             
        return view('halamanDashboard.dashboardFinance', compact('pengajuanDashboardFinances', 'karyawanDashboardFinances', 'terbayarDashboardFinances', 'ditolakDashboardFinances'));
    }
}
