<?php
include 'connection.php';
include 'loginPHP.php';
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
<?php
if(!isset($_SESSION['username']) AND !isset($_SESSION['passwords']))
{
  ?>

<nav id="navbar" class="navbar" style="background-color:black;">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>Dont have an accout yet?</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="register.php">Register</a></li>
              
            </ul>
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
        <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
        <form action="login.php" method="post" required>
    <label>Email<br>
      <input type="text" name="email" placeholder="eg me@gmail.com" >
    </label><br>
    <label>Password<br>
      <input type="password" name="password" required>
    </label><br>
     <button type="submit" name="login" class="button">Login</button>
  </form></div>
            
        </div>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>&copy created by Nozipho Ngwenya</p>
</div>
<?php
}
else{

?>

<header id="header" class="fixed-top" style="background-color:black;">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<nav id="navbar" class="navbar" >
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>Logout</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="register.php"><form action="loggin.php" method="post" name="logout">
        <button type="submit" name="logout" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">logout</button>
        <?php
        if(isset($_POST['logout']))
        {
          session_destroy();
          header('Location:login.php');
        }?>  
      </form></a></li>
              
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
        <p><?php
    $password=$_SESSION['passwords'];
$displayA="SELECT * FROM regtable WHERE passwords='$password'";
$querylogin=mysqli_query($connection,$displayA);
$verI=mysqli_fetch_all($querylogin,MYSQLI_ASSOC);

foreach ($verI as $arry) {
	// code...


echo"<br>";
echo "<center><h5><b>".$arry['names']." ".$arry['surname']."</b></h5></center>";
echo"<center><h6>You have successfully logged on to my portfolio</h6></center>";
?>
                <p>You can review and send comments or any advice on what I should update or add to my portal by clicking on the following link below</p>
                <p><a href="contact.html">Comments</a></p>
        </p>
        </div>
            
        </div>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>&copy created by Nozipho Ngwenya</p>
</div>
<?php
}}
?>
</body>
</html>
