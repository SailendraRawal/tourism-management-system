@extends('admin.layout.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Card Container -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Edit Package</h1>

        <form action="{{ route('packages.update', $package) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-4">
                <label for="name" class="block text-lg font-medium text-gray-700">Package Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name', $package->name) }}" required>
                @error('name')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="description" class="block text-lg font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" required>{{ old('description', $package->description) }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="price" class="block text-lg font-medium text-gray-700">Price</label>
                <input type="number" id="price" name="price" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('price', $package->price) }}" required>
                @error('price')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="image" class="block text-lg font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('image')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600">Update Package</button>
        </form>
    </div>
</div>
@endsection
