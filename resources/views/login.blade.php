<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Screen</title>
    <link rel="stylesheet" href="loginstyles.css" />
    <link rel="stylesheet" href="homepagestyles.css" />
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const loginForm = document.querySelector(".login-form");

        loginForm.addEventListener("submit", (event) => {
          event.preventDefault(); // Prevent the default form submission

          // Get email and password input values
          const email = document.getElementById("email").value;
          const password = document.getElementById("password").value;

          // Check credentials
          if (email === "admin@gmail.com" && password === "golu") {
            // Redirect to homepage.html
            window.location.href = "/admin/bookings";  // This will route to the Laravel booking index page
          } else {
            // Show an alert for invalid credentials
            alert("Invalid email or password. Please try again.");
          }
        });
      });
    </script>
  </head>
  <body>
    <div class="login-container">
      <form class="login-form">
        <h2>Login</h2>
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
            Don't have an account? <a href="./registration.html">Sign up</a>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
