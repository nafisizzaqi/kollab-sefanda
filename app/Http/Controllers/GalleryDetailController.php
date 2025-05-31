<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\GalleryDetail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class GalleryDetailController extends Controller
{
    public function index()
    {
        $galleryDetails = GalleryDetail::latest()->paginate(10); // paginasi contoh
        return view('pages.gallery-detail.index', compact('galleryDetails'));
    }

    public function create()
    {
        $galleries = gallery::all(); // Ambil semua gallery
        return view('pages.gallery-detail.create', compact('galleries'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description2' => 'nullable|string', // validasi description2
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('title', 'description', 'description2');
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('gallery-detail', 'public');
            $data['image'] = $path;
        }

        GalleryDetail::create($data);

        return redirect()->route('pages.gallery-detail.index')->with('success', 'Gallery detail berhasil ditambahkan.');
    }

    public function show($slug)
    {
        // Misal kamu menyimpan slug di kolom 'slug' di tabel gallery_details
        // Kalau belum ada, kamu bisa buatkan di migration dan di model.

        $galleryDetail = GalleryDetail::where('slug', $slug)->firstOrFail();

        return view('frontend.gallery-detail', compact('galleryDetail'));
    }


    public function edit($id)
    {
        $galleryDetail = GalleryDetail::findOrFail($id);
        return view('pages.gallery-detail.edit', compact('galleryDetail'));
    }

    public function update(Request $request, $id)
    {
        $galleryDetail = GalleryDetail::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description2' => 'nullable|string', // validasi description2 di update
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('title', 'description', 'description2');
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($galleryDetail->image && Storage::disk('public')->exists($galleryDetail->image)) {
                Storage::disk('public')->delete($galleryDetail->image);
            }

            $path = $request->file('image')->store('gallery-detail', 'public');
            $data['image'] = $path;
        }

        $galleryDetail->update($data);

        return redirect()->route('pages.gallery-detail.index')->with('success', 'Gallery detail berhasil diupdate.');
    }

    public function destroy($id)
    {
        $galleryDetail = GalleryDetail::findOrFail($id);

        if ($galleryDetail->image && Storage::disk('public')->exists($galleryDetail->image)) {
            Storage::disk('public')->delete($galleryDetail->image);
        }

        $galleryDetail->delete();

        return redirect()->route('pages.gallery-detail.index')->with('success', 'Gallery detail berhasil dihapus.');
    }
}
