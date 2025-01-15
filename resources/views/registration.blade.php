<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Screen</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="loginstyles.css" />
    <link rel="stylesheet" href="homepagestyles.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="login-container">
                <form class="registration-form" id="registrationForm" action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Register</h2>

            @if ($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color: red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    value="{{ old('name') }}"
                    required
                />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                />
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Confirm your password"
                    required
                />
            </div>

            <button type="submit" class="login-button">Register</button>
            <div class="form-footer">
              <p>
                Already have an account? <a href="/login">Login</a>
              </p>
            </div>
                </form>
    </div>
</body>
</html>
