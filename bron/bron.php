<?php
session_start();
require_once '../connect/connect.php';
date_default_timezone_set('UTC');
$full_name=$_POST['full_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass_num=$_POST['pass_num'];
$city=$_POST['place'];

$date_now=date("Y-m-d H:i:s");
$nomer=$_POST['nomer'];
$date_in=$_POST['date_in'];
$date_out=$_POST['date_out'];
$status="Не подтверждено";
$status_money="Не оплачено";

$money=$_POST['money'];
$comment=$_POST['comment'];
if(!$comment){
$comment="Нет дополнительных комментариев";
}
$full_transfer=$_POST['full_transfer'];
$full_food=$_POST['full_food'];

mysqli_query($connect,"INSERT INTO `nomera_bron` (`id_bron`, `nomer`, `date_in`, `date_out`, `full_name`, `status`, `comment`, `food`, `transfer1`, `date_ofbron`, `date_ofcheck`,`money`,`money_status`, `pass_num`, `place`, `number`, `email`) VALUES (NULL, '$nomer', '$date_in', '$date_out', '$full_name', '$status', '$comment', '$full_food','$full_transfer','$date_now',NULL,'$money','$status_money','$pass_num','$city','$phone','$email')");
// mysqli_query($connect,"INSERT INTO `guest` (`id_guest`, `full_name`, `pass_num`, `number`, `place`, `email`) VALUES (NULL, '$full_name', '$pass_num', '$phone', '$city', '$email')");
// $_SESSION['message'] = 'Ожидайте подтверждения Вашей брони';
header('Location:../index.php');
?>
