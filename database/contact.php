<?php

session_start();

//connection with mysql
include('connection.php');


if (isset($_POST['messeageSubmit'])) {

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['MobileNumber'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
    $mess = filter_var($_POST['messeage'], FILTER_SANITIZE_STRING);

    if ($email === "" && $mess === "") {
        $_SESSION['contactUsErorr'] = " Please Enter Correct data";
        header('location:../contactus.php');
        die();
    }
    
    if ($email === "" || $mess === "") {
        $_SESSION['contactUsErorr'] = " Please Enter Correct data";
        header('location:../contactus.php');
        die();
    }

    $quiery = "INSERT INTO contactus (name, phone , email, messeage) VALUES (?,?,?,?)";
    $stmt = $connection->prepare($quiery);
    $stmt->execute([$name, $phone, $email, $mess]);

    $_SESSION['successful'] = "Your messeage has been sent";

}

header('location:../contactus.php');
die();