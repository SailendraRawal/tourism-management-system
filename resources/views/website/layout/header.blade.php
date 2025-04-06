<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between flex-wrap">

      <!-- Logo -->
      <div class="text-2xl font-extrabold text-blue-600 tracking-wide">
        <a href="/">TourismHub</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="menu-toggle" class="text-gray-700 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

      <!-- Navigation Links -->
      <ul id="menu"
          class="hidden md:flex md:items-center md:space-x-6 w-full md:w-auto mt-4 md:mt-0 flex-col md:flex-row space-y-4 md:space-y-0 text-gray-700 font-medium">
        <li><a href="/" class="hover:text-blue-600 transition duration-300">Home</a></li>
        <li><a href="/destinations" class="hover:text-blue-600 transition duration-300">Destinations</a></li>
        <li><a href="/about" class="hover:text-blue-600 transition duration-300">About Us</a></li>
        <li><a href="/contact" class="hover:text-blue-600 transition duration-300">Contact</a></li>
        @auth
        <li><a href="/login" class="hover:text-blue-600">My Bookings</a></li>
        <li><a href="/logout" class="hover:text-blue-600">Logout</a></li>
        @else
        <li><a href="/login" class="hover:text-blue-600">Login</a></li>
        <li><a href="/registration" class="hover:text-blue-600">Register</a></li>
        @endauth

      </ul>

      <!-- Search Form -->
      <form action="/search-booking" method="GET"
            class="hidden md:flex items-center space-x-2 mt-4 md:mt-0">
        @csrf
        <input
          type="text"
          name="search"
          placeholder="Search by email"
          required
          class="border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
        <button
          type="submit"
          class="bg-blue-600 text-white px-4 py-1 rounded-md hover:bg-blue-700 transition duration-200"
        >
          Search
        </button>
      </form>
    </nav>

    <!-- Mobile Search Form -->
    <div class="block md:hidden px-4 pb-4">
      <form action="/search-booking" method="GET" class="flex space-x-2">
        @csrf
        <input
          type="text"
          name="search"
          placeholder="Search by email"
          required
          class="w-full border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
        <button
          type="submit"
          class="bg-blue-600 text-white px-4 py-1 rounded-md hover:bg-blue-700 transition duration-200"
        >
          Search
        </button>
      </form>
    </div>
  </header>

  <script>
    // Mobile toggle functionality
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
