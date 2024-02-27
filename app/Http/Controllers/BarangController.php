<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Merk;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        $kategori = Kategori::all();
        $merk = Merk::all();

        return view('barang.index', compact('barang', 'kategori', 'merk'));
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
        $barang = new Barang;
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->kategori_id = $request->kategori_id;
        $barang->harga_beli = $request->harga_beli;
        $barang->harga_jual = $request->harga_jual;
        $barang->merk_id = $request->merk_id;
        $barang->stok = $request->stok;
        $barang->diskon = $request->diskon;
        $barang->ukuran = $request->ukuran;
        $barang->save();


        return redirect('barang')->with('sukses', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        $kategori = \App\Models\Kategori::all();
        $merk = \App\Models\Merk::all();

        return view('barang.view', compact('barang', 'kategori', 'merk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        $kategori = \App\Models\Kategori::all();
        $merk = \App\Models\Merk::all();

        return view('barang.edit', compact('barang', 'kategori', 'merk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->kategori_id = $request->kategori_id;
        $barang->harga_beli = $request->harga_beli;
        $barang->harga_jual = $request->harga_jual;
        $barang->merk_id = $request->merk_id;
        $barang->stok = $request->stok;
        $barang->diskon = $request->diskon;
        $barang->ukuran = $request->ukuran;
        $barang->update();


        return redirect('barang')->with('sukses', 'Data berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('barang')->with('sukses', 'Data berhasil di Hapus');
    }
}
