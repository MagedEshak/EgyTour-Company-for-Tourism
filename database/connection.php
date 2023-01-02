<?php

session_start();

$dbn = 'mysql:host=localhost;dbname=registration;'; 
$user = 'root'; 
$pass = '';
try {
    $connection = new PDO($dbn, $user, $pass); 

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Failed " . $e->getMessage(); 
    die();
}