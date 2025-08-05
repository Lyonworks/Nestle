<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = \App\Models\Category::all();
        return view('category.index', compact('category'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->with('brands')->firstOrFail();
        return view('category.show', compact('category'));
    }
}

