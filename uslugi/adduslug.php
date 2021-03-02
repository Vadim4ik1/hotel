<?php
session_start();

require_once '../connect/connect.php';
$place1=$_POST['place1'];
$place2=$_POST['place2'];
$money=$_POST['money'];

mysqli_query($connect,"INSERT INTO `transfer` (`id_transfer`, `place1`, `place2`, `summa`) VALUES (NULL, '$place1', '$place2', '$money')");


header('Location:../uslugi.php');
?>