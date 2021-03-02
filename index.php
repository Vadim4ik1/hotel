<?php

require_once 'connect/connect.php';

$data_today=date("Y-m-d");
                            $date_next7=date("Y-m-d", strtotime($data_today.'+ 3 days'));
                            $select_type="Стандартный";
                            $places_bed=2;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Отель</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

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
          <li class="nav-item active"><a href="index.html" class="nav-link">Бронь</a></li>
          <li class="nav-item"><a href="rooms.php" class="nav-link">Номера</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Про нас</a></li>
          <!-- <li class="nav-item"><a href="about.html" class="nav-link">Про нас</a></li> -->
          <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Авторизация</a></li> -->
          <!-- <li class="nav-item"><a href="contact.php" class="nav-link">ВХОД</a></li> -->
          <li class="nav-item"><a  href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link">ВХОД</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
<!-- <button type="button" class="btn btn-primary">
  Launch demo modal
</button> -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Вход в систему</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="signin/signin.php" method="post" enctype="multipart/form-data">

          

            <!-- <span class="subheading-sm">Авторизация</span> -->
 <div class="form-group">
              <input type="text" name="login" class="form-control px-3 py-3" placeholder="Логин">
            </div>    

  <div class="form-group">
              <input type="password" name="password" class="form-control px-3 py-3" placeholder="Пароль">
            </div>
              <div class="form-group">
                 <?php
    if ($_SESSION['message']){
       ?> <p><?=$_SESSION['message']?></p>
   <?php  }
    unset($_SESSION['message']);
    ?> 
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Войти</button>
        </form>
      </div>
    </div>
  </div>
</div>



  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Добро пожаловать</span>
              <h2 class="heading">Наслаждайтесь комфортом</h2>
<!--               <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p>
 -->            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Добро пожаловать</span>
              <h2 class="heading">Почувствуйте качество</h2>
              <!-- <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Добро пожаловать</span>
              <h2 class="heading">Высший уровень еды</h2>
              <!-- <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <form action="take_bron.php" method="post" enctype="multipart/form-data">
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
            <form action="#">
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
                   <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Количество кроватей</label>
                  <div class="field-icon-wrap">
                   <select name="places" id="" class="form-control">
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
    
                <div class="col-md-6 col-lg-3 align-self-end">
                  <p><input type="submit" class="btn btn-primary btn-block" value="Найти номера"></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      </form>
      <div class="row site-section">
        <div class="col-md-12">
          <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm"></span>
              <h2 class="heading">Удобства и Услуги</h2>
            </div>
          </div>
        </div>
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

    <div class="site-section block-13 bg-light">
      <div class="container">
         <div class="row">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm"></span>
              <h2 class="heading">Наши комнаты</h2>
              <p>8 чудо света будет находиться рядом с Вами , если Вы будете жить в наших номерах. Именно у нас можно забыть про печаль и невзгоды, только радоваться и жить!</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="nonloop-block-13 owl-carousel">
<?php
$room_n = mysqli_query($connect, "SELECT DISTINCT `tip`,`cost`,`square`,`rooms`,`bed`,`opisanie` FROM `nomera` ");
                                   $room_n = mysqli_fetch_all($room_n);
                                   // foreach ($room_n as $room_n) {
// $room_full = mysqli_query($connect, "SELECT DISTINCT * FROM `nomera` WHERE `tip`='$room_n[0]' ");
//                                    $room_full = mysqli_fetch_all($room_full);
                                   foreach ($room_n as $room) {
?>
                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <?php 
                        $room_pic = mysqli_query($connect, "SELECT `picture` FROM `nomera` WHERE `tip`='$room[0]' LIMIT 1 ");
                                   $room_pic = mysqli_fetch_all($room_pic);

                                   foreach ($room_pic as $room_pic){ ?>
                        <a href="#"><img src=" <?= $room_pic[0] ?>" alt="Image placeholder"></a>
                      <?php } ?>
                      </div>
                      <div class="text">
                         <h2 class="heading">   <?= $room[0] ?> номер</h2>
                <div class="price"><sup>₽</sup><span class="number"><?= $room[1] ?></span><sub>/за ночь</sub></div>
                <ul class="specs">
                  <li><strong>Количество кроватей:</strong> <?= $room[4] ?></li>
                  <li><strong>Площадь:</strong> <?= $room[2] ?>m<sup>2</sup></li>
                  <li><strong>Описание:</strong> <?= $room[5] ?></li>
                  <li><strong>Количество комнат:</strong> <?= $room[3] ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
<?php } 
// } 
?>

              </div>
    
            </div> <!-- .col-md-12 -->
          </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm"></span>
              <h2 class="heading">Меню ресторана</h2>
            </div>
          </div>

        <div class="block-35">
          
          <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Завтрак</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Обед</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ужин</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Яичница со спаржей</h2>
                          <p>Спаржа – это не только полезный, но и очень вкусный овощ. В нашем исполнении это невероятно. </p>
                          <div class="price"><sup>₽</sup><span class="number">560</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/menu_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Стейк из филе на гриле</h2>
                          <p>Филе-миньон — один из самых изысканных стейков, которые готовятся на гриле. </p>
                          <div class="price"><sup>₽</sup><span class="number">700</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/menu_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Яичница со стейком</h2>
                          <p>Что за дивный вкус яичницы с волшебным сочетанием стейка из говядины.</p>
                          <div class="price"><sup>₽</sup><span class="number">670</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/menu_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Макароны</h2>
                          <p>Надеюсь, что Вы не съедите тарелку вместе с макаронами, приготовленными по нашему рецепту!</p>
                          <div class="price"><sup>₽</sup><span class="number">350</span></div>
                        </div>
                      </div>
                    </div>

                 
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <h2 class="heading">Качественное жилье, которое превосходит все ожидания</h2>
<!--               <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p>
 -->            </div>
          </div>
        </div>
      </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 section-heading">
            <span class="subheading-sm"></span>
            <h2 class="heading">Отзывы</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/Chingiz.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Чингиз Усадовский</h2>
                  <span class="meta">Постоянный гость</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>Ох уж эта занятость , так и не дает мне покоя. То мне надо сходить на одну сторону двора, то на другую , а иногда еще и Акира приходит , в общем жизнь полна забот, но с Вами я не только отдыхаю, но и очень вкусно кушаю!</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/nelia.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Наиля Галиуллина</h2>
                  <span class="meta">Разработчик</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>Я всегда в делах и мне не хватает времени даже на саму себя, меня это очень тревожит, но с Вашим отелем я всегда могу найти время даже на своих подружек.Я всем своим знакомым советую обращаться только сюда!</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/alisa.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Алиса Казанская</h2>
                  <span class="meta">Знатная мадама</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>Мяу мяу мяу, мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу. Мяу мяу мяу! Мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу мяу,мяу мяу мяу,мяу мяу мяу,мяу мяу мяу,мяу мяу мяу!</p>
                </blockquote>
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
          <h3 class="heading-section">Разработчики</h3>
          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/alisa.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Кошка Алиса</a></h3>
              <div class="meta">
      <!--           <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/Chingiz.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Собака Чингиз</a></h3>
              <div class="meta">
<!--                 <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
              </div>
            </div>
          </div>

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
<script type="text/javascript">
    var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})

</script>

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