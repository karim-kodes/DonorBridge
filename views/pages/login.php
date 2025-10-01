<?php include "../../config/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/Css/styles.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="form-container">
      <div class="header">
        <img src="../../public/Images/logo.png" alt="DonorBridge" />
        <h2>Login</h2>
      </div>
      <form action="../../controllers/authController.php" method="POST">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" required />
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required />
        </div>

        <button type="submit" name="login">Login</button>
      </form>
    </div>
  </body>
</html>
