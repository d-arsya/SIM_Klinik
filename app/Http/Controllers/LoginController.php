<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Tambahkan $redirectTo untuk mengarahkan pengguna setelah login
    protected $redirectTo = '/dashboard';
    
    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Cek kredensial login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect ke dashboard setelah login berhasil
            return redirect()->intended($this->redirectTo);
        }

        // Jika login gagal, kembali dengan pesan error
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
