<?php

    include_once 'psl-config.php'; 

    $id = htmlspecialchars($_POST["restaurant_id"]);
    $restaurant_name = htmlspecialchars($_POST["restaurant_name"]);
    $city = htmlspecialchars($_POST["city"]);
    $priority = htmlspecialchars($_POST["priority"]);
    $keyword = htmlspecialchars($_POST["keyword"]);
    if(isset($_POST['catagory'])){
        if(empty($_POST['catagory'])){
          $catagory = '正餐';
        }      
        else $catagory = htmlspecialchars($_POST['catagory']);
    }else $catagory = '正餐';

    $eat_flag = htmlspecialchars($_POST["eat_flag"]);

    if(isset($_POST['spicy_level'])){
        if(empty($_POST['spicy_level'])){
          $spicy_level = '0';
        }      
        else $spicy_level = htmlspecialchars($_POST["spicy_level"]);
    } else $spicy_level = '0';

    if(isset($_POST['clean_level'])){
        if(empty($_POST['clean_level'])){
          $clean_level = '0';
        }      
        else $clean_level = htmlspecialchars($_POST["clean_level"]);
    } else $clean_level = '0';

    $plan_eat_time = htmlspecialchars($_POST["plan_eat_time"]==''?'2000-01-01':$_POST["plan_eat_time"]);
    $eat_time = htmlspecialchars($_POST["eat_time"]==''?'2000-01-01':$_POST["eat_time"]);
    $comments = htmlspecialchars($_POST["comments"]);
    if(isset($_POST['review_star'])){
        if(empty($_POST['review_star'])){
          $review_star = '0';
        }      
        else $review_star = htmlspecialchars($_POST["review_star"]);
    } else $review_star = '0';

    if(isset($_POST['tryAgain'])){
        if(empty($_POST['tryAgain'])){
          $tryAgain = '0';
        }      
        else $tryAgain = htmlspecialchars($_POST["tryAgain"]);
    } else $tryAgain = '0';

    $numberOfGroup = htmlspecialchars($_POST["numberOfGroup"]=='null'?'0':$_POST["numberOfGroup"]);
    $how_much = htmlspecialchars($_POST["how_much"]=='null'?'0':$_POST["how_much"]);
    $whichTrip = htmlspecialchars($_POST["whichTrip"]);

    // Create connection
    $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE restaurants SET restaurant_name='$restaurant_name',city='$city',priority='$priority',keyword='$keyword',catagory='$catagory',eat_flag='$eat_flag',spicy_level='$spicy_level',clean_level='$clean_level',plan_eat_time='$plan_eat_time',eat_time='$eat_time',comments='$comments',review_star='$review_star',tryAgain='$tryAgain',numberOfGroup='$numberOfGroup',how_much='$how_much',whichTrip='$whichTrip' WHERE restaurant_id=$id;";

    if ($conn->query($sql) === TRUE) {
      echo "Update successful!"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
