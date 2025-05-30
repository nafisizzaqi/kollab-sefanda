@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data About</h1>
    <form action="{{ route('about.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('about.form', ['about' => $about])
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('about.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
