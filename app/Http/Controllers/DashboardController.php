<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $produk = produk::all();
        return view('dashboard', compact('produk'));
    }
}
