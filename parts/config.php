<?php  
     //подключение к бд
     $link = mysqli_connect('localhost', 'root', '', '08092020');

     //Устанавливаем кодировку
     mysqli_set_charset($link, 'utf8');
?>