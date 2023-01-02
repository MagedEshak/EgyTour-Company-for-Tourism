<?php

include('../database/connection.php');

$user_sql = "SELECT * FROM users";
$user_result = $connection->query($user_sql);

$inserttrip_sql = "SELECT * FROM inserttrip";
$inserttrip_result = $connection->query($inserttrip_sql);

$infromation_sql = "SELECT * FROM infromation";
$infromation_result = $connection->query($infromation_sql);

$booking_sql = "SELECT * FROM booking";
$booking_result = $connection->query($booking_sql);

$contactus_sql = "SELECT * FROM contactus";
$contactus_result = $connection->query($contactus_sql);


?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin | Tables</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS files -->
    <!-- Bootstrap, Google, W3-Schools CSS files -->
    <link rel="stylesheet" href="../css/w3.css">
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/leon.css" />
    <link rel="icon" type="image/png" href="../photos/egy.png" />
    <style>
    
    </style>
</head>

<body>

    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <a href="../Home.php"><img class="logo" src="../photos/egy.png" alt="" /></a>
            <div class="links">

                <ul>
                    <li><a href="../Home.php" target="_blank">Home</a></li>
                    <li><a href="Insert_In.php" target="_blank">Insert a new Trip</a></li>
                    <li><a href="../services.php" target="_blank">Services</a></li>
                    <li><a href="../about.php" target="_blank">About</a></li>
                    <li><a href="../contactus.php" target="_blank">Contact</a></li>
                    <li><a href="../login/login.php" target="_blank">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->


    <div class="w3-container w3-display-container w3-padding-16">
        <h1 style="background-color:#333; color: #fff; text-align: center;font-size: 50px;">Database Tables</h1>
        <hr>

        <?php if (isset($_SESSION['data_updated'])): ?>

        <div class="alert alert-success text-center">
            <?php echo $_SESSION['data_updated']; ?>
        </div>

        <?php endif; ?>
        <?php session_unset(); ?>

        <hr>
        <!-- ------------------------------------------------------------- -->
        <?php if (isset($_SESSION['Delete_booking'])): ?>

        <div class="alert alert-success text-center">
            <?php echo $_SESSION['Delete_booking']; ?>
        </div>

        <?php endif; ?>
        <?php session_unset(); ?>

        <!-- ------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------- -->
        <?php if (isset($_SESSION['Delete_user'])): ?>

        <div class="alert alert-success text-center">
            <?php echo $_SESSION['Delete_user']; ?>
        </div>

        <?php endif; ?>
        <?php session_unset(); ?>

        <!-- ------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------- -->
        <?php if (isset($_SESSION['Delete_trip'])): ?>

        <div class="alert alert-success text-center">
            <?php echo $_SESSION['Delete_trip']; ?>
        </div>

        <?php endif; ?>
        <?php session_unset(); ?>
        <!-- ------------------------------------------------------------- -->

        <h3 style="text-align: center;font-size: 50px; background-color:#9e9e9e; color: #fff;">1- Users</h3>
        <hr>

        <table id="myTable">


            <tr class="header">
                <th style="width:5%;">Id</th>
                <th style="width:25%;">User Name</th>
                <th style="width:30%;">Email</th>
                <th style="width:10%;">Mobile Phone</th>
            </tr>
            
            <?php foreach ($user_result as $user_key) { ?>
            <tr>
                <td><?php echo $user_key['id'] ?></td>
                <td><?php echo $user_key['name'] ?></td>
                <td><?php echo $user_key['email'] ?></td>
                <td><?php echo $user_key['phone'] ?></td>
            </tr>
            <?php } ?>

        </table>

        <form action="../database/deleteTable.php" method="POST" enctype="multipart/form-data">
            <p style="margin: 15px;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: space-around;">
                <a class="w3-button w3-green" style="width: 20%; text-decoration:none; color: #fff!important; "
                    href="tables/users/edit_user.php">Edit column</a>

                <button class="w3-button w3-red"
                    style="width: 20%; text-align:center; text-decoration:none; color: #fff!important; "
                    name="Delete_Table_Users">Delete Table</button>

                <a class="w3-button w3-gray"
                    style="width: 20%; float:right; text-decoration:none; color: #fff!important; "
                    href="tables/users/delete_user.php">Delete
                    column</a>
            </p>
        </form>
        <hr>


        <h3 style="text-align: center;font-size: 50px; background-color:#9e9e9e; color: #fff;">2- Trips</h3>
        <hr>

        <table id="myTable">


            <tr class="header">
                <th style="width:5%;">Id</th>
                <th style="width:25%;">Trip Name</th>
                <th style="width:30%;">Trip address</th>
                <th style="width:30%;">Trip descrition</th>
                <th style="width:10%;">Trip Price</th>
            </tr>
            <?php foreach ($inserttrip_result as $key) { ?>
            <tr>
                <td><?php echo $key['id'] ?></td>
                <td><?php echo $key['trip'] ?></td>
                <td><?php echo $key['address'] ?></td>
                <td><?php echo $key['descrition'] ?></td>
                <td><?php echo $key['trip_price'] . " EGP" ?></td>

            </tr>
            <?php } ?>

        </table>

        <p style="margin: 15px;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: space-around;">
            <a class="w3-button w3-green" style="width: 20%; text-decoration:none; color: #fff!important; "
                href="tables/trips/edit_trip.php">Edit column</a>

            <a class="w3-button w3-gray" style="width: 20%; float:right; text-decoration:none; color: #fff!important; "
                href="tables/trips/delete_trip.php">Delete column</a>

        </p>



        <hr>

        <h3 style="text-align: center;font-size: 50px; background-color:#9e9e9e; color: #fff;">3- Booking Information
        </h3>
        <hr>

        <table id="myTable">

            <tr class="header">
                <th style="width:5%;">Id</th>
                <th style="width:25%;">From</th>
                <th style="width:30%;">To</th>
                <th style="width:30%;">Adults</th>
                <th style="width:10%;">Trip Price</th>
            </tr>
            <?php foreach ($booking_result as $booking_key) { ?>
            <tr>
                <td><?php echo $booking_key['id'] ?></td>
                <td><?php echo $booking_key['dateFrom'] ?></td>
                <td><?php echo $booking_key['dateTo'] ?></td>
                <td><?php echo $booking_key['adults'] ?></td>
                <td><?php echo $booking_key['price'] . " EGP" ?></td>

            </tr>
            <?php } ?>

        </table>


        <p style="margin: 15px;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: space-around;">
            <a class="w3-button w3-gray" style="width: 20%; float:right; text-decoration:none; color: #fff!important; "
                href="tables/booking/delete_booking.php">Delete column</a>

        </p>

        <hr>

        <hr>


        <h3 style="text-align: center;font-size: 50px; background-color:#9e9e9e; color: #fff;">4- Contact Us</h3>
        <hr>

        <table id="myTable">

            <tr class="header">
                <th style="width:5%;">Id</th>
                <th style="width:25%;">Name</th>
                <th style="width:30%;">Mobile Phone</th>
                <th style="width:30%;">Email</th>
                <th style="width:10%;">Message</th>
            </tr>
            <?php foreach ($contactus_result as $contactus_key) { ?>
            <tr>
                <td><?php echo $contactus_key['id'] ?></td>

                <td><?php echo $contactus_key['name']; ?></td>
                <td><?php echo $contactus_key['phone']; ?></td>
                <td><?php echo $contactus_key['email']; ?></td>
                <td><?php echo $contactus_key['messeage'] ?></td>



            </tr>
            <?php } ?>

        </table>

        <form action="../database/deleteTable.php" method="POST" enctype="multipart/form-data">
            <p style="margin: 15px;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: space-around;">

                <button class="w3-button w3-red"
                    style="width: 20%; text-align:center; text-decoration:none; color: #fff!important; "
                    name="Delete_Table_contact">Delete Table</button>


            </p>
        </form>
        <hr>
    </div>


</body>

</html>