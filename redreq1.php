<!DOCTYPE html>
<html>
	<head>	
		
		<title>ЛР4-5 Галанов Иван</title> 
<style>
body {
background: #c7b39b; /* Цвет фона и путь к файлу */
color: #fff; /* Цвет текста */
}
</style> 
	</head>
	<body>
		<h4>Галанов И.С.</h4>
		<h1>Лабораторная работа №4-5</h1>
		<h2>Вариант 6</h2>
<h2>Редактирование заявки</h2>
		<?php
$connect = mysqli_connect("localhost", "root", "root", "galanov" ) or die ("Невозможно подключиться к серверу");
mysqli_query($connect, "SET NAMES utf8");
	$get_fio = $_GET['brand'];
	$brand = substr($_GET['brand'], 0, (strlen($_GET['brand'])-1));
	$num = substr($_GET['brand'], -1, 1);
	$v = "num_res". $num;
	$hid = "" . $_GET[$v];
$str = (int)$hid;

$get_fio1 = $_GET['name'];
	$name1 = substr($_GET['name'], 0, (strlen($_GET['name'])-1));
	$num1 = substr($_GET['name'], -1, 1);
	$v1 = "num_resn". $num1;
	$hid1 = "" . $_GET[$v1];
$str1 = (int)$hid1;

$zapros1="UPDATE request SET daten='".$_GET['daten']."', dateo='".$_GET['dateo']."', id_f='" .$str ."', name_f='".$brand."', id_c='" .$str1.
"', name_c='".$name1."', fio='".$_GET['fio']."', cost='".$_GET['cost']."'";

mysqli_query($connect, $zapros1);
if (mysqli_affected_rows($connect)>0) {
echo 'Все сохранено. <a href="laba4.php"> <br>Вернуться к списку</a>'; }
else { echo 'Ошибка сохранения.'.mysqli_error($connect).' <a href="laba4.php"><br> Вернуться к списку</a> '; }
?> 
		
</div>
	</body>
</html