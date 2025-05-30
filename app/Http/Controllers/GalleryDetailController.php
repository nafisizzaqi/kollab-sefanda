<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class GalleryDetailController
{
    // Menampilkan semua data
    public function index()
    {
        $homes = Home::all();
        return view('home.index', compact('homes'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('home.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'image' => 'required|string', // Ubah ke 'image' => 'required|image' jika upload file
            'title' => 'required|string',
            'description2' => 'required|string',
        ]);

        Home::create($request->all());

        return redirect()->route('home.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $home = Home::findOrFail($id);
        return view('home.edit', compact('home'));
    }

    // Menyimpan hasil update
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
            'image' => 'required|string',
            'title' => 'required|string',
            'description2' => 'required|string',
        ]);

        $home = Home::findOrFail($id);
        $home->update($request->all());

        return redirect()->route('home.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy($id)
    {
        $home = Home::findOrFail($id);
        $home->delete();

        return redirect()->route('home.index')->with('success', 'Data berhasil dihapus.');
    }
}
