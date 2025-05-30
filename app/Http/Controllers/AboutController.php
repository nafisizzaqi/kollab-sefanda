<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        About::create($request->all());
        return redirect()->route('about.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show(About $about)
    {
        return view('about.show', compact('about'));
    }

    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'logo' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $about->update($request->all());
        return redirect()->route('about.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'Data berhasil dihapus.');
    }
}
