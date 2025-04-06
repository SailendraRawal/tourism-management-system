@foreach ($data as $da)
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('storage/' . $da->image) }}" alt="Package Image" class="w-full h-48 object-cover">
        <div class="p-6">
            <!-- Name of the Item -->
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">{{ $da->name }}</h3>

            <!-- Description (limited with ellipsis) -->
            <p class="text-sm text-gray-600 mb-3 line-clamp-3">{{ $da->description }}</p>

            <!-- Price -->
            <p class="text-lg font-medium text-blue-600">Price: <span class="text-gray-800">{{ $da->price }}</span> per person</p>


            @auth
                <button onclick="openBookingModal({{ $da->id }})" class="mt-4 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                    Book Now
                </button>
            @else
                <p class="mt-4 text-sm text-gray-600">Please <a href="/login" class="text-blue-600">login</a> to book this package.</p>
            @endauth
        </div>
    </div>
@endforeach

<!-- Modal for Booking Form -->
<div id="bookingModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4" id="packageName"></h3>

        <form  method="POST">
            @csrf
            <input type="hidden" id="packageId" name="package_id">

            <!-- Booking Details -->
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Booking Date</label>
                <input type="date" id="date" name="booking_date" required class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label for="person_count" class="block text-sm font-medium text-gray-700">Number of People</label>
                <input type="number" id="person_count" name="person_count" required min="1" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition-colors duration-300">Book Now</button>
        </form>

        <button onclick="closeBookingModal()" class="mt-4 w-full bg-gray-500 text-white py-2 rounded-lg hover:bg-gray-600 transition-colors duration-300">Close</button>
    </div>
</div>

<script>
    // Open the modal and populate it with package details
    function openBookingModal(packageId) {
        const packageName = document.getElementById('packageName');
        const package = @json($data);

        const selectedPackage = package.find(pkg => pkg.id === packageId);

        if (selectedPackage) {
            document.getElementById('packageId').value = selectedPackage.id;
            packageName.textContent = selectedPackage.name;
            document.getElementById('bookingModal').classList.remove('hidden');
        }
    }

    // Close the modal
    function closeBookingModal() {
        document.getElementById('bookingModal').classList.add('hidden');
    }
</script>
