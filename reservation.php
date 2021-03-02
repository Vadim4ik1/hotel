<?php
require_once 'connect/connect.php';
$room_id = $_POST['room_id'];
$cost=$_POST['cost'];
                                            $days=$_POST['days'];
                                            $itog=$days*$cost;
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
            <li class="nav-item"><a href="rooms.php" class="nav-link">Номера</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Услуги</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">Про нас</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Блог</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Контакты</a></li>
          </ul>
        </div>
      </div>
    </nav>


        <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <span class="subheading-sm"></span>
                        <h2 class="heading">Оформление номера</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light">
            <div class="container">                        
                        <div class="row mb-5">
                            <div class="col-md-12 mb-5">
                                <div class="block-3 d-md-flex">
                                    <div class="image"  style="background-image: url('images/transfer_1.jpg'); " data-stellar-background-ratio="0.95"></div>
                                    <div class="text">
                                        <h2 class="heading"> Трансфер</h2>
                                        <form action="go_bron.php" method="post" enctype="multipart/form-data">
                                            <?php
                                            
                                            $query_trans = mysqli_query($connect, "SELECT * FROM `transfer`");
                                            $gettrans = mysqli_fetch_all($query_trans);
                                            foreach ($gettrans as $trans) {
                                            $for_trans=$trans[0];
                                            ?>
                                            <input type="hidden" name="place1_<?=$trans[0]?>" value="<?=$trans[1]?>">
                                            <input type="hidden" name="place2_<?=$trans[0]?>" value="<?=$trans[2]?>">
                                            <input type="hidden" name="cost_trans<?=$trans[0]?>" value="<?=$trans[3]?>">
                                            <ul class="specs mb-5">
                                                <li><strong> <?=$trans[1]?></strong> --> <strong> <?=$trans[2]?></strong> Стоимость: <?=$trans[3]?> 
                                                <input name="trans<?=$trans[0]?>" type="checkbox" value="Yes"></li>
                                                <li> </li>
                                                
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                    <input type="hidden" value= "<?=$for_trans?>" name="for_trans">
                                 
                                        <div class="col-md-12 mb-5">
                                            <div class="block-3 d-md-flex">
                                                <div class="image order-2"  style="background-image: url('images/uslugi_1.jpg'); " data-stellar-background-ratio="0.95"></div>
                                                <div class="text">
                                                    <h2 class="heading"> Дополнительные услуги</h2>
                                                 

                                                    <?php
                                $query_food = mysqli_query($connect, "SELECT * FROM `food` ");
                                $getfood = mysqli_fetch_all($query_food);
                                foreach ($getfood as $food) {
                                $for_food=$food[0];
                                ?>
                          
                               
                                                   <p> <input type="hidden" name="namefood<?=$food[0]?>" value="<?=$food[1]?>">
                                    <p> <input type="hidden" name="cost_food<?=$food[0]?>" value="<?=$food[2]?>">

                                                    <ul class="specs mb-5">
                                                        <li><strong> <input type="checkbox" name="food_<?= $food[0] ?>" value="Yes" >   <?= $food[1] ?> </strong>Cтоимость : <?= $food[2] ?> р.   </li>
                                                        <li> </li>
                                                        
                                                        <?php } ?>                                                                                    
                                                        <input type="hidden" name="for_food" value="<?=$for_food?>">

                                                    </ul>

                                                    <!-- <p><a href="#article-2" class="btn btn-primary py-3 px-5">Далее</a></p> -->
                                                </div>

                                            </div>

                                        </div>
                                        <input type="hidden" name="days" value="<?= $_POST['days'] ?>">
                                        <input type="hidden" name="itogo" value="<?= $itog ?>">
                                        <input type="hidden" name="nomer" value="<?= $_POST['nomer'] ?>">
                                <input type="hidden" name="etaj" value="<?= $_POST['etaj'] ?>">
                                <input type="hidden" name="tip" value="<?= $_POST['tip'] ?>">
                                <input type="hidden" name="cost" value="<?= $_POST['cost'] ?>">
                                <input type="hidden" value="<?= $_POST['date_in'] ?> " name="date_in">
                                <input type="hidden" value="<?= $_POST['date_out'] ?> " name="date_out">
                                             <!-- <p><a href="#article-1" >Назад</a></p> -->


                                </div>
                                                                            <input class="btn btn-primary py-3 px-5" type="submit" value="Подтверждение" >

                            </div>
                            </div>
                        </div>
                    </form>
                   
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