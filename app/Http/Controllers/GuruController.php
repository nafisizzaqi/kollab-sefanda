<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GalleryDetailController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $homes = Home::all();
        return view('home.index', compact('homes'));
    }

    // Form tambah data
    public function create()
    {
        return view('home.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|string', // ubah jika upload file
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        Home::create($request->all());

        return redirect()->route('home.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Form edit data
    public function edit($id)
    {
        $home = Home::findOrFail($id);
        return view('home.edit', compact('home'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $home = Home::findOrFail($id);
        $home->update($request->all());

        return redirect()->route('home.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $home = Home::findOrFail($id);
        $home->delete();

        return redirect()->route('home.index')->with('success', 'Data berhasil dihapus.');
    }
}
