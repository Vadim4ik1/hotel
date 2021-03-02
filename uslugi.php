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
<div class=" text-center">
  <div class="mx-auto h1" style="width: 200px; margin-top: 30px;">Услуги
  </div>
  <!-- <p>Измените размер этой адаптивной страницы, чтобы увидеть эффект!</p>  -->
</div>
<div class="container">
  <div class="row">
    
  </div>
  <div class="row mt-5">
    <!-- <div class="mx-auto h1" style="width: 200px;">
    </div> -->
    <table class="table table-bordered" >
      <thead>
        <tr>
          <th scope="col">Id услуги</th>
          <th scope="col">Название</th>
          <th scope="col">Стоимость</th>
          <th></th>
          <!-- <th scope="col">Последняя дата выезда</th> -->
        </tr>
      </thead>
      <tbody>
      </tr>
      
      <?php
      $staff = mysqli_query($connect, "SELECT * FROM `food`");
      $staff = mysqli_fetch_all($staff);
      $color="";
      foreach ($staff as $st)
      {
      ?>
      
      <tr>
        <th scope="row"><?= $st[0] ?></th>
        <td class="<?=$color?>"><?= $st[1] ?></td>
        <td class="<?=$color?>"><?= $st[2] ?></td>
        <td >
          <div class="dropdown">
            <button class="btn  " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            
            
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
              <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
            </svg>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="uslugi_real/deleteuslug.php?id=<?=$st[0]?>" class="dropdown-item">Удалить</a></li>
              <li><a class="dropdown-item"  href="" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $st[0]?>" >Изменить</a></li>
            </ul>
          </div>
        </td>
        <div class="modal fade" id="exampleModal<?= $st[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Номер услуги : <?= $st[0] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="uslugi_real/updateuslug.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <!-- <input type="text" name="login" class="form-control px-3 py-3" placeholder="Кратко опишите причину"> -->
                    
                  </div>
                  <div class="form-group">
                    
                    <div class="row">
                      <input type="hidden" name="id" class="form-control px-3 py-3" value="<?= $st[0]?>">
                      <div class="col">Наименование :
                        <input type="text" name="name" class="form-control px-3 py-3"  value="<?= $st[1]?>" placeholder="">
                      </div> <div class="col">Стоимость :
                      <input type="text" name="cost" class="form-control px-3 py-3" value="<?= $st[2]?>" placeholder="Кратко опишите причину">
                    </div></div>
                  </div>
                  <div class="form-group">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn btn-primary">Изменить</button>
                </form>
              </div>
            </div>
          </div>
        </div>
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
  <!-- <div class="form-group"> -->
  <button type="button" class="btn bg-primary btn-secondary ml-auto form-group" data-bs-toggle="modal" data-bs-target="#exampleModal_adduslug">Добавить</button>
  <!-- </div> -->
  <div class="modal fade" id="exampleModal_adduslug" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Номер услуги : <?= $st[0]+1 ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="uslugi_real/adduslug.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <!-- <input type="text" name="login" class="form-control px-3 py-3" placeholder="Кратко опишите причину"> -->
              
            </div>
            <div class="form-group">
              
              <div class="row">
                <div class="col">Наименование :
                  <input type="text" name="name" class="form-control px-3 py-3"  value="" placeholder="">
                </div> <div class="col">Стоимость :
                <input type="text" name="cost" class="form-control px-3 py-3" value="" placeholder="">
              </div></div>
            </div>
            
            <div class="form-group">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Добавить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-auto h1" style="width: 200px; margin-top: 30px;">Трансфер
  </div>
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th scope="col">Id услуги</th>
        <th scope="col">Пункт 1</th>
        <th scope="col">Пункт 2</th>
        <th scope="col">Стоимость</th>
        <th></th>
        <!-- <th scope="col">Последняя дата выезда</th> -->
      </tr>
    </thead>
    <tbody>
    </tr>
    
    <?php
    $staff = mysqli_query($connect, "SELECT * FROM `transfer`");
    $staff = mysqli_fetch_all($staff);
    $color="";
    foreach ($staff as $st)
    {
    ?>
    
    <tr>
      <th scope="row"><?= $st[0] ?></th>
      <td class="<?=$color?>"><?= $st[1] ?></td>
      <td class="<?=$color?>"><?= $st[2] ?></td>
      <td class="<?=$color?>"><?= $st[3] ?></td>
      <td >
        <div class="dropdown">
          <button class="btn  " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          
          
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
            <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
          </svg>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a href="uslugi/deleteuslug.php?id=<?=$st[0]?>" class="dropdown-item">Удалить</a></li>
            <li><a class="dropdown-item"  href="" data-bs-toggle="modal" data-bs-target="#exampleModal_<?= $st[0]?>" >Изменить</a></li>
          </ul>
        </div>
      </td>
      <div class="modal fade" id="exampleModal_<?= $st[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Номер трансфера : <?= $st[0] ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="uslugi/updateuslug.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <!-- <input type="text" name="login" class="form-control px-3 py-3" placeholder="Кратко опишите причину"> -->
                  
                </div>
                <div class="form-group">
                  
                  <div class="row">
                    <input type="hidden" name="id" class="form-control px-3 py-3" value="<?= $st[0]?>">
                    <div class="col">Откуда :
                      <input type="text" name="place1" class="form-control px-3 py-3" id="place1" value="<?= $st[1]?>" placeholder="Кратко опишите причину">
                    </div> <div class="col">Куда :
                    <input type="text" name="place2" class="form-control px-3 py-3" value="<?= $st[2]?>" placeholder="Кратко опишите причину">
                  </div></div> Стоимость :
                  <input type="text" name="money" class="form-control px-3 py-3" value="<?= $st[3]?>" placeholder="Кратко опишите причину">
                </div>
                <div class="form-group">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-primary">Изменить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </tr>
    <script type="text/javascript">
    var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
    var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl)
    })
    </script>
    <script type="text/javascript">
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')
    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
    })
    </script>
    <?php } ?>
    <!--     <td></td><td></td><td></td><td></td>
  -->  </tbody>
</table>

<button type="button" class="btn bg-primary btn-secondary mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal_addtrans">Добавить</button>
<div class="modal fade" id="exampleModal_addtrans" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Номер трансфера : <?= $st[0]+1 ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="uslugi/adduslug.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <!-- <input type="text" name="login" class="form-control px-3 py-3" placeholder="Кратко опишите причину"> -->
            
          </div>
          <div class="form-group">
            
            <div class="row">
              <div class="col">Откуда :
                <input type="text" name="place1" class="form-control px-3 py-3" id="place1">
              </div> <div class="col">Куда :
              <input type="text" name="place2" class="form-control px-3 py-3" >
            </div></div> Стоимость :
            <input type="text" name="money" class="form-control px-3 py-3" >
          </div>
          <div class="form-group">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br>
<div class="mx-auto h1" style="width: 200px;margin-top: 30px;">Номера
</div>
<table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Этаж</th>
      <th scope="col">Тип</th>
      <th scope="col">Кровати</th>
      <th scope="col">Комнат</th>
      <th scope="col">Описание</th>
      <th scope="col">Состояние</th>
      <th scope="col">Стоимость</th>
      <th></th>
      <!-- <th scope="col">Последняя дата выезда</th> -->
    </tr>
  </thead>
  <tbody>
    
    
    <?php
    $nomera = mysqli_query($connect, "SELECT * FROM `nomera`");
    $nomera = mysqli_fetch_all($nomera);
    foreach ($nomera as $nm)
    {
    ?>
    
    <tr>
      <th><?= $nm[1] ?></th>
      <td><?= $nm[2] ?></td>
      <td><?= $nm[3] ?></td>
      <td><?= $nm[9] ?></td>
      <td><?= $nm[11] ?></td>
      <td><?= $nm[12] ?></td>
      <td><?= $nm[4] ?></td>
      <td><?= $nm[5] ?></td>
      <td> <button type="button" class="btn bg-primary btn-secondary mx-auto mt-2" data-bs-toggle="modal" data-bs-target="#exampleModalq<?= $nm[0]?>">Редактировать</button></td>
      <div class="modal fade" id="exampleModalq<?= $nm[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Номер: <?= $nm[1] ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="nomera/update.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <!-- <input type="text" name="login" class="form-control px-3 py-3" placeholder="Кратко опишите причину"> -->
                  
                </div>
                <div class="form-group">
                  
                  <div class="row">
                    <input type="hidden" name="id" class="form-control px-3 py-3" value="<?= $nm[0]?>">
                    <div class="col">Тип :
                      <input type="text" name="type" class="form-control px-3 py-3" value="<?= $nm[3]?>" placeholder=" ">
                    </div> 
                    <div class="col">Статус :
                    <input type="text" name="status" class="form-control px-3 py-3" value="<?= $nm[4]?>" placeholder="  ">
                  </div>
                </div>
                    <div class="row">
                       <div class="col">
                Стоимость :
                  <input type="text" name="money" class="form-control px-3 py-3" value="<?= $nm[5]?>" placeholder="  ">
                        </div> <div class="col">    Кровати :
                  <input type="text" name="bed" class="form-control px-3 py-3" value="<?= $nm[9]?>" placeholder="  ">
                </div></div>
                    <div class="row">
                       <div class="col">
                Комнаты :
                  <input type="text" name="rooms" class="form-control px-3 py-3" value="<?= $nm[11]?>" placeholder="  ">
                        </div> <div class="col">    Площадь :
                  <input type="text" name="square" class="form-control px-3 py-3" value="<?= $nm[10]?>" placeholder="  ">
                </div></div>
                 Описание :
                 <textarea name="opisanie" class="form-control px-3 py-3"><?= $nm[12]?>
               </textarea>
               </div> 

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-primary">Изменить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </table>
    <div class=" mx-auto h1 text-center" style="width: 200px;">Фото номеров
    </div>
    <table class="table table-bordered" >
      <thead>
        <tr>
          <th scope="col">Номер</th>
          <th scope="col">Тип</th>

          <th scope="col">Фото 1</th>
          <th scope="col">Фото 2</th>
          <th scope="col">Фото 3</th>
          <th scope="col">Фото 4</th>

          <th scope="col">Фото 5</th>
            <th></th>
        </tr>
      </thead>
      <tbody>
        
        
        <?php
        $nomera = mysqli_query($connect, "SELECT * FROM `nomera`");
        $nomera = mysqli_fetch_all($nomera);
        foreach ($nomera as $nm)
        {
        ?>
        
        <tr>
          <th><?= $nm[1] ?></th>
                <td><?= $nm[3] ?></td>

          <td><img src="<?=$nm[6]?>" width="150" height="100" alt="">
</td>
          <td ><img src="<?= $nm[13] ?>" width="150" height="100" alt=""></td>
          <td><img src="<?= $nm[14] ?>" width="150" height="100" alt=""></td>
          <td><img src="<?= $nm[15] ?>" width="150" height="100" alt=""></td>
          <td><img src="<?= $nm[16] ?>" width="150" height="100" alt=""></td>
        <td> <button type="button"  class="btn bg-primary btn-secondary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModalp<?= $nm[0]?>">Редактировать</button></td>
        <div class="modal fade" id="exampleModalp<?= $nm[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Номер: <?= $nm[1] ?></h5><br>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="nomera/update_picture.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <!-- <input type="text" name="login" class="form-control px-3 py-3" placeholder="Кратко опишите причину"> -->
                  
                </div>
                <div class="form-group">
                  
                  <div class="row">

                    <input type="hidden" name="id" class="form-control px-3 py-3" value="<?= $nm[0]?>">
                    <div class="col">Фото 1
                      <input type="file" name="picture" class="form-control px-3 py-3"  src="<?php $_FILES[$nm[6]]?>" placeholder=" ">
                    </div> 
                  <div class="col">Фото 2
                      <input type="file" name="picture_1" class="form-control px-3 py-3" src="<?= $nm[13]?>" placeholder=" ">
                    </div> 
                </div>
                    <div class="row">
                       <div class="col">Фото 3
                      <input type="file" name="picture_2" class="form-control px-3 py-3" src="<?= $nm[14]?>" placeholder=" ">
                    </div> 
                     <div class="col">Фото 4
                      <input type="file" name="picture_3" class="form-control px-3 py-3" src="<?= $nm[15]?>" placeholder=" ">
                    </div> 
                  </div>
                    <div class="row">
                      <div class="col">Фото 5
                      <input type="file" name="picture_4" class="form-control px-3 py-3" src="<?= $nm[16]?>" placeholder=" ">
                    </div> </div>
                             </div> 

              </div>
              <div class="modal-footer">
                               <h6 class="modal-title" id="exampleModalLabel">Загружать только 1920x1080!</h6>

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-primary">Изменить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
          <?php } ?>
        </table>
      </div>
    </div>