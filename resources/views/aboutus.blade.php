<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Tourism Management System</title>
    <link rel="stylesheet" href="aboutus.css" />
    <link rel="stylesheet" href="homepagestyles.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">TourismHub</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
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
    <section class="about-us">
      <div class="container">
        <h1>About Us</h1>
        <p>
          Welcome to <strong>TourismHub</strong>, your trusted partner in
          exploring the world! Our Tourism Management System is designed to make
          travel planning simple, efficient, and enjoyable. With years of
          experience in the tourism industry, we aim to connect travelers with
          the best destinations, services, and experiences.
        </p>
        <p>
          Our mission is to promote hassle-free travel by offering personalized
          itineraries, expert guidance, and reliable booking services. Whether
          you're planning a family vacation, a romantic getaway, or an adventure
          trip, our platform ensures that every journey is memorable and
          stress-free.
        </p>
        <div class="values">
          <div class="value-card">
            <h2>Our Vision</h2>
            <p>
              To redefine the travel experience with innovative technology and
              unparalleled service.
            </p>
          </div>
          <div class="value-card">
            <h2>Our Mission</h2>
            <p>
              To make travel accessible, affordable, and enjoyable for everyone.
            </p>
          </div>
          <div class="value-card">
            <h2>Our Values</h2>
            <p>
              Integrity, innovation, customer-centricity, and sustainability.
            </p>
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
    </section>
  </body>
</html>
