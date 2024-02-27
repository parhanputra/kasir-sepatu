<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class TransaksiSementara extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_transaksi',
        'barang_id',
        'harga',
        'jumlah',
        'diskon',
        'total',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
