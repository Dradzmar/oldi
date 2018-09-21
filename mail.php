<?php
$to = "alex.h@praid.com.ua";
$tema = "Форма обратной связи oldi";
$message = "Имя: ".$_POST['name']."<br>";
$message .= "E-mail: ".$_POST['email']."<br>";
$message .= "Номер телефона: ".$_POST['phone']."<br>";
$message .= "Сообщение: ".$_POST['message']."<br>";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: tratata@tratata.tata' . "\r\n";
$send = mail($to, $tema, $message, $headers);
if ($send == 'true')
 
{
echo "<b>Спасибо за отправку вашего сообщения!<p>";
echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";
}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}
?>