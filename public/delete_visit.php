<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php
/*

Social Care Management Panel: delete_visit.php
Danny Monroy, drodri06
PHP script that writes to the database to delete a visit.

*/
?>

<?php
  if(isset($_POST["submit"])){

    $clientId = htmlentities(mysql_prep($_POST["client_id"]));
    $carerId = htmlentities(mysql_prep($_POST["carer_id"]));
    $date = htmlentities(mysql_prep($_POST["date"]));
    $date = date_formatted($date);
    $startTime = htmlentities(mysql_prep($_POST["start_time"]));

    $query =  "DELETE FROM Visits ";
    $query .= " WHERE client_id = '$clientId' AND carer_id = '$carerId' AND date = '$date' AND start_time = '$startTime' ";



    $result = mysqli_query($connection, $query);

    if($result){
      $_SESSION["message_visit_erased"] = "The visit was deleted succesfully!";
      redirect_to("panel.php");
    } else {
      $_SESSION["message_visit_erased"] = "Some of the values you introduced were wrong!";
      redirect_to("erase_visit.php");
    }

  } else {
    redirect_to("new_visit.php");
  }

?>
