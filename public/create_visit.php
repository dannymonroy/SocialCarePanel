<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>

<?php
  if(isset($_POST["submit"])){
    // IF SUBMITTED PROCESS THE FORM AND ADD TO THE DB.

    $title = mysql_prep($_POST["title"]);
    $fullName = mysql_prep($_POST["full_name"]);
    $area = mysql_prep($_POST["area"]);
    $start_date = mysql_prep($_POST["start_date"]);

    $query =  "INSERT INTO test ( ";
    $query .= " title, full_name, area, start_date ";
    $query .= " ) VALUES (";
    $query .= " '{$title}', '{$fullName}','{$area}','{$start_date}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);

    if($result){
      redirect_to("panel.php");
    } else {
      redirect_to("index.html");
    }

  } else {
    redirect_to("new_visit.php");
  }

  // We free the results.
  mysqli_free_result($result);
?>
