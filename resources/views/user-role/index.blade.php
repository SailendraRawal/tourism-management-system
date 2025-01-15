<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User Management</title>
    <link rel="stylesheet" href="/adminstyles.css">
    <link rel="stylesheet" href="homepagestyles.css" />
    <link rel="stylesheet" href="booking.css" />
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
        }
        .sidebar .logo {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            background-color: #1a252f;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            border-bottom: 1px solid #34495e;
        }
        .sidebar ul li a {
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 15px 20px;
            transition: background 0.3s;
        }
        .sidebar ul li a:hover {
            background-color: #34495e;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
        }
        .form-container {
            margin-bottom: 20px;
        }
        .form-container input, .form-container select, .form-container button {
            margin: 5px 0;
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }
        .table-container {
            margin-top: 20px;
        }
        .user-table {
            width: 100%;
            border-collapse: collapse;
        }
        .user-table th, .user-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .user-table th {
            background-color: #34495e;
            color: white;
        }
        .action-btn {
            margin: 0 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #3498db;
            color: white;
        }
        .delete-btn {
            background-color: #e74c3c;
            color: white;
        }
        .text-danger{
            background-color: #e74c3c;
            color: white;
            padding: 5px;
         }
        .form-group{
            margin:10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">User Panel</div>
        <ul>
             <li><a href="/booking">Make Booking</a></li>
             <li><a href="/my-booking">My Bookings</a></li>

            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="content">
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
    </div>
</body>
</html>
