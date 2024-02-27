<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $satuan = Satuan::all();
        return view('satuan.index', compact('satuan'));
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
        $satuan = new Satuan;
        $satuan->nama = $request->nama;
        $satuan->save();


        return redirect('satuan')->with('sukses', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $satuan = Satuan::find($id);

        return view('satuan.edit', compact('satuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $satuan = Satuan::find($id);
        $satuan->nama = $request->nama;
        $satuan->update();

        return redirect('satuan')->with('sukses', 'Data Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $satuan = Satuan::find($id);
        $satuan->delete();

        return redirect('satuan')->with('sukses', 'Data berhasil di Hapus');
    }
}
