@extends('layout.form')
@section('isi')
<div class="flex flex-col items-center justify-center min-h-screen bg-rose-600">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-normal text-center text-rose-600 font-poppins">Register</h1>
    <p class="text-lg text-white font-poppins">Create your account</p>
  </header>
  <main class="bg-white">
    <form action="/register" method="post">
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md form-input focus:outline-none focus:ring-1 focus:ring-rose-500">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-md form-input focus:outline-none focus:ring-1 focus:ring-rose-500">
      </div>
      <button type="submit" class="w-full p-2 font-medium text-white rounded-md bg-rose-600 hover:bg-rose-500">Register</button>
    </form>
    </div>
</div>
@endsection
