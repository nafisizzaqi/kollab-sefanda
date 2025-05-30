<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('pages.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('pages.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'description' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        // Upload logo
        // $logoPath = $request->file('logo')->store('about_logos', 'public');

        $misiInput = $request->input('misi');

        // Jika misi dari textarea string multiline, split menjadi array:
        if (is_string($misiInput)) {
            $misiArray = array_filter(array_map('trim', explode("\n", $misiInput)));
        } else {
            $misiArray = $misiInput;
        }

        About::create([
            'logo' => $request->file('logo')->store('about_logos', 'public'),
            'title' => $request->title,
            'description' => $request->description,
            'visi' => $request->visi,
            'misi' => $misiArray, // ini akan otomatis di-cast jadi JSON di DB
        ]);

        return redirect()->route('pages.about.index')->with('success', 'Data berhasil disimpan.');
    }


    public function show(About $about)
    {
        
    }

    public function edit(About $about)
    {
        return view('pages.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'logo' => 'nullable|file|image|max:2048', // jika logo bisa diubah
            'title' => 'required|string',
            'description' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string', // akan diubah ke array nanti
        ]);

        $data = $request->only(['title', 'description', 'visi']);

        // Tangani logo jika diupload
        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($about->logo && Storage::exists($about->logo)) {
                Storage::delete($about->logo);
            }

            // Simpan logo baru
            $data['logo'] = $request->file('logo')->store('about_logos', 'public');
        }

        // Ubah textarea menjadi array (pisahkan per baris)
        $data['misi'] = array_filter(array_map('trim', explode("\n", $request->misi)));

        // Update data
        $about->update($data);

        return redirect()->route('pages.about.index')->with('success', 'Data berhasil diperbarui.');
    }


    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('pages.about.index')->with('success', 'Data berhasil dihapus.');
    }
}
