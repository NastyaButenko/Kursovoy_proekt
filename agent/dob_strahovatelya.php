<?php
require __DIR__ . '/header.php'; // подключаем шапку проекта
require 'db.php'; // подключаем файл для соединения с БД
$fname=$_POST['fname'];
$kat=$_POST['kat'];
$drozd=$_POST['drozd'];
$address=$_POST['address'];
$rtelephon=$_POST['rtelephon'];
$mtelephon1=$_POST['mtelephon1'];
$mtelephon2=$_POST['mtelephon2'];
$dtelephon=$_POST['dtelephon'];
$primech=$_POST['primech'];
#var_dump($fname);
#var_dump($kat);
#var_dump($drozd);
#var_dump($address);
#var_dump($rtelephon);
#var_dump($mtelephon1);
#var_dump($mtelephon2);
#var_dump($dtelephon);
#var_dump($primech);
if (isset($_POST['submit'])){
	#var_dump($query1);
	#var_dump($link);
	if ($drozd == ''){
		$query1="INSERT INTO strahovatel VALUES(NULL, '$fname', NULL ,'$address','$rtelephon','$mtelephon1','$mtelephon2','$dtelephon','$kat','$primech')";
	}
		else
		{
$query1="INSERT INTO strahovatel VALUES(NULL, '$fname','$drozd' ,'$address','$rtelephon','$mtelephon1','$mtelephon2','$dtelephon','$kat','$primech')";
		}
$result = mysqli_query($link, $query1); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }	
}
?>
<link rel="stylesheet" type="text/css" href="css/style2.css">

<div class="container2">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<h1><a><center>Добавление нового страхователя<center></a></h1>                
  <form action="dob_strahovatelya.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="fname">ФИО/Наименование Огранизации</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="" required>
      </div>
	  </div>
	  <div class="row">
      <div class="col-25">
        <label for="kat">Категория Страхователя</label>
      </div>
      <div class="col-75">
        <select id="kat" name="kat">
          <option value="Юр. Лицо">Юр. Лицо</option>
          <option value="Физ. Лицо">Физ. Лицо</option>
        </select>
      </div>
    </div>     
    <div class="row">
      <div class="col-25">
        <label for="drozd">Дата Рождения</label>
      </div>
      <div class="col-75">
        <input type="date" name="drozd" min="1917-01-01"  placeholder="">
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="address">Адрес</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" placeholder="" required>
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="rtelephon">Рабочий телефон</label>
      </div>
      <div class="col-75">
        <input type="text" id="rtelephon" name="rtelephon"  pattern="+[0-9]{1}-[0-9]{3}-[0-9]{3}">
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="mtelephon1">Мобильный телефон 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="mtelephon1" name="mtelephon1" placeholder="" required >
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="mtelephon2">Мобильный телефон 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="mtelephon2" name="mtelephon2" placeholder="">
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="dtelephon">Домашний телефон</label>
      </div>
      <div class="col-75">
        <input type="text" id="dtelephon" name="dtelephon" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="primech">Примечания</label>
      </div>
      <div class="col-75">
        <textarea id="primech" name="primech" placeholder="" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Добавить">
    </div>
  </form>
  <script>
jQuery(function($){
	
	$('#rtelephon').mask('+7 (999) 999-9999');
    $('#mtelephon1').mask('+7 (999) 999-9999');
	$('#mtelephon2').mask('+7 (999) 999-9999');
	$('#dtelephon').mask('+7 (999) 999-9999');
});
</script>
</div>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->