<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('home', compact('category'));
    }
}