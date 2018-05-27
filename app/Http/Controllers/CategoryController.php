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

    public function simpan(Request $request)
    {
        $kategori = Category::create([
            'name' => $request->nama,
            'description' => $request->deskripsi
        ]);
        //insert into (name, description) values('$name', '$description');
        return redirect('/kategori');
    }

    public function hapus($id)
    {
        $kategori = Category::find($id);
        //select * from categories where id='$id';
        $kategori->delete();
        //delete from categories where id='$id';

        return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori = Category::find($id);
        // select * from categories where id='$id';
        return view('kategori.edit', compact('kategori'));
    }

    public function perbaharui(Request $request, $id)
    {
        $kategori = Category::find($id);
        //select * from categories where id='$id';
        $kategori->update([
            'name' => $request->nama,
            'description' => $request->deskripsi
        ]);
        //update categories set name='$name, description='$description' where id='$id'
        return redirect('/kategori')
            ->with(['success' => $kategori->name . ' Data Telah Disimpan']);
    }
}
