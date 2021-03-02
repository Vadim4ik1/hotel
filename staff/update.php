<?php
session_start();

require_once '../connect/connect.php';
$id=$_POST['id'];
$full_name=$_POST['full_name'];
$phone=$_POST['phone'];
$pass_num=$_POST['pass_num'];
$status=$_POST['role'];
$login=$_POST['login'];

$path='uploads/'.time().$_FILES['picture']['name'];
move_uploaded_file($_FILES['picture']['tmp_name'],'../'.$path);
$password=md5($password);
mysqli_query($connect,"UPDATE `staff`  SET `full_name`='$full_name',`pass_num`='$pass_num', `status`='$status',`number`='$phone', `login`='$login' WHERE `id_staff`='$id'");
$_SESSION['message'] = 'Данные успешно изменены';
header('Location:../allstaff.php');
?>

