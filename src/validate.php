<?php

  function validate($post) {
    $fields = ['name', 'email', 'pass'];
    $empty = [];

    foreach($fields as $field) {
      if(empty($post[$field])) 
        $empty[] = $field;
    }

    if(!empty($empty)) {
      $_SESSION['message'] = 'Please fill in all required fields.';
      redirect('index.php');
    } else {
      if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'This is email invalid.';
        redirect('index.php');
      }
    }
  }

  function clean($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
  }

  function redirect($url) {
    $link = 'url_site' . $url;
    header("Location: $link");
    exit;
  }