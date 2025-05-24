<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();  // Mengambil semua produk dari database
        return view('frontend.home', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // Menampilkan detail produk
        return view('frontend.product', compact('product'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('name', 'like', "%$search%")->get();
        return view('frontend.search', compact('products'));
    }
}
