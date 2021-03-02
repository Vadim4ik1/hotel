<?php

require_once 'connect/connect.php';

$data_today=date("Y-m-d");
                            $date_next7=date("Y-m-d", strtotime($data_today.'+ 3 days'));
                            $select_type="Стандарт";
                            $places_bed=2;
?>
<form action="take_bron.php" method="post" enctype="multipart/form-data">
       	<input type="date" value="<?= $data_today ?>" min="<?= $data_today ?>" max="2022-03-05" name="date_in">
	      <input type="date" value="<?= $date_next7 ?>" min="<?= $data_today ?>" max="2022-03-05" name="date_out" >
              <label >Количество кроватей
              <select name="places">
                     <option value="1">1</option>
                     <option value="2" selected>2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
              </select>
              </label>

              <label> Тип номера :
                     <select name="select">
                            <option>Стандарт</option>
                            <option>Люкс</option>
                            <option>Президентский</option>
                     </select>
              </label>
	<input type="submit" value="Найти">