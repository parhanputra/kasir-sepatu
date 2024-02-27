@extends('layout.app')

@section('title', 'Kasir - Detail Laporan')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Laporan</h1>
    </div>

    <div class="section-body">
        <div class="card shadow">
            <div class="card-header bg-white">
            <h4 class="text-primary">Laporan Transaksi</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover" id="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode transaksi</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Diskon</th>
                            <th>Ukuran</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->kode_transaksi}}</td>
                            <td>{{$item->barang}}</td>
                            <td>{{$item->harga}}</td>
                            <td>{{$item->jumlah}}</td>
                            <td>{{$item->diskon}}%</td>
                            <td>{{$item->ukuran}}</td>
                            <td>{{$item->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white">
                <a href="/laporan" class="btn btn-sm btn-outline-warning"><i class="fas fa-caret-left"></i> Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@endpush