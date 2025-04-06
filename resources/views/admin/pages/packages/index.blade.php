@extends('admin.layout.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Card Container -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <!-- Left Side: Heading -->
            <h1 class="text-3xl font-semibold text-gray-800">Packages</h1>

            <!-- Right Side: Add New Package Button -->
            <a href="{{ route('packages.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600">Add New Package</a>
        </div>

        <!-- Package Cards Container -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($packages as $package)
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <div class="flex flex-col items-center">
                        <!-- Image -->
                        <div class="w-32 h-32 mb-4">
                            @if($package->image)
                            <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}"
                            class="w-full h-full object-cover rounded-md">
                            @else
                                <div
                                    class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-600 rounded-md">
                                    No Image
                                </div>
                            @endif
                        </div>

                        <!-- Package Name -->
                        <h3 class="text-xl font-semibold text-center mb-2">{{ $package->name }}</h3>

                        <!-- Description -->
                        <p class="text-gray-600 text-sm text-center mb-4">{{ Str::limit($package->description, 50) }}</p>

                        <!-- Price -->
                        <p class="text-xl font-bold text-center text-blue-500 mb-4">${{ number_format($package->price, 2) }}</p>

                        <!-- Actions -->
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('packages.edit', $package) }}"
                                class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-600">Edit</a>
                            <!-- Trigger Modal Button -->
                            <button data-id="{{ $package->id }}" data-name="{{ $package->name }}" class="delete-btn bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal for Confirmation -->
<div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Are you sure you want to delete this package?</h2>
        <div class="flex justify-between">
            <button id="cancelBtn" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400">Cancel</button>
            <form id="deleteForm" action="" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Yes, Delete</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Get the modal and the delete button
    const modal = document.getElementById('deleteModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const deleteBtns = document.querySelectorAll('.delete-btn');
    const deleteForm = document.getElementById('deleteForm');

    // Show modal when delete button is clicked
    deleteBtns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            const packageId = e.target.getAttribute('data-id');
            const packageName = e.target.getAttribute('data-name');

            // Set the form action to the delete route for this package
            deleteForm.action = `/admin/packages/${packageId}`;

            // Show the modal
            modal.classList.remove('hidden');

            // Set the modal content dynamically
            modal.querySelector('h2').textContent = `Are you sure you want to delete the package: ${packageName}?`;
        });
    });

    // Close modal when cancel button is clicked
    cancelBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>

@endsection
