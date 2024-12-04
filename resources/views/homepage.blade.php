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
    <main>
      <section class="hero">
        <h1>Explore the World with Ease</h1>
        <p>
          Discover stunning destinations, seamless travel plans, and
          unforgettable experiences with our Tourism Management System.
        </p>
        <a href="#services" class="btn">Get Started</a>
      </section>
      <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="service-cards">
          <div class="card">
            <h3>Travel Planning</h3>
            <p>
              Customized travel plans tailored to your preferences and budget.
            </p>
          </div>
          <div class="card">
            <h3>Accommodation</h3>
            <p>Find the best hotels and stays for your trips.</p>
          </div>
          <div class="card">
            <h3>Tour Packages</h3>
            <p>
              Explore popular and hidden destinations with our curated packages.
            </p>
          </div>
        </div>
      </section>
    </main>
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
