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
<div class="modal-dialog">
  <div class="modal-content">
    <div class="p-x-1 p-y-3">
      <form class="card card-block m-x-auto bg-faded form-width "action="guest/update.php" method="post" enctype="multipart/form-data">
        <legend class="m-b-1 text-xs-center">Редактирование</legend>
        <?php
        $id = $_GET['id'];
        // echo($id);
        $staff = mysqli_query($connect, "SELECT * FROM `guest` WHERE `id_guest` = '$id' ");
        $staff = mysqli_fetch_all($staff);
        foreach ($staff as $st) {
        ?>
        <div class="row"><div class="col">
          <label for="first">ФИО</label>
          <input class="form-control" id="first" type="hidden" placeholder="Имя" name="id" value="<?= $st[0] ?>"/>
          <input class="form-control" id="first" type="text" placeholder="Имя" name="full_name" value="<?= $st[1] ?>"/>
        </div>
        <div class="col">
          <label for="email">Номер</label>
          <input class="form-control" id="email" type="phone" placeholder="" name="phone" value="<?= $st[3] ?>" />
        </div></div>
        <div class="row"><div class="col">
          <label for="password">Номер паспорта</label>
          <input class="form-control" id="password" type="text" placeholder="" name="pass_num" value="<?= $st[2] ?>" />
        </div>
        <div class="col">
        <label for="password">Email</label>
        <input class="form-control" id="password" type="text" placeholder=""  name="email"/>
      </div>
    </div>
      <?php
      }
      ?>

          <div class="text-xs-center mt-3 mx-auto">
            <input class="btn btn-block btn-primary" type="submit" value="Изменить">
          </div>
        </form>
      </body>
    </html>