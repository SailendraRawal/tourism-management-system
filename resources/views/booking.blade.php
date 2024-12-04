<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book a Package - Tourism Management System</title>
    <link rel="stylesheet" href="homepagestyles.css" />
    <link rel="stylesheet" href="booking.css" />
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
      <h1>Book Your Package</h1>
      @if (session('success'))
        <div class="alert alert-success" style="background: lightgreen; padding:5px;">
            {{ session('success') }}
        </div>
    @endif
      <form action="/submit-booking" method="POST">
        @csrf



        <!-- Customer Name -->
        <div class="form-group">
            <label for="name">Full Name</label>
            <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter your full name"
                value="{{ old('name') }}"
                required
            />
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                value="{{ old('email') }}"
                required
            />
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Phone Number -->
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="Enter your phone number"
                value="{{ old('phone') }}"
                required
            />
            @error('phone')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Package Selection -->
        <div class="form-group">
            <label for="package">Select Package</label>
            <select id="package" name="package" required>
                <option value="">Choose a package</option>
                <option value="everest-base-camp" {{ old('package') == 'everest-base-camp' ? 'selected' : '' }}>Everest Base Camp Trek</option>
                <option value="pokhara-lake-tour" {{ old('package') == 'pokhara-lake-tour' ? 'selected' : '' }}>Pokhara Lake Tour</option>
                <option value="lumbini-pilgrimage" {{ old('package') == 'lumbini-pilgrimage' ? 'selected' : '' }}>Lumbini Pilgrimage</option>
                <option value="annapurna-circuit" {{ old('package') == 'annapurna-circuit' ? 'selected' : '' }}>Annapurna Circuit Trek</option>
                <option value="kathmandu-heritage" {{ old('package') == 'kathmandu-heritage' ? 'selected' : '' }}>Kathmandu Heritage Tour</option>
            </select>
            @error('package')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Number of Travelers -->
        <div class="form-group">
            <label for="travelers">Number of Travelers</label>
            <input
                type="number"
                id="travelers"
                name="travelers"
                min="1"
                placeholder="Enter the number of travelers"
                value="{{ old('travelers') }}"
                required
            />
            @error('travelers')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Travel Date -->
        <div class="form-group">
            <label for="date">Preferred Travel Date</label>
            <input
                type="date"
                id="date"
                name="travel_date"
                value="{{ old('travel_date') }}"
                required
            />
            @error('travel_date')
                <span class="error" >{{ $message }}</span>
            @enderror
        </div>

        <!-- Additional Requests -->
        <div class="form-group">
            <label for="requests">Additional Requests</label>
            <textarea
                id="requests"
                name="requests"
                rows="4"
                placeholder="Let us know if you have any special requests"
            >{{ old('requests') }}</textarea>
            @error('requests')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit">Book Now</button>
    </form>
      <p class="note">
        We will contact you within 24 hours to confirm your booking details.
      </p>
    </div>
  </body>
</html>
