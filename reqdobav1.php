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
<H3>Добавление заявки:</H3>

		<?php
$connect = mysqli_connect("localhost", "root", "root", "galanov" ) or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
//Кодировка данных получаемых из базы
mysqli_query($connect, "SET NAMES utf8");
	$get_fio = $_GET['brand'];
	$brand = substr($_GET['brand'], 0, (strlen($_GET['brand'])-1));
	$num = substr($_GET['brand'], -1, 1);
	$v = "num". $num;
	$hid = "" . $_GET[$v];
$str = (int)$hid;

$get_fio1 = $_GET['name'];
	$name1 = substr($_GET['name'], 0, (strlen($_GET['name'])-1));
	$num1 = substr($_GET['name'], -1, 1);
	$v1 = "numn". $num1;
	$hid1 = "" . $_GET[$v1];
$str1 = (int)$hid1;

$sql_add="INSERT INTO request SET daten='".$_GET['daten']."', dateo='".$_GET['dateo']."', id_f='" .$str ."', name_f='".$brand."', id_c='" .$str1.
"', name_c='".$name1."', fio='".$_GET['fio']."', cost='".$_GET['cost']."'";

mysqli_query($connect, $sql_add);
if (mysqli_affected_rows($connect)>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы зарегистрировали заявку в базе данных.";
print "<p><a href=\"laba4.php\"> Вернуться к списку</a>"; }
else { print "Ошибка сохранения.".mysqli_error($connect)."a href=\"laba4.php\"> Вернуться к списку</a>"; }

?>
		
</div>
	</body>
</html>