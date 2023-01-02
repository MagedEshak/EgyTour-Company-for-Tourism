<?php

//connection with mysql
include('connection.php');



if (isset($_POST['insert_Trips'])) { 

    $Trip_picture_name1 = $_FILES['Trip_Pic']['name'];
    $Trip_picture_name2 = $_FILES['picture2']['name'];
    $Trip_picture_name3 = $_FILES['picture3']['name'];
    $Trip_picture_name4 = $_FILES['picture4']['name'];
    $name = $_POST['trip'];
    $address = $_POST['address'];
    $description = $_POST['descrition'];
    $trip_price = $_POST['trip_price'];

    $quiery = "INSERT INTO inserttrip (photo ,photo2 , photo3, photo4, trip, address, descrition, trip_price) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $connection->prepare($quiery);
   
    $stmt->execute([$Trip_picture_name1, $Trip_picture_name2, $Trip_picture_name3, $Trip_picture_name4, $name, $address, $description, $trip_price]);

    $_SESSION['insert_Trips'] = "submitted";

    header("location:../admin/Insert_In.php"); 
    die();

}

