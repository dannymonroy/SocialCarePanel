<?php
  /*

  Social Care Management Panel: index1.php
  Danny Monroy, drodri06
  This script gets the id of a care worker, check for the visit that particular care worker has
  and returns a JSON object called 'visits' for the Android application to handle.

  */
  require_once("includes/db_connection.php");

  $carer = $_GET['id'];

  $query = "SELECT ";
  $query .= " Clients.title, Clients.name, Clients.middle_name, Clients.surname, Clients.area, Visits.start_time, Visits.end_time, Clients.address, Clients.postcode, Clients.general_information, Clients.keycode, Clients.level_vulnerability  ";
  $query .= " FROM Clients ";
  $query .= " JOIN Visits ON Visits.client_id = Clients.client_id ";
  $query .= " WHERE Visits.carer_id = '".$carer."' ";
  $query .= " ORDER BY Visits.start_time;";

  $result = mysqli_query($connection, $query);

  $resultArray = array();

  while($row = mysqli_fetch_assoc($result)){
    $resultArray[] = $row;
  }

  echo json_encode(array('visits' => $resultArray));

 ?>
