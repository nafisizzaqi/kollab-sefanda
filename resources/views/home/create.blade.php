@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Data About</h1>
    <form action="{{ route('about.store') }}" method="POST">
        @csrf
        @include('about.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('about.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
