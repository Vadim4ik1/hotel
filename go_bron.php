<?php

require_once 'connect/connect.php';
$nomer=$_POST['nomer'];
$etaj=$_POST['etaj'];
$tip=$_POST['tip'];

$kolvotrans=$_POST['for_trans'];
$kolvofood=$_POST['for_food'];
$array_food=array();
$array_trans=array();
$full_transfer_full=array();
$full_food_full=array();
$itog_transfer=0;
$itog_food=0;
  $r=1;
for ($x=0; $x<=$kolvotrans;$x++)
{
      if(isset($_POST['trans'.$x]) == 'Yes') 
         {
       
         $full_transfer="Из ".$_POST['place1_'.$x]." В ".$_POST['place2_'.$x].";";
         $itog_transfer=$itog_transfer+$_POST['cost_trans'.$x];
         array_push($full_transfer_full, $r.'.'.$full_transfer);
         $r++;
         }
}


$r=1;

for ($x=0; $x<=$kolvofood;$x++)
{
      if(isset($_POST['food_'.$x]) == 'Yes') 
         {
       
         $itog_food=$itog_food+$_POST['cost_food'.$x];
         $full_food=$_POST['namefood'.$x]." ;";

         array_push($full_food_full, $r.'.'.$full_food);
          $r++;
         }
}

$itogo=$_POST['itogo'];
$itogo=$itogo+$itog_food+$itog_transfer;
$arr_food=implode(';',$full_food_full);
$arr_trans=implode(';',$full_transfer_full);


if (!$arr_food){
   $arr_food="Без дополнительных услуг";
}
if (!$arr_trans){
   $arr_trans="Без трансфера";
} 
if (!$full_transfer_full){
   $full_transfer_full="Без трансфера";
} 
if (!$full_food_full){
   $full_food_full="Без дополнительных услуг";
} 
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
      <a class="navbar-brand" href="index.html">Гротеск</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Меню
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="index.html" class="nav-link">Бронь</a></li>
          <li class="nav-item"><a href="rooms.html" class="nav-link">Номера</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Услуги</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">Про нас</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Блог</a></li>
          <li class="nav-item active"><a href="contact.html" class="nav-link">Контакты</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm"></span>
          <h2 class="heading">Последний этап</h2>
        </div>
      </div>
    </div>
  </div>

<form action="bron/bron.php" method="post" enctype="multipart/form-data">
<div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" name="full_name" class="form-control px-3 py-3" placeholder="Ваше имя">
            </div>
            <div class="form-group">
              <input type="text" name="email" class="form-control px-3 py-3" placeholder="Ваша почта">
            </div>
            <div class="form-group">
              <input name="phone" type="text" class="form-control px-3 py-3" placeholder="Сотовый телефон">
            </div>
            <div class="form-group">
              <input name="pass_num" type="text" class="form-control px-3 py-3" placeholder="Паспортные данные">
            </div>
            <div class="form-group">
              <input name="place" type="text" class="form-control px-3 py-3" placeholder="Из какого города Вы?">
            </div>
            <div class="form-group">
              <textarea name="comment" id="" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Пожелания"></textarea>
            </div><script>
   function agreeForm(f) {
    // Если поставлен флажок, снимаем блокирование кнопки
    if (f.agree.checked) f.submit.disabled = 0 
    // В противном случае вновь блокируем кнопку
    else f.submit.disabled = 1
   }
  </script>
  
   <!-- <p><input type="submit" name="submit" value="Забронировать" disabled></p> -->
            <div class="form-group">
               <p><input type="checkbox" name="agree" onclick="agreeForm(this.form)"> 
    Я согласен со всеми <a href="info/info.html">условиями</a></p>

<input type="hidden" value="<?= $arr_trans ?> " name="full_transfer">
<input type="hidden" value="<?= $arr_food ?> " name="full_food">
<input type="hidden" value="<?= $itogo ?> " name="money">
<input type="hidden" value="<?= $_POST['date_out'] ?> " name="date_out">
<input type="hidden" value="<?= $_POST['date_in'] ?> " name="date_in">
<input type="hidden" name="tip" value="<?= $_POST['tip'] ?>" >
<input type="hidden" name="etaj" value="<?= $_POST['etaj'] ?> " >
<input type="hidden" name="nomer" value="<?= $_POST['nomer'] ?>">
              <input type="submit" name="submit"value="Отправить" class="btn btn-primary py-3 px-5" disabled>
            </div>
       
        </div>

        <div class="col-md-6" >

         <h3>Выбрано: </h3>
         <input type="hidden" value=" <?= $itog_transfer ?> ">
            <p> Номер : <?= $_POST['nomer'] ?> </p>
            <p> Этаж : <?= $_POST['etaj'] ?></p>
            <p> Тип номера : <?= $_POST['tip'] ?></p>
<p> Дата заезда: <?= $_POST['date_in'] ?></p>
<p> Дата выезда: <?= $_POST['date_out'] ?></p>




<?php
 if($full_food_full=="Без дополнительных услуг"):{ ?>
 <p><?php print_r($full_food_full); ?></p>
<?php } else:{
 ?>
 <p><strong>Дополнительные услуги :</strong></p>
<?php foreach ($full_food_full as $f_f) 
{ ?>
            
            <p><?php print_r($f_f); ?></p>

<?php } }
endif; ?>



<?php
 if($full_transfer_full=="Без трансфера"):{ ?>
 <p><?php print_r($full_transfer_full); ?></p>
<?php } else:{
 ?>
 <p><strong>Трансфер :</strong></p>
<?php foreach ($full_transfer_full as $f_f) 
{ ?>
            
            <p><?php print_r($f_f); ?></p>

<?php } }
endif; ?>





     <h2>ИТОГО : <?= $itogo ?>₽ </h2>
     </div>
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