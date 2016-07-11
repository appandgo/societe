<?php


$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 


$to   		= "z-anthony@hotmail.fr";//replace with your email


$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "Bcc: <briansoufir4@gmail.com>";
$headers[] = "X-Mailer: PHP/".phpversion();

$result=mail($to, $subject, $message, implode("\r\n", $headers));




print('ok');
die;

?>