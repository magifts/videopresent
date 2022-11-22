<?php

$name = $_POST['name'];
$tel = $_POST['phone'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);

$name = urlencode($name);
$tel = urlencode($tel);

$name = trim($name);
$tel = trim($tel);

if (mail("magifts@mail.ru",
    "НОВОГОДНЕЕ ВИДЕОПОЗДРАВЛЕНИЕ ОТ ДЕДА МОРОЗА ПО ИМЕНИ",
    "Имя: ".$name."\n".
    "Телефон: ".$tel,
    "From: info@webriz.ru \r\n")
){
    
header("Location: /form/thanks.html");
// echo ("письмо отправлено")
}

else {
    echo ("Error");
}

// if (isset($_POST['name'])) {$phone = $_POST['name'];}
// if (isset($_POST['phone'])) {$name = $_POST['phone'];}

// /* Сюда впишите свою эл. почту */
// $myaddres  = "magifts@mail.ru"; // кому отправляем

// /* А здесь прописывается текст сообщения, \n - перенос строки */
// $mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name";

// /* А эта функция как раз занимается отправкой письма на указанный вами email */
// $sub='Заказ'; //сабж
// $email='Заказ обратного звонка'; // от кого
// $send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

// ini_set('short_open_tag', 'On');
// header('Location: /form/thanks.html');

?>