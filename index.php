<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="center">
        <form class="form" action="src/auth.php" method="POST" novalidate>
          <h1>Sign-up</h1>
          <div class="input-group">
            <label for="name">
              <span class="custom-label">Name</span>
            </label>
            <input type="text" name="name" placeholder="Enter Your Name">
          </div>
          <div class="input-group">
            <label for="email">
              <span class="custom-label">Email</span>
            </label>
            <input type="email" name="email" placeholder="Please Enter Your Email">
          </div>
          <div class="input-group">
            <label for="pass">
              <span class="custom-label">Password</span>
            </label>
            <input type="password" name="pass" placeholder="Please Enter Your Password">
          </div>

          <div class="message">
            <p>
             <?php
              session_start();
              if(isset($_SESSION['message']))
                echo $_SESSION['message'];
                unset($_SESSION['message']);
             ?>
            </p>
          </div>
          <input class="btn btn-submit" type="submit" name="register" value="Sign-up">
          <p>if you already have an account?
            <a href="login.php">Login now</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>