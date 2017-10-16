<!DOCTYPE html>

<html lang="en">

  <head>
    
    <meta name="description" content="Łukasz Rzeszutek - Contact form simple-php-script">
    <meta charset="UTF-8">
    <meta name="author" content="LR">
    <meta name="url" content="http://lukaszrzeszutek.com">
    <meta name="copyright" content="LR">
    <meta name="robots" content="index,follow">

  </head>

  <body>



<!-- Contact form php-script START -->


<?php

$to      = 'lrzeszutek@protonmail.com';         //Enter your email address
$name    = $_POST['imie'];                      //Retrieving values from the contact form
$email   = $_POST['email'];
$subject = 'Mail od ' . $name . ' (' . $email . ')';
$message = $_POST['tekst'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= "Content-Type: text/html; charset=utf-8\r\n";   //Polish characters

mail($to, $subject, $message, $headers);        //sending function

?>


<!-- Contact form php-script END -->



  	<p><b>Your message has been sent successfully. We'll get back to you as soon as possible.</b></p>

  	<p>If you want return to contact form <a href="index.html">click here.</a></p>
  	


  </body>

</html>