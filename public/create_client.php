<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php
/*

Social Care Management Panel: create_client.php
Danny Monroy, drodri06
PHP script that writes to the database to create a client.

*/
?>
<?php

  if(isset($_POST["submit"])){
    $title = htmlentities(mysql_prep($_POST["title"]));
    $name = htmlentities(mysql_prep($_POST["name"]));
    $middleName = htmlentities(mysql_prep($_POST["middle_name"]));
    $surname = htmlentities(mysql_prep($_POST["surname"]));
    $clientId = htmlentities(create_id($name, $surname));
    $address = htmlentities(mysql_prep($_POST["address"]));
    $postcode = htmlentities(mysql_prep($_POST["postcode"]));
    $area = htmlentities(mysql_prep($_POST["area"]));
    $generalInfo = htmlentities(mysql_prep($_POST["general_information"]));
    $keycode = htmlentities(mysql_prep($_POST["keycode"]));
    $levelVulnerability = htmlentities(mysql_prep($_POST["level_vulnerability"]));

    $query =  "INSERT INTO Clients ( ";
    $query .= " client_id, title, name, middle_name, surname, address, postcode, area, general_information, keycode, level_vulnerability";
    $query .= " ) VALUES (";
    $query .= " '{$clientId}','{$title}','{$name}','{$middleName}','{$surname}','{$address}','{$postcode}','{$area}','{$generalInfo}','{$keycode}','{$levelVulnerability}'";
    $query .= ");";

    $result = mysqli_query($connection, $query);

    if($result){
      $_SESSION["message_client"] = "The client $clientId was created succesfully!";
      redirect_to("panel.php");
    } else {
      $_SESSION["message_client"] = "Something went wrong with the process, please try again!";
      redirect_to("panel.php");
    }

  } else {
    redirect_to("new_carer.php");
  }


?>
