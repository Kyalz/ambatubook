<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::latest()->get();
        return view('bukus', compact('bukus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'judul' => 'request|string|max:255',
            'sinopsis' => 'request|string|max:500',
            'penulis' => 'request|string|max:255',
            'penerbit' => 'request|string|max:255',
            'tahun_terbit' => 'request|number',
            'stok' => 'request|number',
            'harga' => 'request|number',
            'kategori_id' => 'request|number',
        ]);

        Buku::create($request->all());

        return redirect('/')->with('success', 'Buku berhasil ditambahkan!');
    }
}
