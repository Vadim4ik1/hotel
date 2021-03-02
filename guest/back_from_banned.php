
<?php
session_start();

require_once '../connect/connect.php';

$id=$_POST['id_guest'];
$full_name=$_POST['full_name'];
$pass_num=$_POST['pass_num'];
$number=$_POST['number'];
$place=$_POST['place'];
$email=$_POST['email'];
$nomer=$_POST['nomer'];
$date_in=$_POST['date_in'];
$date_out=$_POST['date_out'];
$money=$_POST['money'];
 
mysqli_query($connect,"INSERT INTO `guest` (`id_guest`, `full_name`, `pass_num`, `number`, `place`, `email`, `nomer`, `date_in`, `date_out`, `money`) VALUES (NULL, '$full_name', '$pass_num', '$number', '$place', '$email', '$nomer', '$date_in', '$date_out', '$money' ) ");
mysqli_query($connect,"DELETE FROM `guest_archive` WHERE `id_guest` = $id_n");

// $_SESSION['message'] = 'Сотрудник перемещен в архив';
header('Location:../guest.php');
?>

a