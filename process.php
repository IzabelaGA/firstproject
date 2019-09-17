<?php
$to = 'izabela.sosnowska23@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject= 'Nowy mail od ' . $name . ' (' . $email .')';
$message = $_POST['message'];
// $headers = 'From: ' . $name'' . ' (' . $email .')';
$headers = 'From: ' . $_POST['email'] . "\r\n" .
$headers .= 'Content-type: text/html; charset=utf-8\r\n';

mail($to, $subject, $message, $headers);
echo 'Wiadomosć wysłana';
?>