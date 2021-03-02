<?php
session_start();

require_once '../connect/connect.php';

$id_n = $_GET['id'];
mysqli_query($connect,"DELETE FROM `food` WHERE `id` = $id_n");
// $_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../uslugi.php');
?>

