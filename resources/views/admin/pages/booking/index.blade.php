@extends('admin.layout.app')
@section('content')
    <main class="container mx-auto px-4 py-8">
        <!-- Search Container -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Manage Bookings</h2>
            <form method="GET" action="/admin/bookings" class="flex flex-wrap gap-4">
                <input type="text" name="name" placeholder="Search by Name"
                    class="search-input p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full md:w-1/4">
                <input type="email" name="email" placeholder="Search by Email"
                    class="search-input p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full md:w-1/4">
                <select name="status"
                    class="status-select p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full md:w-1/4">
                    <option value="">All Statuses</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
                <button type="submit"
                    class="search-btn bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200 w-full md:w-auto">Search</button>
            </form>
        </div>

        <!-- Table Container -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-100">
                    <tr class="text-left text-sm font-medium text-gray-600">
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">Package</th>
                        <th class="py-3 px-4">Travelers</th>
                        <th class="py-3 px-4">Date</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr class="table-row hover:bg-gray-50 transition duration-200">
                            <td class="py-3 px-4">{{ $booking->name }}</td>
                            <td class="py-3 px-4">{{ $booking->email }}</td>
                            <td class="py-3 px-4">{{ $booking->package }}</td>
                            <td class="py-3 px-4">{{ $booking->travelers }}</td>
                            <td class="py-3 px-4">{{ $booking->travel_date }}</td>
                            <td class="py-3 px-4">
                                <span
                                    class="status-label {{ $booking->status }} py-1 px-3 rounded-lg text-sm font-semibold">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                @if ($booking->status === 'pending')
                                    <div class="flex gap-2">
                                        <form action="/admin/bookings/{{ $booking->id }}/approve" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="approve-btn bg-green-500 text-white py-1 px-3 rounded-lg hover:bg-green-600 transition duration-200">Approve</button>
                                        </form>
                                        <form action="/admin/bookings/{{ $booking->id }}/reject" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="reject-btn bg-red-500 text-white py-1 px-3 rounded-lg hover:bg-red-600 transition duration-200">Reject</button>
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            <div class="flex justify-center">
                <div class="flex items-center space-x-2">
                    <!-- Previous Page Button -->
                    @if($bookings->onFirstPage())
                        <span class="px-4 py-2 text-gray-500 cursor-not-allowed">Previous</span>
                    @else
                        <a href="{{ $bookings->previousPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Previous</a>
                    @endif

                    <!-- Page Links -->
                    @foreach ($bookings->getUrlRange(1, $bookings->lastPage()) as $page => $url)
                        <a href="{{ $url }}" class="px-4 py-2 text-sm text-gray-700 rounded-md hover:bg-blue-500 hover:text-white {{ $page == $bookings->currentPage() ? 'bg-blue-500 text-white' : '' }}">
                            {{ $page }}
                        </a>
                    @endforeach

                    <!-- Next Page Button -->
                    @if($bookings->hasMorePages())
                        <a href="{{ $bookings->nextPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Next</a>
                    @else
                        <span class="px-4 py-2 text-gray-500 cursor-not-allowed">Next</span>
                    @endif
                </div>
            </div>
        </div>

    </main>

    <!-- Tailwind CSS Custom Classes -->
    <style>
        .search-input {
            @apply border-gray-300 focus:ring-2 focus:ring-blue-500;
        }

        .status-label.pending {
            @apply bg-yellow-500 text-white;
        }

        .status-label.approved {
            @apply bg-green-500 text-white;
        }

        .status-label.rejected {
            @apply bg-red-500 text-white;
        }

        .approve-btn,
        .reject-btn {
            @apply px-3 py-2 rounded-lg text-white font-semibold;
        }
    </style>
@endsection
