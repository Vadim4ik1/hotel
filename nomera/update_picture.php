
<?php
session_start();

require_once '../connect/connect.php';
$picture=$_POST['picture'];
$picture_1=$_POST['picture_1'];
$picture_2=$_POST['picture_2'];
$picture_3=$_POST['picture_3'];
$picture_4=$_POST['picture_4'];

$id_n=$_POST['id'];

$path='uploads/'.time().$_FILES['picture']['name'];
move_uploaded_file($_FILES['picture']['tmp_name'],'../'.$path);


$path_1='uploads/'.time().$_FILES['picture_1']['name'];
move_uploaded_file($_FILES['picture_1']['tmp_name'],'../'.$path_1);

$path_2='uploads/'.time().$_FILES['picture_2']['name'];
move_uploaded_file($_FILES['picture_2']['tmp_name'],'../'.$path_2);

$path_3='uploads/'.time().$_FILES['picture_3']['name'];
move_uploaded_file($_FILES['picture_3']['tmp_name'],'../'.$path_3);

$path_4='uploads/'.time().$_FILES['picture_4']['name'];
move_uploaded_file($_FILES['picture_4']['tmp_name'],'../'.$path_4);

mysqli_query($connect,"UPDATE `nomera` SET `picture`='$path',`picture_1`='$path_1',`picture_2`='$path_2',`picture_3`='$path_3',`picture_4`='$path_4' WHERE `id_nomer`='$id_n'");

header('Location:../uslugi.php');
?>