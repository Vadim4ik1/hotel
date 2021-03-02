<?php
session_start();

require_once '../connect/connect.php';

$full_name=$_POST['full_name'];
$phone=$_POST['phone'];
$pass_num=$_POST['pass_num'];
$status=$_POST['role'];
$login=$_POST['login'];
$password=$_POST['password'];

$path='uploads/'.time().$_FILES['picture']['name'];
move_uploaded_file($_FILES['picture']['tmp_name'],'../'.$path);
$password=md5($password);
mysqli_query($connect,"INSERT INTO `staff` (`id_staff`, `full_name`, `pass_num`, `number`, `status`, `picture`, `login`, `password`) VALUES (NULL, '$full_name', '$pass_num', '$phone', '$status','$path', '$login', '$password')");
$_SESSION['message'] = 'Пользователь зарегестрирован';
header('Location:../register.php');
?>

