<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        .details {
            margin-bottom: 20px;
        }

        .details label {
            font-weight: bold;
            width: 120px;
            display: inline-block;
        }

        .details span {
            color: #555;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Detail Transaksi</h2>
        </div>
        <div class="details">
            <label>Kode Transaksi:</label> <span>{{$transaksi->kode_transaksi}}</span><br>
            <label>Total:</label> <span>Rp {{number_format($transaksi->total, 0, ',', '.')}}</span><br>
            <label>Bayar:</label> <span>Rp {{number_format($transaksi->bayar, 0, ',', '.')}}</span><br>
            <label>Kembali:</label> <span>Rp {{number_format($transaksi->kembali, 0, ',', '.')}}</span><br>
            <label>Kode Kasir:</label> <span>{{$transaksi->kode_kasir}}</span><br>
            <label>Waktu:</label> <span>{{$transaksi->tanggal}}</span><br>
        </div>
        <div class="header">
            <h3>Daftar Barang</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Diskon</th>
                    <th>Ukuran</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi_detail as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->barang}}</td>
                    <td>Rp {{number_format($item->harga, 0, ',', '.')}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->diskon}}%</td>
                    <td>{{$item->ukuran}}</td>
                    <td>Rp {{number_format($item->total, 0, ',', '.')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
