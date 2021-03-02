<?php
session_start();

require_once '../connect/connect.php';

$id_n = $_GET['id'];
mysqli_query($connect,"DELETE FROM `transfer` WHERE `id_transfer` = $id_n");
// $_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../uslugi.php');
?>

