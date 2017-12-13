<?php
include("phpmailer/class.phpmailer.php");
include("phpmailer/class.smtp.php");
$mail = new PHPMailer(true); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";
$mail->Port = 25; // or 587
$mail->IsHTML(true);
$mail->Username = "YouruserName";
$mail->Password = "YOurpassword";
$mail->From="yourusername";
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("rahdinam@gmail.com");
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}
?>
