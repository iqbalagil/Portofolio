@extends('layout.form')

@section('isi')
<div class="p-5 flex justify-center mt-[50px] bg-[url('/asset/contact.svg')] bg-repeat-round bg-blend-hard-light bg-w-[1000px] ">
    <form class="pt-[50px]  max-w-[900px] p-[100px] bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="block p-4">
            <label for="nama" class="text-xl">Nama</label>
            <div>
                <input type="text" name="nama" class="w-[700px] text-xl h-[50px] dark:bg-gray-800 rounded-2xl dark:text-white border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
            @error('nama')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="block p-4">
            <label for="email" class="text-xl">Email</label>
            <div>
                <input type="email" name="email" class="w-[700px] text-xl h-[50px] dark:bg-gray-800 dark:text-white rounded-2xl border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
            @error('email')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="block p-4">
            <label for="komen" class="text-xl">Pesan</label>
            <div>
                <textarea name="komen" class="w-[700px] h-[150px] text-xl dark:bg-gray-800 rounded-2xl dark:text-white border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
            </div>
            @error('komen')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-4">
            <button type="submit" class="px-4 py-2 font-bold text-white rounded bg-rose-500 hover:bg-rose-700">
                Kirim
            </button>
        </div>
    </form>
</div>


@endsection
