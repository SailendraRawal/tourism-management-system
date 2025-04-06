@extends('website.layout.app')
@section('content')
    <!-- Registration Page -->
    <section class="max-w-md mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">Create an Account</h2>

        <form action="/register" method="POST" class="space-y-6">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required
                class="w-full px-4 py-3 border rounded-lg text-gray-700">
            <input type="email" name="email" placeholder="Email Address" required
                class="w-full px-4 py-3 border rounded-lg text-gray-700">
            <input type="password" name="password" placeholder="Password" required
                class="w-full px-4 py-3 border rounded-lg text-gray-700">
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">Sign Up</button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Already have an account? <a href="/login" class="text-blue-600 hover:underline">Login here</a>
        </p>
    </section>
@endsection
