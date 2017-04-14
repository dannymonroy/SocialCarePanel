<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>

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
      redirect_to("panel.php");
    } else {
      redirect_to("reports.php");
    }
  } else {
    redirect_to("new_carer.php");
  }

  // We free the results.
  //mysqli_free_result($result);
?>
