<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User Management</title>
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
        <div class="logo">Admin Panel</div>
        <ul>
             <li><a href="/admin/bookings">Manage Bookings</a></li>
             <li><a href="/admin/users">User Management</a></li>

            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="content">
        <main>
            <h2>User Management</h2>

            <!-- Create User Form -->
            <div class="form-container">
                <form action="/admin/users" method="POST">
                    @csrf
                     <!-- Name Field -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Role</label>
                        <select name="role" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                         @error('role')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit">Add User</button>
                    </div>

                </form>
            </div>

            <!-- User Table -->
            <div class="table-container">
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->role) }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
