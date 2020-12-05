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
$kolplat=$_POST['kolplat'];
$data2pl=$_POST['data2pl'];
$data3pl=$_POST['data3pl'];
$data4pl=$_POST['data4pl'];
$summapl=$_POST['summapl'];
$sum2pl=$_POST['sum2pl'];
$sum3pl=$_POST['sum3pl'];
$sum4pl=$_POST['sum4pl'];
$bank=$_POST['bank'];
$primech=$_POST['primech'];
if (isset($_POST['submit'])){
$result2="SELECT idstrahovatel FROM strahovatel WHERE FIO_Naimenov='$fname' LIMIT 1;";
$idstrahovat = mysqli_query($link, $result2);
$query2="SELECT index_str FROM strahovka WHERE naimenov_str ='$vidstr' LIMIT 1;";
$index = mysqli_query($link, $query2);
if(($idstrahovat-> num_rows) && ($index-> num_rows) ){
		$index = mysqli_fetch_assoc($index);
		$index = $index['index_str'];
		$idstrahovat = mysqli_fetch_assoc($idstrahovat);
		$idstrahovat = $idstrahovat['idstrahovatel'];
#var_dump($index);
#var_dump($idstrahovat);
	if (($data3pl== '') && ($data4pl==''))
	{
		$query1="INSERT INTO rassrochka VALUES(NULL, 1, '$index', '$idstrahovat', '$nomdog', '$datanach', '$dataokonch', 
		'$nachisl','$oplach', '$kolplat', '$data2pl', NULL, NULL, '$summapl', '$sum2pl', NULL, NULL, '$bank', '$primech')";
	}
	else{
	if ($data4pl==''){
		$query1="INSERT INTO rassrochka VALUES(NULL, 1, '$index', '$idstrahovat', '$nomdog', '$datanach', '$dataokonch', 
		'$nachisl','$oplach', '$kolplat', '$data2pl', '$data3pl', NULL, '$summapl', '$sum2pl', '$sum3pl', NULL '$bank', '$primech')";
	}
	else
	{
$query1="INSERT INTO rassrochka VALUES(NULL, 1, '$index', '$idstrahovat', '$nomdog', '$datanach', '$dataokonch', '$nachisl',
 '$oplach', '$kolplat', '$data2pl', '$data3pl', '$data4pl', '$summapl', '$sum2pl', '$sum3pl', '$sum4pl', '$bank', '$primech')";
	}
	}
$result = mysqli_query($link, $query1); 
#var_dump($result);
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
	
}

}	
?>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <div class="container2">
          <h1><a><center>Добавление нового договора в рассрочку</center></a></h1>                
  <form action="dob_rassr.php" method="post"> 
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
        <input type="text"  name="oplach" placeholder="0000.00" required>
      </div>
    </div>
		  <div class="row">
      <div class="col-25">
        <label for="kolplat">Количество платежей</label>
      </div>
      <div class="col-75">
        <select name="kolplat">
          <option value="2">2</option>
		  <option value="3">3</option>
          <option value="4">4</option>  
        </select>
      </div>
    </div>  
		    <div class="row">
      <div class="col-25">
        <label for="data2pl">Дата Ожидаемого платежа 2</label>
      </div>
      <div class="col-75">
        <input type="date" min="1917-01-01"  name="data2pl" placeholder="" required>
      </div>
    </div>
		    <div class="row">
      <div class="col-25">
        <label for="data3pl">Дата Ожидаемого платежа 3</label>
      </div>
      <div class="col-75">
        <input type="date" min="1917-01-01"  name="data3pl" placeholder="">
      </div>
    </div>
		    <div class="row">
      <div class="col-25">
        <label for="data4pl">Дата Ожидаемого платежа 4</label>
      </div>
      <div class="col-75">
        <input type="date" min="1917-01-01"  name="data4pl" placeholder="гггг-мм-дд">
      </div>
    </div>
		    <div class="row">
      <div class="col-25">
        <label for="summapl">Сумма ожидаемых платежей</label>
      </div>
      <div class="col-75">
        <input type="text"  name="summapl" placeholder="0000.00" required>
      </div>
    </div>
		    <div class="row">
      <div class="col-25">
        <label for="sum2pl">сумма 2 платежа</label>
      </div>
      <div class="col-75">
        <input type="text"  name="sum2pl" placeholder="0000.00" required>
      </div>
    </div>
			    <div class="row">
      <div class="col-25">
        <label for="sum3pl">сумма 3 платежа</label>
      </div>
      <div class="col-75">
        <input type="text"  name="sum3pl" placeholder="0000.00">
      </div>
    </div>
			    <div class="row">
      <div class="col-25">
        <label for="sum4pl">сумма 4 платежа</label>
      </div>
      <div class="col-75">
        <input type="text"  name="sum4pl" placeholder="0000.00">
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