@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Tambah Gallery Detail</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('pages.gallery-detail.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="gallery_title" class="form-label">Judul Gallery</label>
            <select name="title" id="gallery_title" class="form-select" required>
                <option value="" disabled selected>Pilih judul gallery</option>
                @foreach ($galleries as $gallery)
                <option value="{{ $gallery->title }}" {{ old('title')==$gallery->title ? 'selected' : '' }}>
                    {{ $gallery->title }}
                </option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" rows="4"
                class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="description2" class="form-label">Deskripsi 2</label>
            <textarea name="description2" id="description2" rows="4"
                class="form-control">{{ old('description2', $galleryDetail->description2 ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar (Opsional)</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pages.gallery-detail.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection