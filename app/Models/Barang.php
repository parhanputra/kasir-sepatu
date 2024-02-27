<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Merk;
use App\Models\Supplier;
use App\Models\TransaksiSementara;
use App\Models\TransaksiDetail;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'kategori_id',
        'harga_beli',
        'harga_jual',
        'merk_id',
        'stok',
    ];

    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function merk()
    {
        return $this->belongsTo(Merk::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function TransaksiSementara()
    {
        return $this->hasMany(TransaksiSementara::class);
    }

    public function TransaksiDetail()
    {
        return $this->hasMany(TransaksiDetail::class);
    }
}
