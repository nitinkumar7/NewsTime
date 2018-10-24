<?php
	header("Access-Control-Allow-Origin: *");

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'test');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	
	$conn = new mysqli(DB_HOST,DB_USER,DB_PASS);

	if ($conn->connect_error) {
		die("Connection failed".$conn->connect_error);
	}

	$id = $_POST["id"];

	$res_arr = array();

	$query = "SELECT * FROM analysis WHERE id='$id'";
	$result = $conn->query($query);
	while($row = $result->fetch_assoc()){
		array_push($res_arr, $row);
	}

	print_r(json_encode($res_arr));

	$conn->close();

?>