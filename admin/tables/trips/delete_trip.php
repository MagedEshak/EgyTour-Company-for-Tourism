<?php

include('../../../database/connection.php');


$inserttrip_sql = "SELECT * FROM inserttrip";
$inserttrip_result = $connection->query($inserttrip_sql);


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
        <h3 style="text-align: center;font-size: 50px; background-color:#9e9e9e; color: #fff;">2- Trips</h3>
        <hr>

        <!-- start edit form -->

        <div class="w3-container w3-display-container w3-padding-16" style="width: 50%; position: relative; left: 25%;">
            <div class="w3-content w3-border-left w3-border-right w3-container w3-display-container w3-padding-16"
                style="position: relative; box-shadow: 0px 0px 20px 20px #333;">

                <h3 style="text-align: center;font-size: 50px;">Delete This Column</h3>
                <hr>
                <?php if (isset($_SESSION['Error_booking'])): ?>

                <div class="alert alert-danger text-center">
                    <?php echo $_SESSION['Error_booking']; ?>
                </div>

                <?php endif; ?>
                <?php session_unset(); ?>

                <form action="../../../database/deleteTable.php" method="POST" enctype="multipart/form-data">
                    <p><label> ID</label></p>
                    <input class="w3-input w3-border" type="number" placeholder="Enter the ID that you want to Edit"
                        name="trip_id"><br>

                    <p><button class="w3-button w3-green " style="width: 100%;" type="submit"
                            name="delete_trip">Delete</button>
                    </p>
                    <p><button class="w3-button w3-gray"
                            style="width: 100%; text-decoration:none; color: #fff!important; "
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

    </div>
</body>

</html>