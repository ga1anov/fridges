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
$connect = mysqli_connect("localhost", "root", "root", "galanov" );
mysqli_query($connect, "SET NAMES utf8");
$rows=mysqli_query($connect, "SELECT daten, dateo, name_f, name_c, fio, cost FROM request WHERE id=".$_GET['id']);
while ($st = mysqli_fetch_array($rows)) {
$id=$_GET['id'];
$daten = $st['daten'];
$dateo = $st['dateo'];
$name_f  = $st['name_f '];
$name_c = $st['name_c'];
$fio = $st['fio'];
$cost = $st['cost'];
}
print "<form action='redreq1.php' method='get'>";
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
        
 print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<br><br>Дата начала ремонта: <input name='daten' size='20' type='date'value='".$daten."'><br>";
print "<br><br>Дата окончания ремонта: <input name='dateo' size='20' type='date'value='".$dateo."'><br>";
?>
Хлодильник:
<select name='brand'>
        <?php
        for($i = 0; $name[$i] != null; $i++): ?>
            <option value="<?=$brand[$i].$i?>"><?=$brand[$i]?></option>
        <?php endfor;
        for($i = 0; $brand[$i] != null; $i++){
$brand = "num_res". $i;
$value = "" . $id_zh[$i];
print "<input type='hidden' name='".$brand."' value='".$value."'>";
}
       ?>
<br><br>
Сервис:
<select name='name'>
        <?php
        for($j = 0; $name[$j] != null; $j++): ?>
            <option value="<?=$name[$j].$j?>"><?=$name[$j]?></option>
        <?php endfor;
        for($j = 0; $name[$j] != null; $j++){
$name = "num_resn". $j;
$value1 = "" . $id_zh1[$j];
print "<input type='hidden' name='".$name."' value='".$value1."'>";
}

print "<br>ФИО клиента: <input name='fio' size='50' type='varchar'value='".$fio."'><br>";
print "<br>Стоимость: <input name='cost' size='50' type='varchar'value='".$cost."'><br>";
        ?>
        </select><br>
<?php
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"lab4.php\"> Вернуться к списку</a>";
?> 
		
</div>
	</body>
</html>