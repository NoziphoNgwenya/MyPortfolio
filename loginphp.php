<?php
include 'connection.php';

if(isset($_POST['login']))
{
  $email=$_POST['email'];
  // $username=$_POST['username'];
  $password=$_POST['password'];
  $verifyLog="SELECT * FROM regtable WHERE email='$email' AND passwords='$password'";
  $query=mysqli_query($connection,$verifyLog);
  $final=mysqli_num_rows($query) or die ("<script> alert('something went wrong!')</script>");
  if($final>0)
  {
    $_SESSION['email']=$email;
    // $_SESSION['email']=$username;
    $_SESSION['passwords']=$password;

  }
  else
  {
    echo"<script> alert('Incorrect credentilals!')</script>";
  }
}


?>