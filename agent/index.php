
<html>
<html lang="en">
<head>
<title>Autorization</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
<form action="index.php" method="POST">
<span class="login100-form-title p-b-33">Авторизация</span>
<div class="wrap-input100 validate-input" >
<input class="input100" type="text" name="login" placeholder="Login" required>
<span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
</div>
<div class="wrap-input100 rs1 validate-input" >
<input class="input100" type="password" name="pass" placeholder="Password" required>
<span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
</div>
<div class="container-login100-form-btn m-t-20">
<button class="login100-form-btn" name="do_login" ><a style='color:white'>
  Войти </a> 
</button>
</div>
</form>
</div>
</div>
</div>
</body>
	</html>
<?php 
require "db.php"; // подключаем файл для соединения с БД
$login = $_POST['login'];
$password =$_POST['pass'];
if (isset($_POST['do_login'])) {
    #var_dump($query2);
    $query2 = mysqli_query($link, "SELECT agent_parol FROM agent WHERE agent_login ='$login' LIMIT 1;");
   if($query2-> num_rows ){
       $hash = mysqli_fetch_assoc($query2);
        if ($password == $hash['agent_parol']) {
         header('Location: main.php');
		 echo "<script>window.location.replace('main.php');</script>";
        }else{
            print  "<div  style='color:red; font-family: 'Lobster', cursive;'>Пароли не совпадают!</div>";
        }
 }else{
     print "<div style='color:red; font-family: 'Lobster', cursive;'>Пользователь не найден!</div>";
    }
}

?>