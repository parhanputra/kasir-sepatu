<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        $now = Carbon::now();
        $tahun_bulan = $now->year . $now->month;
        $cek = User::count();
        
        if($cek == 0){
            $urut = 'K-' + 100001;
            $kode = $tahun_bulan . $urut;
            dd($kode);
        }else {
            $ambil = User::all()->last();
            $urut = (int)substr($ambil->kode, -6) + 1;
            $kode = 'K-' . $tahun_bulan . $urut;
        }
        return view('user.index', compact('user', 'kode'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->kode = $request->kode;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();


        return redirect('user')->with('sukses', 'Data berhasil di Simpan');
    }

    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        if($request->password == null)
        {
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->level = $request->level;
            $user->update();
        }else
        {
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->level = $request->level;
            $user->update();
        }

        return redirect('user')->with('sukses', 'Data Berhasil di Edit');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('user')->with('sukses', 'Data Berhasil Di Hapus');
    }
}
