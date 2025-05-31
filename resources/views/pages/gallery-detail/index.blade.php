@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Data Gallery Detail</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pages.gallery-detail.create') }}" class="btn btn-primary mb-3">Tambah Gallery Detail</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Deskripsi gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($galleryDetails as $detail)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($detail->image)
                            <img src="{{ asset('storage/' . $detail->image) }}" alt="Gambar" width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $detail->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($detail->description, 50, '...') }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($detail->description2, 50, '...') }}</td>
                    <td>
                        <a href="{{ route('pages.gallery-detail.edit', $detail->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('pages.gallery-detail.destroy', $detail->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data gallery detail.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $galleryDetails->links() }}
</div>
@endsection
