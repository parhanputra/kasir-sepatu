<!-- Modal -->
<div class="modal fade" id="data-barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body p-1">
                        <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th style=" max-width: 5%">Nama Sepatu</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Stok</th>
                                    <th>Diskon</th>
                                    <th>Ukuran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barang as $item)
                                <tr>
                                        <form action="/penjualan/store" method="POST">
                                        @csrf
                                        <td>{{$loop->iteration}}<input class="form-control" type="text" value="{{$nomor}}" name="kode_transaksi" hidden></td>
                                        <td >{{$item->nama}}<input class="form-control" type="text" value="{{$item->id}}" name="barang_id" hidden></td>
                                        <td>{{$item->harga_jual}}<input class="form-control" type="text" value="{{$item->harga_jual}}" name="harga" hidden></td>
                                        <td style="width: 15%"><input class="form-control" type="number" name="jumlah" id="jumlah" value="1"></td>
                                        <td>{{$item->stok}}<input type="text" value="{{$item->stok}}" hidden><input class="form-control" type="text" value="1" name="kasir_id" hidden></td>
                                        <td >{{$item->diskon}}%<input class="form-control" type="text" value="{{$item->diskon}}" name="diskon" hidden></td>
                                        <td >{{$item->ukuran}}<input class="form-control" type="text" value="{{$item->ukuran}}" name="ukuran" hidden></td>
                                        <td><button type="submit" id="tambah" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button></td>
                                        </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
