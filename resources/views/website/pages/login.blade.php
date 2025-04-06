@extends('website.layout.app')
@section('content')
    <!-- Login Page -->
    <section class="max-w-md mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">Login to Your Account</h2>

        <form action="{{ url('login') }}" method="POST" class="space-y-6 max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
            @csrf

            <!-- Email Input -->
            <div class="relative">
                <input type="email" name="email" placeholder="Email Address" required
                    class="w-full px-4 py-3 border rounded-lg text-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                @if($errors->has('email'))
                    <div class="absolute text-sm text-red-500 mt-1">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <!-- Password Input -->
            <div class="relative">
                <input type="password" name="password" placeholder="Password" required
                    class="w-full px-4 py-3 border rounded-lg text-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                @if($errors->has('password'))
                    <div class="absolute text-sm text-red-500 mt-1">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                Login
            </button>
        </form>


        <p class="mt-4 text-center text-gray-600">
            Don't have an account? <a href="/registration" class="text-blue-600 hover:underline">Register here</a>
        </p>
    </section>
@endsection
