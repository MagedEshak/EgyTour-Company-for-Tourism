<?php

session_start();

//connection with mysql
include('connection.php');


if (isset($_POST['Booking_Submitted'])) {

    $date_from = filter_var($_POST['CheckIn'], FILTER_SANITIZE_STRING);
    $date_to = filter_var($_POST['CheckOut'], FILTER_SANITIZE_STRING);
    $numberAdults = filter_var($_POST['Adults'], FILTER_SANITIZE_NUMBER_INT);
    $person_Name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $person_Phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $person_Email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $person_Address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $person_Card = filter_var($_POST['visa'], FILTER_SANITIZE_NUMBER_INT);
    $person_cvv = filter_var($_POST['cvv'], FILTER_SANITIZE_NUMBER_INT);
    $person_Expiry_date = filter_var($_POST['date_mon'], FILTER_SANITIZE_NUMBER_INT);
    $person_Expiry = filter_var($_POST['date_year'], FILTER_SANITIZE_NUMBER_INT);
    $total_price = filter_var($_POST['total_price'], FILTER_SANITIZE_NUMBER_INT);


    $quiery = "INSERT INTO infromation (name, phone , email, address, visa, cvv, mon, year) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $connection->prepare($quiery);
    $stmt->execute([$person_Name, $person_Phone, $person_Email, $person_Address, $person_Card, $person_cvv, $person_Expiry_date, $person_Expiry]);

    $q = "INSERT INTO booking (dateFrom, dateTo, adults, price) VALUES (?,?,?,?)";
    $stt = $connection->prepare($q);
    $stt->execute([$date_from, $date_to, $numberAdults, $total_price]);


    $_SESSION['Booking_Submitted'] = "Your booking has been submitted";

    header("location:../login/show-data.php");
    die();

}