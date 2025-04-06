@extends('website.layout.app')
@section('content')

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
                    <iframe class="w-full h-full rounded-xl shadow-lg"
                        src="https://www.youtube.com/embed/8P1N1dmfx4I?si=dSZEq6RwtZnKm3sc" title="TourismHub Promo"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
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
                        trusted partners and a user-first platform, your perfect getaway is just a few clicks away. Let’s
                        explore the world—together.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Top Destinations Section -->
    <section class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-6 text-center text-blue-700">Top Destinations in Nepal</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

            @include('website.component.package')


        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-blue-600 text-white py-12 text-center">
        <h3 class="text-3xl font-bold mb-4">Ready to Explore Nepal?</h3>
        <p class="text-lg mb-6">Start planning your next adventure with us today.</p>
        <a href="/contact"
            class="bg-yellow-500 text-gray-800 px-6 py-3 rounded-full text-xl font-semibold transition duration-300 hover:bg-yellow-400">
            Contact Us
        </a>
    </section>
@endsection
