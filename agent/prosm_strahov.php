<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require  'db.php'; // подключаем файл для соединения с БД
if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
	$DEL=$_GET['del_id'];
    $sql1 = mysqli_query($link, "DELETE FROM strahovatel WHERE idstrahovatel='$DEL'");
    if ($sql1) {
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
<h1>Страхователи</h1>
<form action="prosm_strahov.php" method="post">
	  <div class="row">
      <div class="col-75">       <input type="submit" name="submit" value="Выбрать">
        <select id="kat" name="kat">
		  <option value=""></option>
          <option value="Юр. Лицо">Юр. Лицо</option>
          <option value="Физ. Лицо">Физ. Лицо</option>
        </select>
      </div>
  </div>
  </form>
<p><h4 class="widget-post-title"></h4></p>
<p><h4 class="widget-post-title"></h4></p>
<table border='1'>
  <tr>
    <th><b>ФИО/Наименование Огранизации</b></th>
    <th><b>Дата Рождения</b></th>
    <th><b>Адрес</b></th>
	<th><b>Рабочий телефон</b></th>
    <th><b>Мобильный телефон 1</b></th>
    <th><b>Мобильный телефон 2</b></th>
	<th><b>Домашний телефон</b></th>
    <th><b>Категория</b></th>
    <th><b>Примечания</b></th>
	<td>Удаление</td>
  </tr>
  <?php
  $kat=$_POST['kat'];
if (isset($_POST['submit'])){
$sql1 = mysqli_query($link, "SELECT * FROM `strahovatel` where kategorya='$kat'");
    while ($result1 = mysqli_fetch_array($sql1)) {
      echo "<tr><td>{$result1['FIO_Naimenov']}</td><td>{$result1['data_rozden']}</td><td>{$result1['address']}</td>
	  <td>{$result1['rab_telefon']}</td><td>{$result1['mob_telefon_1']}</td><td>{$result1['mob_telefon_2']}</td>
	  <td>{$result1['dom_telefon']}</td><td>{$result1['kategorya']}</td><td>{$result1['primechanya']}</td>
	  <td><a href='?del_id={$result1['idstrahovatel']}'>Удалить</a></td></tr>";
    }
}
else
{
    $sql1 = mysqli_query($link, 'SELECT * FROM `strahovatel`');
   while ($result1 = mysqli_fetch_array($sql1)) 
	{
      print "<tr><td>{$result1['FIO_Naimenov']}</td><td>{$result1['data_rozden']}</td><td>{$result1['address']}</td>
	  <td>{$result1['rab_telefon']}</td><td>{$result1['mob_telefon_1']}</td><td>{$result1['mob_telefon_2']}</td>
	  <td>{$result1['dom_telefon']}</td><td>{$result1['kategorya']}</td><td>{$result1['primechanya']}</td>
	  <td><a href='?del_id={$result1['idstrahovatel']}'>Удалить</a></td></tr>";
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