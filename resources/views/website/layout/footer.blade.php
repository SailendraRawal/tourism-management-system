<footer class="bg-gray-900 text-gray-300 pt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

      <!-- Logo & Tagline -->
      <div>
        <h2 class="text-2xl font-bold text-white mb-2">TourismHub</h2>
        <p class="text-sm leading-relaxed">
          Discover, explore, and book your perfect getaway with ease.
        </p>
      </div>

      <!-- Quick Links -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-3">Quick Links</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="/" class="hover:text-white transition">Home</a></li>
          <li><a href="/services" class="hover:text-white transition">Services</a></li>
          <li><a href="/destinations" class="hover:text-white transition">Destinations</a></li>
          <li><a href="/aboutus" class="hover:text-white transition">About Us</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-3">Support</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="/contact" class="hover:text-white transition">Contact Us</a></li>
          <li><a href="/booking" class="hover:text-white transition">Book Now</a></li>
          <li><a href="/faq" class="hover:text-white transition">FAQs</a></li>
          <li><a href="/login" class="hover:text-white transition">Login</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-3">Stay Connected</h3>
        <form action="/subscribe" method="POST" class="flex flex-col space-y-2">
          @csrf
          <input
            type="email"
            name="email"
            placeholder="Your email address"
            class="px-3 py-2 rounded bg-gray-800 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
            required
          />
          <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white py-2 rounded text-sm transition"
          >
            Subscribe
          </button>
        </form>
        <p class="text-xs text-gray-400 mt-2">Get updates and offers directly in your inbox.</p>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-700 mt-10 py-4 text-center text-sm text-gray-400">
      © {{ date('Y') }} TourismHub. All rights reserved.
    </div>
  </footer>
