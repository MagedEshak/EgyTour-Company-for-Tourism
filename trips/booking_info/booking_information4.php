<?php
include('../../database/connection.php');

$Trips_sql = "SELECT * FROM inserttrip";
$Trips_result = $connection->query($Trips_sql);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/w3.css" />

    <link rel="stylesheet" href="../../css/all.min.css" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../../css/leon.css" />

    <link rel="icon" type="image/png" href="../../photos/egy.png" />
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
            <a href="../../Home.php"><img class="logo" src="../../photos/egy.png" alt="" /></a>
            <div class="links">

                <ul>
                    <li><a href="../../Home.php">Home</a></li>
                    <li><a href="../../services.php">Services</a></li>
                    <li><a href="../../about.php">About</a></li>
                    <li><a href="../../contactus.php">Contact</a></li>

                    <?php if (!isset($_SESSION['user_name'])): ?>

                    <li><a href="../../login/login.php">Login</a></li>

                    <?php else: ?>

           
                        <li class="pro"><a href="../../login/show-data.php"><img style="width: 35px;" src="../../photos/person.png"
                                alt="Profile"></i></a></i></a>
                        <ul>
                            <li><a href="../../login/logout.php">Log out</a></li>
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

            <!-- Slideshow Header -->
            <div class="w3-container" id="apartment">
                <h2 class="w3-text-green" style="text-align: center;font-weight: 900;">Complete your information to
                    confirm your
                    reservation
                </h2>
            </div>
            <hr>



            <div class="w3-container">
                <h4><strong>Booking Details</strong></h4>
                <div class="w3-row w3-large">
                    <div class="w3-col s6">
                        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $date_from = filter_var($_POST['CheckIn'], FILTER_SANITIZE_STRING);
                            $date_to = filter_var($_POST['CheckOut'], FILTER_SANITIZE_STRING);
                            $numberAdults = filter_var($_POST['Adults'], FILTER_SANITIZE_NUMBER_INT); ?>

                        <p><i class="fa fa-fw fa-male"></i> Max people:<?php echo " " . $numberAdults ?></p>

                    </div>
                    <div class="w3-col s6">
                        <p><i class="fa fa-fw fa-clock-o"></i> From: <?php echo " " . $date_from ?></p>
                        <p><i class="fa fa-fw fa-clock-o"></i> To: <?php echo " " . $date_to ?></p>
                        <?php } ?>
                    </div>
                </div>
                <hr>
                <p style="text-align: center;"><a class="w3-button w3-green" style="text-decoration: none;"
                        href="../trip5.php">
                        Booking modification</a></p>

                <hr>


                <p>We accept: <i class="fa fa-credit-card w3-large"></i> </p>

                <p style="font-size: 30px; text-align: center;">Total Price :

                    <?php foreach ($Trips_result as $Trips_row) {
                        if ($Trips_row['id'] == 5) {
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $date_from = filter_var($_POST['CheckIn'], FILTER_SANITIZE_STRING);
                                $date_to = filter_var($_POST['CheckOut'], FILTER_SANITIZE_STRING);
                                $numberAdults = filter_var($_POST['Adults'], FILTER_SANITIZE_NUMBER_INT);

                                $dat_from = strtotime($date_from);
                                $dat_to = strtotime($date_to);

                                $diff = ($dat_to - $dat_from) / 86400;

                                $total_price = ($diff * $Trips_row['trip_price']) * $numberAdults;
                                echo $total_price;
                            }
                        }
                    } ?> EGP
                </p>
                <hr>

                <!-- Contact -->
                <div class="w3-container" id="contact">
                    <h2>YOUR PERSONAL INFORMATION</h2>
                    <i class="fa fa-map-marker" style="width:30px"></i> Egypt, Luxor<br>
                    <i class="fa fa-phone" style="width:30px"></i> Phone: 192254<br>

                    <?php if (!isset($_SESSION['user_name'])): ?>
                    <div class="alert alert-danger text-center">
                        Sorry, you must log in first to booking successfully
                    </div>

                    <?php else: ?>
                    <form action="../../database/information.php" method="POST">


                        <input class="w3-input w3-border" name="CheckIn" type="hidden" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            echo $_POST['CheckIn'];
                        } ?>"><br>

                        <input class="w3-input w3-border" name="CheckOut" type="hidden" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            echo $_POST['CheckOut'];
                        } ?>"><br>

                        <input class="w3-input w3-border" name="Adults" type="hidden" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            echo $_POST['Adults'];
                        } ?>"><br>

                        <p><input class="w3-input w3-border" type="hidden" name="total_price" value="<?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $date_from = filter_var($_POST['CheckIn'], FILTER_SANITIZE_STRING);
                            $date_to = filter_var($_POST['CheckOut'], FILTER_SANITIZE_STRING);
                            $numberAdults = filter_var($_POST['Adults'], FILTER_SANITIZE_NUMBER_INT);

                            $dat_from = strtotime($date_from);
                            $dat_to = strtotime($date_to);

                            $diff = ($dat_to - $dat_from) / 86400;

                            $total_price = ($diff * 800) * $numberAdults;
                            echo $total_price;



                        } ?>">

                        <p><input class="w3-input w3-border" type="text" placeholder="Yorur Name" required name="name"
                                value="<?php if (isset($_SESSION['user_name'])):
                            echo $_SESSION['user_name'];
                        else:
                        endif; ?>">
                        </p>
                        <p><input class="w3-input w3-border" type="text" placeholder="Phone Number" required
                                name="phone" value="<?php if (isset($_SESSION['user_name'])):
                            echo $_SESSION['user_phone'];
                        else:
                        endif; ?>">
                        </p>

                        <?php if (isset($_SESSION['user_name'])): ?>
                        <p><input class="w3-input w3-border" type="email" placeholder="E-mail" name="email"
                                value="<?php echo $_SESSION['user_email']; ?>" required>
                        </p>
                        <?php else: ?>
                        <p><input class="w3-input w3-border" type="email" placeholder="E-mail" name="email" required>
                        </p>
                        <?php endif; ?>
                        <p><input class="w3-input w3-border" type="text" placeholder="The Address" required
                                name="address">
                        </p>
                        <p><input class="w3-input w3-border" type="text" placeholder="Card Number" maxlength="14"
                                required name="visa">
                        </p>
                        <p><input class="w3-input w3-border" type="text" placeholder="cvv / cvc2" maxlength="3" required
                                name="cvv">
                        </p>
                        <p>Expiry date <select name="date_mon" id="w3-input w3-border" required>
                                <option></option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="date_year" id="w3-input w3-border" required>
                                <option></option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                            </select>
                        </p>
                        <button type="submit" class="w3-button w3-green" name="Booking_Submitted">Submit</button>

                        <hr>

                        <?php if (isset($_SESSION['Booking_Submitted'])): ?>
                        <p><label><i class="fa fa-calendar-check-o" style="color:#4CAF50 !important;"></i>
                                <?php echo ($_SESSION['Booking_Submitted']); ?>
                            </label>
                            <?php endif; ?>


                    </form>
                    <?php endif; ?>
                </div>

                <footer class="w3-container w3-padding-16" style="margin-top:32px">Powered by <a href="Home.php"
                        title="W3.CSS" target="_blank" class="w3-hover-text-green">EgyTour</a></footer>

                <!-- End page content -->
            </div>
        </div>
        <script src="js/jquery-3.5.1.min.js "></script>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>