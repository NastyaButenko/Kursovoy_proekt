<?php
require __DIR__ . '/header.php'; // подключаем шапку проекта
require  'db.php'; // подключаем файл для соединения с БД
$fname=$_POST['fname'];
$vidstr=$_POST['vidstr'];
$nomdog=$_POST['nomdog'];
$datanach=$_POST['datanach'];
$dataokonch=$_POST['dataokonch'];
$nachisl=$_POST['nachisl'];
$oplach=$_POST['oplach'];
$bank=$_POST['bank'];
$primech=$_POST['primech'];
if (isset($_POST['submit'])){
$result2="SELECT idstrahovatel FROM strahovatel WHERE FIO_Naimenov='$fname' LIMIT 1";
$idstrahovat = mysqli_query($link, $result2);
$query2="SELECT index_str FROM strahovka WHERE naimenov_str='$vidstr' LIMIT 1";
$index = mysqli_query($link, $query2);
	if(($idstrahovat-> num_rows) && ($index-> num_rows) ){
		$index = mysqli_fetch_assoc($index);
		$index = $index['index_str'];
		$idstrahovat = mysqli_fetch_assoc($idstrahovat);
		$idstrahovat = $idstrahovat['idstrahovatel'];	
		#var_dump($index);
		#var_dump($idstrahovat);
#var_dump($result);
$query1="INSERT INTO edinovr_oplata VALUES(NULL, 1 , '$index', '$idstrahovat', '$nomdog', '$datanach', 
'$dataokonch', '$nachisl', '$oplach', '$bank', '$primech')";
$result = mysqli_query($link, $query1); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
}
}
?>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <div class="container2">
                  <h1><a><center>Добавление нового договора с единовременной оплатой</center></a></h1>                
  <form action="dob_edinovr.php" method="post"> 
    <div class="row">
      <div class="col-25">
        <label for="fname">ФИО/Наименование Огранизации</label>
      </div>
      <div class="col-75">
        <input type="text"  name="fname" placeholder="" required>
      </div>
	  </div>
    <div class="row">
      <div class="col-25">
        <label for="vidstr">Вид страховки</label>
      </div>
      <div class="col-75">
        <input type="text"  name="vidstr" placeholder="" required>
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="nomdog">Номер договора</label>
      </div>
      <div class="col-75">
        <input type="text"  name="nomdog" placeholder="" required>
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="datanach">Дата начала договора</label>
      </div>
      <div class="col-75">
        <input type="date" name="datanach" min="1917-01-01" placeholder="" required>
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="dataokonch">Дата окончания договора</label>
      </div>
      <div class="col-75">
        <input type="date" name="dataokonch" min="1917-01-01" placeholder="" required>
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="nachisl">Начисленна страховая премия</label>
      </div>
      <div class="col-75">
        <input type="text"  name="nachisl" placeholder="0000.00" required>
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="oplach">Оплаченная премия</label>
      </div>
      <div class="col-75">
        <input type="text"  name="oplach" placeholder="0000.00">
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="bank">Банк-посредник</label>
      </div>
      <div class="col-75">
        <input type="text"  name="bank" placeholder="">
      </div>
    </div>	
    <div class="row">
      <div class="col-25">
        <label for="primech">Примечания</label>
      </div>
      <div class="col-75">
        <textarea  name="primech" placeholder="" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Добавить">
    </div>
  </form>
</div>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->