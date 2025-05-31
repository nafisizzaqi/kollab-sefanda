@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Data Guru</h2>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('pages.guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($gurus as $guru)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $guru->name }}</td>
                <td>{{ $guru->title }}</td>
                <td>
                    @if ($guru->image)
                    <img src="{{ $guru->image }}" alt="Gambar" width="100">
                    @else
                    -
                    @endif
                </td>
                <td>{{ \Illuminate\Support\Str::limit($guru->description, 50, '...') }}</td>
                <td>
                    <a href="{{ route('pages.guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('pages.guru.destroy', $guru->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Yakin ingin menghapus guru ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data guru.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection