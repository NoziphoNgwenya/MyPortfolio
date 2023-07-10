<?php
include 'connection.php';


if(isset($_POST['login']))
{
  $email=$_POST['email'];
  // $username=$_POST['username'];
  $password=$_POST['password'];
 // $time=$_POST['time'];
  $verifyLog="SELECT * FROM adminlog WHERE email='$email' AND passwords='$password'";
  $query=mysqli_query($connection,$verifyLog);
  $final=mysqli_num_rows($query) or die ("<script> alert('something went wrong!')</script>");
  if($final>0)
  {
    $_SESSION['email']=$email;
    // $_SESSION['email']=$username;
    $_SESSION['passwords']=$password;

    $insertto="INSERT INTO logins(email,pass) VALUES('$email','$password')";
    $query5=mysqli_query($connection,$insertto) or die('<script> alert("Failed to register!")</script>');
   
  }
  else
  {
    echo"<script> alert('Incorrect credentilals!')</script>";
  }
  }

// if($_SESSION && $_SESSION['email']=$email)
// {
// $count=$count++;
// }
?>