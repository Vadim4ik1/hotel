<?php
session_start();

require_once '../connect/connect.php';

$id_n = $_GET['id'];
mysqli_query($connect,"INSERT INTO `staff_archive` (SELECT * FROM `staff` WHERE `id_staff` = $id_n)");
mysqli_query($connect,"DELETE FROM `staff` WHERE `id_staff` = $id_n");
$_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../allstaff.php');
?>

