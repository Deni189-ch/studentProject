<?php 
$title = 'Заявка';
include('./parts/header.php');
?>

<div class="orders">
<?php
    if (isset($_POST['fio'])) {
        $sql = "INSERT INTO orders(id, fio, adult, child, date_beginnings, date_end, reserve)
                VALUE (null, '{$_POST['fio']}', '{$_POST['adult']}', '{$_POST['child']}', '{$_POST['date_beginnings']}', '{$_POST['date_end']}', '{$_POST['reserve']}')";

        $result = mysqli_query($link, $sql);
    } else {
       echo "<h2>Заполните форму и мы подберем лучшее предложение</h2>";
    }
?>
    <form method="post">
        <input type="text" name="fio" placeholder="ФИО">
        <input type="text" name="adult" placeholder="Колличество взрослых">
        <input type="text" name="child" placeholder="Колличество детей">
        <input type="text" name="date_beginnings" placeholder="Дата начала">
        <input type="text" name="date_end" placeholder="Дата окончания">
        <select name="reserve" >
            <option value="y">Зарезервировать сейчас</option>
            <option value="n">Зарезервировать позже</option>
        </select>
        <br>
        <br>
        <input type="submit" value="отправить">
    </form>
</div>




<?php include('./parts/footer.php'); ?>