<?php
	require_once("includes/db_connection.php");
	/*
	Social Care Management Panel: index1.php
  Danny Monroy, drodri06
	Script connects to the Android Social Care Application. It retrieves a carer id and a password to do the log in.
	it then checks the database and returns a json object with the id (for further use by index1.php) and a boolean if the login was
	succesful or not.	Script based on https://github.com/tonikami PHP work
	*/
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$carer_id = $_POST["carer_id"];
		$password = $_POST["password"];

		$json = array();
		$json["success"] = false;

	  $sql = mysqli_prepare($connection, "SELECT carer_id FROM Carers WHERE carer_id = ? AND password = ?");

	mysqli_stmt_bind_param($sql, "ss", $carer_id, $password);
    mysqli_stmt_execute($sql);
    mysqli_stmt_store_result($sql);
    @mysqli_stmt_bind_result($sql, $carer_id, $password);

		while(mysqli_stmt_fetch($sql)){
						$json["success"] = true;
						$json["carer_id"] = $carer_id;
		}
		echo json_encode($json);
}

?>
