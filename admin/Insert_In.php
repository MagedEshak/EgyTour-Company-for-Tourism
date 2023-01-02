<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin | Insert Tables</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS files -->
    <!-- Bootstrap, Google, W3-Schools CSS files -->
    <link rel="stylesheet" href="../css/w3.css">

    <!--Costumes CSS files -->
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/leon.css" />
    <link rel="icon" type="image/png" href="../photos/egy.png" />
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
    </style>
</head>




<body>



    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <a href="../Home.php"><img class="logo" src="../photos/egy.png" alt="" /></a>
            <div class="links">

                <ul>
                    <li><a href="../Home.php">Home</a></li>
                    <li><a href="tabels.php">Tables</a></li>
                    <li><a href="../services.php">Services</a></li>
                    <li><a href="../about.php">About</a></li>
                    <li><a href="../contactus.php">Contact</a></li>

                    <li><a href="../login/login.php">Login</a></li>

            
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->



    <div class="w3-container w3-display-container w3-padding-16">
        <h1 style="background-color:#333; color: #fff; text-align: center;font-size: 50px;">Insert in Database Tables
        </h1>
        <hr>

        <div class="w3-content w3-border-left w3-border-right w3-container w3-display-container w3-padding-16">
            <h3 style="text-align: center;font-size: 50px;">Trips</h3>
            <hr>
            <form action="../database/insert.php" method="POST" enctype="multipart/form-data">

                <p><label> Trip Picture</label></p>
                <input class="w3-input w3-border" type="file" name="Trip_Pic" required><br>

                <p><label> Picture 2</label></p>
                <input class="w3-input w3-border" type="file" name="picture2" required><br>

                <p><label> Picture 3</label></p>
                <input class="w3-input w3-border" type="file" name="picture3" required><br>

                <p><label> Picture 4</label></p>
                <input class="w3-input w3-border" type="file" name="picture4" required><br>

                <p><label> Trip name</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Trip" name="trip" required><br>

                <p><label> Trip Address</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Trip Address" name="address"><br>
                <p><label> Trip Price</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Trip Price" name="trip_price"><br>
                <p><label> Trip Descrition</label></p>
                <textarea class="w3-input w3-border" type="text" placeholder="About this Trip"
                    name="descrition"></textarea><br>
                <p><button class="w3-button w3-green " style="width: 100%;" type="submit"
                        name="insert_Trips">Insert</button>
                </p>
                <p><a class="w3-button w3-gray" style="width: 100%; text-decoration:none; color: #fff!important; "
                        href="tabels.php" name="insert_Trips">View Trips</a>
                </p>
            </form>

            <hr>


        </div>
    </div>

</body>

</html>