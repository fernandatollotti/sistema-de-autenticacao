<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="center">
        <form class="form" action="src/auth.php" method="POST" novalidate>
          <h1>Login</h1>
          <div class="input-group">
            <label for="email">
              <span class="custom-label">Email</span>
            </label>
            <input type="email" name="email" placeholder="Enter Your Email Here">
          </div>
          <div class="input-group">
            <label for="pass">
              <span class="custom-label">Password</span>
            </label>
            <input type="password" name="pass" placeholder="Please Enter Your Password">
          </div>

          <div class="message">
            <p>
            </p>
          </div>
          <input class="btn btn-submit" type="submit" name="login" value="Login">
          <p>if you havn't Register yet? <a href="index.php">Register now</a></p>
        </form>
      </div>
    </div>
  </body>
</html>