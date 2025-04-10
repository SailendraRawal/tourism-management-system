@extends('website.layout.app')
@section('content')
    <!-- Registration Page -->
    <section class="max-w-md mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">Create an Account</h2>

        <form action="/register" method="POST" class="space-y-6">
            @csrf

            {{-- Show all errors at the top (optional) --}}
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Whoops!</strong> There were some problems with your input.
                    <ul class="mt-2 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Name Field --}}
            <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}"
                class="w-full px-4 py-3 border rounded-lg text-gray-700 @error('name') border-red-500 @enderror">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            {{-- Email Field --}}
            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}"
                class="w-full px-4 py-3 border rounded-lg text-gray-700 @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            {{-- Password Field --}}
            <input type="password" name="password" placeholder="Password"
                class="w-full px-4 py-3 border rounded-lg text-gray-700 @error('password') border-red-500 @enderror">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            {{-- Submit Button --}}
            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">Sign Up</button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Already have an account? <a href="/login" class="text-blue-600 hover:underline">Login here</a>
        </p>
    </section>
@endsection
