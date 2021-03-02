<?php
session_start();

require_once '../connect/connect.php';
$date=date("Y-m-d");
$id_n=$_POST['id_n'];
$money=$_POST['money'];
$money_dop=$_POST['money_dop'];
$money_status="Оплачено";
$date_in=$_POST['date_in'];
$nomer=$_POST['nomer'];
$food=$_POST['food'];
$transfer=$_POST['transfer'];
$full_name=$_POST['full_name'];
$status="Выселе	но";
mysqli_query($connect,"UPDATE `nomera_bron`  SET `status`='$status',`date_out`='$date',`money_status`='$money_status' WHERE `id_bron`='$id_n'");
mysqli_query($connect,"UPDATE `guest`  SET `money`=`money`+'$money'+'$money_dop',`date_out`='$date' WHERE `full_name`='$full_name'");
mysqli_query($connect,"UPDATE `nomera`  SET `status`='free',`date_out`='$date'  WHERE `nomer`='$nomer'");
echo($id_n);
echo($date_in);

echo($money);
echo($full_name);
echo($food);
echo($transfer);
echo($date);
mysqli_query($connect,"INSERT INTO `check` (`id`, `id_bron`, `date_in`, `date_out`, `money`, `full_name`, `food`, `transfer`) VALUES (NULL, '$id_n', '$date_in', '$date', '$money', '$full_name', '$food', '$transfer')");

header('Location:../guestgohome.php');
// header('Location:../checktoguest.php');
?>

