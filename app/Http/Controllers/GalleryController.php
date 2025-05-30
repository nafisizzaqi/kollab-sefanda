<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GalleryController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('gallery.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string' // atau 'image' => 'required|image' jika upload file
        ]);

        Gallery::create($request->all());

        return redirect()->route('gallery.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    // Menyimpan hasil update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string' // atau 'image' => 'nullable|image' jika upload file
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->update($request->all());

        return redirect()->route('gallery.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Data berhasil dihapus.');
    }
}
