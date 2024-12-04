<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactusstyles.css" />
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
    <main class="contact-container">
      <section class="contact-info">
        <h2>Get in Touch</h2>
        <p>
          Email:
          <a href="mailto:sailendrar021373@nec.edu.np,nischalb021350@nec.edu.np,aayushb302@nec.edu.np">sailendrar021373@nec.edu.np,nischalb021350@nec.edu.np,aayushb302@nec.edu.np
        </p>
        <p>Phone: <a href="tel:9810718074">9810718074,9810108166,9843889378</a></p>
        <p>Address: changunarayan,Bhaktapur</p>
      </section>
      <section class="contact-form">
        <h2>Send Us a Message</h2>
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Your Name"
              required
            />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Your Email"
              required
            />
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea
              id="message"
              name="message"
              placeholder="Your Message"
              rows="5"
              required
            ></textarea>
          </div>
          <button type="submit">Submit</button>
        </form>
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
