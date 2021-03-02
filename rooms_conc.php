<?php

require_once 'connect/connect.php';

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
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Гротеск</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Меню
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
               <li class="nav-item "><a href="index.php" class="nav-link">Бронь</a></li>
          <li class="nav-item active"><a href="rooms.php" class="nav-link">Номера</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Про нас</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

    <div class="block-31 mb-5" style="position: relative;">
          <div class="owl-carousel loop-block-31">
  <?php  
           $tip = $_POST['tip'];
          $room_pic=mysqli_query($connect,"SELECT `picture`,`picture_1`,`picture_2`,`picture_3`,`picture_4` FROM `nomera` WHERE `tip` = '$tip' LIMIT 1"); 
          $room_pic = mysqli_fetch_all($room_pic);
          foreach ($room_pic as $room_pic){ ?>
            <div class="block-30 no-overlay item" style="background-image: url('<?=$room_pic[0]?>');"></div>
 <div class="block-30 no-overlay item" style="background-image: url('<?=$room_pic[1]?>');"></div>
  <div class="block-30 no-overlay item" style="background-image: url('<?=$room_pic[2]?>');"></div>
   <div class="block-30 no-overlay item" style="background-image: url('<?=$room_pic[3]?>');"></div>
    <div class="block-30 no-overlay item" style="background-image: url('<?=$room_pic[4]?>');"></div>
  <?php } ?>
</div>
</div>
  <!-- <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5"> -->


    
  

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">

       

        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
             <?php 
             $tip = $_POST['tip'];
          $room_opis=mysqli_query($connect,"SELECT `opisanie` FROM `nomera` WHERE `tip` = '$tip' LIMIT 1"); 
          $room_opis = mysqli_fetch_all($room_opis);
          foreach ($room_opis as $room_opis){ ?>
            <h2>Про <?= $tip  ?> номер</h2>
          </div>
          <div class="col-md-6">
            <p> <?= $room_opis[0]  ?></p>
            </p>
            <p>Бесполезными могут быть любые тексты, а причиной такого недостатка всегда является вода. Речь не об обычной воде, конечно, а о понятии, называемом также «водность текста», с которым знаком любой копирайтер или seo-специалист.</p>
          </div>
          <div class="col-md-6">
            <p>Все словосочетания, отдельные слова, междометия и местоимения, называемые еще служебными частями речи, не относящиеся к прямой тематике текста — это текстовые элементы, формирующие процент «воды». Они не несут серьезной смысловой нагрузки, утяжеляют восприятие текста и делают его более сложным для поискового ранжирования. Перегруженный ненужными элементами текст воспринимается как бесполезный или почти бесполезный. Поэтому одна из самых важных задач для копирайтера — убрать воду из текста перед публикацией.</p>
          </div>
<?php }?>
        </div>
      </div>
    </div>

    


    <div class="site-section">

      <div class="container">
                                  <h2>Включенные услуги</h2>

        <div class="row">

         <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-double-bed"></span></div>
            <div class="media-body">
              <h3 class="heading">Номера</h3>
              <p>Наши кровати обеспечивают невероятную поддержку спины. Некоторые вырастают на 5 сантиметров.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-wifi"></span></div>
            <div class="media-body">
              <h3 class="heading"> Безопасный интернет</h3>
              <p>Сделали безопасное подключение к мессенджерам, чтобы Вы смотрели нюдсы от Ваших партнеров.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-customer-service"></span></div>
            <div class="media-body">
              <h3 class="heading">Поддержка 24/7</h3>
              <p>Звоните нам всегда, мы будем на связи 25/8, 8 дней в неделю, 32 дня в месяц и 366 дней в году.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-taxi"></span></div>
            <div class="media-body">
              <h3 class="heading">Трансферы</h3>
              <p>Наша трансферная политика не сможет оставить Вас в покое. Вы будете в шоке от машин,которые мы предоставляем нашим дорогим гостям. </p>
            </div>
          </div>      
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-credit-card"></span></div>
            <div class="media-body">
              <h3 class="heading">Оплата</h3>
              <p> Иногда лучшие идеи приходят в голову, когда мы распалачиваемся банковской картом. Мы сделали оплату с удобствами, чтобы здесь вы находили вдохновение. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-dinner"></span></div>
            <div class="media-body">
              <h3 class="heading">Ресторан</h3>
              <p> В отеле имеется великолепный ресторан с ярким баром. Это прекрасное место, чтобы отлично провести вечер, расслабиться или поработать.</p>
            </div>
          </div>
        </div>

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