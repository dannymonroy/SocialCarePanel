<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php
/*

Social Care Management Panel: create_visit.php
Danny Monroy, drodri06
PHP script that writes to the database to create a visit.

*/
?>

<?php
  if(isset($_POST["submit"])){

    $clientId = htmlentities(mysql_prep($_POST["client_id"]));
    $carerId = htmlentities(mysql_prep($_POST["carer_id"]));
    $date = htmlentities(mysql_prep($_POST["date"]));
    $date = date_formatted($date);
    $startTime = htmlentities(mysql_prep($_POST["start_time"]));
    $endTime = htmlentities(mysql_prep($_POST["end_time"]));

    $query =  "INSERT INTO Visits ( ";
    $query .= " client_id, carer_id, date, start_time, end_time ";
    $query .= " ) VALUES ( ";
    $query .= " '{$clientId}','{$carerId}','{$date}','{$startTime}','{$endTime}'";
    $query .= ")";


    $result = mysqli_query($connection, $query);

    if($result){
      $_SESSION["message_visit"] = "The visit was created succesfully!";
      redirect_to("panel.php");
    } else {
      $_SESSION["message_visit"] = "Something went wrong with the process, please try again!";
      redirect_to("panel.php");
    }

  } else {
    redirect_to("new_visit.php");
  }

?>
