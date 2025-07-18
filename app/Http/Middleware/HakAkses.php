<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class HakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check() && Auth::user()->user_IdRole == $role) {
            return $next($request);
        }

        // jika role tidak sesuai, bisa redirect atau abort
        return abort(403, 'Anda Tidak Memiliki Akses Ke Halaman Ini.');
    }
}
