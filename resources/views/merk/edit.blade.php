@extends('layout.app')

@section('title', 'Kasir - Edit')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Merk</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header bg-white">
                <h4>Edit Data Merk</h4>
            </div>
            <div class="card-body">
                <form action="/merk/{{$merk->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="{{$merk->nama}}" name="merk" required>
                    </div>
                    <a href="/merk" class="btn btn-sm btn-outline-warning"><i class="fas fa-caret-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i> Edit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
