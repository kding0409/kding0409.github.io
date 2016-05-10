<?php

    include_once 'psl-config.php'; 

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

    $sql = "insert into `restaurants` (`restaurant_name`,`city`, `priority`,`keyword`,`catagory`,`eat_flag`) values('$restaurant_name','$city','$priority','$keyword','$catagory','$eat_flag');";

    if ($conn->query($sql) === TRUE) {
      echo "Insert successful!"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
