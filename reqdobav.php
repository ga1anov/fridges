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
		$connect = mysqli_connect("localhost", "root", "root", "galanov")or die("Невозможно подключиться к серверу");
		mysqli_query($connect, "SET NAMES utf8");

$rows1 = mysqli_query($connect, "SELECT id, brand FROM fridge ORDER BY id");
$i=0;
        while ($st = mysqli_fetch_array($rows1)) {
            $brand[$i] = $st['brand'];
            $id_zh[$i] = $st['id'];
            $i++;
        }
$rows2 = mysqli_query($connect, "SELECT id, name FROM service ORDER BY id");
$j=0;
        while ($st1 = mysqli_fetch_array($rows2)) {
            $name[$j] = $st1['name'];
            $id_zh1[$j] = $st1['id'];
            $j++;
        }
?>
<form action="reqdobav1.php" method="get">
Дата начала ремонта: <input name="daten" size="20" type="date">
<br>Дата окончания: <input name="dateo" size="20" type="date">
<br>Холодильник: 

<select name='brand'>
        <?php
        for($i = 0; $brand[$i] != null; $i++): ?>
            <option value="<?=$brand[$i].$i?>"><?=$brand[$i]?></option>
        <?php endfor;
        for($i = 0; $brand[$i] != null; $i++){
$brand = "num". $i;
$value = "" . $id_zh[$i];
print "<input type='hidden' name='".$brand."' value='".$value."'>";
}
       ?>
<br>
Сервисный центр:
<select name='name'>
        <?php
        for($j = 0; $name[$j] != null; $j++): ?>
            <option value="<?=$name[$j].$j?>"><?=$name[$j]?></option>
        <?php endfor;
        for($j = 0; $name[$j] != null; $j++){
$name = "numn". $j;
$value1 = "" . $id_zh1[$j];
print "<input type='hidden' name='".$name."' value='".$value1."'>";
}
        ?>
        </select><br>
<br>ФИО клиента: <input name="fio" size="20" type="varchar">
<br>Стоимость: <input name="cost" size="20" type="varchar">
</textarea>
<p><input name="add" type="submit" value="Добавить">
</form>
<p>  

<p><a href="laba4.php">назад</a></p>	
</div>
	</body>
</html>
