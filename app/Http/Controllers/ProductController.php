<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $Products = Product::all();
        return view('admin.product.index', compact('Products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = Category::findOrFail($request->category_id);
        $request->validate([
            'category_id' => ['required'],
            'name' => ['required', 'string', 'min:8', 'max:255'],
            'gambar' => ['required', 'file', 'image', 'max:2000'],
            'bio_deskripsi' => ['sometimes', 'nullable', 'min:12', 'string'],
            'harga' => ['required', 'integer', 'min:10000', 'max:13000000']
        ], [
            'category_id.required' => 'Category wajib di isi!',
            'name.required' => 'Nama wajib di isi!',
            'name.min' => 'Nama kurang dari 8 karakter!',
            'gambar.required' => 'Gambar wajib di isi',
            'gambar.image' => 'File upload harus berupa gambar!',
            'gambar.max' => 'Ukuran upload harus kurang dari 2MB!',
            'bio_deskripsi.min' => 'Deskripsi terlalu sedikit!',
            'harga.required' => 'Harga wajib di isi!',
            'harga.integer' => 'Inputan berupa angka!',
            'harga.min' => 'Nominal harga terlalu rendah!',
            'harga.max' => 'Nominal harga terlalu tinggi!',
        ]);

        $namaFile = null;

        if ($request->hasFile('gambar')) {
            $slug = Str::slug($request->name);
            $extFile = $request->file('gambar')->getClientOriginalExtension();
            $namaFile = $slug . '-' . time() . '.' . $extFile;
            $request->file('gambar')->storeAs('public/storage/product', $namaFile);

        }

        $category->products()->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'gambar' => $namaFile,
            'bio_deskripsi' => $request->bio_deskripsi,
            'harga' => $request->harga,
        ]);


        return redirect('admin/products')->with([
            'toast_success' => 'Berhasil menambahkan product',
            'sound_effect' => asset('audio/berhasil-menambahkan-product.aac'),
        ]);


    }


    public function edit(int $product)
    {
        $categories = Category::all();
        $product = Product::findOrFail($product);
        return view('admin.product.edit', compact('categories', 'product'));
    }


    public function update(Request $request, $product_id)
    {

        $category = Category::findOrFail($request->category_id);
        $request->validate([
            'category_id' => ['required'],
            'name' => ['required', 'string', 'min:8', 'max:255'],
            'gambar' => ['required', 'file', 'image', 'max:2000'],
            'bio_deskripsi' => ['sometimes', 'nullable', 'min:12', 'string'],
            'harga' => ['required', 'integer', 'min:10000', 'max:13000000']
        ], [
            'category_id.required' => 'Category wajib di isi!',
            'name.required' => 'Nama wajib di isi!',
            'name.min' => 'Nama kurang dari 8 karakter!',
            'gambar.required' => 'Images wajib di upload!',
            'gambar.image' => 'File upload harus berupa images!',
            'gambar.max' => 'Ukuran upload harus kurang dari 2MB!',
            'bio_deskripsi.min' => 'Deskripsi terlalu sedikit!',
            'harga.required' => 'Harga wajib di isi!',
            'harga.integer' => 'Inputan berupa angka!',
            'harga.min' => 'Nominal harga terlalu rendah!',
            'harga.max' => 'Nominal harga terlalu tinggi!',
        ]);

        $namaFile = null;

        if ($request->hasFile('gambar')) {
            $slug = Str::slug($request->name);
            $extFile = $request->file('gambar')->getClientOriginalExtension();
            $namaFile = $slug . '-' . time() . '.' . $extFile;
            $request->file('gambar')->storeAs('public/storage/product', $namaFile);

        }

        $category->products()->where('id', $product_id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'gambar' => $namaFile,
            'bio_deskripsi' => $request->bio_deskripsi,
            'harga' => $request->harga,
        ]);


        return redirect('admin/products')->with([
            'toast_success' => 'Product berhasil di ubah!',
            'sound_effect' => asset('audio/product-berhasil-di-ubah.aac'),
        ]);

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('admin/products')->with([
            'toast_success' => 'Product berhasil dihapus!',
            'sound_effect' => asset('audio/product-berhasil-di-hapus.aac'),
        ]);
    }
}