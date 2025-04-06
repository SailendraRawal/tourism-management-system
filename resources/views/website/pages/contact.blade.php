@extends('website.layout.app')
@section('content')
    <!-- Breadcrumb Section -->
    <section class="bg-gray-100 py-4">
        <div class="max-w-7xl mx-auto px-4">
            <nav class="flex text-sm font-medium text-gray-600">
                <a href="/" class="hover:text-blue-600">Home</a>
                <span class="mx-2">/</span>
                <a href="/contact" class="hover:text-blue-600">Contact Us</a>
            </nav>
        </div>
    </section>

    <!-- Contact Us Page -->
    <section class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-6 text-center text-blue-700">Contact Us</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- Contact Form -->
            <div>
                <form action="/submit-contact" method="POST" class="space-y-6">
                    <input type="text" name="name" placeholder="Your Name" required
                        class="w-full px-4 py-3 border rounded-lg text-gray-700">
                    <input type="email" name="email" placeholder="Your Email" required
                        class="w-full px-4 py-3 border rounded-lg text-gray-700">
                    <textarea name="message" rows="4" placeholder="Your Message" required
                        class="w-full px-4 py-3 border rounded-lg text-gray-700"></textarea>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">Send
                        Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Office</h3>
                <p class="text-gray-700 mb-2">123 Tourism Hub Street, Kathmandu, Nepal</p>
                <p class="text-gray-700 mb-4">Email: contact@tourismhub.com</p>
                <p class="text-gray-700">Phone: +977 1 555 5555</p>
            </div>
        </div>
    </section>
@endsection
