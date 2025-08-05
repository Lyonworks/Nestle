<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $brands = Brand::with('category')->get();
        $products = Product::with('brand', 'category')->get();

        return view('admin.dashboard', compact('brands', 'products'));
    }
}
