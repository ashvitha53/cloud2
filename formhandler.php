<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@willowy-cassata-86f47c.netlify.app';
$email_subject = 'New form submission';
$email_body = "User name: $name.\n" .
              "User email: $visitor_email.\n" .
              "Subject: $subject.\n" .
              "User message: $message.\n";

$to = 'btechit2ndyr@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n"; // Concatenate the headers

mail($to, $email_subject, $email_body, $headers);
header("Location: C:\Users\DELL\Desktop\unii\contact.html"); // Redirect to a contact page
exit(); // Ensure script stops execution after redirect
?>