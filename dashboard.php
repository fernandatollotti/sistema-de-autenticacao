<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="center">
        <div class="form">
          <p>Hey, <?php $_SESSION['user']; ?></p>
          <p>You are now user dashoard.</p>
          <p><a href="src/logout.php">Logout</a></p>
        </div>
      </div>
    </div>
  </body>
</html>