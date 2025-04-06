@extends('website.layout.app')
@section('content')
    <main class="space-y-20">

        <!-- Hero Section -->
        <section class="bg-cover bg-center h-[80vh] flex items-center justify-center text-center text-white"
            style="background-image: url('/loginbackground.jpeg')">
            <div class="bg-black bg-opacity-50 p-10 rounded">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Your Gateway to Unforgettable Adventures</h1>
                <p class="text-lg mb-6">Explore destinations, book trips, and make memories.</p>
                <div class="space-x-4">
                    <a href="/destinations" class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded">Explore Destinations</a>
                    <a href="/booking"
                        class="bg-white text-blue-600 hover:text-white hover:bg-blue-600 px-6 py-2 rounded">Book Now</a>
                </div>
            </div>
        </section>

        <!-- Featured Destinations -->
        <section class="max-w-7xl mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold mb-6 text-center text-blue-700">Top Destinations in Nepal</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

             @include('website.component.package')

            </div>
        </section>


        <!-- About Us Section -->
        <!-- About Us Section -->
        <section class="bg-white py-20">
            <div class="max-w-7xl mx-auto px-4">

                <!-- Section Heading & Quote -->
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-extrabold text-blue-700">About TourismHub</h2>
                    <p class="mt-3 text-lg text-gray-600 italic">
                        "Travel isn't always about the destination, it's about the experience."
                    </p>
                </div>

                <!-- Content: Video + Description -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                    <!-- Left Side: YouTube Iframe -->
                    <div class="w-full aspect-video">
                        <iframe
                          class="w-full h-full rounded-lg shadow-lg"
                          src="https://www.youtube.com/embed/8P1N1dmfx4I?si=dSZEq6RwtZnKm3sc"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          referrerpolicy="strict-origin-when-cross-origin"
                          allowfullscreen>
                        </iframe>
                      </div>

                    <!-- Right Side: Description -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Your Journey Begins Here</h3>
                        <p class="text-gray-700 mb-4 leading-relaxed">
                            At TourismHub, we specialize in curating travel experiences that go beyond expectations. Whether
                            it's a luxury retreat or a spontaneous road trip, we ensure every moment counts with reliable
                            service, exclusive deals, and handpicked destinations.
                        </p>
                        <p class="text-gray-600">
                            Our mission is to make travel easy, accessible, and deeply personal. With a growing network of
                            trusted partners and a user-first platform, your perfect getaway is just a few clicks away.
                            Let’s explore the world—together.
                        </p>
                    </div>

                </div>
            </div>
        </section>



        <!-- Why Choose Us -->
        <section class="bg-gray-100 py-12">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-10">Why Choose TourismHub?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <div class="text-blue-600 text-4xl mb-3">🌍</div>
                        <h4 class="font-semibold">Global Destinations</h4>
                        <p class="text-sm text-gray-600">Travel anywhere with ease and confidence.</p>
                    </div>
                    <div>
                        <div class="text-blue-600 text-4xl mb-3">💬</div>
                        <h4 class="font-semibold">24/7 Support</h4>
                        <p class="text-sm text-gray-600">We’re here for you anytime, anywhere.</p>
                    </div>
                    <div>
                        <div class="text-blue-600 text-4xl mb-3">💰</div>
                        <h4 class="font-semibold">Best Price Guarantee</h4>
                        <p class="text-sm text-gray-600">Affordable adventures for everyone.</p>
                    </div>
                    <div>
                        <div class="text-blue-600 text-4xl mb-3">🔐</div>
                        <h4 class="font-semibold">Secure Booking</h4>
                        <p class="text-sm text-gray-600">Your info is protected every step of the way.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="bg-blue-600 text-white py-12">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Stay in the Loop</h2>
                <p class="mb-6">Get exclusive travel deals, tips, and stories delivered to your inbox.</p>
                <form action="/subscribe" method="POST" class="flex flex-col sm:flex-row justify-center gap-4">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email"
                        class="px-4 py-2 rounded text-black w-full sm:w-2/3 focus:outline-none">
                    <button type="submit" class="bg-white text-blue-600 px-6 py-2 rounded hover:bg-gray-100 transition">
                        Subscribe
                    </button>
                </form>
            </div>
        </section>

    </main>
@endsection
