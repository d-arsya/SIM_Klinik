<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Tambahkan $redirectTo untuk mengarahkan pengguna setelah login
    protected $redirectTo = '/dashboard';

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->only('email', 'password');
        
        // Cek login
        if (Auth::attempt($credentials)) {
            // Redirect ke dashboard jika login berhasil
            return redirect()->intended($this->redirectTo);
        }

        // Kembali ke halaman login dengan error jika gagal
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
