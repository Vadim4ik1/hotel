<?php
session_start();

require_once '../connect/connect.php';
$id=$_POST['id'];
$full_name=$_POST['full_name'];
$phone=$_POST['phone'];
$pass_num=$_POST['pass_num'];
$email=$_POST['email'];


$password=md5($password);
mysqli_query($connect,"UPDATE `guest`  SET `full_name`='$full_name',`pass_num`='$pass_num', `number`='$phone', `email`='$email' WHERE `id_guest`='$id'");
$_SESSION['message'] = 'Данные успешно изменены';
header('Location:../guest.php');
?>

