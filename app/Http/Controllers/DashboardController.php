<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardDirektur(){
        return view('halamanDashboard.dashboardDirektur');
    }
    
    public function dashboardManager(){
        return view('halamanDashboard.dashboardManager');
    }
    
    public function dashboardFinance(){
        return view('halamanDashboard.dashboardFinance');
    }
}
