@extends('layout.app')

@section('title', 'Kasir - Laporan')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Laporan</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Laporan Transaksi</h4>
                        <div class="card-header-form">
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Transaksi</th>
                                    <th>Total</th>
                                    <th>Bayar</th>
                                    <th>Kembali</th>
                                    <th>Kode Kasir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transaksi as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->kode_transaksi}}</td>
                                    <td>{{$item->total}}</td>
                                    <td>{{$item->bayar}}</td>
                                    <td>{{$item->kembali}}</td>
                                    <td>{{$item->kode_kasir}}</td>
                                    <td>
                                        <a href="/laporan/{{$item->kode_transaksi}}" class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="/laporan/{{$item->id}}/{{$item->kode_transaksi}}/print" class="btn btn-sm btn-outline-danger"><i class="fa fa-print"></i> Print</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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