<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $kategori = Category::orderBy('created_at', 'asc')->get();
        return view('kategori.index', compact('kategori'));
    }

    public function tambah()
    {
        return view('kategori.tambah');
    }
}
