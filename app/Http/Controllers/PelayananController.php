<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rows = $request->input('rows', 10);
        $pelayanan = Pelayanan::orderBy('created_at', 'desc')->paginate($rows);

        return view('masterdata.pelayanan', compact('pelayanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masterdata.create_pelayanan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelayanan = new Pelayanan();
        $pelayanan->jenis_pelayanan = $request->jenis_pelayanan;
        $pelayanan->harga = $request->harga;
        $pelayanan->save();
        return redirect()->route('masterdata.pelayanan.index');
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
    public function edit(string $id_pelayanan)
    {
        $pelayanan = Pelayanan::findOrFail($id_pelayanan);
        return view('masterdata.edit_pelayanan', compact('pelayanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pelayanan)
    {
        $pelayanan = Pelayanan::find($id_pelayanan);
        $pelayanan->jenis_pelayanan = $request->jenis_pelayanan;
        $pelayanan->harga = $request->harga;
        $pelayanan->save();
        return redirect()->route('masterdata.pelayanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_pelayanan) {
    {
        $pelayanan = Pelayanan::find($id_pelayanan);
        $pelayanan->delete();
        return redirect()->route('masterdata.pelayanan.index');
    }
}}
