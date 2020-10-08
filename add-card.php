<?php
$title ='новая карта';
include('./parts/header.php'); 
?>






<div class="add-form">
    <form class="add-form_tabl" method="post">
        img
        <input type="text" name="img_url" >
        title
        <input type="text" name="title" >
        <textarea name="description"></textarea>
        <br>
        <br>
        
        <select name="active">
            <option value=""></option>
            <option value="y">Отображать</option>
            <option value="n">Скрыть</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Отправить">
    </form>
</div>
<?php
    
    //Запрос к бд
    $sql = "INSERT INTO trips (id, img_url, title, description, active)
            VALUES (null, '{$_POST['img_url']}', '{$_POST['title']}', '{$_POST['description']}', '{$_POST['active']}')";
            
                

    // if ($result) {
    // } else {
    //     echo '<h3 class="resultError">Форма не отправлена, по техническим причинам</h3>';
    // }

    if (empty($_POST['title'])) {
         
    } else {
        //Результат обращения
    $result = mysqli_query($link, $sql); 
    $result;
    }
?>


<?php include('./parts/footer.php'); ?>;