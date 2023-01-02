<?php

session_start();

//connection with mysql
include('../../database/connection.php');


if (isset($_POST['loginSubmit'])) {


    $logEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $logPassword = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


    if ($logEmail == "" && $logPassword == "") {
        $_SESSION['Erorr'] = "Please Enter Correct data";
        header("location:../login.php");
        die();
    }

    if ($logEmail == "" || $logPassword == "") {
        $_SESSION['Erorr'] = " Please Enter Correct data";
        header("location:../login.php");
        die();
    }


    $quiery = "SELECT * FROM users WHERE email=?";
    $stmt = $connection->prepare($quiery);
    $stmt->execute([$logEmail]);

    $data = $stmt->fetchObject(); 

    if ($data) {

        $check = $logPassword === $data->password;
        
        if ($check) {

            $_SESSION['user_id'] = $data->id;
            $_SESSION['user_name'] = $data->name;
            $_SESSION['user_email'] = $data->email;
            $_SESSION['user_phone'] = $data->phone;

            if ($_SESSION['user_email'] === 'admin@admin.com') {

                header("location:../../admin/tabels.php");
                die();

            } else {
                $_SESSION['user_id'] = $data->id;
                $_SESSION['user_name'] = $data->name;
                $_SESSION['user_email'] = $data->email;
                $_SESSION['user_phone'] = $data->phone;

                header("location:../index.php");
                die();
            }
        } else {

            $_SESSION['Erorr'] = "Email or Password not correct";

        }

    } else {
        $_SESSION['erorr'] = "Data not correct";
    }
}
header("location:../login.php");