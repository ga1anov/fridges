﻿<!DOCTYPE html>
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
		<H2>Добавление сервисного центра:</H2>
<?php
// Подключение к базе данных:
$connect = mysqli_connect("localhost", "root", "root", "galanov" ) or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
//Кодировка данных получаемых из базы
mysqli_query($connect, "SET NAMES utf8");
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO service SET name='" . $_GET['name']
."', address='".$_GET['address']."'";
mysqli_query($connect, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($connect)>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы добавили сервис в базу данных.";
print "<p><a href=\"laba4.php\"> Вернуться к списку таблиц</a>"; }
else { print "Ошибка сохранения. <a href=\"laba4.php\"> Вернуться к списку таблиц</a>"; }
?>
		
</div>
	</body>
</html>
