<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism Management System</title>
    <link rel="stylesheet" href="./homepagestyles.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">TourismHub</div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
          <li><a href="/destinations">Destinations</a></li>
          <li><a href="/aboutus">About Us</a></li>
          <li><a href="/contactus">Contact</a></li>
          <li><a href="/booking">Book Now</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/registration">Register</a></li>
        </ul>
        <form action="/search-booking" method="GET" class="search-form">
            @csrf
            <input
              type="text"
              name="search"
              placeholder="Search by email"
              required
            />
            <button type="submit">Search</button>
          </form>
      </nav>
    </header>
    <div class="container">
        <h1>Search Results</h1>

        @if ($bookings->isEmpty())
          <p>No bookings found for the given email address.</p>
        @else
          <div class="card-container">
            @foreach ($bookings as $booking)
              <div class="card">
                <h3>{{ $booking->package }}</h3>
                <p><strong>Full Name:</strong> {{ $booking->name }}</p>
                <p><strong>Email:</strong> {{ $booking->email }}</p>
                <p><strong>Phone:</strong> {{ $booking->phone }}</p>
                <p><strong>Travelers:</strong> {{ $booking->travelers }}</p>
                <p><strong>Travel Date:</strong> {{ $booking->travel_date }}</p>
                <p><strong>Status:</strong>
                  <span class="{{ $booking->status == 'confirmed' ? 'status-confirmed' : 'status-pending' }}">
                    {{ ucfirst($booking->status) }}
                  </span>
                </p>
              </div>
            @endforeach
          </div>
        @endif
      </div>
    <footer>
      <p>© 2024 TourismHub. All rights reserved.</p>
      <ul class="social-links">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
      </ul>
    </footer>
  </body>
</html>
