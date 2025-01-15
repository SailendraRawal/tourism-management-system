<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Screen</title>
    <link rel="stylesheet" href="loginstyles.css" />
    <link rel="stylesheet" href="homepagestyles.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <div class="login-container">
        <form class="login-form" id="loginForm" action="{{ url('login') }}" method="POST">
            @csrf
        <h2>Login</h2>
        @if($errors->has('email'))
            <div class="error-message" style="background: rgb(207, 83, 83); color:white; padding: 5px;">{{ $errors->first('email') }}</div>
        @endif
        <div class="form-group">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
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
        <button type="submit" class="login-button">Login</button>
        <div class="form-footer">
          <p>
            Don't have an account? <a href="/registration">Sign up</a>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
