<?php
session_start();

require_once '../connect/connect.php';
$date=date("Y-m-d H:i:s");
$id_n=$_POST['id_n'];
$full_name=$_POST['full_name'];
$pass_num=$_POST['pass_num'];
$phone=$_POST['number'];
$place=$_POST['place'];
$email=$_POST['email'];
$nomer=$_POST['nomer'];
$date_out=$_POST['date_out'];
$money=$_POST['money'];

$status="Заселено";
mysqli_query($connect,"UPDATE `nomera_bron`  SET `status`='$status',`date_in`='$date' WHERE `id_bron`='$id_n'");
mysqli_query($connect,"INSERT INTO `guest` (`id_guest`, `full_name`, `pass_num`, `number`, `place`, `email`,`nomer`,`date_in`,`date_out`,`money`) VALUES (NULL, '$full_name', '$pass_num', '$phone', '$place', '$email','$nomer','$date','$date_out',`money`)");
mysqli_query($connect,"UPDATE `nomera`  SET `status`='занято',`date_in`='$date'  WHERE `nomer`='$nomer'");

// $_SESSION['message'] = 'Сотрудник перемещен в архив';
// INSERT INTO `guest` (`id_guest`, `full_name`, `pass_num`, `number`, `place`, `email`, `nomer`, `date_in`, `date_out`, `money`) VALUES (NULL, '', '', '', '', '', '', '', da, '0')
// Закрыть


header('Location:../podtver_bron.php');
?>

