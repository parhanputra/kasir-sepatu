@extends('layout.app')

@section('title', 'Kasir - Merk')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Merk</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h4 class="position-absolute text-white">Data Merk</h4>
                        <div class="card-header-form float-right">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                data-target="#form-tambah"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th style="width: 70%">Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($merk as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->merk}}</td>
                                    <td>
                                        <form action="/merk/{{$item->id}}" id="delete-form">
                                            <a href="/merk/{{$item->id}}/edit"
                                                class="btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-sm btn-outline-danger"
                                                id="{{$item->nama}}" data-id="{{$item->id}}"
                                                onclick="confirmDelete(this)"><i class="fa fa-trash"></i> Delete</a>
                                        </form>
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
@include('merk.form');
@endsection

@push('script')
<script>
$(document).ready(function () {
        $('#table').DataTable();
    });

    var data_anggota = $(this).attr('data-id')
    function confirmDelete(button) {
    
        event.preventDefault()
        const id = button.getAttribute('data-id');
        const kode = button.getAttribute('id');
        swal({
                title: 'Apa Anda Yakin ?',
                text: 'Anda akan menghapus data: "' + kode + '". Ketika Anda tekan OK, maka data tidak dapat dikembalikan !',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
        .then((willDelete) => {
            if (willDelete) {
              const form = document.getElementById('delete-form');
              // Setelah pengguna mengkonfirmasi penghapusan, Anda bisa mengirim form ke server
              form.action = '/merk/' + id; // Ubah aksi form sesuai dengan ID yang sesuai
              form.submit();
            }
        });
    }
</script>
@endpush
