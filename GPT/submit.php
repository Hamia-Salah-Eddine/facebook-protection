<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'salah.hamia10@gmail.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  mail($to, $subject, $body);
  
  echo 'Thank you for your message!';
} else {
  echo 'Error: all fields are required';
}
?>