<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $this->authorize('viewAny', Category::class);
        return view('admin.category.index', compact('categories'));

    }
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:8', 'max:255'],
            'gambar' => ['required', 'file', 'image', 'max:5000'],
        ], [
                'name.required' => 'Nama wajib di isi!',
                'name.min' => 'Nama kurang dari 8 karakter!',
                'gambar.required' => 'Gambar wajib di isi',
                'gambar.image' => 'File upload harus berupa gambar!',
                'gambar.max' => 'Ukuran upload harus kurang dari 5MB!',
            ]);

        $namaFile = null;

        if ($request->hasFile('gambar')) {
            $slug = Str::slug($request->name);
            $extFile = $request->file('gambar')->getClientOriginalExtension();
            $namaFile = $slug . '-' . time() . '.' . $extFile;
            $request->file('gambar')->storeAs('public/storage/category', $namaFile);
        }



        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'gambar' => $namaFile,
        ]);


        return redirect('admin/category')->with([
            'toast_success' => 'Category berhasil ditambahkan',
            'sound_effect' => asset('audio/category-berhasil-di-tambahkan.aac'),
        ]);



    }

    public function destroy(int $category_id)
    {
        Category::findOrFail($category_id)->delete();
        return redirect('admin/category')->with([
            'toast_success' => 'Category terhapus dengan semua products',
            'sound_effect' => asset('audio/category-terhapus-dengan-semua-product.aac'),

        ]);
    }


}