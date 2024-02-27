<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\TransaksiSementara;
use App\Models\TransaksiDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        $user = User::all();

        return view('laporan.index', compact('transaksi', 'user'));
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
    public function show($kodeTransaksi)
    {
        $data = TransaksiDetail::where('kode_transaksi', $kodeTransaksi)->get();
        
        return view('laporan.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }

    public function print($id, $kode_transaksi) {
        $transaksi = Transaksi::find($id);
        $transaksi_detail = TransaksiDetail::where('kode_transaksi', $kode_transaksi)->get();

        $pdf = Pdf::loadView('laporan.print', compact('transaksi', 'transaksi_detail'));
        return $pdf->stream();
    }
}
