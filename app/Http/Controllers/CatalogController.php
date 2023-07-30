<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class CatalogController extends Controller
{
    public function priaWanitaAksesoris()
    {
        $user = User::all();
        $categories = Category::whereIn('name', ['Baju Bodo Model Sabrina', 'Baju bodo model sabrina', 'Baju Bodo Model Kotak', 'Baju bodo model kotak', 'Baju Bodo Model Kingking', 'Baju bodo model kingking', 'Baju Bodo Model Full Payet', 'Baju bodo model full payet', 'Baju Labbu', 'Baju labbu'])->get();
        return view('catalog.catalogs.PriaWanitaAksesoris', compact('categories', 'user'));
    }
    public function priaWanitaAksesorisDetails($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        return view('catalog.catalogsDetails.PriaWanitaAksesoris', compact('category'));
    }


    public function mapacci()
    {
        $categories = Category::whereIn('name', ['Paket Mapacci', 'Paket mapacci', 'Mapacci', 'mapacci',])->get();
        return view('catalog.catalogs.Mapacci', compact('categories'));
    }
    public function mapacciDetails($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        return view('catalog.catalogsDetails.Mapacci', compact('category'));
    }



    public function bajuBodo()
    {
        $categories = Category::whereIn('name', ['Baju Bodo Biasa', 'Baju bodo biasa'])->get();
        return view('catalog.catalogs.BajuBodo', compact('categories'));
    }
    public function bajuBodoDetails($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        return view('catalog.catalogsDetails.BajuBodo', compact('category'));
    }



    public function jasTutup()
    {
        $categories = Category::whereIn('name', ['Jas Tutup', 'Jas tutup'])->get();
        return view('catalog.catalogs.JasTutup', compact('categories'));
    }
    public function jasTutupDetails($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        return view('catalog.catalogsDetails.Jastutup', compact('category'));
    }



    public function bajuAnak()
    {
        $categories = Category::whereIn('name', ['Baju Bodo Anak', 'Baju bodo anak'])->get();
        return view('catalog.catalogs.BajuAnak', compact('categories'));
    }
    public function bajuAnakDetails($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        return view('catalog.catalogsDetails.BajuAnak', compact('category'));
    }



    public function hantaran()
    {
        $categories = Category::whereIn('name', ['Hantaran','hantaran'])->get();
        return view('catalog.catalogs.Hantaran', compact('categories'));
    }
    public function hantaranDetails($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        return view('catalog.catalogsDetails.Hantaran', compact('category'));
    }



}