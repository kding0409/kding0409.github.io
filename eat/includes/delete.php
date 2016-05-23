<?php

    include_once 'psl-config.php'; 

    $restaurant_id = htmlspecialchars($_GET["id"]);

    // Create connection
    $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "DELETE FROM restaurants WHERE restaurant_id='$restaurant_id';";
    if ($conn->query($sql) === TRUE) {
      echo "Delete successful!"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
