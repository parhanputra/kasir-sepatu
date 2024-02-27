<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merk = Merk::all();
        return view('merk.index', compact('merk'));
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
        $merk = new Merk;
        $merk->merk = $request->merk;
        $merk->save();


        return redirect('merk')->with('sukses', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $merk = Merk::find($id);

        return view('merk.edit', compact('merk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $merk = Merk::find($id);
        $merk->merk = $request->merk;
        $merk->update();

        return redirect('merk')->with('sukses', 'Data Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $merk = Merk::find($id);
        $merk->delete();

        return redirect('merk')->with('sukses', 'Data berhasil di Hapus');
    }
}
