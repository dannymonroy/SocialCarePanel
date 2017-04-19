<?php
	require_once("includes/db_connection.php");
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$carer_id = $_POST["carer_id"];
		$password = $_POST["password"];


		//$carer_id = "brwayn";
		//$password = "batman";

	  $statement = mysqli_prepare($connection, "SELECT carer_id FROM Carers WHERE carer_id = ? AND password = ?");

		mysqli_stmt_bind_param($statement, "ss", $carer_id, $password);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    @mysqli_stmt_bind_result($statement, $carer_id, $password);
	 // $result = mysqli_query($connection, $query);



		$response = array();
		$response["success"] = false;

		while(mysqli_stmt_fetch($statement)){
						$response["success"] = true;
						$response["carer_id"] = $carer_id;
		}
		echo json_encode($response);

}

?>
