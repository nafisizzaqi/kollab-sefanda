@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Data About</h2>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('pages.about.create') }}" class="btn btn-primary mb-3">Tambah About</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Logo</th>
                <th>Description</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($abouts ?? [] as $about)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $about->title }}</td>
                <td>
                    @if ($about->logo)
                    <img src="{{ $about->logo }}" alt="Gambar" width="100">
                    @else
                    -
                    @endif
                </td>

                <td>{{ \Illuminate\Support\Str::limit($about->description, 100, '...') }}</td>
                <td>
                    <a href="{{ route('pages.about.edit', $about->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('pages.about.destroy', $about->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data About.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection