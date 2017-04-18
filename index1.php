<?php
  require_once("includes/db_connection.php");

  $query = "SELECT ";
  $query .= " Clients.title, Clients.name, Clients.surname, Clients.area, Visits.start_time ";
  $query .= " FROM Clients ";
  $query .= " JOIN Visits ON Visits.client_id = Clients.client_id ";
  $query .= " WHERE Visits.carer_id = 'brwayn'";

  $result = mysqli_query($connection, $query);

  $resultArray = array();

  while($row = mysqli_fetch_assoc($result)){
    $resultArray[] = $row;
  }

  echo json_encode(array('visits' => $resultArray));

 ?>
