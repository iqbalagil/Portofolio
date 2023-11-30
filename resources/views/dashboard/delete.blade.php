@extends('layout.form')
@section('isi')
<div class="container mt-4">
    <h1 class="text-3xl font-bold text-rose-600">Delete Post</h1>

    <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="mt-4">
        @csrf
        @method('DELETE')

        <p class="text-gray-700">Are you sure you want to delete this post?</p>

        <button type="submit" class="text-white bg-red-500 btn">Delete Post</button>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">Cancel</a>
    </form>
</div>
@endsection