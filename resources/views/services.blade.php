<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services - Tourism Management System</title>
    <link rel="stylesheet" href="services.css" />
    <link rel="stylesheet" href="homepagestyles.css" />
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
    <h1 style="text-align: center; padding: 20px; color: #007bff">
      Our Services
    </h1>
    <div class="container">
      <div class="card">
        <img src="tour-guide.png" alt="Tour Guide" />
        <div class="card-content">
          <h3 class="card-title">Tour Guide Services</h3>
          <p class="card-description">
            Professional guides to make your journey memorable and informative.
          </p>
          <a href="#" class="card-button">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img src="hotel.png" alt="Hotel Booking" />
        <div class="card-content">
          <h3 class="card-title">Hotel Booking</h3>
          <p class="card-description">
            Affordable and luxurious hotel accommodations for every traveler.
          </p>
          <a href="#" class="card-button">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img src="scorpio.png" alt="Transport" />
        <div class="card-content">
          <h3 class="card-title">Transport Services</h3>
          <p class="card-description">
            Comfortable transport options for a seamless travel experience.
          </p>
          <a href="#" class="card-button">Learn More</a>
        </div>
      </div>
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
