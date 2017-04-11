<?php
  define("DB_HOST", "localhost");
  define("DB_USER", "id457409_danny");
  define("DB_NAME", "id457409_data_sca");
  define("DB_PASSWORD", "185987410");

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
  die("Database connection failed: ". mysqli_connect_error());
}
?>
