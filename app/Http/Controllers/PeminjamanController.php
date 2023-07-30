<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Peminjaman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUser($user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            $peminjaman = Peminjaman::where('user_id', $user->id)->get();
        } else {
            $peminjaman = collect();
        }
        // dd($user, $peminjaman);
        return view('peminjaman.user.index', compact('peminjaman', 'user'));
    }
    public function indexAdmin()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.admin.index', compact('peminjaman'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAksesoris($category_slug, $product_id)
    {
        $user = Auth::user();
        $category = Category::where('slug', $category_slug)->first();
        $product = $category->products->where('id', $product_id)->first();

        // dd($user, $product);
        return view('peminjaman.user.createAksesoris', compact('user', 'product'));
    }


    public function createMapacci($category_slug, $product_id)
    {
        $user = Auth::user();
        $category = Category::where('slug', $category_slug)->first();
        $product = $category->products->where('id', $product_id)->first();

        // dd($user, $product);
        return view('peminjaman.user.createMapacci', compact('user', 'product'));
    }

    public function createBajuBodo($category_slug, $product_id)
    {
        $user = Auth::user();
        $category = Category::where('slug', $category_slug)->first();
        $product = $category->products->where('id', $product_id)->first();

        // dd($user, $product);
        return view('peminjaman.user.createBajuBodo', compact('user', 'product'));
    }

    public function createJasTutup($category_slug, $product_id)
    {
        $user = Auth::user();
        $category = Category::where('slug', $category_slug)->first();
        $product = $category->products->where('id', $product_id)->first();

        // dd($user, $product);
        return view('peminjaman.user.createJasTutup', compact('user', 'product'));
    }

    public function createBajuAnak($category_slug, $product_id)
    {
        $user = Auth::user();
        $category = Category::where('slug', $category_slug)->first();
        $product = $category->products->where('id', $product_id)->first();

        // dd($user, $product);
        return view('peminjaman.user.createBajuAnak', compact('user', 'product'));
    }

    public function createHantaran($category_slug, $product_id)
    {
        $user = Auth::user();
        $category = Category::where('slug', $category_slug)->first();
        $product = $category->products->where('id', $product_id)->first();

        // dd($user, $product);
        return view('peminjaman.user.createHantaran', compact('user', 'product'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);


        $request->validate([

            'user_id' => ['required'],
            'product_id' => ['required'],
            'name' => ['required', 'string', 'min:8', 'max:255'],
            'no_wa' => ['required', 'min:11', 'max:13'],
            'tgl_pinjam' => ['required'],

        ], [
                'user_id.required' => 'Wajib di isi!',
                'product_id.required' => 'Wajib di isi!',
                'name.required' => 'Nama wajib di isi!',
                'name.string' => 'Nama di isi dengan huruf!',
                'nama.min' => 'Nama kurang dari 8 karakter!',
                'name.max' => 'Nama lebih dari 255 karakter!',
                'no_wa.required' => 'No WhatsApp wajib di isi!',
                'no_wa.min' => 'No WhatsApp kurang dari 8 karakter!',
                'no_wa.max' => 'No WhatsApp lebih dari 13 karakter!',
                'tgl_pinjam.required' => 'Tanggal peminjaman wajib di isi!',
            ]);

        if (Auth::user()->role == '0') {

            $product->peminjaman()->create([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'no_wa' => $request->no_wa,
                'tgl_pinjam' => $request->tgl_pinjam,
                'tgl_kembali' => $request->tgl_kembali,
                'status' => 'menunggu konfirmasi',
                'ket' => $request->ket,
            ]);
        } else {
            return redirect('home');
        }

        // dd($request);
        usleep(35000);
        return redirect('peminjaman/' . $request->user_id)->with('success', 'Peminjaman kamu berhasil ditambahkan!');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(int $peminjaman)
    {
        $user = User::all();
        $product = Product::all();
        $peminjaman = Peminjaman::where('id', $peminjaman)->firstOrFail();
        // dd($peminjaman);
        return view('peminjaman.admin.edit', compact('product', 'peminjaman', 'user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'status' => ['required'],
        ], [
                'status.required' => 'Wajib diisi!',
            ]);

        $peminjaman->update([
            'status' => $request->status,
        ]);

        return redirect('admin/peminjaman')->with('toast_success', 'Status telah diperbarui');
    }



    public function pengembalian(int $peminjaman)
    {
        $user = User::all();
        $product = Product::all();
        $peminjaman = Peminjaman::where('id', $peminjaman)->firstOrFail();

        return view('peminjaman.admin.done', compact('product', 'peminjaman', 'user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function done(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'tgl_sudah_dikembalikan' => ['required'],
        ], [
                'tgl_sudah_dikembalikan.required' => 'Wajib diisi!',
            ]);

        $peminjaman->update([
            'tgl_sudah_dikembalikan' => $request->tgl_sudah_dikembalikan,
        ]);

        return redirect('admin/peminjaman')->with('toast_success', 'Date pengembalian sudah dibuat');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $peminjaman)
    {
        Peminjaman::findOrFail($peminjaman)->delete();
        return redirect('admin/peminjaman')->with('toast_success', 'Riwayat peminjaman users telah dihapus!');

    }




    public function productsDetailsAdmin($product_id)
    {
        $peminjaman = Peminjaman::where('product_id', $product_id)->first();
        // dd($peminjaman);
        return view('peminjaman.admin.products', compact('peminjaman'));
    }

    public function productsDetailsUsers($user_id, $product_id)
    {
        $user = User::findOrFail($user_id);
        $product = Product::findOrFail($product_id);
        $peminjaman = Peminjaman::where('user_id', $user->id)->where('product_id', $product->id)->first();

        if ($peminjaman) {
            // dd($peminjaman);
            return view('peminjaman.user.products', compact('user', 'product', 'peminjaman'));
        } else {
            return redirect('home');
        }
    }

}