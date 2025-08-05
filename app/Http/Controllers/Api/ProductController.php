<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua produk dan kelompokkan berdasarkan kategori
        $grouped = Product::all()->groupBy('category');

        // Ubah hasil menjadi array asosiatif
        $result = [];
        foreach ($grouped as $category => $items) {
            $result[$category] = $items->map(function ($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'description' => $item->description,
                    'image' => $item->image,
                ];
            });
        }

        return response()->json($result);
    }
}

