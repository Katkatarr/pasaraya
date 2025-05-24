<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::all();  // Menampilkan semua item di keranjang
        return view('frontend.cart', compact('cartItems'));
    }

    public function add(Request $request)
    {
        $cartItem = new Cart;
        $cartItem->product_id = $request->input('product_id');
        $cartItem->quantity = 1;  // Default quantity 1
        $cartItem->save();

        return redirect('/cart');
    }

    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();
        return redirect('/cart');
    }
}
