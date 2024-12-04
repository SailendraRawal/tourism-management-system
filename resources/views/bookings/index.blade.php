<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Booking Management</title>
    <link rel="stylesheet" href="/adminstyles.css">
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
            class="search-input"
          />
          <button type="submit" class="search-btn">Search</button>
        </form>
    </nav>
  </header>

  <main>
    <div class="search-container">
        <h2>Manage Bookings</h2>
        <form method="GET" action="/admin/bookings" class="search-booking-form">
            <input type="text" name="name" placeholder="Search by Name" class="search-input">
            <input type="email" name="email" placeholder="Search by Email" class="search-input">
            <select name="status" class="status-select">
                <option value="">All Statuses</option>
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="rejected">Rejected</option>
            </select>
            <button type="submit" class="search-btn">Search</button>
        </form>
    </div>

    <div class="table-container">
        <table class="booking-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Package</th>
                    <th>Travelers</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr class="table-row">
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->package }}</td>
                    <td>{{ $booking->travelers }}</td>
                    <td>{{ $booking->travel_date }}</td>
                    <td>
                        <span class="status-label {{ $booking->status }}">{{ ucfirst($booking->status) }}</span>
                    </td>
                    <td>
                        @if ($booking->status === 'pending')
                        <form action="/admin/bookings/{{ $booking->id }}/approve" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="approve-btn">Approve</button>
                        </form>
                        <form action="/admin/bookings/{{ $booking->id }}/reject" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="reject-btn">Reject</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="pagination">
        {{ $bookings->links() }}
    </div>
  </main>
</body>
</html>
