<?php
$title = 'Спасибо ';
include('./parts/header.php');
?>



<div class="success-message">
    <?php
    //isset - проверяет value y key
    //empty - проверяет на пустоту
    //если есть данные фио
    if (isset($_POST['fio'])) {
        //и есть согласие на обработку персональных данных
        if (isset($_POST['personal_data'])) {

         

            //запрос к бд
            $sql = "INSERT INTO questions (id, fio, email, phone, massadge, method, country)
                    VALUE (null, '{$_POST['fio']}', '{$_POST['email']}', '{$_POST['phone']}}', '{$_POST['massadge']}', '{$_POST['method']}', '{$_POST['country']}')";

            //результат обращения
            $result = mysqli_query($link, $sql);

            if ($result) {
            } else {
                echo '<h3 class="resultError">Форма не отправлена, по техническим причинам</h3>';
            }

            if ($_POST['method'] == 'email') {
                if ($_POST['gender'] == 'm') {
                    echo "<h2>Уважаемый {$_POST['fio']}
                    </br> менеджер вам напишет</h2>";
                } elseif ($_POST['gender'] == 'f') {
                    echo "<h2>Уважаемая {$_POST['fio']}
                    </br> менеджер вам напишет</h2>";
                } else {
                    echo "<h2>Уважаемый (ая) {$_POST['fio']}
                    </br> менеджер вам напишет</h2>";
                }
            } else {
                if ($_POST['gender'] == 'm') {
                    echo "<h2>Уважаемый {$_POST['fio']}
                    </br> менеджер вам позвонит</h2>";
                } elseif ($_POST['gender'] == 'f') {
                    echo "<h2>Уважаемая {$_POST['fio']}
                    </br> менеджер вам позвонит</h2>";
                } else {
                    echo "<h2>Уважаемый (ая) {$_POST['fio']}
                    </br> менеджер вам позвонит</h2>";
                }
            }

    ?>

            <?php if (isset($_POST['country'])) : ?>
                <?php if ($_POST['country'] == 'russia') : ?>
                    <img src='https://bel.cultreg.ru/uploads/e46cd194901f18484d5eabdd15db4d74.jpeg' />
                <?php elseif ($_POST['country'] == 'europe') : ?>
                    <img src='https://avatars.mds.yandex.net/get-pdb/902125/b17c00c5-4a4b-4486-862b-dfbfb093ab75/s1200?webp=false' />
                <?php elseif ($_POST['country'] == 'africa') : ?>
                    <img src='https://avatars.mds.yandex.net/get-pdb/236760/59a19e5d-4e72-43d8-813c-0b1c301f6c42/s1200?webp=false' />
                <?php elseif ($_POST['country'] == 'northernAmerica') : ?>
                    <img src='https://ic.pics.livejournal.com/pasek_boris/43748860/329/329_1000.jpg' />
                <?php elseif ($_POST['country'] == 'southernAmerica') : ?>
                    <img src='http://gturs.com/wp-content/uploads/2016/04/YUzhnaya-Amerika-foto-7.jpg' />
                <?php elseif ($_POST['country'] == 'australia') : ?>
                    <img src='https://f4.love.ru/sIlMGQ1eK8.jpg' />
                <?php endif; ?>
            <?php endif; ?>
    <?php

        } else {
            echo '<h3 class="thankError">Форма не отправлена! Вы не согласились на обработку персональных данных</h3>';
        }
    } else {
        echo '<h3 class="thankError">Вы не заполнили форму</h3>';
    }
    ?>

    <!-- <?php
            echo "<pre>";
            echo print_r($_POST);
            echo "</pre>";
            ?> -->

</div>

<?php include('./parts/footer.php') ?>;