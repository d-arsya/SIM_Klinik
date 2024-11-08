<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('antrian.tambah_pasien_baru');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('antrian.tambah_pasien_baru');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'gender' => 'required|string',
            'umur' => 'required|string|max:255',
            'jenis_hewan' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            'berat_badan' => 'required|numeric',
            'pulsus' => 'required|numeric',
            'suhu' => 'required|numeric',
            'frekuensi_napas' => 'required|numeric',
            'service' => 'required|string|max:255',
            'jenis_vaksin' => 'nullable|string|max:255',
            'sudah_vaksin' => 'boolean',
        ]);

        // Simpan data ke dalam database
        Hewan::create([
            'nama_hewan' => $request->nama_hewan,
            'gender' => $request->gender,
            'umur' => $request->umur,
            'jenis_hewan' => $request->jenis_hewan,
            'warna' => $request->warna,
            'berat_badan' => $request->berat_badan,
            'pulsus' => $request->pulsus,
            'suhu' => $request->suhu,
            'frekuensi_napas' => $request->frekuensi_napas,
            'service' => $request->service,
            'jenis_vaksin' => $request->jenis_vaksin,
            'sudah_vaksin' => $request->has('sudah_vaksin'), // Checkbox: jika dicentang, set true
        ]);

        // Redirect setelah berhasil menyimpan
        return redirect()->route('antrian_pasien')->with('success', 'Data berhasil disimpan!');
    }
}
