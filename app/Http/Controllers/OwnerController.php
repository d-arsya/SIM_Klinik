<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('antrian.tambah_owner_baru');
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
            'nomor_telepon' => 'required|string|max:15',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string|max:10',
            'negara' => 'required|string|max:100',
            'info_tambahan' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Buat instance model Owner dan isi dengan data validasi
        $owner = new Owner();
        $owner->nama = $validatedData['nama'];
        $owner->gender = $validatedData['gender'];
        $owner->nomor_telepon = $validatedData['nomor_telepon'];
        $owner->alamat = $validatedData['alamat'];
        $owner->kota = $validatedData['kota'];
        $owner->provinsi = $validatedData['provinsi'];
        $owner->kode_pos = $validatedData['kode_pos'];
        $owner->negara = $validatedData['negara'];
        $owner->info_tambahan = $validatedData['info_tambahan'];

        // Simpan file foto jika ada
        if ($request->hasFile('photo')) {
            $filePath = $request->file('photo')->store('public/photos');
            $owner->photo = basename($filePath);
        }

        // Simpan data ke database
        $owner->save();

        // Redirect ke halaman yang diinginkan setelah penyimpanan
        return redirect()->route('owners.index')->with('success', 'Data pemilik hewan berhasil ditambahkan.');
    }
}

