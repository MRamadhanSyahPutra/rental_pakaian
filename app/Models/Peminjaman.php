<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjamen';

    protected $fillable = [
        'user_id',
        'product_id',
        'name',
        'slug',
        'no_wa',
        'tgl_pinjam',
        'tgl_kembali',
        'tgl_sudah_dikembalikan',
        'status',
        'ket',
    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public function productss()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }


}