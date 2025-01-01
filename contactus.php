<?php session_start(); ?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="Css/contactus.css" />
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="css/leon.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
  <link rel="icon" type="image/png" href="photos/egy.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

  <title>Contact us</title>

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

  <div class="container_frm">
    <div class="para">
      <p class="inquiry">For any inquiries, please ...</p>
      <div class="contactus">
        <h1>Contact us</h1>
      </div>
      <!-- if empty data -->
      <?php if (isset($_SESSION['successful'])): ?>

      <div class="alert alert-success text-center">
        <?php echo $_SESSION['successful']; ?>
      </div>

      <?php endif; ?>

      <?php unset($_SESSION['successful']); ?>
      <!--end empty data -->

      <!-- if empty data -->
      <?php if (isset($_SESSION['contactUsErorr'])): ?>

      <div class="alert alert-danger text-center">
        <?php echo $_SESSION['contactUsErorr']; ?>
      </div>

      <?php endif; ?>

      <?php unset($_SESSION['contactUsErorr']); ?>
      <!--end empty data -->

      <form id="contact-form" action="database/contact.php" method="POST">
        <input name="name" type="text" class="control" placeholder="Your Name" /><br />

        <input name="MobileNumber" type="text" class="control" placeholder="Your Mobile Number " /><br />

        <input name="Email" type="email" class="control" placeholder="E-mail Address" /><br />

        <textarea name="messeage" type="text" class="control" placeholder="Write Your inquiry"></textarea><br />

        <input name="messeageSubmit" type="submit" class="submit" value="SEND MESSAGE" /><br />
      </form>
    </div>




  </div>
  <script src="js/jquery-3.5.1.min.js "></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>