
<?php
session_start();

require_once '../connect/connect.php';

$id_n = $_GET['id'];
mysqli_query($connect,"INSERT INTO `staff` (SELECT * FROM `staff_archive` WHERE `id_staff` = '$id_n')");
mysqli_query($connect,"DELETE FROM `staff_archive` WHERE `id_staff` = $id_n");

// $_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../allstaff.php');
?>

a