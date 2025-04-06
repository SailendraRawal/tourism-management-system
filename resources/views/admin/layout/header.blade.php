<header class="flex items-center justify-between mb-6">
    <div class="flex items-center space-x-3">
        <img src="/images/logo.png" alt="Logo" class="w-10 h-10">
        <h1 class="text-3xl font-semibold text-blue-700">Dashboard</h1>
    </div>
    <div class="relative">
        <button class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
            <img src="https://via.placeholder.com/40" alt="Admin Avatar" class="rounded-full">
            <span>Admin</span>
        </button>
        <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg hidden">
            <a href="/admin/profile" class="block px-4 py-2 text-gray-800 hover:bg-blue-100">Profile</a>
            <a href="/admin/settings" class="block px-4 py-2 text-gray-800 hover:bg-blue-100">Settings</a>
            <a href="/admin/logout" class="block px-4 py-2 text-gray-800 hover:bg-blue-100">Logout</a>
        </div>
    </div>
</header>
