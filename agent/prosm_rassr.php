<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require  'db.php'; // подключаем файл для соединения с БД
?>
<html lang="ru">
 <link rel="stylesheet" type="text/css" href="css/style_tabl2.css">
<body>
<center>
<h1>Договоры в рассрочку</h1>
<table border='1'>
  <tr>
    <th><b>Индекс страховки</b></th>
    <th><b>ФИО/Наименование Огранизации</b></th>
    <th><b>Номер договора</b></th>
	<th><b>Дата начала</b></th>
    <th><b>Дата окончания</b></th>
    <th><b>Начисленная страховая премия</b></th>
	<th><b>Оплаченная премия</b></th>
	<th><b>Количество платежей</b></th>
	<th><b>Дата Ожидаемого платежа 2</b></th>
	<th><b>Дата Ожидаемого платежа 3</b></th>
	<th><b>Дата Ожидаемого платежа 4</b></th>
	<th><b>Сумма ожидаемых платежей</b></th>
	<th><b>сумма 2 платежа</b></th>
	<th><b>сумма 3 платежа</b></th>
	<th><b>сумма 4 платежа</b></th>
    <th><b>Банк-посредник</b></th>
    <th><b>Примечания</b></th>
  </tr>
  <?php

    $sql1 = mysqli_query($link, 'SELECT rassrochka.index_str, rassrochka.idstrahovatel, rassrochka.nomer_dogovora,
	rassrochka.data_nachala, rassrochka.data_okonchanya, rassrochka.nachisl_str_premya, rassrochka.oplach_premya, rassrochka.kol_platezh,
    rassrochka.data_2pl, rassrochka.data_3pl, rassrochka.data_4pl, rassrochka.summa_platezh,
	rassrochka.summa_2pl, rassrochka.summa_3pl, rassrochka.summa_4pl, rassrochka.bank_posr, rassrochka.primechanya, 
	strahovatel.FIO_Naimenov, strahovatel.idstrahovatel
	FROM rassrochka, strahovatel WHERE rassrochka.idstrahovatel=strahovatel.idstrahovatel ');
   while ($result1=mysqli_fetch_array($sql1)) 
	{
      print "<tr><td>{$result1['index_str']}</td><td>{$result1['FIO_Naimenov']}</td><td>{$result1['nomer_dogovora']}</td><td>{$result1['data_nachala']}</td>
	  <td>{$result1['data_okonchanya']}</td><td>{$result1['nachisl_str_premya']}</td><td>{$result1['oplach_premya']}</td>
	  <td>{$result1['kol_platezh']}</td><td>{$result1['data_2pl']}</td><td>{$result1['data_3pl']}</td><td>{$result1['data_4pl']}</td>
	  <td>{$result1['summa_platezh']}</td><td>{$result1['summa_2pl']}</td><td>{$result1['summa_3pl']}</td><td>{$result1['summa_4pl']}</td>
	  <td>{$result1['bank_posr']}</td><td>{$result1['primechanya']}</td></tr>";
    }
  ?>
</table>
</center>
</body>
</html>

 <?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->