<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;

class AntrianPasienDokterController extends Controller
{
    public function index()
    {
        {
            $antrians = Antrian::all();
            $provinsis = Provinsi::all();
            $kabupatens = Kabupaten::all();
            $kecamatans = Kecamatan::all();
            $desas = Desa::all();
            return view('antrian_dokter.antrian_pasien', compact('antrians', 'provinsis','kabupatens','kecamatans','desas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
