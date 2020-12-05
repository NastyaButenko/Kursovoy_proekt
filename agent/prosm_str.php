<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require  'db.php'; // подключаем файл для соединения с БД
if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
	$DEL=$_GET['del_id'];
    $sql = mysqli_query($link, "DELETE FROM strahovka WHERE index_str='$DEL'");
    if ($sql) {
      echo "<span style='color:blue;'>Запись удалена</span>";
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
?>
<html lang="ru">
 <link rel="stylesheet" type="text/css" href="css/style_tabl.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
<body>
<center>
<h1>Виды страховок</h1>
<p><h4 class=""></h4></p>
<p><h4 class=""></h4></p>
 <form action="" method="post">
<div class="row">
      <div class="col-75">  <input type="submit" name="submit" value="Выбрать">
        <select  name="kateg">
		  <option value=""></option>
          <option value="Автомобиль">Автомобиль</option>
          <option value="Имущество">Имущество</option>
		  <option value="Здоровье">Здоровье</option>
          <option value="Путешествия">Путешествия</option>
	      <option value="Юр. Лица">Юр. Лица</option>	  
        </select>
      </div>
    </div>   
  </form>	
<table  border='1'>
  <tr>
    <th><b>Индекс страховки</b></th>
    <th><b>Наименование</b></th>
    <th><b>Категория</b></th>
	<td>Удаление</td>
  </tr>
  <?php

$kateg=$_POST['kateg'];
if (isset($_POST['submit'])){
$sql1 = mysqli_query($link, "SELECT index_str, naimenov_str, karegorya_str FROM strahovka WHERE karegorya_str='$kateg'");
    while ($result1 = mysqli_fetch_array($sql1)) {
      echo "<tr><td>{$result1['index_str']}</td><td>{$result1['naimenov_str']}</td><td>{$result1['karegorya_str']}</td>
	  <td><a href='?del_id={$result['index_str']}'>Удалить</a></td></tr>";
    }
}
else
{
	 $sql = mysqli_query($link, "SELECT index_str, naimenov_str, karegorya_str FROM strahovka");
    while ($result = mysqli_fetch_array($sql)) {
      echo "<tr><td>{$result['index_str']}</td><td>{$result['naimenov_str']}</td><td>{$result['karegorya_str']}</td>
	  <td><a href='?del_id={$result['index_str']}'>Удалить</a></td></tr>";
    }
}
  ?>

</table>

<div class="container">
<img src="css/nnn.jpg">
<img src="css/nnn+.jpg">
</div>
</center>
</body>
</html>

 <?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->