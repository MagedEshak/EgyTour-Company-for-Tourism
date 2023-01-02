<?php include('../login/../database/connection.php'); ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="icon" type="image/png" href="../photos/egy.png" />
    <title>Profile</title>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../Home.php"> <img src="../photos/egy.png" width="100" height="50" title="logoo"
                alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="show-data.php">My Profile</a>
                </li>

                <?php if (!isset($_SESSION['user_name'])): ?>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>

                <?php else: ?>
               
                <li class="nav-item">
                    <a class="nav-link" href="changePassword.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="deleteAccount.php">Delete Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>

                <?php endif; ?>

            </ul>

        </div>
    </nav>