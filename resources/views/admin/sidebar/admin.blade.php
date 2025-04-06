<div class="w-64 bg-white shadow-lg p-6 fixed top-0 bottom-0 left-0 z-10 overflow-y-auto">
    <h2 class="text-xl font-semibold text-blue-700 mb-6">Admin Panel</h2>
    <ul class="space-y-4">
        <!-- Dashboard -->
        <li>
            <a href="/admin" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-100 transition-colors duration-300 ease-in-out">
                <svg class="w-5 h-5 text-gray-800 hover:text-blue-600" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <span class="text-gray-800 hover:text-blue-600">Dashboard</span>
            </a>
        </li>

        <!-- Users -->
        <li>
            <a href="/admin/packages" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-100 transition-colors duration-300 ease-in-out active:bg-blue-100">
                <svg class="w-5 h-5 text-gray-800 hover:text-blue-600" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3h14c1.104 0 2 .896 2 2v14c0 1.104-.896 2-2 2H5c-1.104 0-2-.896-2-2V5c0-1.104.896-2 2-2z"></path>
                </svg>
                <span class="text-gray-800 hover:text-blue-600">Packages</span>
            </a>
        </li>

        <!-- Posts -->
        <li>
            <a href="/admin/users" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-100 transition-colors duration-300 ease-in-out">
                <svg class="w-5 h-5 text-gray-800 hover:text-blue-600" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4H5c-1.104 0-2 .896-2 2v12c0 1.104.896 2 2 2h14c1.104 0 2-.896 2-2V6c0-1.104-.896-2-2-2zM12 8h4m-2-2v4"></path>
                </svg>
                <span class="text-gray-800 hover:text-blue-600">Users</span>
            </a>
        </li>

        <!-- Settings -->
        <li>
            <a href="/admin/bookings" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-100 transition-colors duration-300 ease-in-out">
                <svg class="w-5 h-5 text-gray-800 hover:text-blue-600" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4v4m4-4h4M4 12h4"></path>
                </svg>
                <span class="text-gray-800 hover:text-blue-600">Bookings</span>
            </a>
        </li>

        <!-- Logout -->
        <li>
            <a href="/logout" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-100 transition-colors duration-300 ease-in-out">
                <svg class="w-5 h-5 text-gray-800 hover:text-blue-600" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3"></path>
                </svg>
                <span class="text-gray-800 hover:text-blue-600">Logout</span>
            </a>
        </li>
    </ul>
</div>
