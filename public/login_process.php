<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php
/*

Social Care Management Panel: login_process.php
Danny Monroy, drodri06
PHP script that authenticates the user when login in.

*/
?>
<?php
  if(isset($_POST["submit"])){
    $username = mysql_prep($_POST["username"]);
    $password = mysql_prep($_POST["password"]);

    $queryUser = "SELECT manager_id FROM Managers WHERE manager_id = '$username' LIMIT 1";
    $queryPassword = "SELECT password FROM Managers WHERE password = '$password' LIMIT 1";
    $resultUser = mysqli_query($connection, $queryUser);
    $resultPassword = mysqli_query($connection, $queryPassword);

    if (mysqli_num_rows($resultUser)!=0 AND mysqli_num_rows($resultPassword)!=0) {
      redirect_to("panel.php");
    } else {
      $_SESSION["message_login"] = "Login was not successful. Either your username or password are not correct.";
      redirect_to("index.php");
    }

  } else {
    redirect_to("index.php");
  }


?>
