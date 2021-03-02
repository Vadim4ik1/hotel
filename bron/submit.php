<?php
session_start();

require_once '../connect/connect.php';
$date=date("Y-m-d H:i:s");

$id_n = $_GET['id'];
$status="Подтверждено";
mysqli_query($connect,"UPDATE `nomera_bron`  SET `status`='$status',`date_ofcheck`='$date' WHERE `id_bron`='$id_n'");

// $_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../staff_page.php');
?>

