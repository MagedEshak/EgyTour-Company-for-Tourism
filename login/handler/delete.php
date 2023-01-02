<?php
session_start();

//connection with mysql
include('../../database/connection.php');

if (isset($_POST['delete'])) {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $Password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $confirmPass = filter_var($_POST['ConfirmPassword'], FILTER_SANITIZE_STRING);

    if ($email == "" && $Password == "" && $confirmPass == "") {
        $_SESSION['Erorr'] = "Please Enter Correct data";
        header("location:../deleteAccount.php");
        die();

    }
    if ($email == "" || $Password == "" || $confirmPass == "") {
        $_SESSION['Erorr'] = "Please Enter Correct data";
        header("location:../deleteAccount.php");
        die();
    }

    $quiery = "SELECT * FROM users WHERE email=?";
    $stmt = $connection->prepare($quiery);
    $stmt->execute([$_SESSION['user_email']]);

    $data = $stmt->fetchObject();

    if ($data) {

        $check = $Password === $data->password;

        if ($check) {

            if ($Password === $confirmPass) {

                $quiery = "DELETE FROM users WHERE email=?";
                $stmt = $connection->prepare($quiery);
                $stmt->execute([$email]);

                session_start();
                session_unset();
                session_destroy();
                header("location:../index.php");
                $_SESSION['deleted'] = "Your Account has deleted successfully";
                die();

            } else {
                $_SESSION['erorr'] = "Password doesn't matched";
            }


        } else {
            $_SESSION['erorr'] = "Data not correct";
        }

    } else {
        $_SESSION['erorr'] = "Data not correct";
    }
}