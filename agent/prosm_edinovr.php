<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require  'db.php'; // подключаем файл для соединения с БД
if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
	$DEL=$_GET['del_id'];
    $sql1 = mysqli_query($link, "DELETE FROM edinovr_oplata WHERE idedinovr_oplata='$DEL'");
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
<h1>Договоры с единовременной оплатой</h1>
<form action="prosm_edinovr.php" method="post">
	  <div class="row">
      <div class="col-75">       <input type="submit" name="submit" value="Выбрать">
        <select id="mont" name="mont">
		  <option value=""></option>
          <option value="1">январь</option>
          <option value="2">февраль</option>
		  <option value="3">март</option>
          <option value="4">апрель</option>
		  <option value="5">май</option>
          <option value="6">июнь</option>
		  <option value="7">июль</option>
          <option value="8">август</option>
		  <option value="9">сентябрь</option>
          <option value="10">октябрь</option>
		  <option value="11">ноябрь</option>
          <option value="12">декабрь</option>
		  
        </select>
      </div>
  </div>
  </form>
<table border='1'>
  <tr>
    <th><b>Индекс страховки</b></th>
    <th><b>ФИО/Наименование Огранизации</b></th>
    <th><b>Номер договора</b></th>
	<th><b>Дата начала</b></th>
    <th><b>Дата окончания</b></th>
    <th><b>Начисленная страховая премия</b></th>
	<th><b>Оплаченная премия</b></th>
    <th><b>Банк-посредник</b></th>
    <th><b>Примечания</b></th>
	<td>Удаление</td>
  </tr>
  <?php
$mont=$_POST['mont'];
if (isset($_POST['submit'])){
$sql1 = mysqli_query($link, "SELECT edinovr_oplata.index_str, edinovr_oplata.idstrahovatel, edinovr_oplata.nomer_dogovora,
	edinovr_oplata.data_nachala, edinovr_oplata.data_okonchanya, edinovr_oplata.nachisl_str_premya,
	edinovr_oplata.oplach_premya, edinovr_oplata.bank_posr, edinovr_oplata.primechanya, strahovatel.FIO_Naimenov, strahovatel.idstrahovatel
	FROM `edinovr_oplata`, strahovatel WHERE edinovr_oplata.idstrahovatel=strahovatel.idstrahovatel ");
   while ($result1=mysqli_fetch_array($sql1)) 
	{
      print "<tr><td>{$result1['index_str']}</td><td>{$result1['FIO_Naimenov']}</td><td>{$result1['nomer_dogovora']}</td><td>{$result1['data_nachala']}</td>
	  <td>{$result1['data_okonchanya']}</td><td>{$result1['nachisl_str_premya']}</td><td>{$result1['oplach_premya']}</td>
	  <td>{$result1['bank_posr']}</td><td>{$result1['primechanya']}</td>
	  <td><a href='?del_id={$result1['idedinovr_oplata']}'>Удалить</a></td></tr>";
    }
}
else
{
    $sql1 = mysqli_query($link, "SELECT edinovr_oplata.index_str, edinovr_oplata.idstrahovatel, edinovr_oplata.nomer_dogovora,
	edinovr_oplata.data_nachala, edinovr_oplata.data_okonchanya, edinovr_oplata.nachisl_str_premya,
	edinovr_oplata.oplach_premya, edinovr_oplata.bank_posr, edinovr_oplata.primechanya, strahovatel.FIO_Naimenov, strahovatel.idstrahovatel
	FROM `edinovr_oplata`, strahovatel WHERE edinovr_oplata.idstrahovatel=strahovatel.idstrahovatel ");
   while ($result1=mysqli_fetch_array($sql1)) 
	{
      print "<tr><td>{$result1['index_str']}</td><td>{$result1['FIO_Naimenov']}</td><td>{$result1['nomer_dogovora']}</td><td>{$result1['data_nachala']}</td>
	  <td>{$result1['data_okonchanya']}</td><td>{$result1['nachisl_str_premya']}</td><td>{$result1['oplach_premya']}</td>
	  <td>{$result1['bank_posr']}</td><td>{$result1['primechanya']}</td>
	  <td><a href='?del_id={$result1['idedinovr_oplata']}'>Удалить</a></td></tr>";
    }
}	
  ?>
</table>
</center>
</body>
</html>

 <?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->