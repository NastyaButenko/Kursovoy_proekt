<?php
require __DIR__ . '/header.php'; // подключаем шапку проекта
require  'db.php'; // подключаем файл для соединения с БД
$index=$_POST['index'];
$naimsrt=$_POST['naimsrt'];
$kateg=$_POST['kateg'];
#var_dump($index);
#var_dump($naimsrt);
#var_dump($kateg);
if (isset($_POST['submit1'])){
	#var_dump($query2);
	#var_dump($link);
$query2="INSERT INTO strahovka VALUES('$index','$naimsrt','$kateg')";
$result2 = mysqli_query($link, $query2); 
    if($result2)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
}
?>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
<div class="container2">
                  <h1><a><center>Добавление нового вида страховок</center></a></h1>                
  <form action="dob_str.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="index">Индекс Страховки</label>
      </div>
      <div class="col-75">
        <input type="text" name="index" placeholder="Аббревиатура заглавными буквами. Например ОСЮР = ОСАГО Юр.Лиц" required>
      </div>
	  </div>
	      <div class="row">
      <div class="col-25">
        <label for="naimsrt">Наименование</label>
      </div>
      <div class="col-75">
        <input type="text"  name="naimsrt" placeholder="Полное название" required>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="kateg">Категория</label>
      </div>
      <div class="col-75">
        <select  name="kateg">
          <option value="Автомобиль">Автомобиль</option>
          <option value="Имущество">Имущество</option>
		  <option value="Здоровье">Здоровье</option>
          <option value="Путешествия">Путешествия</option>
	      <option value="Юр. Лица">Юр. Лица</option>	  
        </select>
      </div>
    </div>  
<h1>   </h1>	
    <div class="row">
      <input type="submit" name="submit1" value="Добавить">
    </div>
  </form>
</div>
<div class="container">
<img src="css/nnn.jpg">
</div>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->