<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use Illuminate\Http\Request;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rows = $request -> input('rows',10);
        $warna = Warna::orderBy('created_at', 'desc')->paginate($rows);

        return view('masterdata.warna', compact('warna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masterdata.create_warna');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $warna = new Warna();
        $warna->warna = $request->warna;
        $warna->save();
        return redirect()->route('masterdata.warna.index');
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
        $warna = Warna::findOrFail($id);
        return view('masterdata.edit_warna', compact('warna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $warna = Warna::find($id);
        $warna->warna = $request->warna;
        $warna->save();

        return redirect()->route('masterdata.warna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $warna = Warna::findOrFail($id);
        $warna->delete();

        return redirect()->route('masterdata.warna.index');
    }
}
