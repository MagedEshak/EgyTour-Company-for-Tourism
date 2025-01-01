<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <title>About</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS files -->
  <!-- Bootstrap, Google, W3-Schools CSS files -->

  <!--Costumes CSS files -->
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="Css/about.css" />
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="css/leon.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
  <link rel="icon" type="image/png" href="photos/egy.png" />

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

<body class="w3-content w3-border-left w3-border-right">

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

          <li class="pro"><a href="login/show-data.php"><span class="material-symbols-outlined">
                person
              </span></i></a>
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
  <div class="notic-img">
    <div class="head">
      <h1 class="notic-head">Egy Tours Packages</h1>

      <p class="note">
        we are experts in a wide selection of tourism services that are
        available in Egypt, as well as many neighbor countries like Jordon,
        Syria and Turkey. Egy Tours Egypt offers high quality services
        tailored to suit all tourists' needs and interests. Our slogan is
        "quality is our top priority".
      </p>
    </div>
  </div>

  <div class="ask">
    <div class="ask_img ask_div">
      <img src="photos/travel.png" title="travil" />
    </div>
    <div class="ask_info ask_div">
      <img src="photos/sky.png" title="sky" />
      <div class="ask-all">
        <h1 class="ask_head">You ask and we answer</h1>
        <p class="answer">
          Our staff experienced travel industry professionals and<br />
          are very enthusiastic about the services they promote<br />
          and offer. We are competent with our experienced staff,<br />
          excellent locations all over Egypt.
        </p>
      </div>
    </div>
  </div>

  <div class="notic-two">
    <div class="head">
      <h1 class="notic-head">Egy Travel Company</h1>

      <p class="note">
        Is the most reputable destination management company in Egypt.
      </p>
      <p class="note">
        Egy Tourism Company (2MIA), founded in 1970, is a public corporation
        responsible for stimulating, promoting and regulating the development
        of Egypt's tourism industry.
      </p>
    </div>
  </div>

  <div class="travel">
    <div class="main">
      <div class="travel_info travel_div">
        <h1 class="title">Egy Tours and Travel</h1>
        <h3 class="flight">Flight Ticketing Service</h3>
        <p class="subject">
          Egy Tours offers airline tickets booking Services, where the company
          is an agent for IATA global travel and tourism, We are agents for
          all international airlines (Egypt Air, Kuwait Airways, Qatar
          Airways, Royal Jordanian Airline, Emirates Airline, Saudi Airline,
          Lufthansa, British Airways………….. and private aviation company’s We
          provide reservations for all countries in the world at competitive
          prices to suit all levels and the best price in Egypt, We follow-up
          our clients in any change in dates trips and always communicate with
          our customers, Inc. Maxim Tours is your first choice in booking
          airline tickets.
        </p>
      </div>
      <div class="travel_img travel_div">
        <img class="car" src="photos/car.png" title="car" />
      </div>
    </div>
  </div>
  <script src="js/jquery-3.5.1.min.js "></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>