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
        <th scope="col">#</th>
        <th scope="col">ФИО</th>
        <th scope="col">Номер паспорта</th>
        <th scope="col">Номер телефона</th>
        <th scope="col">Город</th>
        <th scope="col">Почта </th>
        <th scope="col">Номер,в котором был в последний раз </th>
        <th scope="col">Последняя дата заезда</th>
        <th scope="col">Последняя дата выезда</th>
        <th scope="col">Причина блокировки</th>
        <th></th>
        <!-- <th scope="col">Последняя дата выезда</th> -->
      </tr>
    </thead>
    <tbody>
    </tr>
          
    <?php
    $staff = mysqli_query($connect, "SELECT * FROM `guest_archive` ");
    $staff = mysqli_fetch_all($staff);
    foreach ($staff as $st) {
    ?>
  
    <tr>
      <th scope="row"><?= $st[0] ?></th>
      <td><?= $st[1] ?></td>
      <td><?= $st[2] ?></td>
      <td><?= $st[3] ?></td>
      <td><?= $st[4] ?></td>
      <td><?= $st[5] ?></td>
      <td><?= $st[6] ?></td>
      <td><?= $st[7] ?></td>
      <td><?= $st[8] ?></td>
            <td><?= $st[10] ?></td>
         <form action="guest/back_from_banned.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="full_name" class="form-control px-3 py-3" value="<?= $st[1]?>">
        <input type="hidden" name="pass_num" class="form-control px-3 py-3" value="<?= $st[2]?>">
        <input type="hidden" name="number" class="form-control px-3 py-3" value="<?= $st[3]?>">
        <input type="hidden" name="place" class="form-control px-3 py-3" value="<?= $st[4]?>">
        <input type="hidden" name="email" class="form-control px-3 py-3" value="<?= $st[5]?>">
        <input type="hidden" name="nomer" class="form-control px-3 py-3" value="<?= $st[6]?>">
        <input type="hidden" name="date_in" class="form-control px-3 py-3" value="<?= $st[7]?>">
        <input type="hidden" name="date_out" class="form-control px-3 py-3" value="<?= $st[8]?>">
        <input type="hidden" name="money" class="form-control px-3 py-3" value="<?= $st[9]?>">
      <td>
        <div class="dropdown">
          <button class="btn  " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          
          
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
            <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
          </svg>
          </button>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a href="guest/delete_from_banned.php?id=<?= $st[0]?>" class="dropdown-item">Удалить</a></li>
            <li><input type="submit" href="guest/back_from_banned.php?id=<?= $st[0]?>" class="dropdown-item" value="Вернуть"></li>
            <!-- <li><a class="dropdown-item"  href="" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $st[0]?>" >Занести в черный список</a></li> -->
            
          </ul>
        </div>
      </td>
    </tr>
    <script type="text/javascript">
var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
return new bootstrap.Dropdown(dropdownToggleEl)
})

</script>


    <?php } ?>
  </tbody>
</table>
</form>
</div>
</div>
  


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
