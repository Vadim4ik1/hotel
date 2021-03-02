<?php
session_start();

require_once '../connect/connect.php';

$id_n = $_GET['id'];
mysqli_query($connect,"DELETE FROM `nomera_bron` WHERE `id_bron` = $id_n");
// $_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../staff_page.php');
?>

