<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Owner;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinsis = Provinsi::all();
        $kabupatens = Kabupaten::all();
        $kecamatans = Kecamatan::all();
        $desas = Desa::all();

        return view('antrian.tambah_owner_baru', compact('provinsis', 'kabupatens', 'kecamatans', 'desas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $validatedData = $request->validate([
            'nama_owner' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'alamat' => 'required|string',
            'provinsi_id' => 'required|exists:provinsi,id',
            'kabupaten_id' => 'required|exists:kabupaten,id',
            'kecamatan_id' => 'required|exists:kecamatan,id',
            'desa_id' => 'required|exists:desa,id',
            'no_hp' => 'required|string|max:15',
        ]);

        // Buat instance model Owner dan isi dengan data validasi
        $owner = new Owner();
        $owner->nama_owner = $validatedData['nama_owner'];
        $owner->gender = $validatedData['gender'];
        $owner->alamat = $validatedData['alamat'];
        $owner->provinsi_id = $validatedData['provinsi_id'];
        $owner->kabupaten_id = $validatedData['kabupaten_id'];
        $owner->kecamatan_id = $validatedData['kecamatan_id'];
        $owner->desa_id = $validatedData['desa_id'];
        $owner->no_hp = $validatedData['no_hp'];

        // Simpan data ke database
        $owner->save();

        // Redirect ke halaman yang diinginkan setelah penyimpanan
        return redirect()->route('pasien.index')->with('success', 'Data pemilik hewan berhasil ditambahkan.');
    }
}

