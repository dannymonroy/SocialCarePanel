<?php

  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "D/d/185987410");
  define("DB_NAME", "socialcarepanel");

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if(mysqli_connect_errno()){
  	die("Database connection failed: ". mysqli_connect_error());
  }
?>
