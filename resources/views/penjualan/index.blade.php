@extends('layout.app')

@section('title', 'Kasir - Penjualan')

@section('content')
<section class="section">
    <!-- <div class="section-header">
        <h1>Transaksi Penjualan</h1>
    </div> -->

    <div class="section-body">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="position-absolute text-white">Kasir</h4>
                        <div class="card-header-form float-right">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                data-target="#data-barang"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-striped" id="table-transaksi">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Diskon</th>
                                    <th>Ukuran</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($transaksi_sementara as $item)
                                    <tr>
                                        <td>{{$item->barang->nama}}</td>
                                        <td class="harga" value="{{$item->harga}}">{{$item->harga}}</td>
                                        <td class="jumlah" value="{{$item->jumlah}}">{{$item->jumlah}}</td>
                                        <td class="diskon" value="{{$item->diskon}}">{{$item->diskon}}%</td>
                                        <td class="ukuran" value="{{$item->ukuran}}">{{$item->ukuran}}</td>
                                        <td class="total" value="{{$item->total}}">{{$item->total}}</td>
                                        <td>
                                            <form action="/penjualan/{{$item->id}}" id="delete-form">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Kasir</h4>
                    </div>
                    <div class="card-body p-2">
                        <form action="/penjualan/bayar" method="POST" id="form-bayar">
                            @csrf
                            <div class="form-group">
                                <label for="Total Belanja">Total Belanja</label>
                                <div class="input-group-prepend">
                                    <h1 class="text-dark mr-2">Rp<br></h1>
                                    <input class="d-none" type="text" id="total" value="0" name="total">
                                    <h1 class="text-dark" id="label-total">0</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="kasir">Kasir</label>
                                    <select class="custom-select" name="kode_kasir">
                                        <option value="{{ auth()->user()->kode }}">{{ auth()->user()->nama }}</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode">Kode Transaksi</label>
                                        <input type="text" id="kode-transaksi" class="form-control" value="{{$nomor}}" name="kode_transaksi" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bayar">Di Bayar</label>
                                        <input type="number" id="bayar" class="form-control" name="bayar" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kembali">Kembali</label>
                                        <input type="text" id="kembali" class="form-control" value="0" readonly>
                                        <input type="text" id="kembalian" class="form-control" value="0" name="kembali" hidden>
                                    </div>
                                </div>
                            </div>
                            <a href="/penjualan/hapus/semua" class="btn m-1 btn-outline-danger">Batal</a>
                            <button type="button" class="btn m-1 btn-outline-primary" onclick="simpan()" id="btn-bayar">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('penjualan.dataBarang')
@endsection

@push('script')
<script>
     function hitungKembali() {
        // Ambil nilai dari input "Di Bayar"
        var diBayar = document.getElementById('bayar').value;
        
        // Konversi nilai menjadi angka
        var diBayarAngka = parseFloat(diBayar) || 0;
        
        // Ambil nilai total belanja dari label
        var total = document.getElementById('total').value;
        var belanja = parseFloat(total) || 0;
        
        // Hitung kembali
        var kembali = diBayarAngka - belanja;
        
        // Tampilkan nilai kembali pada input "Kembali"
        document.getElementById('kembali').value = kembali.toLocaleString('id-ID');
        document.getElementById('kembalian').value = kembali;
        total.value = kembali;
    }
    
    // Tambahkan event listener untuk memanggil fungsi hitungKembali saat nilai input berubah
    document.getElementById('bayar').addEventListener('input', hitungKembali);
</script>

<script>
    function hitungTotal() {
        var total = document.querySelectorAll('#table-transaksi tbody td.total');
        var label_total = document.getElementById('label-total');
        var sub_total = document.getElementById('total');
        
        // Inisialisasi variabel total
        var grandTotal = 0;
        
        // Iterasi melalui setiap elemen dan menjumlahkannya
        total.forEach(function(element) {
            var totalValue = parseFloat(element.getAttribute('value')) || 0;
            grandTotal += totalValue;
        });
        
        // Tampilkan hasilnya di label_total dengan format mata uang Rupiah
        label_total.innerHTML = grandTotal.toLocaleString('id-ID');
        sub_total.value = grandTotal;
    }

    function simpan() {
        var kembali = parseFloat(document.getElementById('kembali').value) || 0;
        form_bayar = document.getElementById('form-bayar');

        if(kembali < 0){
            iziToast.error({
            title: ' Terjadi Kesalahan',
            message: 'Jumlah Bayar Kurang Dari Total!!',
            position: 'topRight'
            });
        }
        else{
            form_bayar.submit();
        }
    }
</script>
@endpush