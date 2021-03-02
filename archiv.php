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




<div class="mx-auto h1" style="width: 200px;">
  </div>
    <div class="col-sm m-5">
  <table class="table table-bordered" >
      <thead>
      <tr>
        <!-- <th scope="col">Заявка</th> -->
        <th scope="col">Номер брони</th>
        <th scope="col"class="col-lg-2">Дата заезда</th>
        <th scope="col" class="col-lg-2">Дата оъезда</th>
        <th scope="col">Сумма денег</th>
        <th scope="col">ФИО</th>
        <th scope="col">Дополнительные услуги</th>
        <th scope="col">Трансфер</th>



        <!-- <th scope="col">Последняя дата выезда</th> -->
      </tr>
    </thead>
    <tbody>
    </tr>
          
    <?php
    $staff = mysqli_query($connect, "SELECT * FROM `check`");
    $staff = mysqli_fetch_all($staff);
    
    foreach ($staff as $st)
    { 

    ?>
  
    <tr>
      <!-- <th scope="row"><?= $st[0] ?></th> -->
      <td class="<?=$color?>"><?= $st[1] ?></td>
      <td class="<?=$color?>"><?= $st[2] ?></td>
      <td class="<?=$color?>"><?= $st[3] ?></td>
      <td class="<?=$color?>"><?= $st[4] ?></td>
      <td class="<?=$color?>"><?= $st[5] ?></td>
      <td class="<?=$color?>"><?= $st[6] ?></td>
      <td class="<?=$color?>"><?= $st[7] ?></td>




    </tr>



    <?php } ?>
  </tbody>
</table>
</div>