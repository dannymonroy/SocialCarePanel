<?php  /*
  Social Care Management Panel: Sessions
  Danny Monroy, drodri06
  Various helper functions PHP files. Includes, redirections, sql injection protection,
  some queries and create id for both carers and managers
  */ function redirect_to($new_location){
  header("Location: ". $new_location);
  exit;
}

  function mysql_prep($string){
    global $connection;
    $escaped_string = mysqli_real_escape_string($connection, $string);
    return $escaped_string;
  }

  function confirm_query($result_set){
    if (!$result_set){
      die("Database query failed");
    }
  }

  function find_all_visits(){
    global $connection;
    $query = "SELECT Clients.title, Clients.name, Clients.surname, Visits.carer_id, Visits.start_time, Visits.end_time FROM Clients, Visits ORDER BY Visits.start_time LIMIT 15;";
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    return $result;
  }

  function create_id ($name, $surname){

    $name = strtolower($name);
    $surname = strtolower($surname);
    $num = mt_rand(10,999);

    if(strlen($surname) >= 4){
      $surname = substr($surname, 0, 4);
    } elseif (strlen($surname) == 3){
      $surname = $surname[0].$surname;
    } else {
      $surname = $surname.$surname;
    }
    $personId= $name[0].$name[1].$surname.$num;

    return $personId;
  }

  function date_formatted ($userDate){
    $userDate = explode("/", $userDate);
    $cleanDate = $userDate[2]."-".$userDate[1]."-".$userDate[0];
    return $cleanDate;
  }

  function changeToHTTP (){
    if ($_SERVER['HTTPS'] == "on") {
    $url = "http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
    }
  }

  function displayNumClients(){
    global $connection;
    $sql = mysqli_query ($connection,"SELECT * FROM Clients;");
    $result = mysqli_num_rows($sql);
    return $result;
  }

  function displayNumClientsHigh(){
    global $connection;
    $sql = mysqli_query ($connection,"SELECT * FROM Clients WHERE level_vulnerability = 'High';");
    $result = mysqli_num_rows($sql);
    return $result;
  }

  function displayNumClientsMedium(){
    global $connection;
    $sql = mysqli_query ($connection,"SELECT * FROM Clients WHERE level_vulnerability = 'Medium';");
    $result = mysqli_num_rows($sql);
    return $result;
  }

  function displayNumClientsLow(){
    global $connection;
    $sql = mysqli_query ($connection,"SELECT * FROM Clients WHERE level_vulnerability = 'Low';");
    $result = mysqli_num_rows($sql);
    return $result;
  }

  function tableData(){
    global $connection;
    $query = "SELECT COUNT(*) AS num, date FROM Visits GROUP BY date;";
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    return $result;
  }


?>
