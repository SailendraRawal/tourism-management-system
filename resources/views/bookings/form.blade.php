<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Booking Management</title>
    <link rel="stylesheet" href="/adminstyles.css">
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
        header .navbar {
            display: flex;
            justify-content: space-between;
            background-color: #ecf0f1;
            padding: 10px 20px;
            align-items: center;
        }
        header .navbar .search-form {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">User Panel</div>
        <ul>
             <li><a href="/booking">Manage Bookings</a></li>
             <li><a href="/my-booking">My Bookings</a></li>
             <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="content">
        <main>
            {{-- <div class="search-container">
                <h2>Manage Bookings</h2>
                <form method="GET" action="/my-booking" class="search-booking-form">
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
            </div> --}}

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

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                {{ $bookings->links() }}
            </div>
        </main>
    </div>
</body>
</html>
