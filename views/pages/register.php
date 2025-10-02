<?php include "../../config/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Registration</title>
    <link rel="stylesheet" href="../../public/Css/styles.css" />
  </head>
  <body class ="register">
    <div class="form-container">
      <div class="header">
        <img src="../../public/Images/logo.png" alt="DonorBridge Logo" />
        <h2>Create Your Account</h2>
      </div>

      <form action="../../controllers/authController.php" method="POST">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name" required />
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" required />
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required />
        </div>

        <div class="form-group">
          <label for="confirm_password">Confirm Password</label>
          <input
            type="password"
            name="confirm_password"
            id="confirm_password"
            required
          />
        </div>

        <button type="submit" name="register">Register</button>
      </form>

      <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
  </body>
</html>
