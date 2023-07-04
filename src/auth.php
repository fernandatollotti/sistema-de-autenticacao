<?php

  $dir = dirname(__DIR__);
  require_once($dir . '/config/config.php');
  require_once($dir . '/src/validate.php');

  function auth() {
    $post = [
      'name'  => clean($_POST['name']),
      'email' => clean($_POST['email']),
      'pass'  => clean($_POST['pass'])
    ];

    if(isset($_POST['register']))
      save($post['name'], $post['email'], $post['pass']);
    
    if(isset($_POST['login']))
      login($post['email'], $post['pass']);
  }

  function save($name, $email, $pass) {
    global $conn;

    if(!validate($_POST)) {
      $passHash = password_hash($pass, PASSWORD_DEFAULT);
      $user = query($email);

      if($user) {
        $_SESSION['message'] = "Email '$email' already exists in database.";
        redirect('index.php');
      } else {
        $query = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $passHash, PDO::PARAM_STR);
      }
      try {
        $stmt->execute();
        $_SESSION['message'] = 'Registration performed successfuly.';
        redirect('index.php');
      } catch(PDOException $e) {
        die('Error registering' . $e->getMessage());
      }
    }
  }

  function query($email) {
    global $conn;

    $query = 'SELECT * FROM users WHERE email = :email';
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
  }

  function login($email, $pass) {
    $user = query($email);

    if($user) {
      if(password_verify($pass, $user['password'])) {
        $_SESSION['user'] = $user['name'];
        redirect('dashboard.php');
      }
    } else {
      $_SESSION['message'] = 'Invalid user or password.';
      redirect('login.php');
    }
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST')
    auth(); 