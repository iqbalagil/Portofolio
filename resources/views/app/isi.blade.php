{{-- @dd($iqbal) --}}
@extends('layout.form')

@section('isi')
    @if ( $iqbal)
        <div class="relative px-4 py-3 my-16 mt-20 text-green-700 bg-green-100 border border-green-400 rounded">
            @if ($iqbal['nama'])
                <p class="mb-1">Name: {{ $iqbal["nama"]}}</p>
            @endif
            @if ($iqbal['email'])
                <p class="mb-1">Email: {{ $iqbal['email'] }}</p>
            @endif
            @if ($iqbal['komen'])
                <p class="mb-1">Message: {{ $iqbal['komen'] }}</p>
            @endif
        </div>
    @else
        <div class="px-4 py-3 text-center text-red-700 bg-red-100 border border-red-400 rounded">
            No message sent!
        </div>
    @endif
@endsection
