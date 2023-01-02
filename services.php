<?php
include('database/connection.php');

$sql = "SELECT * FROM inserttrip";
$result = $connection->query($sql);


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="css/leon.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/services.css" />
  <link rel="icon" type="image/png" href="photos/egy.png" />
  <title>services</title>
</head>

<body>
  <!-- Start Header -->
  <div class="header">
    <div class="container">
      <a href="Home.php"><img class="logo" src="photos/egy.png" alt="" /></a>
      <div class="links">

        <ul>
          <li><a href="Home.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contactus.php">Contact</a></li>

          <?php if (!isset($_SESSION['user_name'])): ?>

          <li><a href="login/login.php">Login</a></li>

          <?php else: ?>

            <li class="pro"><a href="login/show-data.php"><img style="width: 35px;" src="photos/person.png"
                alt="Profile"></i></a>
            <ul>
              <li><a href="login/logout.php">Log out</a></li>
            </ul>

          </li>

          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Header -->
  <!--  A Slideshow -->

  <!-- Slideshow container -->
  <div class="slideshow-container">
    <div class="mySlides">
      <div class="numbertext">1 / 5</div>
      <img src="photos/py.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 5</div>
      <img src="photos/alex (2).png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 5</div>
      <img src="photos/hur.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 5</div>
      <img src="photos/tem.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 5</div>
      <img src="photos/cities/aswan.png" style="width:100%">
    </div>



    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Image text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail images -->
    <div class="row">
      <div class="column">
        <img class="demo cursor" src="photos/py.png" style="width:100%" onclick="currentSlide(1)" alt="Cairo">
      </div>
      <div class="column">
        <img class="demo cursor" src="photos/alex (2).png" style="width:100%" onclick="currentSlide(2)"
          alt="Alexandria">
      </div>
      <div class="column">
        <img class="demo cursor" src="photos/hur.png" style="width:100%" onclick="currentSlide(3)" alt="Hurghada ">
      </div>
      <div class="column">
        <img class="demo cursor" src="photos/tem.png" style="width:100%" onclick="currentSlide(4)" alt="Luxor">
      </div>
      <div class="column">
        <img class="demo cursor" src="photos/cities/aswan.png" style="width:100%" onclick="currentSlide(5)" alt="Aswan">
      </div>
    </div>
  </div>



  <!-- cities -->


  <div class="citiesRow">
    <h1 class="head">Cities</h1>
    <!-- foreach  -->
    <?php foreach ($city_result as $city_row) { ?>


    <!-- City 1 -->

    <?php if ($city_row['id'] == 1) { ?>
    <a href="subServices.php">
      <div class="citiesColumn">
        <div class="card one" style="background-image: url(photos/cities/<?php echo $city_row['city_picture']; ?>);">
          <div class="citiesContainer">
            <h2>Egypt</h2>
            <h5>
              <?php echo $city_row['city_name']; ?>
            </h5>
          </div>
        </div>
      </div>
    </a>
    <!-- end if -->
    <?php } ?><!-- end if -->
    <!-- end City 1 -->

    <!-- City 2 -->
    <?php if ($city_row['id'] == 2) { ?>
    <a href="subServices.php">
      <div class="citiesColumn">
        <div class="card one" style="background-image: url(photos/cities/<?php echo $city_row['city_picture']; ?>);">
          <div class="citiesContainer">
            <h2>Egypt</h2>
            <h5>
              <?php echo $city_row['city_name']; ?>
            </h5>
          </div>
        </div>
      </div>
    </a>
    <?php } ?><!-- end if -->
    <!-- end City 2 -->

    <!-- City 3 -->
    <?php if ($city_row['id'] == 3) { ?>
    <a href="subServices.php">
      <div class="citiesColumn">
        <div class="card one" style="background-image: url(photos/cities/<?php echo $city_row['city_picture']; ?>);">
          <div class="citiesContainer">
            <h2>Egypt</h2>
            <h5>
              <?php echo $city_row['city_name']; ?>
            </h5>
          </div>
        </div>
      </div>
    </a>
    <?php } ?><!-- end if -->
    <!-- end City 3 -->

    <!-- City 4 -->
    <?php if ($city_row['id'] == 4) { ?>
    <a href="subServices.php">
      <div class="citiesColumn">
        <div class="card one" style="background-image: url(photos/cities/<?php echo $city_row['city_picture']; ?>);">
          <div class="citiesContainer">
            <h2>Egypt</h2>
            <h5>
              <?php echo $city_row['city_name']; ?>
            </h5>
          </div>
        </div>
      </div>
    </a>
    <?php } ?><!-- end if -->
    <!-- end City 4 -->

    <!-- City 5 -->
    <?php if ($city_row['id'] == 5) { ?>
    <a href="subServices.php">
      <div class="citiesColumn">
        <div class="card one" style="background-image: url(photos/cities/<?php echo $city_row['city_picture']; ?>);">
          <div class="citiesContainer">
            <h2>Egypt</h2>
            <h5>
              <?php echo $city_row['city_name']; ?>
            </h5>
          </div>
        </div>
      </div>
    </a>

    <?php } ?><!-- end foreach -->
    <?php } ?><!-- end foreach -->
    <!-- end City 5 -->

  </div>


  <!-- offers -->
  <div id="container">
    <h1 class="head">Honey moon</h1>

    <div class="roww">
      <!-- foreach  -->
      <?php foreach ($result as $row) { ?>

      <a href="trips/<?php echo $row['id']; ?>.php" class="divimg">
        <img style="height: 300px" src="photos/<?php echo $row['photo']; ?>" />
        <h2 class="p">
          <?php echo $row['trip'] ?>
        </h2>
        <h6 class="p">
          <?php echo $row['address'] ?>
        </h6>
        <p class="prag">
          <?php echo $row['descrition'] ?>
          <hr>
          <h4>Trip Price is
            <?php echo $row['trip_price'] . " EGP" ?>
          </h4>
        </p>

      </a>
      <?php } ?><!-- end foreach -->

    </div>

    <footer class="w3-container w3-padding-16" style="margin-top:32px">Powered by <a href="Home.php" title="W3.CSS"
        target="_blank" class="w3-hover-text-green">EgyTour</a></footer>
        
  </div>
  <script src="js/Slideshow.js"></script>
  <script src="js/jquery-3.5.1.min.js "></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>