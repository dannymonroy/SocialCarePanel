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

  function find_all_visists(){
    global $connection;
    $query = "SELECT * FROM test;";
    $result = mysqli_query($connection, $query);
    //Functions: Confirms if the query was successful.
    confirm_query($result);
    return $result;
  }
?>
