<?php
    include('config.php');


    $template = [
        'menu' => [] 
    ];

    $sql = "SELECT * FROM menu ORDER BY priority ASC";
    $result = mysqli_query($link, $sql);


    while ($row = mysqli_fetch_assoc($result)) {
        $template['menu'] [] = $row ;
    }
    // echo '<pre>';
    // print_r($result);
    // echo '</pre>';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <title><?= "Блог - $title"; ?></title> -->
    <title><?= 'Блог -'.$title; ?></title>    
    <link rel="stylesheet" href="./css/style.css">
</head>

<body id="top">
    <div class="wrapper">
        <header class="header">

            <nav class="header__logo">
                <a class="header__logo_nav" href="#"></a>
            </nav>

            <nav class="header__nav">     
            <?php foreach($template['menu'] as $item) : ?>
                <a href=" <?= $item['link']; ?> " >
                    <?= $item['title']; ?>
                    
                </a> <br/>
            <?php endforeach; ?>


                <!-- <a class="header__nav_link header__nav_main" href="/">
                    Главная
                </a>            
                <a class="header__nav_link header__about" href="../about.php">
                    О нас
                </a>            
                <a class="header__nav_link header__nav_contacts" href="#">
                    Контакты
                </a>            
                <a href="#" class="header__nav_link header__hav_link-js">
                    Задать вопрос
                </a>                    -->
            </nav>
            
            <div class="header__burger">
                <div class="header__burger_line"></div>
            </div>
        </header>