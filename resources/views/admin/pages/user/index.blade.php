@extends('admin.layout.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Card Container -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <!-- Left Side: Heading -->
            <h1 class="text-3xl font-semibold text-gray-800">Users List</h1>

            <!-- Right Side: Add New User Button -->
            <a href="{{ route('users.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600">Add New User</a>
        </div>

        <!-- User Table -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-200 text-left text-sm font-semibold text-gray-600">ID</th>
                        <th class="px-4 py-2 bg-gray-200 text-left text-sm font-semibold text-gray-600">Name</th>
                        <th class="px-4 py-2 bg-gray-200 text-left text-sm font-semibold text-gray-600">Email</th>
                        <th class="px-4 py-2 bg-gray-200 text-left text-sm font-semibold text-gray-600">Role</th>
                        <th class="px-4 py-2 bg-gray-200 text-left text-sm font-semibold text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-3 text-sm text-gray-800">{{ $user->id }}</td>
                            <td class="px-4 py-3 text-sm text-gray-800">{{ $user->name }}</td>
                            <td class="px-4 py-3 text-sm text-gray-800">{{ $user->email }}</td>
                            <td class="px-4 py-3 text-sm text-gray-800">{{ ucfirst($user->role) }}</td>
                            <td class="px-4 py-3 text-sm">
                                <a href="{{ route('users.edit', $user) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600 ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
