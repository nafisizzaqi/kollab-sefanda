<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $galleries = Gallery::all();
        return view('pages.gallery.index', compact('galleries'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('pages.gallery.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image'
        ]);

        $slug = Str::slug($request->title);

        // Cek slug unik
        $originalSlug = $slug;
        $count = 1;
        while (Gallery::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        Gallery::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'image' => $request->file('image')->store('gallery_images', 'public'),
        ]);

        return redirect()->route('pages.gallery.index')->with('success', 'Data berhasil ditambahkan.');
    }


    // Menampilkan form edit
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.gallery.edit', compact('gallery'));
    }

    // Menyimpan hasil update
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $dataToUpdate = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        // Update slug jika title berubah
        if ($request->title !== $gallery->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $count = 1;
            while (Gallery::where('slug', $slug)->where('id', '!=', $gallery->id)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }
            $dataToUpdate['slug'] = $slug;
        }

        if ($request->hasFile('image')) {
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }
            $dataToUpdate['image'] = $request->file('image')->store('gallery_images', 'public');
        }

        $gallery->update($dataToUpdate);

        return redirect()->route('pages.gallery.index')->with('success', 'Data berhasil diperbarui.');
    }



    // Menghapus data
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('pages.gallery.index')->with('success', 'Data berhasil dihapus.');
    }
}
