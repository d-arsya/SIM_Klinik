<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengirimkan data ke view dashboard jika diperlukan
        return view('dashboard');
    }
}
