<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('halamanLogin.Login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Mohon isi email terlebih dahulu',
            'password.required' => 'Mohon isi password terlebih dahulu'
        ]);

        try{
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                $user = Auth::user();
                if($user->user_IdRole == 1){
                    return redirect('/dashboardDirektur');
                }elseif($user->user_IdRole == 2){
                    return redirect('/dashboardManager');
                }elseif($user->user_IdRole == 3){
                    return redirect('/dashboardFinance');
                }
                return redirect('/');
            }
            return redirect('/')->with('loginError', 'Email atau password salah.');
            
        }catch (\Exception $e){
            return redirect('/')->with('loginError', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/');

    }
    
    public function cekUser(Request $request)
    {
         try{
                $user = Auth::user();
                if($user->user_IdRole == 1){
                    return redirect('/dashboardDirektur');
                }elseif($user->user_IdRole == 2){
                    return redirect('/dashboardManager');
                }elseif($user->user_IdRole == 3){
                    return redirect('/dashboardFinance');
                }
                return redirect('/');
            
        }catch (\Exception $e){
            return abort(403, 'Anda Tidak Memiliki Akses Ke Halaman Ini.');
        }

    }

}
