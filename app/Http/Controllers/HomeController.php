<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController
{
    // Menampilkan semua data
    public function index()
    {
        $about = About::first();
        \Log::info('Data About: ', ['data' => $about]);
        return view('frontend.index', compact('about'));
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
            'logo' => 'required|string',
            'image' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
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
            'logo' => 'required|string',
            'image' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
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
