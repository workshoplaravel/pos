<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $saya = 'adalah';
        $kamu = 'dan';
        return view('kategori.index', compact('saya', 'kamu'));
    }
}
