@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Data Gallery</h2>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('pages.gallery.create') }}" class="btn btn-primary mb-3">Tambah Gallery</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($galleries as $gallery)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if ($gallery->image)
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gambar" width="100">
                    @else
                    -
                    @endif
                </td>
                <td>{{ $gallery->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($gallery->description, 100, '...') }}</td>
                <td>
                    <a href="{{ route('pages.gallery.edit', $gallery->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('pages.gallery.destroy', $gallery->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data gallery.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection