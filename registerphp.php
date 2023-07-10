<?php 
include "connection.php";
if(isset($_POST['register']))
{
  $names=$_POST['name'];
  $surnames=$_POST['surname'];
  $usernames=$_POST['username'];
  $emails=$_POST['email'];
  $phones=$_POST['contact'];
  $Passwords=$_POST['password'];

//checking if values do not exist already
$checkinge="SELECT * FROM regtable WHERE email='$emails' || contact='$phones'";
$query4=mysqli_query($connection,$checkinge);
$op3=mysqli_num_rows($query4);
if($op3>0){

  $_SESSION['email']=$emails;
  $_SESSION['username']=$usernames;
  $_SESSION['cellphone']=$phones;
  
  print'<script> alert("User information cannot be the same")</script>';
  
}
  
else{
 $insert1="INSERT INTO regtable(names,surname,username,email,contact,passwords) VALUES('$names','$surnames','$usernames','$emails','$phones','$Passwords')";
 $query4=mysqli_query($connection,$insert1) or die('<script> alert("Failed to register!")</script>');
 print'<script> alert("You have successful registered")</script>';
 include "emailphp.php";
}


}
 ?>
