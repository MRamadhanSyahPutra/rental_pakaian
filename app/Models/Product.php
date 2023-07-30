<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Peminjaman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'gambar',
        'bio_deskripsi',
        'harga',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'product_id', 'id');
    }
}