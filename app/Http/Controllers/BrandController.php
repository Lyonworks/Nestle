<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class BrandController extends Controller
{
    public function show($slug)
    {
        $brand = Brand::where('slug', $slug)->with('products')->firstOrFail();
        return view('brands.show', compact('brand'));
    }
}
