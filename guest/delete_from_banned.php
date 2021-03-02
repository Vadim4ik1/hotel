<?php
session_start();

require_once '../connect/connect.php';

$id_n = $_GET['id'];
mysqli_query($connect,"DELETE FROM `guest_archive` WHERE `id_guest` = $id_n");
// $_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../blacks.php');
?>

