<?php
$title = 'поиск';
include('parts/header.php');

    $template = [];

    if(!empty($_GET)) {
        $search = trim($_GET['search']);

        if ($search != '') {
        $sql = "SELECT * FROM questions WHERE id='{$search}' or fio like '%{$search}%'";
        $result = mysqli_query($link, $sql);
        }
        
        $template ['questions'] = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $template['questions'] [] = $row;
        }
    }
?>

<div class="search-page">

    <form method="get">
        <input type="text" name="search" placeholder="введите что нибудь">

        <input type="submit" value="отправить">
    </form>

    <div>
        <?php if(isset($template['questions']) && !empty($template['questions'])) : ?>
            <?php foreach($template['questions'] as $item) : ?>
                <a href="/detail.php?id= <?= $item['id']; ?>" >
                    <?= $item['id']; ?>
                    <?= $item['fio']; ?>
                    <?= $item['phone']; ?>
                </a> <br/>
            <?php endforeach; ?>
        <?php elseif(isset($template['questions'])) : ?>
            <h3>К сожалению по вашему запросу ничего не найдено</h3>
        <?php endif ?>
    </div>


</div>













<?php include('parts/footer.php'); ?>