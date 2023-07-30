<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PeminjamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->middleware(['auth', 'isadmin'])->group(function () {

    Route::controller(CategoryController::class)->group(function () {

        Route::get('category', 'index');
        Route::get('category/create', 'create');
        Route::post('category', 'store');
        Route::get('category/{category_id}/delete', 'destroy');


    });


    Route::controller(ProductController::class)->group(function () {

        Route::get('products', 'index');
        Route::get('products/create', 'create');
        Route::post('products', 'store');
        Route::get('products/{product}/edit', 'edit');
        Route::put('products/{product}', 'update');
        Route::delete('products/{product}', 'destroy')->name('destroy');

    });


    Route::controller(PeminjamanController::class)->group(function () {

        Route::get('peminjaman', 'indexAdmin');
        Route::get('peminjaman/{peminjaman}/edit', 'edit');
        Route::put('peminjaman/{peminjaman}', 'update');
        Route::get('peminjaman/{peminjaman}/pengembalian', 'pengembalian');
        Route::put('peminjaman/{peminjaman}/done', 'done');
        Route::get('peminjaman/{peminjaman}/delete', 'destroy');

        Route::get('peminjaman/{product}', 'productsDetailsAdmin');

    });



});


Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('kontak');
});





// Bila ketika user mengketik url lain
Route::redirect('/masuk', 'login');
Route::redirect('/daftar', 'register');
Route::redirect('/beranda', 'home');
Route::redirect('/kontak', 'contact');


//Peminjaman-Users
Route::controller(PeminjamanController::class)->group(function () {

    Route::get('peminjaman/{user_id}', 'indexUser')->middleware('access.user');
    Route::post('peminjaman/{user_id}', 'store');
    Route::get('peminjaman/{user_id}/{product_id}', 'productsDetailsUsers');

});




Auth::routes();

Route::prefix('home')->middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::controller(CatalogController::class)->group(function () {

        Route::get('pria-wanita-aksesoris', 'priaWanitaAksesoris');
        Route::get('pria-wanita-aksesoris/{category_slug}', 'priaWanitaAksesorisDetails');
        Route::get('mapacci', 'mapacci');
        Route::get('mapacci/{category_slug}', 'mapacciDetails');
        Route::get('baju-bodo', 'bajuBodo');
        Route::get('baju-bodo/{category_slug}', 'bajuBodoDetails');
        Route::get('jas-tutup', 'jasTutup');
        Route::get('jas-tutup/{category_slug}', 'jasTutupDetails');
        Route::get('baju-anak', 'bajuAnak');
        Route::get('baju-anak/{category_slug}', 'bajuAnakDetails');
        Route::get('hantaran', 'Hantaran');
        Route::get('hantaran/{category_slug}', 'hantaranDetails');



    });

    Route::controller(PeminjamanController::class)->group(function () {


        Route::get('pria-wanita-aksesoris/{category_slug}/{product_id}', 'createAksesoris');
        Route::get('mapacci/{category_slug}/{product_id}', 'createMapacci');
        Route::get('baju-bodo/{category_slug}/{product_id}', 'createBajuBodo');
        Route::get('jas-tutup/{category_slug}/{product_id}', 'createJasTutup');
        Route::get('baju-anak/{category_slug}/{product_id}', 'createBajuAnak');
        Route::get('hantaran/{category_slug}/{product_id}', 'createHantaran');


    });


});