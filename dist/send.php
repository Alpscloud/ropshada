<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Коттеджный поселок в Ленинградской области, участок в коттеджном поселке, загородный дом" />
<meta name="keywords" content="участок в коттеджном поселке, теплый дом, купить участок, экопоселение, загородные коттеджи, дом в коттеджном поселке, участки и коттеджи в ленобласти" />
<title>Untitled Document</title>
</head>

<body>
<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['sub'])) {$sub = $_POST['sub'];}
 if (isset($_POST['body'])) {$body = $_POST['body'];}

/* Сюда впишите свою эл. почту */
 $address = "vladimir@ropshada.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Имя: $name \nE-mail: $email \nТема: $sub \nТекст: $body";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 if ($send == 'true')
 {
 echo "Сообщение отправлено";
 }
 else 
 {
 echo "Сообщение не отправлено";
 }
?>