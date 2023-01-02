<?php
include('../database/connection.php');

$Trips_sql = "SELECT * FROM inserttrip";
$Trips_result = $connection->query($Trips_sql);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS files -->
    <!-- Bootstrap, Google, W3-Schools CSS files -->

    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/w3.css" />
    <link rel="stylesheet" href="../css/leon.css" />


    <!--Costumes CSS files -->
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/services.css" />
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
                    <li><a href="../services.php">Services</a></li>
                    <li><a href="../about.php">About</a></li>
                    <li><a href="../contactus.php">Contact</a></li>

                    <?php if (!isset($_SESSION['user_name'])): ?>

                    <li><a href="../login/login.php" target="_blank">Login</a></li>

                    <?php else: ?>

                    <li class="pro"><a href="../login/show-data.php"><img style="width: 35px;" src="../photos/person.png"
                                alt="Profile"></i></a></i></a>
                        <ul>
                            <li><a href="../login/logout.php">Log out</a></li>
                        </ul>

                    </li>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- !PAGE CONTENT! -->
    <div class="w3-content w3-border-left w3-border-right">
        <div class="w3-main w3-white">

            <!-- Push down content on small screens -->
            <div class="w3-hide-large" style="margin-top:80px"></div>
            <?php foreach ($Trips_result as $Trips_row) { ?>

            <?php if ($Trips_row['id'] == 1) { ?>
            <!-- Slideshow Header -->
            <div class="w3-container" id="apartment">
                <h2 class="w3-text-green" style="text-align: center;font-weight: 900;">
                    <?php echo $Trips_row['trip']; ?>
                </h2>
                <div class="w3-display-container mySlides">
                    <img src="../photos/services/Trips/sharm/trip1/<?php echo $Trips_row['photo']; ?>"
                        style="width:100%;margin-bottom:-6px">

                </div>
                <div class="w3-display-container mySlides">
                    <img src="../photos/services/Trips/sharm/trip1/<?php echo $Trips_row['photo2']; ?>"
                        style="width:100%;margin-bottom:-6px">

                </div>
                <div class="w3-display-container mySlides">
                    <img src="../photos/services/Trips/sharm/trip1/<?php echo $Trips_row['photo3']; ?>"
                        style="width:100%;margin-bottom:-6px">

                </div>
                <div class="w3-display-container mySlides">
                    <img src="../photos/services/Trips/sharm/trip1/<?php echo $Trips_row['photo4']; ?>"
                        style="width:100%;margin-bottom:-6px">

                </div>
            </div>
            <div class="w3-row-padding w3-section">
                <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off"
                        src="../photos/services/Trips/sharm/trip1/<?php echo $Trips_row['photo']; ?>"
                        style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                </div>
                <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off"
                        src="../photos/services/Trips/sharm/trip1/<?php echo $Trips_row['photo2']; ?>"
                        style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                </div>
                <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off"
                        src="../photos/services/Trips/sharm/trip1/<?php echo $Trips_row['photo3']; ?>"
                        style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                </div>
                <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off"
                        src="../photos/services/Trips/sharm/trip1/<?php echo $Trips_row['photo4']; ?>"
                        style="width:100%;cursor:pointer" onclick="currentDiv(4)">
                </div>
            </div>

            <div class="w3-container">

                <hr>

                <h4><strong>Extra Info</strong></h4>
                <p>
                    <?php echo $Trips_row['descrition']; ?>
                </p>

                <p>We accept: <i class="fa fa-credit-card w3-large"></i> </p>


                <hr>
                <div class="w3-container w3-display-container w3-padding-16">
                    <h3>The price</h3>
                    <h3>per night is
                        <?php echo $Trips_row['trip_price']; ?> EGP
                    </h3>
                    <h5> per person</h5>
                    <hr>
                    
                    <form action="booking_info/booking_information.php" method="POST">
                        <p><label><i class="fa fa-calendar-check-o"></i> From</label></p>
                        <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="CheckIn"
                            required><br>
                        <p><label><i class="fa fa-calendar-o"></i> To</label></p>
                        <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="CheckOut"
                            required><br>
                        <p><label><i class="fa fa-male"></i> Adults</label></p>
                        <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="12"><br>
                        <p><button class="w3-button w3-green " type="submit" name="Booking_Now_Submitted">
                                Search</button>
                        </p>

                        <hr>
                    </form>



                </div>

                <?php } ?><!-- end if -->
                <?php } ?><!-- endforeach -->


                <footer class="w3-container w3-padding-16" style="margin-top:32px">Powered by <a href="Home.php"
                        title="W3.CSS" target="_blank" class="w3-hover-text-green">EgyTour</a></footer>

                <!-- End page content -->
            </div>
        </div>

        <script>
            // Script to open and close sidebar when on tablets and phones
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            // Slideshow Apartment Images
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = x.length }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " w3-opacity-off";
            }
        </script>
        <script src="js/jquery-3.5.1.min.js "></script>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>