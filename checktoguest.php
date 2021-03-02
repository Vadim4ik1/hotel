<?php
session_start();

require_once 'connect/connect.php'; 
$date=date("Y-m-d");
$id_n=$_POST['id_n'];
$money=$_POST['money'];
$money_dop=$_POST['money_dop'];
$date_in=$_POST['date_in'];
$nomer=$_POST['nomer'];
$food=$_POST['food'];
$transfer=$_POST['transfer'];
$full_name=$_POST['full_name'];
 ?>

<h1 style="text-align: center;">Договор №00<?= $id_n ?></h1>

<p style="text-align: justify;
text-align: center;margin: 1.2em 0;
line-height: 1.5; font-size: 25px;">Я, <?= $full_name ?> , проживал в отеле ГРОТЕСК с <?= $date_in ?>  по <?= $date ?>  в номере <?= $nomer ?>  и претензий не имею.  </p>
<p style="text-align: justify;
text-align: center;margin: 1.2em 0;
line-height: 1.5; font-size: 25px;">Я оплатил сумму в количестве <?= $money+$money_dop ?> и выселяюсь <?= $date ?> </p>
<div style="float: right; margin-right: 20%;" >
 Сотрудник : <?=  $_SESSION['user']['full_name'] ?> <br>Подпись
</div> <div style="float: left; margin-left: 20%;">
Гость :<?= $full_name ?><br>Подпись </div>
         <form action="bron/viselenie.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_n" class="form-control px-3 py-3" value="<?= $id_n?>">

        <input type="hidden" name="money" class="form-control px-3 py-3" value="<?= $money?>">

        <input type="hidden" name="full_name" class="form-control px-3 py-3" value="<?= $full_name?>">
        <input type="hidden" name="date_in" class="form-control px-3 py-3" value="<?= $date_in ?>">

        <input type="hidden" name="transfer" class="form-control px-3 py-3" value="<?= $transfer?>">
        <input type="hidden" name="money_dop" class="form-control px-3 py-3" value="<?= $money_dop?>">
        <input type="hidden" name="nomer" class="form-control px-3 py-3" value="<?= $nomer?>">
        <input type="hidden" name="food" class="form-control px-3 py-3" value="<?= $food?>">
	
	<input type="submit" value="Распечатать" style="margin-top: 20%">
</form>