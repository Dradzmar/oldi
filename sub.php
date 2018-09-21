<?php
$to = "alex.h@praid.com.ua";
$tema = "Форма подписки";
$message .= "E-mail: ".$_POST['email']."<br>";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: tratata@tratata.tata' . "\r\n";
mail($to, $tema, $message, $headers);
?>