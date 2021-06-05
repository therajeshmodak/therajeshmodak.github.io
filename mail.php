<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = $_POST['time'];
$email = $_POST['email'];
$file = $_POST['file'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" First name: $fname \n Last name: $lname \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "therajeshmodak@gmail.com";
$subject = "New Survey";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>