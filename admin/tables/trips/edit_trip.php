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
                <h3 style="text-align: center;font-size: 50px;">Edit</h3>
                <hr>
                <?php if (isset($_SESSION['data_error'])): ?>

                <div class="alert alert-danger text-center">
                    <?php echo $_SESSION['data_error']; ?>
                </div>

                <?php endif; ?>

                <form action="../../../database/edit.php" method="POST" enctype="multipart/form-data">

                    <p><label> ID</label></p>
                    <input class="w3-input w3-border" type="number" placeholder="Enter the ID that you want to Edit"
                        name="trip_id"><br>

                    <p><label> Trip Picture</label></p>
                    <input class="w3-input w3-border" type="file" name="Trip_Pic"><br>

                    <p><label> Picture 2</label></p>
                    <input class="w3-input w3-border" type="file" name="picture2"><br>

                    <p><label> Picture 3</label></p>
                    <input class="w3-input w3-border" type="file" name="picture3"><br>

                    <p><label> Picture 4</label></p>
                    <input class="w3-input w3-border" type="file" name="picture4"><br>

                    <p><label> Trip name</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="Trip" name="trip"><br>

                    <p><label> Trip Address</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="Trip Address" name="address"><br>
                    <p><label> Trip Price</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="Trip Price" name="trip_price"><br>
                    <p><label> Trip Descrition</label></p>
                    <textarea class="w3-input w3-border" type="text" placeholder="About this Trip"
                        name="descrition"></textarea><br>

                    <p><button class="w3-button w3-green " style="width: 100%;" type="submit"
                            name="edit_trip">Edit</button>
                    </p>
                    <p><button class="w3-button w3-gray"
                            style="width: 100%; text-decoration:none; color: #fff!important; "
                            name="Close">Close</button>
                    </p>
                </form>

                <hr>
            </div>
        </div>
        <!-- end edit form -->
        <table id="myTable">


            <tr class="header">
                <th style="width:5%;">Id</th>
                <th style="width:25%;">Trip Name</th>
                <th style="width:5%;">Trip 1</th>
                <th style="width:5%;">Trip 2</th>
                <th style="width:5%;">Trip 3</th>
                <th style="width:5%;">Trip 4</th>
                <th style="width:15%;">Trip address</th>
                <th style="width:30%;">Trip descrition</th>
                <th style="width:5%;">Trip Price</th>
            </tr>
            <?php foreach ($inserttrip_result as $key) { ?>
            <tr>
                <td><?php echo $key['id'] ?></td>
                <td><?php echo $key['trip'] ?></td>
                <td><?php echo $key['photo'] ?></td>
                <td><?php echo $key['photo2'] ?></td>
                <td><?php echo $key['photo3'] ?></td>
                <td><?php echo $key['photo4'] ?></td>
                <td><?php echo $key['address'] ?></td>
                <td><?php echo $key['descrition'] ?></td>
                <td><?php echo $key['trip_price'] . " EGP" ?></td>

            </tr>
            <?php } ?>

        </table>

    </div>
</body>

</html>