<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rows = $request->input('rows', 10);
        $hewan = Hewan::orderBy('created_at', 'desc')->paginate($rows);

        return view('masterdata.hewan', compact('hewan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masterdata.create_hewan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hewan = new Hewan();
        $hewan->jenis_hewan = $request->jenis_hewan;
        $hewan->pulsus = $request->pulsus;
        $hewan->suhu = $request->suhu;
        $hewan->frekuensi_napas = $request->frekuensi_napas;
        $hewan->save();
        return redirect()->route('masterdata.hewan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_jenis_hewan)
    {
        $hewan = Hewan::findOrFail($id_jenis_hewan); // Ambil data hewan berdasarkan ID

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_jenis_hewan)
    {
        // Mengambil data hewan berdasarkan ID yang diberikan
        $hewan = Hewan::findOrFail($id_jenis_hewan);

        // Mengembalikan tampilan dengan data hewan yang telah diambil
        return view('masterdata.edit_hewan', compact('hewan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hewan = Hewan::find($id);
        $hewan->jenis_hewan = $request->input('jenis_hewan');
        $hewan->pulsus = $request->input('pulsus');
        $hewan->suhu = $request->input('suhu');
        $hewan->frekuensi_napas = $request->input('frekuensi_napas');
        $hewan->save();
        return redirect()->route('masterdata.hewan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_jenis_hewan)
    {
        // Ambil hewan yang ingin dihapus
        $hewan = Hewan::findOrFail($id_jenis_hewan);

        // Hapus hewan dari database
        $hewan->delete();

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('masterdata.hewan.index')->with('success', 'Hewan berhasil dihapus.');
    }
}
