<?php
	include_once 'psl-config.php';

	$id = htmlspecialchars($_GET["id"]);
	// Create connection
	$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$result = mysqli_query($conn, "select * from restaurants where restaurant_id='$id';") or die(mysql_error());


	$data = array();

	while ($row = mysqli_fetch_array($result)) {
		$data["data"][] = $row;
	}
	mysqli_close($conn);
	print json_encode($data);
?>