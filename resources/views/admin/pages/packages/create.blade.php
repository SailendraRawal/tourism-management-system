@extends('admin.layout.app')
@section('content')
<div class="container mx-auto p-6">
    <!-- Card Container -->
    <div class="bg-white p-8 rounded-lg shadow-lg ">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Add New Package</h1>

        <!-- Form Start -->
        <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Package Name -->
            <div class="mb-4">
                <label for="name" class="text-lg font-medium text-gray-700">Package Name</label>
                <input type="text" name="name" id="name" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="text-lg font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full p-3 mt-2 border" rows="6" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Price -->
            <div class="mb-4">
                <label for="price" class="text-lg font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('price') border-red-500 @enderror" value="{{ old('price') }}" required>
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-4">
                <label for="image" class="text-lg font-medium text-gray-700">Package Image</label>
                <input type="file" name="image" id="image" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('image') border-red-500 @enderror">
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Save Package</button>
        </form>
    </div>
</div>


@endsection
