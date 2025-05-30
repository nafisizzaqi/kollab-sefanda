@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Edit Data Guru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada kesalahan pada inputan Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pages.guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $guru->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $guru->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if ($guru->image)
                <img src="{{ asset('storage/' . $guru->image) }}" alt="Gambar" width="150" class="mb-3">
            @else
                <p>-</p>
            @endif
            <input type="file" class="form-control" id="image" name="image" rows="4" required></input>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $guru->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('pages.guru.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
