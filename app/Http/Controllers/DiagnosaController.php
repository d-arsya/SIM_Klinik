<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Diagnosa;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rows = $request->input('rows', 10);
        $diagnosa = Diagnosa::with('hewan')
        ->orderBy('created_at', 'desc')
        ->paginate($rows);

        return view('masterdata.diagnosa', compact('diagnosa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hewan = Hewan::all();
        return view('masterdata.create_diagnosa', compact('hewan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $diagnosa = new Diagnosa();
        $diagnosa->hasil_diagnosa = $request->hasil_diagnosa;
        $diagnosa->hewan_id = $request->hewan_id;
        $diagnosa->save();
        return redirect()->route('masterdata.diagnosa.index');
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
    public function edit(string $id_diagnosa)
    {
        $diagnosa = Diagnosa::findOrFail($id_diagnosa);
        $hewan = Hewan::all();
        return view('masterdata.edit_diagnosa', compact('diagnosa', 'hewan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_diagnosa)
    {
        $diagnosa = Diagnosa::find($id_diagnosa);
        $diagnosa->hasil_diagnosa = $request->input('hasil_diagnosa');
        $diagnosa->hewan_id = $request->input('hewan_id');
        $diagnosa->save();
        return redirect()->route('masterdata.diagnosa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_diagnosa)
    {
        $diagnosa = Diagnosa::find($id_diagnosa);
        $diagnosa->delete();
        return redirect()->route('masterdata.diagnosa.index');
    }
}

