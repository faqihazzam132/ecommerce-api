<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = produk::all();
        return response()->json([
            'message' => 'success',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataProduk = produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);
        return response()->json([
            'message' => 'success',
            'data' => $dataProduk
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = produk::find($id);
        if ($data) {
            return response()->json([
                'message' => 'success',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = produk::find($id);
        if ($data) {
            $data->update([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi,
                'gambar' => $request->gambar,
            ]);
            return response()->json([
                'message' => 'success',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = produk::find($id);
        if ($data) {
            $data->delete();
            return response()->json([
                'message' => 'success',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
    }

    public function apiindex()
    {
        $data = produk::all();
        return response()->json([
            'message' => 'success',
            'data' => $data
        ]);
    }
}