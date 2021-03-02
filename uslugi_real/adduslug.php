<?php
session_start();

require_once '../connect/connect.php';


$name=$_POST['name'];
$cost=$_POST['cost'];

mysqli_query($connect,"INSERT INTO `food` (`id`, `name`, `cost`) VALUES (NULL, '$name', '$cost')");

header('Location:../uslugi.php');
?>