@extends('layout.form')
@section('isi')
    <div class="flex flex-col items-center justify-center min-h-screen bg-rose-600">
        <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
            <h1 class="text-3xl font-normal text-center font-poppins text-rose-600">Login</h1>

            <form action="{{ route('doLogin') }}" method="POST" class="mt-8">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full p-2 border border-gray-300 rounded-md form-input focus:outline-none focus:ring-1 focus:ring-rose-500"
                        required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>


                    <input type="password" id="password" name="password"
                        class="w-full p-2 border border-gray-300 rounded-md form-input focus:outline-none focus:ring-1 focus:ring-rose-500"
                        required>
                </div>

                <div class="flex items-center justify-between">
                    <div class="form-check">
                        <input type="checkbox"
                            class="w-4 h-4 border border-gray-300 rounded-md form-check-input text-rose-600"
                            id="rememberMe">
                        <label for="rememberMe" class="ml-2 text-sm font-medium text-gray-700">Remember me</label>
                    </div>

                    <a href="#" class="text-sm font-medium text-rose-600">Forgot password?</a>
                </div>
                @csrf
                <button type="submit" value="Log In"
                
                    class="w-full p-2 font-medium text-white rounded-md bg-rose-600 hover:bg-rose-500">Login</button>
            </form>
        </div>
    </div>
@endsection
