<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Admin dashboard logic
        return view('admin.dashboard');
    }

    public function showProducts()
    {
        // Logic to show all products
        return view('admin.products');
    }

    public function showOrders()
    {
        // Logic to show all orders
        return view('admin.orders');
    }
}
