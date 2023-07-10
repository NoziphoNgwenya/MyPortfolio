<?php
include 'connection.php';
include 'registerPHP.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nozipho Ngwenya Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
  
</head>
<body>

<!-- <div class="p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap 5 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div> -->

<header id="header" class="fixed-top" style="background-color:black;>
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>Already have an account?</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">LOGIN</a></li>
              
            </ul>
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

<div class="container mt-5" style="padding-top:80px;">
  <div class="row">
    <div class="col-sm-12">
        <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
        <form action="register.php" name="registerForm" id="registerForm" method="post">
        <label for="name">Name </label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="surname">Surname </label><br>
        <input type="text" id="surname" name="surname" required><br><br>
        <label for="name">Username </label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="eg me@gmail.com" required ><br><br>
        <label for="contact">Cellphone</label><br>
        <input type="tel" id="contact" name="contact" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" title="inter a valid number" placeholder="eg 079 568 9685" required><br><br>
        <label for="sname">Password </label><br>
        <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password01" required><br><br>
        <button type="submit" value="Submit" name="register" class="button" >SUBMIT</button>
       
    </form>
</div>
            
        </div>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>&copy created by Nozipho Ngwenya</p>
</div>

</body>
</html>
