<?php
require_once 'connect/connect.php';
              if ($_POST['date_in']):
                     {
                            $data_today=$_POST['date_in'];
                            $date_next7=$_POST['date_out'];
$date_in=$data_today;
$date_out=$date_next7;
$select_type=$_POST['select'];
$places_bed=$_POST['places'];
                     }
                     else:
                            {
                            $data_today=date("Y-m-d");
$date_next7=date("Y-m-d", strtotime($data_today.'+ 3 days'));
$select_type="Стандартный";
$places_bed=2;
$date_in=$data_today;
$date_out= $date_next7;
                            }
endif;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Отель</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
   <nav class="ftco-navbar-light scrolled sleep awake">
      <div class="container">
        <a class="navbar-brand" href="index.html">Меню</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="index.php" class="nav-link">Бронь</a></li>
            <li class="nav-item active"><a href="rooms.html" class="nav-link">Номера</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Услуги</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">Про нас</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Блог</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Контакты</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

     <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="subheading-sm"></span>
            <h2 class="heading">Расширенные настройки</h2>
              <!-- <h6 >Измените даты и фильтры поиска, чтобы увидеть больше номеров!</h6> -->
          </div>
       
        </div>
      </div>
    </div>

  <div class="container">
<form action="take_bron_full.php" method="post" enctype="multipart/form-data">
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Дата заезда</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span ></span></div>
                    <input type="date" class="form-control" value="<?= $data_today ?>" min="<?= $data_today ?>" max="2022-03-05" name="date_in">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Дата выезда</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span></span></div>
                    <input type="date" class="form-control" value="<?= $date_next7 ?>" min="<?= $data_today ?>" max="2022-03-05" name="date_out">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Тип номера</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="select" class="form-control">
                          <?php

                     $tipas = mysqli_query($connect, "SELECT DISTINCT `tip` FROM `nomera` ");
                     $tipas = mysqli_fetch_all($tipas);
                     foreach ($tipas as $tip) {
                            if ( $tip[0] == $select_type ): ?>
                                   <option selected> <?= $tip[0] ?></option> 
                            <?php else: ?>
                                   <option> <?= $tip[0] ?></option>
                     <?php
                            endif;

                     }
                     ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin"> Кровати</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                       
                           <select name="places" class="form-control">
                     <?php

                     $bed_places = mysqli_query($connect, "SELECT DISTINCT `bed` FROM `nomera` ORDER BY `bed` ");
                     $bed_places = mysqli_fetch_all($bed_places);

                     foreach ($bed_places as $bed) {
                            if ( $bed[0] == $places_bed ): ?>
                                   <option selected> <?= $bed[0] ?></option> 
                            <?php else: ?>
                                   <option> <?= $bed[0] ?></option>
                     <?php
                            endif;

                     }
                     ?>

              </select>
                 
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3 align-self-end">
                  <p><input type="submit" class="btn btn-primary btn-block" value="Найти номера"></p>
                  <p><a href=" take_bron.php" class="btn btn-primary btn-block" value="">Назад</a></p>

                </div>
              </div>
          </div>
        </div>
      </div>
</form>

</div>
<!-- <form action="take_bron.php" method="post" enctype="multipart/form-data">
       <input type="date" value="<?= $data_today ?>" min="<?= $data_today ?>" max="2022-03-05" name="date_in">
       <input type="date" value="<?= $date_next7 ?>" min="<?= $data_today ?>" max="2022-03-05" name="date_out" >
       <label >Количество кроватей

             
       </label>

       <label> Тип номера :
              <select name="select">
                    
              </select>
       </label>
       <input type="submit" value="Найти">
</form> -->
  <div class="site-section bg-light">
      <div class="container">
<div class="row">
  

<?php

// echo($select_type);
// echo($places_bed);
       // $date_in=$_POST['date_in'];
//       $date_out=$_POST['date_out'];<>
// $room_number = mysqli_query($connect, "SELECT `nomer` FROM `nomera`");
// $room_number = mysqli_fetch_all($room_number);

//     24          23              27          26 
// '$date_in' < `date_in` AND '$date_out' > `date_out`
//    foreach ($room_number as $room_number){    '$date_in' != `date_in` AND '$date_out' != `date_out`  
                                                                               // 23           17            20     
if($date_in > $date_out):
echo("Не балуйтесь, введите корректные даты!");
else:{              
$number = mysqli_query($connect, "SELECT  `nomer` FROM `nomera_bron` WHERE '$date_in' < `date_in` AND '$date_out' < `date_in` AND '$date_in' != `date_in` AND '$date_out' != `date_out` OR '$date_out'>`date_out` AND '$date_in' > `date_out` AND '$date_in' != `date_in` AND '$date_out' != `date_out`");

 



//$number = mysqli_query($connect, "SELECT  `nomer` FROM `nomera_bron` WHERE '$date_in' < `date_in` AND '$date_out' < `date_out` AND '$date_in' != `date_in` AND '$date_out' != `date_out` OR '$date_in' > `date_in` AND '$date_out' > `date_out` AND '$date_in' != `date_in` AND '$date_out' != `date_out`");
$number = mysqli_fetch_all($number);
//                                                                                                                                      25        26             24          
$number_z = mysqli_query($connect, "SELECT `nomer` FROM `nomera_bron` WHERE '$date_in' = `date_in` AND '$date_out' = `date_out` OR '$date_out'<`date_out` AND '$date_in' > `date_in` OR '$date_in' > `date_in` AND '$date_in' <`date_out` OR '$date_out' > `date_in` AND '$date_out' <`date_out` OR '$date_in' < `date_in` AND '$date_out' > `date_out`");
$number_z = mysqli_fetch_all($number_z);


// print_r($number);
// print("----------"); 
// print_r($number_z);
// print("----------");
// $number = array_map("unserialize", array_unique(array_map("serialize", $number)));
// print_r($number);
// print("----------"); 
$resArr=array();
for($i = 0; $i < count($number); $i++)
{
    for($j = 0; $j < count($number_z); $j++)
    {
        if($number[$i] == $number_z[$j])
              continue 2;
    }

    array_push($resArr, $number[$i]);
}

// print_r($resArr);
// print("----------");

$resArr = array_map("unserialize", array_unique(array_map("serialize", $resArr)));

// print_r($resArr);
// $resArr=array();
// print(count($res));
// $res = array_diff($number,$number_z);
// echo 'Current PHP version: ' . phpversion();
// $number = array_map("unserialize", array_unique(array_map("serialize", $number)));

// print("Нормальный массив");
// print_r($resArr);

// print("----------"); 
// print_r($number);
if(!$resArr):{?>
<p>Свободных номеров нет</p>
<?php } else: {
foreach ($resArr as $numbers) {
?>
<?php
$room_n = mysqli_query($connect, "SELECT * FROM `nomera` WHERE nomer='$numbers[0]' AND `tip`='$select_type' AND `status`='free' AND `bed`='$places_bed'  ");
                                   $room_n = mysqli_fetch_all($room_n);

                                   foreach ($room_n as $room) {
?>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_1.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">   <?= $room[3] ?> номер</h2>
                <div class="price"><sup>₽</sup><span class="number"><?= $room[5] ?></span><sub>/за ночь</sub></div>
                <ul class="specs">
                  <!-- <li><strong>Номер:</strong> <?= $room[1] ?></li> -->
                  <li><strong>Этаж:</strong> <?= $room[2] ?></li>
                  <li><strong>Тип:</strong> <?= $room[3] ?></li>
 <!--                  <li><strong>Цена:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li> -->
                </ul>
            
<form action="reservation.php" method="post" enctype="multipart/form-data">

       <input type="hidden" value="<?= $room[1] ?>" name="nomer">
       <input type="hidden" value="<?= $room[2] ?> " name="etaj">
       <input type="hidden" value="<?= $room[3] ?> " name="tip">
       <input type="hidden" value="<?= $room[5] ?> " name="cost">
       <!-- <input type="hidden" value="<?= $room[6] ?> " name="tip"> -->
       <input type="hidden" value="<?= $date_in ?> " name="date_in">
       <input type="hidden" value="<?= $date_out ?> " name="date_out">
       <input type="hidden" value="<?= $room[0] ?> " name="room_id">
       <input class="btn btn-primary px-4" type="submit" value="Забронировать">

       <!-- <a href="reservation.php?id=<?= $room[0]?>">Забронировать</a></form>
--></form>
  </div>
            </div>
          </div>
<?php
}
}

}endif;
}endif;

?>
</div>
</div>
</div>
<footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Про эту работу</h3>
          <p class="mb-5">Выполнена она с усердием и трудолюбием, все сделано было в срок. Написана она на чистом PHP, БД : MySQL, Фронт:HTML,JS,CSS.</p>
          <!-- <p><a href="#" class="btn btn-primary px-4">Button</a></p> -->
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Разработчики </h3>
   
          

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/nelia.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Наиля Галиуллина</a></h3>
              <div class="meta">
   <!--              <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Улица Пушкина,дом колотушкина</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+7 777 322 228</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Etopochtamoya@mail.ru</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Без перерывов и выходных дней</span></li>
              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                   Сделано с любовью   <i class="icon-heart" aria-hidden="true"></i> 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
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
    
  </body>
</html>