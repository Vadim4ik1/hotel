<?php
session_start();

require_once '../connect/connect.php';

$id=$_POST['id_guest'];
$why=$_POST['why'];
$full_name=$_POST['full_name'];
$pass_num=$_POST['pass_num'];
$number=$_POST['number'];
$place=$_POST['place'];
$email=$_POST['email'];
$nomer=$_POST['nomer'];
$date_in=$_POST['date_in'];
$date_out=$_POST['date_out'];
$money=$_POST['money'];
 
mysqli_query($connect,"INSERT INTO `guest_archive` (`id_guest`, `full_name`, `pass_num`, `number`, `place`, `email`, `nomer`, `date_in`, `date_out`, `money`, `why`) VALUES (NULL, '$full_name', '$pass_num', '$number', '$place', '$email', '$nomer', '$date_in', '$date_out', '$money', '$why') ");
mysqli_query($connect,"DELETE FROM `guest` WHERE `id_guest` = '$id' ");
// $_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../blacks.php');
?>

