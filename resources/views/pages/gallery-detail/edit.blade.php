@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Edit Gallery Detail</h2>

    @if ($errors->any())
        <div class="alert alert-danger"> 
            <ul class="mb-0"> 
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pages.gallery-detail.update', $galleryDetail->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $galleryDetail->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $galleryDetail->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="description2" class="form-label">Deskripsi Gambar</label>
            <textarea name="description2" id="description2" rows="4" class="form-control">{{ old('description2', $galleryDetail->description2) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar (Opsional)</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
            
            @if ($galleryDetail->image)
                <p class="mt-2">Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $galleryDetail->image) }}" alt="Gambar" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pages.gallery-detail.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
