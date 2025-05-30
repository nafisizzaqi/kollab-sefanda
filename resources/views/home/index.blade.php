@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data About</h1>
    <a href="{{ route('about.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Logo</th>
                <th>Title</th>
                <th>Description</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <td>{{ $about->logo }}</td>
                    <td>{{ $about->title }}</td>
                    <td>{{ $about->description }}</td>
                    <td>{{ $about->visi }}</td>
                    <td>{{ $about->misi }}</td>
                    <td>
                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('about.destroy', $about->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
