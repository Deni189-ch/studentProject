<?php
$title = 'детальная информация по заказу';
include('parts/header.php');

$template = [];

if (isset($_GET['id'])) {
$sql = "SELECT * FROM questions WHERE id='{$_GET['id']}'";
$result = mysqli_query($link, $sql);

$template['detail'] = mysqli_fetch_assoc($result);
}


?>

<div>


//вывести детальную информацию о заказе
<?php if(isset($template['detail']) && !empty($template['detail'])) : ?>
<?php echo $template['detail'] ['id']; ?>
<?= $template['detail'] ['fio']; ?>
<?= $template['detail'] ['email']; ?>
<?= $template['detail'] ['phone']; ?>
<?= $template['detail'] ['massadge']; ?>
<?= $template['detail'] ['method']; ?>
<?= $template['detail'] ['country']; ?>
<?= $template['detail'] ['gender']; ?>
<?php endif; ?>



</div>













<?php include('parts/footer.php'); ?>