<?php session_start();
if (!$_SESSION['user']) {
header('Location: index.php');
}
require_once 'connect/connect.php';
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-primary  ">
  <div class="container-fluid ">
    <a class="navbar-brand text-white" href="#">СИСТЕМА ОТЕЛЯ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse mx-5 " id="navbarNav"> -->
    <ul class="navbar-nav mx-4 ">
      
      <li class="nav-item mx-4 ">
        <a class="nav-link  text-white" href="uslugi.php" tabindex="-1" aria-disabled="true">Услуги</a>
      </li>
      <li class="nav-item dropdown mx-4 ">
        <a class="nav-link dropdown-toggle text-white" href="guest.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Гости</a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="guest.php">Все гости</a></li>
          <li><a class="dropdown-item" href="blacks.php">Архив</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="guestgohome.php">На выселение</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="static.php">Статистика</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown mx-4 ">
        <a class="nav-link dropdown-toggle text-white" href="staff_page.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Заявки
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="staff_page.php">Все заявки</a></li>
          <li><a class="dropdown-item" href="podtver_bron.php">Подтвержденные</a></li>
          <!-- <li><hr class="dropdown-divider"></li> -->
          <!-- <li><a class="dropdown-item" href="register.php">Заселение </a></li> -->
        </ul>
      </li>
      <li class="nav-item dropdown mx-4 ">
        <a class="nav-link dropdown-toggle text-white" href="allstaff.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Сотрудники
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="allstaff.php">Все сотрудники</a></li>
          <li><a class="dropdown-item" href="staff_archive.php">Архив</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="register.php">Зарегистрировать сотрудника </a></li>
        </ul>
      </li>
      <li class="nav-item mx-5 ">
        <a class="nav-link  text-white" href="archiv.php" tabindex="-1" aria-disabled="true" > Архив </a>
      </li></ul>
      <!-- <div class="mr-auto"> -->
      <!-- <li class=" mr-auto nav-item  "> -->
      <a class=" mr-auto nav-link  text-white " href="signin/logout.php"  >Выйти</a>

        <!-- </li> -->
    <!-- </div> -->
    
    </div>
    <!-- </div> -->
  </div>
  <!-- Navbar content -->
</nav>
<div class="jumbotron text-center">
  <h1>Статистика</h1>
  <!-- <p>Измените размер этой адаптивной страницы, чтобы увидеть эффект!</p>  -->
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Самый прибыльный гость</h3>
      <?php $skrudj = mysqli_query($connect, "SELECT * FROM `guest` ORDER BY `money` DESC LIMIT 1 ");
    $skrudj = mysqli_fetch_all($skrudj);

    foreach ($skrudj as $sk) { ?>
      <p><?= $sk[1] ?></p>
      <p>Всего заплачено : <?= $sk[9] ?></p>
    </div>
  <?php }

  $very_pop_nomer = mysqli_query($connect,"SELECT * , COUNT(`nomer`) AS 'value_occurrence' FROM `nomera_bron` GROUP BY `nomer` ORDER BY `value_occurrence` DESC LIMIT 1");
   $very_pop_nomer = mysqli_fetch_all($very_pop_nomer);
    foreach ($very_pop_nomer as $vp) { 

  $id=$vp[1];
  $nomer = mysqli_query($connect, "SELECT `nomer`,`tip` FROM `nomera` WHERE `nomer`='$id' ");
  $nomer = mysqli_fetch_all($nomer);
      foreach ($nomer as $nm) { 

?>
  
    <div class="col-sm-4">
      <h3>Самый снимаемый номер</h3>
      <p>Номер : <?= $nm[0]?> </p>
      <p>Тип номера : <?= $nm[1]?></p>
    </div>
<?php }}  
$very_pop_city = mysqli_query($connect,"SELECT `place` , COUNT(`place`) AS 'value_occurrence' FROM `nomera_bron` GROUP BY `place` ORDER BY `value_occurrence` DESC LIMIT 1");
   $very_pop_city = mysqli_fetch_all($very_pop_city);
       foreach ($very_pop_city as $vp) { 
?>
    <div class="col-sm-4">
      <h3>Жители г. <?= $vp[0] ?> снимают у нас номера чаще всего</h3>
      <p>Снимали <?= $vp[1] ?> раз </p>
    </div>
  </div>
  <div class="row mt-5">
<?php } 
$money= mysqli_query($connect,"SELECT `money`,`date_in`,`date_out` FROM `nomera_bron`");
$money = mysqli_fetch_all($money);
 $itogomoney=0;
$dateValue=date("Y-m-d");
$time=strtotime($dateValue);
$month=date("F",$time);

       foreach ($money as $money) { 
        $time_infrombd=strtotime($money[1]);
        $month_infrombd=date("F",$time_infrombd);

        if($month==$month_infrombd):{
          $itogomoney=$itogomoney+$money[0];
        }
      endif;
       }
?>
    <div class="col-sm-4">
      <h3>Прибыль за месяц</h3>
      <p>Прибыль состовляет : <?= $itogomoney ?> </p>
      <p>Данная прибыль расчитана за текущий месяц</p>
    </div>
<?php 
$trans= mysqli_query($connect,"SELECT `place1`,`place2`  FROM `transfer` WHERE `id_transfer`='1' ");
$trans = mysqli_fetch_all($trans);
       foreach ($trans as $trans) { 

?>
    <div class="col-sm-4">
      <h3>Популярный трансфер</h3>
      <p>Откуда : <?= $trans[0] ?> </p>
      <p>Куда : <?= $trans[1] ?> </p>
    </div>
<?php } 
$usluga= mysqli_query($connect,"SELECT `name`  FROM `food` WHERE `id`='1' ");
$usluga = mysqli_fetch_all($usluga);
       foreach ($usluga as $us) { ?>
      <div class="col-sm-4">
      <h3>Популярная услуга</h3>
      <p>Самой популярной услугой является <?= $us[0] ?> </p>
      <p>  </p>
    </div>
    <?php } ?>
  </div>
</div>