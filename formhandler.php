<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['massage'];


$email_from = '8077vishal@gmail.com';

$email_subject = 'New Form Subission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Massage: $massage.\n";


$to = '8077vishal@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "reply to: $visitor_email \r\n";

email($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
