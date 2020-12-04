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
$rows=mysqli_query($connect, "SELECT brand, model, typez, volume, term  FROM fridge WHERE id=".$_GET['id']);
while ($st = mysqli_fetch_array($rows)) {
$id=$_GET['id'];
$brand  = $st['brand'];
$model = $st['model'];
$typez  = $st['typez'];
$volume = $st['volume'];
$term = $st['term'];
}
print "<form action='red1.php' metod='get'>";
print "Марка: <input name='brand' size='20' type='varchar'value='".$brand ."'>";
print "<br>Модель: <input name='model' size='20' type='varchar'value='".$model."'>";
print "<br>Тип разморозки: <input name='typez' size='20' type='varchar'value='".$typez."'>";
print "<br>Внутренний объем: <input name='volume' size='10' type='varchar'value='".$volume."'>";
print "<br>Срок гарантии: <input name='term' size='20' type='varchar'value='".$term."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"laba4.php\"> Вернуться к списку холодильников</a>";
?>  
	<p><a href="laba4.php" class="link">назад</a></p>	
</div>
	</body>
</html>
