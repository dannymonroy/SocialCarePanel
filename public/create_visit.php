<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>


<?php
  if(isset($_POST["submit"])){

    $clientId = mysql_prep($_POST["client_id"]);
    $carerId = mysql_prep($_POST["carer_id"]);
    $date = mysql_prep($_POST["date"]);
    $date = date_formatted($date);
    $startTime = mysql_prep($_POST["start_time"]);
    $endTime = mysql_prep($_POST["end_time"]);



    $query =  "INSERT INTO Visits ( ";
    $query .= " client_id, carer_id, date, start_time, end_time ";
    $query .= " ) VALUES ( ";
    $query .= " '{$clientId}','{$carerId}','{$date}','{$startTime}','{$endTime}'";
    $query .= ")";


    $result = mysqli_query($connection, $query);



    if($result){
      redirect_to("panel.php");
    } else {

      redirect_to("reports.php");
    }

  } else {
    redirect_to("new_visit.php");
  }

?>
