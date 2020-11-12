<?php
$question = $_POST['question'];
$fio = $_POST['fio'];
$fio = htmlspecialchars($fio);
$fio = urldecode($fio);
$tel = $_POST['tel'];
$email = $_POST['e-mail'];
$email = urldecode($email);
$email = htmlspecialchars($email);
$url = $_POST['url'];

mail("moscow@northern-empire.com", "Вопрос с сайта", "Вопрос:".$question.". Со страницы:".$url.". Телефон:".$tel.". ФИО:".$fio.". E-mail: ".$email ,"From: webmaster@north-empire.com \r\n");

?>
