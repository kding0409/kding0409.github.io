<?php
	include_once 'psl-config.php';

	// Create connection
	$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$result = mysqli_query($conn, "select restaurant_id,restaurant_name,city,priority,keyword,catagory,eat_flag from restaurants");

	$data = array();

	while ($row = mysqli_fetch_array($result)) {
		$data["data"][] = $row;
	}
	mysqli_close($conn);
	print json_encode($data);
?>