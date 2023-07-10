<?php
// require 'phpmailer/PHPMailerAutoload.php';

require_once "PHPMailerAutoload.php";
$mail = new PHPMailer;
//Enable SMTP debugging.
$mail->SMTPDebug = 4;                           
//Set PHPMailer to use SMTP.
$mail->isSMTP();        
//Set SMTP host name                      
$mail->Host = "mail.digitalresolve.co.za";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                      
//Provide username and password
$mail->Username = "nozipho@digitalresolve.co.za";             
$mail->Password = "WeSolveNozipho24?";                       
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                       
//Set TCP port to connect to
$mail->Port = 587;                    
$mail->From = "nozipho@digitalresolve.co.za";
$mail->FromName = "Nozipho";
$mail->addAddress($emails, $names);
$mail->isHTML(true);
$mail->Subject = "Confirmation Email";
$mail->Body = "<i>You have successfully registered</i>";
$mail->AltBody = "You have succesfully registered";
if(!$mail->send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent successfully";
}

?>