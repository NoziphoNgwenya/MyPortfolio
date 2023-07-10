<?php 
include "connection.php";
if(isset($_POST['register']))
{
  $namez=$_POST['name'];
  $surnamez=$_POST['surname'];
  $usernamez=$_POST['username'];
  $emailz=$_POST['email'];
  $phonez=$_POST['contact'];
  $Passwordz=$_POST['password'];

//checking if values do not exist already
$checking="SELECT * FROM adminlog WHERE email='$emailz' || contact='$phonez' || username='$usernamez'";
$query5=mysqli_query($connection,$checking);
$opp=mysqli_num_rows($query5);
if($opp>0){

  $_SESSION['email']=$emailz;
  $_SESSION['username']=$usernamez;
  $_SESSION['contact']=$phonez;
  
  print'<script> alert("User information cannot be the same")</script>';
  
}
  
else{
 $insert2="INSERT INTO adminlog(namez,surname,username,email,contact,passwords) VALUES('$namez','$surnamez','$usernamez','$emailz','$phonez','$Passwordz')";
 $query5=mysqli_query($connection,$insert2) or die('<script> alert("Failed to register!")</script>');
 print'<script> alert("You have successful registered")</script>';
 include "emailphp.php";
}


}
 ?>
