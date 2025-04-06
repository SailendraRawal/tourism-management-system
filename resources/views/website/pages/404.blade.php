@extends('website.layout.app')
@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="text-center bg-white p-10 rounded-lg shadow-lg">
            <h1 class="text-6xl font-bold text-gray-700 mb-4">404</h1>
            <h2 class="text-2xl font-semibold text-gray-600 mb-4">Page Not Found</h2>
            <p class="text-gray-500 mb-4">Sorry, the page you're looking for doesn't exist or has been moved.</p>
            <a href="{{ url('/') }}"
                class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition duration-300">Go Back to
                Home</a>
        </div>
    </div>
@endsection
