<!DOCTYPE html>
<html>
	<head>	
		
		<title>ЛР4 Галанов Иван</title> 
<style>
body {
background: #c7b39b; /* Цвет фона и путь к файлу */
color: #fff; /* Цвет текста */
}
</style> 
	</head>
	<body>
		<h4>Галанов И.С.</h4>
		<h1>Лабораторная работа №4</h1>
		<H2>Редактирование холодильника:</H2>
<?php
$connect = mysqli_connect("localhost", "root", "root", "galanov" ) or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
//Кодировка данных получаемых из базы
mysqli_query($connect, "SET NAMES utf8");
$zapros="UPDATE fridge SET brand='".$_GET['brand'].
"', model='".$_GET['model']."', typez='"
.$_GET['typez']."', volume='".$_GET['volume']."', term='".$_GET['term']."'WHERE id=".$_GET['id'];
mysqli_query($connect, $zapros);
if (mysqli_affected_rows($connect)>0) {
echo 'Все сохранено. <a href="laba4.php"> <br>Вернуться к списку холодильников</a>'; }
else { echo 'Ошибка сохранения. <a href="laba4.php"><br> Вернуться к списку холодильников</a> '; }
?>	
</div>
	</body>
</html>
