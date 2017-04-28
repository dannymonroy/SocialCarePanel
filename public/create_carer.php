<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php
/*

Social Care Management Panel: create_carer.php
Danny Monroy, drodri06
PHP script that writes to the database to create a care worker.

*/
?>
<?php
  if(isset($_POST["submit"])){
    $title = mysql_prep($_POST["title"]);
    $name = mysql_prep($_POST["name"]);
    $surname = mysql_prep($_POST["surname"]);

    $carerId = create_id($name, $surname);

    $middleName = mysql_prep($_POST["middle_name"]);
    $password = mysql_prep($_POST["password"]);

    $query =  "INSERT INTO Carers ( ";
    $query .= " carer_id, password, title, name, middle_name, surname ";
    $query .= " ) VALUES (";
    $query .= " '{$carerId}','{$password}','{$title}','{$name}','{$middleName}','{$surname}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);

    if($result){
      $_SESSION["message_carer"] = "The carer $carerId was created succesfully!";
      redirect_to("panel.php");
    } else {
      $_SESSION["message_carer"] = "Something went wrong with the process, please try again!";
      redirect_to("panel.php");
    }
  } else {
    redirect_to("new_carer.php");
  }

?>
