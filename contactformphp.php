<?php

if (! empty($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    $connection = mysqli_connect("localhost", "root", "test", "contactform_database") or die("Connection Error: " . mysqli_error($connection));
    $stmt = $conn->prepare("INSERT INTO tblcontact (namesz, email, subjects,messages) VALUES (?, ?, ?, ?)");
    
    $mailTo="nozipho@digitalresolve.co.za";
    $headers= "From: " ".$email";
    $txt= "You have recieved an email from ".$name.".\n\n".$message;

}

?>