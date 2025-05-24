<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend.checkout');
    }

    public function process(Request $request)
    {
        // Proses checkout
        // Logika pembayaran dan pembuatan order

        // Redirect ke halaman sukses atau konfirmasi
        return redirect('/');
    }
}
