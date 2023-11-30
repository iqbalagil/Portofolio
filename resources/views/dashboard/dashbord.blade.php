@extends('layout.form')
@section('isi')
<div class="container mt-32">
    <h1 class="text-3xl font-bold text-rose-600">Komentar</h1>

    @if ($posts)
    <table class="table mt-4 table-hover">
        <thead>
            <tr class="text-white bg-rose-600">
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Pesan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{$posts->count()}}
            @if ($posts->count())
                @foreach ($posts as $index => $post)
                    <tr class="hover:bg-rose-800">
                        <td>{{ $post->nama }}</td>
                        <td>{{ $post->email }}</td>
                        <td>{{ $post->komen }}</td>
                        <td class="">
                            <div class="inline-flex">
                            <a href="{{ route('posts.edit', $post->id) }}" class="col-span-1 text-white hover:bg-rose-800 btn btn-sm bg-rose-500">Edit</a>
                                <form action="{{url('posts',$post->id)}}" method="POST">
                                @csrf
                                    @method('DELETE')
                                    <button class="col-span-2 text-white bg-red-500 hover:bg-red-800 btn btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <p class="mt-4 text-center">No posts found.</p>
            @endif
        </tbody>
    </table>
@else
    <p class="mt-4 text-center">No posts found.</p>
@endif
</div>
@endsection