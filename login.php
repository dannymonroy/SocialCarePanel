<?php
require_once("includes/db_connection.php");

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$username = $_POST['username'];
		$password = $_POST['password'];


		$query = "SELECT carer_id FROM Carers WHERE carer_id = '$username' AND password ='$password'";

		$result = mysqli_query($connection,$query);

		$check = mysqli_fetch_array($result);

		if(isset($check)){
			echo 'success';
		}else{
			echo 'failure';
		}
	}

?>
