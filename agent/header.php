<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>АРМ Агента</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <meta content="text/html; charset=utf-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
<header>
<nav class="container">
	  <nav class="menu">

  <ul class="topmenu">
	  <i class="fa fa-angle-down"></i>
	     <li><a href="main.php">Главная</a>
    <li><a href="#">Добавление</a>
		<ul class="submenu">
        <li><a href="dob_strahovatelya.php">Страхователи</a></li>
        <li><a href="dob_str.php">Виды страховок</a></li>
		<li><a href="dob_rassr.php">Договоры в рассрочку</a></li>
        <li><a href="dob_edinovr.php">Договоры с единовременной оплатой</a></li>
      </ul></li>
    <li><a href="#">Просмотр и редактирование</a>
		<ul class="submenu">
        <li><a href="prosm_strahov.php">Страхователи</a></li>
        <li><a href="prosm_str.php">Виды страховок</a></li>
		<li><a href="prosm_rassr.php">Договоры в рассрочку</a></li>
        <li><a href="prosm_edinovr.php">Договоры с единовременной оплатой</a></li>
      </ul></li>
	  <li><a href="#">План на месяц</a>
		<ul class="submenu">
				<li><a href="">Договоры в рассрочку</a></li>
        <li><a href="">Договоры с единовременной оплатой</a></li>
		</ul></li>
		<li><a href="#">Статистика</a>
		</li>
		<li><a href="index.php">Выход</a>
		</li>
  </ul>
</nav>
</nav>
</header>
<script>
$('.nav-toggle').on('click', function(){
$('#menu').toggleClass('active');
});
</script>
	</body>
	</html>