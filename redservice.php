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
		<H2>Редактирование сервиса:</H2>
<?php
$connect = mysqli_connect("localhost", "root", "root", "galanov" ) or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
//Кодировка данных получаемых из базы
mysqli_query($connect, "SET NAMES utf8");
$rows=mysqli_query($connect, "SELECT name, address  FROM service WHERE id=".$_GET['id']);
while ($st = mysqli_fetch_array($rows)) {
$id=$_GET['id'];
$name  = $st['name'];
$address = $st['address'];
}
print "<form action='redservice1.php' metod='get'>";
print "Название: <input name='name' size='20' type='varchar'value='".$name."'>";
print "<br>Адрес: <input name='address' size='20' type='varchar'value='".$address."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"laba4.php\"> Вернуться к списку</a>";
?>  
		
</div>
	</body>
</html>
