@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Edit Gallery</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pages.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Saat Ini</label><br>
            @if ($gallery->image)
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gambar" width="150" class="mb-3">
            @else
                <p>-</p>
            @endif
            <input type="file" class="form-control" id="image" name="image">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $gallery->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $gallery->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pages.gallery.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
