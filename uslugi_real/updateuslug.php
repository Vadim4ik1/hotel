<?php
session_start();

require_once '../connect/connect.php';

$id_n=$_POST['id'];


$name=$_POST['name'];
$cost=$_POST['cost'];

mysqli_query($connect,"UPDATE `food`  SET `name`='$name',`cost`='$cost' WHERE `id`='$id_n'");

header('Location:../uslugi.php');
?>