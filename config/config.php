<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'database_name';

  try {
    $dns = "mysql:host=$host;dbname=$db";
    $conn = new PDO($dns, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die( 'Could not connect to the database: ' . $e->getMessage() );
  }