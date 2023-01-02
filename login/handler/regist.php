<?php

session_start();

//connection with mysql
include('../../database/connection.php');

///////////////////////////////////////////////////////////////////////////

if (isset($_POST['registSubmit'])) {

    $registName = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $registEmail = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
    $registPhone = filter_var($_POST['MobileNumber'], FILTER_SANITIZE_STRING);
    $registPassword = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);

    if ($registName == "" && $registEmail == "" && $registPhone == "" && $registPassword == "") {
        $_SESSION['Erorr'] = "Please Enter Correct data";
        header("location:../register.php");
        die();
    }
    if ($registName == "" || $registEmail == "" || $registPhone == "" || $registPassword == "") {
        $_SESSION['Erorr'] = " Please Enter Correct data";
        header("location:../register.php");
        die();
    }


    $quiery = "INSERT INTO users (name, email, phone , password) VALUES (?,?,?,?)";
    $stmt = $connection->prepare($quiery);
    $stmt->execute([$registName, $registEmail, $registPhone, $registPassword]);

    $_SESSION['successSignUp'] = "Sign Up Successfully";

}

header("location:../register.php");
die();