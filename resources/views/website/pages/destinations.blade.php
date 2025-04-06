@extends('website.layout.app')
@section('content')
    <!-- Breadcrumb Section -->
    <section class="bg-gray-100 py-4">
        <div class="max-w-7xl mx-auto px-4">
            <nav class="flex text-sm font-medium text-gray-600">
                <a href="/" class="hover:text-blue-600">Home</a>
                <span class="mx-2">/</span>
                <a href="/destinations" class="hover:text-blue-600">Destinations</a>
            </nav>
        </div>
    </section>

    <!-- Destination Page -->
    <section class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-6 text-center text-blue-700">Explore Our Top Destinations</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            @include('website.component.package')

        </div>
    </section>
@endsection
