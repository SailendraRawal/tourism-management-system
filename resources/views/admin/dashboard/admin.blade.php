@extends('admin.layout.app')
@section('content')
    <!-- Admin Dashboard Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
            <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center">
                <svg class="w-8 h-8 text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 21c4.418 0 8-3.582 8-8 0-4.418-3.582-8-8-8 0 4.418-3.582 8-8 8 0 4.418 3.582 8 8 8z">
                    </path>
                    <path
                        d="M12 3v3M12 18v3M3 12h3M18 12h3M7.221 7.221l2.121 2.121M16.243 16.243l2.121 2.121M7.221 16.243l2.121-2.121M16.243 7.221l2.121-2.121">
                    </path>
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-xl font-semibold text-gray-800">Total Users</h3>
                <p class="text-3xl font-bold text-blue-700">1,250</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
            <div class="w-16 h-16 bg-green-200 rounded-full flex items-center justify-center">
                <svg class="w-8 h-8 text-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 21c4.418 0 8-3.582 8-8 0-4.418-3.582-8-8-8 0 4.418-3.582 8-8 8 0 4.418 3.582 8 8 8z">
                    </path>
                    <path
                        d="M12 3v3M12 18v3M3 12h3M18 12h3M7.221 7.221l2.121 2.121M16.243 16.243l2.121 2.121M7.221 16.243l2.121-2.121M16.243 7.221l2.121-2.121">
                    </path>
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-xl font-semibold text-gray-800">Total Posts</h3>
                <p class="text-3xl font-bold text-green-700">823</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
            <div class="w-16 h-16 bg-yellow-200 rounded-full flex items-center justify-center">
                <svg class="w-8 h-8 text-yellow-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 21c4.418 0 8-3.582 8-8 0-4.418-3.582-8-8-8 0 4.418-3.582 8-8 8 0 4.418 3.582 8 8 8z">
                    </path>
                    <path
                        d="M12 3v3M12 18v3M3 12h3M18 12h3M7.221 7.221l2.121 2.121M16.243 16.243l2.121 2.121M7.221 16.243l2.121-2.121M16.243 7.221l2.121-2.121">
                    </path>
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-xl font-semibold text-gray-800">Active Users</h3>
                <p class="text-3xl font-bold text-yellow-700">940</p>
            </div>
        </div>
    </div>

    <!-- Recent Booking -->
    <div class="bg-white p-6 mt-8 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Recent Bookings</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="col-span-2 lg:col-span-1 bg-gray-100 p-4 rounded-lg shadow-md">
                <h4 class="text-lg font-semibold text-gray-800">Booking #12345</h4>
                <p class="text-gray-600">Date: 2025-04-06</p>
                <p class="text-gray-600">User: John Doe</p>
                <p class="text-gray-600">Status: Confirmed</p>
            </div>
            <div class="col-span-2 lg:col-span-1 bg-gray-100 p-4 rounded-lg shadow-md">
                <h4 class="text-lg font-semibold text-gray-800">Booking #12346</h4>
                <p class="text-gray-600">Date: 2025-04-07</p>
                <p class="text-gray-600">User: Jane Smith</p>
                <p class="text-gray-600">Status: Pending</p>
            </div>
            <div class="col-span-2 lg:col-span-1 bg-gray-100 p-4 rounded-lg shadow-md">
                <h4 class="text-lg font-semibold text-gray-800">Booking #12347</h4>
                <p class="text-gray-600">Date: 2025-04-08</p>
                <p class="text-gray-600">User: Samuel Clark</p>
                <p class="text-gray-600">Status: Confirmed</p>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white p-6 mt-8 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h3>
        <ul class="space-y-4">
            <li class="flex items-center">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="ml-3">User JohnDoe updated their profile.</span>
            </li>
            <li class="flex items-center">
                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16M5 12l7-7 7 7"></path>
                </svg>
                <span class="ml-3">New post "Exploring Nepal" added.</span>
            </li>
            <li class="flex items-center">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2v12">
                    </path>
                </svg>
                <span class="ml-3">User JaneDoe deleted a post.</span>
            </li>
        </ul>
    </div>
@endsection
