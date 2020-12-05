<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require  'db.php'; // подключаем файл для соединения с БД
?>

<div class="container">
<div class="row">
<div class="col">
<center>
<h1>АРМ Страхового агента</h1>
</center>

</div>
</div>
</div>
<figure class="fig">
<center><img  src="css/rgs.png" ></center>
  <style>
   .fig {
    display: block; /* Блочный элемент (для старых браузеров) */
    text-align: center; /* Выравнивание по центру */
    font-style: italic; /* Курсивное начертание */
    margin-top: 15px; /* Отступ сверху */
    margin-bottom: 15px; /* Отступ снизу */
    color: #731111; /* Цвет подрисуночной подписи */
	font-size: 56px;
	font-family: 'Open Sans', arial, sans-serif;
   }
  </style>
  <figcaption>
В БУДУЩЕЕ - С УВЕРЕННОСТЬЮ
   </figcaption>
    </figure>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->