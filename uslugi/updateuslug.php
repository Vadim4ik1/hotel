<?php
session_start();

require_once '../connect/connect.php';

$id_n=$_POST['id'];
$money=$_POST['money'];

$place1=$_POST['place1'];
$place2=$_POST['place2'];
$money=$_POST['money'];

mysqli_query($connect,"UPDATE `transfer`  SET `place1`='$place1',`place2`='$place2',`summa`='$money' WHERE `id_transfer`='$id_n'");

header('Location:../uslugi.php');
?>