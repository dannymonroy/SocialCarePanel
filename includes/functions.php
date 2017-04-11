<?php
  //This function will have to change but for now is for testing purposes
  function displayName($username){
    if(isset($username)){
      return $username;
    } else {
      return "Stranger";
    }
  }

  function confirm_query($result_set){
    if (!$result_set){
      die("Database query failed");
    }
  }
?>
