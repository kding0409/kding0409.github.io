<?php

    include_once 'psl-config.php'; 

    $id = htmlspecialchars($_POST["restaurant_id"]);
    $restaurant_name = htmlspecialchars($_POST["restaurant_name"]);
    $city = htmlspecialchars($_POST["city"]);
    $priority = htmlspecialchars($_POST["priority"]);
    $keyword = htmlspecialchars($_POST["keyword"]);
    $catagory = htmlspecialchars($_POST["catagory"]);
    $eat_flag = htmlspecialchars($_POST["eat_flag"]);

    // Create connection
    $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE restaurants SET restaurant_name='$restaurant_name',city='$city',priority='$priority',keyword='$keyword',catagory='$catagory',eat_flag='$eat_flag' WHERE restaurant_id=$id;";

    if ($conn->query($sql) === TRUE) {
      echo "Update successful!"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
