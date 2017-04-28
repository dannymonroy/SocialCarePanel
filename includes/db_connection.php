<?php
/*
Social Care Management Panel: Database conection
Danny Monroy, drodri06
Here we connect to the database when needed.
*/

  define("DB_SERVER", "localhost");
  define("DB_USER", "id457409_danny");
  define("DB_PASS", "185987410");
  define("DB_NAME", "id457409_db");

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if(mysqli_connect_errno()){
  	die("Database connection failed: ". mysqli_connect_error());
  }
?>
