<?php
session_start();

require_once '../connect/connect.php';

$id_n=$_POST['id'];
$money=$_POST['money'];
$type=$_POST['type'];
$status=$_POST['status'];
$bed=$_POST['bed'];
$rooms=$_POST['rooms'];
$square=$_POST['square'];
$opisanie=$_POST['opisanie'];

mysqli_query($connect,"UPDATE `nomera` SET `cost`='$money',`tip`='$type',`status`='$status',`bed`='$bed',`rooms`='$rooms',`square`='$square',`opisanie`='$opisanie' WHERE `id_nomer`='$id_n'");

header('Location:../uslugi.php');
?>