<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function shops()
    {
        return $this->hasMany(Shop::class);
        // 1 kategori punya banyak produk
    }
}
