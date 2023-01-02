<?php

include('../../../database/connection.php');

$user_sql = "SELECT * FROM users";
$user_result = $connection->query($user_sql);


?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin | Tables</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS files -->
    <!-- Bootstrap, Google, W3-Schools CSS files -->

    <link rel="stylesheet" href="../../../css/w3.css">


    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../../../css/leon.css" />


    <link rel="icon" type="image/png" href="../../../photos/egy.png" />
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", Arial, Helvetica, sans-serif
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 100%;
            /* Full-width */
            font-size: 16px;
            /* Increase font-size */
            padding: 12px 20px 12px 40px;
            /* Add some padding */
            border: 1px solid #ddd;
            /* Add a grey border */
            margin-bottom: 12px;
            /* Add some space below the input */
        }

        #myTable {
            border-collapse: collapse;
            /* Collapse borders */
            width: 100%;
            /* Full-width */
            border: 1px solid #ddd;
            /* Add a grey border */
            font-size: 18px;
            /* Increase font-size */
        }

        #myTable th,
        #myTable td {
            text-align: left;
            /* Left-align text */
            padding: 12px;
            /* Add padding */
        }

        #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            /* Add a grey background color to the table header and on hover */
            background-color: #f1f1f1;
        }


        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <a href="../../../Home.php"><img class="logo" src="../../../photos/egy.png" alt="" /></a>
            <div class="links">

                <ul>
                    <li><a href="../../../Home.php">Home</a></li>
                    <li><a href="../../Insert_In.php">Insert</a></li>
                    <li><a href="../../tabels.php">Tables</a></li>
                    <li><a href="../../../services.php">Services</a></li>
                    <li><a href="../../../about.php">About</a></li>
                    <li><a href="../../../contactus.php">Contact</a></li>
                    <li><a href="../../../login/login.php">Login</a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="w3-container w3-display-container w3-padding-16">

        <h3 style="text-align: center;font-size: 50px; background-color:#9e9e9e; color: #fff;">1- Users</h3>
        <hr>
        <!-- start edit form -->

        <div class="w3-container w3-display-container w3-padding-16" style="width: 50%; position: relative; left: 25%;">
            <div class="w3-content w3-border-left w3-border-right w3-container w3-display-container w3-padding-16"
                style="position: relative; box-shadow: 0px 0px 20px 20px #333;">

                <h3 style="text-align: center;font-size: 50px;">Delete This Column</h3>
                <hr>
                <?php if (isset($_SESSION['Delete_user'])): ?>

                <div class="alert alert-danger text-center">
                    <?php echo $_SESSION['Delete_user']; ?>
                </div>

                <?php endif; ?>
                <?php session_unset(); ?>
                <!-- -------------------------------------- -->
                <?php if (isset($_SESSION['Error_booking'])): ?>

                <div class="alert alert-danger text-center">
                    <?php echo $_SESSION['Error_booking']; ?>
                </div>

                <?php endif; ?>
                <?php session_unset(); ?>

                <form action="../../../database/deleteTable.php" method="POST" enctype="multipart/form-data">
                    <p><label> ID</label></p>
                    <input class="w3-input w3-border" type="number" placeholder="Enter the ID that you want to Edit"
                        name="user_id"><br>

                    <p><button class="w3-button w3-green " style="width: 100%;" type="submit"
                            name="delete_user">Delete</button>
                    </p>
                    <p><button class="w3-button w3-gray"
                            style="width: 100%; text-decoration:none; color: #fff!important;"
                            name="Close">Close</button>
                    </p>
                </form>

            </div>
        </div>
        <!-- end edit form -->

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


    </div>
</body>

</html>