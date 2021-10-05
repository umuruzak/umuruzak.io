<?php
$to  = urldecode(htmlspecialchars($contacts));  // обратите внимание на запятую

// тема письма
$subject = 'Отзыв о Хумусии Циммес';

// текст письма
$message = 'Уважаемый ' . $_POST['name'] . ', Вы оставили негативный отзыв:<br />' . $_POST['message'] . '<br />
Помогите нам стать лучше <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
//$headers .= 'From: Иван <Ivan@example.com>' . "\r\n"; // Свое имя и email
//$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message);
?>
