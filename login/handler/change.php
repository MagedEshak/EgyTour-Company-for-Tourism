<?php
session_start();

//connection with mysql
include('../../database/connection.php');

if (isset($_POST['change'])) {

    $oldPass = filter_var($_POST['oldPassword'], FILTER_SANITIZE_STRING);
    $newPass = filter_var($_POST['newPassword'], FILTER_SANITIZE_STRING);
    $confirmNewPass = filter_var($_POST['confirmNewPassword'], FILTER_SANITIZE_STRING);

    if ($oldPass == "" && $newPass == "" && $confirmNewPass == "") {
        $_SESSION['Erorr'] = "Please Enter Correct data";
        header("location:../changePassword.php");
        die();

    }
    if ($oldPass == "" || $newPass == "" || $confirmNewPass == "") {
        $_SESSION['Erorr'] = "Please Enter Correct data";
        header("location:../changePassword.php");
        die();
    }

    $quiery = "SELECT * FROM users WHERE email=?";
    $stmt = $connection->prepare($quiery);
    $stmt->execute([$_SESSION['user_email']]);

    $data = $stmt->fetchObject();

    if ($data) {

        $check = $oldPass === $data->password;

        if ($check) {

            if ($newPass === $confirmNewPass) {

                $quiery = "UPDATE users SET password=? WHERE email=?";
                $stmt = $connection->prepare($quiery);
                $stmt->execute([$newPass, $_SESSION['user_email']]);
                
                header("location:../show-data.php");
                $_SESSION['updated'] = "Your Password has updated successfully";
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