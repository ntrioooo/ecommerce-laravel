<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany(User::class, 'name');
        // 1 users punya banyak orderan (pesanan)
    }

    public function shops()
    {
        return $this->hasMany(Shop::class, 'nama_produk');
        // 1 barang punya banyak orderan
    }
}
