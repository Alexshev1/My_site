<?php
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$__other = $_POST['__other'];
$user_name = htmlspecialchars($user_name);
$email = htmlspecialchars($user_email);
$__other = htmlspecialchars($__other);
$user_name = urldecode($user_name);
$user_email = urldecode($user_email);
$__other = urldecode($__other);
$user_name = trim($user_name);
$user_email = trim($user_email);
$__other = trim($__other);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("sanya.shevelev@yandex.ru", "Заявка с сайта", "ФИО:".$user_name.". E-mail: ".$user_email ,"From: alexprorussian@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>
