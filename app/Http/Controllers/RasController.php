<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Ras;
use Illuminate\Http\Request;

class RasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rows = $request->input('rows', 10);
        $ras = Ras::with('hewan')
        ->orderBy('created_at', 'desc')
        ->paginate($rows);

        return view('masterdata.ras', compact('ras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hewan = Hewan::all();
        return view('masterdata.create_ras', compact('hewan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ras = new Ras();
        $ras->nama_ras = $request->nama_ras;
        $ras->hewan_id = $request->hewan_id;
        $ras->save();
        return redirect()->route('masterdata.ras.index');
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
    public function edit(string $id_ras)
    {
        $ras = Ras::findOrFail($id_ras);
        $hewan = Hewan::all();
        return view('masterdata.edit_ras', compact('ras', 'hewan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_ras)
    {
        $ras = Ras::find($id_ras);
        $ras->nama_ras = $request->nama_ras;
        $ras->hewan_id = $request->hewan_id;
        $ras->save();
        return redirect()->route('masterdata.ras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_ras)
    {
        $ras = Ras::findOrFail($id_ras);
        $ras ->delete();

        redirect()->route('masterdata.ras.index');
    }
}
