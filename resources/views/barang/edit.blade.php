@extends('layout.app')

@section('title', 'Kasir - Edit')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Barang</h1>
    </div>

    <div class="section-body">
        <div class="card shadow">
            <div class="card-header bg-white">
                <h4>Edit Data Barang</h4>
            </div>
            <div class="card-body">
                <form action="/barang/{{$barang->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col md 6">
                            <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" class="form-control" name="kode" value="{{$barang->kode}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$barang->nama}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select class="custom-select" name="kategori_id">
                                    @foreach ($kategori as $kategori)
                                    <option value="{{ $kategori->id }}"
                                        {{ $kategori->id == $barang->kategori_id ? 'selected' : '' }}>
                                        {{ $kategori->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <select class="custom-select" name="merk_id">
                                    @foreach ($merk as $merk)
                                    <option value="{{ $merk->id }}"
                                        {{ $merk->id == $barang->merk_id ? 'selected' : '' }}>
                                        {{ $merk->merk }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="harga_beli">Harga Beli</label>
                                    <input type="number" class="form-control" name="harga_beli"
                                        value="{{$barang->harga_beli}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="harga_jual">Harga Jual</label>
                                <input type="number" class="form-control" name="harga_jual"
                                    value="{{$barang->harga_jual}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" class="form-control" name="stok" value="{{$barang->stok}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="diskon">Diskon</label>
                                <div class="input-group-prepend">
                                    <input type="number" class="form-control" name="diskon" value="{{$barang->diskon}}" required>
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ukuran">Ukuran</label>
                                    <input type="number" class="form-control" name="ukuran" value="{{$barang->ukuran}}">
                                </div>
                            </div>
                    </div>
                    <a href="/barang" class="btn btn-sm btn-outline-warning"><i class="fas fa-caret-left"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i>
                        Edit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
