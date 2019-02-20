<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$priority = $_POST['priority'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Priority: $priority \n Message: $message";
$recipient = "tyrmere@yahoo.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
