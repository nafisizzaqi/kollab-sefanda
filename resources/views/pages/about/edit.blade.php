@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Edit About</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Ada kesalahan pada input:<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('pages.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            @if ($about->logo)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $about->logo) }}" alt="Logo" height="80">
            </div>
            @endif
            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="logo">
            @error('logo')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $about->title) }}"
                required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"
                required>{{ old('description', $about->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <textarea class="form-control" id="visi" name="visi" rows="2"
                required>{{ old('visi', $about->visi) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea class="form-control" id="misi" name="misi" rows="2" required>
                {{ is_array(old('misi', $about->misi)) ? implode("\n", old('misi', $about->misi)) : old('misi', $about->misi) }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pages.about.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection