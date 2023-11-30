@extends('layout.form')
@section('isi')
<div class="container mt-4">
    <h1 class="text-3xl font-bold text-rose-600">Update Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="text-gray-700 form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $post->nama }}">
        </div>

        <div class="mb-3">
            <label for="email" class="text-gray-700 form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $post->email }}">
        </div>

        <div class="mb-3">
            <label for="komen" class="text-gray-700 form-label">Pesan</label>
            <textarea class="form-control" id="komen" name="komen" rows="3">{{ $post->komen }}</textarea>
        </div>

        <button type="submit" class="text-white btn btn-sm bg-rose-500">Update Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </form>
</div>
@endsection