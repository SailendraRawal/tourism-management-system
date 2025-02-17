<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destinations in Nepal - Tourism Management System</title>
    <link rel="stylesheet" href="destinations.css" />
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
      Popular Destinations in Nepal
    </h1>
    <div class="container">
      <div class="card">
        <img src="everest.png" alt="Mount Everest" />
        <div class="card-content">
          <h3 class="card-title">Mount Everest</h3>
          <p class="card-description">
            The tallest peak in the world, an ultimate destination for trekkers
            and adventurers.
          </p>
        </div>
      </div>
      <div class="card">
        <img src="pokhara.png" alt="Pokhara" />
        <div class="card-content">
          <h3 class="card-title">Pokhara</h3>
          <p class="card-description">
            Known for its serene lakes, adventure sports, and breathtaking views
            of the Annapurna range.
          </p>
        </div>
      </div>
      <div class="card">
        <img src="lumbini.png" alt="Lumbini" />
        <div class="card-content">
          <h3 class="card-title">Lumbini</h3>
          <p class="card-description">
            The birthplace of Lord Buddha, a UNESCO World Heritage Site filled
            with tranquility.
          </p>
        </div>
      </div>
      <div class="card">
        <img src="annapurna.png" alt="Annapurna Circuit" />
        <div class="card-content">
          <h3 class="card-title">Annapurna Circuit</h3>
          <p class="card-description">
            A trekker’s paradise offering stunning landscapes and cultural
            diversity.
          </p>
        </div>
      </div>
      <div class="card">
        <img src="ktm.png" alt="Kathmandu Valley" />
        <div class="card-content">
          <h3 class="card-title">Kathmandu Valley</h3>
          <p class="card-description">
            Explore ancient temples, vibrant markets, and the cultural heart of
            Nepal.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
