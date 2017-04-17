<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>

<?php

  if(isset($_POST["submit"])){
    $title = mysql_prep($_POST["title"]);
    $name = mysql_prep($_POST["name"]);
    $middleName = mysql_prep($_POST["middle_name"]);
    $surname = mysql_prep($_POST["surname"]);
    $clientId = create_id($name, $surname);
    $address = mysql_prep($_POST["address"]);
    $postcode = mysql_prep($_POST["postcode"]);
    $area = mysql_prep($_POST["area"]);
    $generalInfo = mysql_prep($_POST["general_information"]);
    $keycode = mysql_prep($_POST["keycode"]);
    $levelVulnerability = mysql_prep($_POST["level_vulnerability"]);

    $query =  "INSERT INTO Clients ( ";
    $query .= " client_id, title, name, middle_name, surname, address, postcode, area, general_information, keycode, level_vulnerability";
    $query .= " ) VALUES (";
    $query .= " '{$clientId}','{$title}','{$name}','{$middleName}','{$surname}','{$address}','{$postcode}','{$area}','{$generalInfo}','{$keycode}','{$levelVulnerability}'";
    $query .= ");";

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
