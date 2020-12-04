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
<?php 
		$connect = mysqli_connect("localhost", "root", "root", "galanov")or die("Невозможно подключиться к серверу");
		mysqli_query($connect, "SET NAMES utf8");		
?>
<h4>Холодильники</h4>
<table border="3"> <tr> 
<th>Марка </th>   
<th> Модель  </th>
<th> Тип заморозки </th> 
  <th> Внутренний объем </th> 
<th> Срок гарантии </th> 
 </tr>
<?php $result=mysqli_query($connect,"SELECT id, brand, model, typez, volume, term  FROM fridge");
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['brand'] . "</td>";
echo "<td>" . $row['model'] . "</td>";
echo "<td>" . $row['typez'] . "</td>";
echo "<td>" . $row['volume'] . "</td>";
echo "<td>" . $row['term'] . "</td>";
echo "<td><a href='red.php?id=" .$row['id']."'>Редактировать</a></td>";
//запуск скрипта для редактирования
echo "<td><a href='udalenie.php?id=" .$row['id']."'>Удалить</a></td>";
//запуск скрипта для удаления записи
echo "</tr>";}print "</table>";
$num_rows = mysqli_num_rows($result);
// число записей в таблице БД
print("<P>Количество холодильников: $num_rows </p>");
?>		
<p> <a href="dobav.php">Новый холодильник</a>
						<h4>Сервисные центры</h4>		 
<table border="3"> <tr> 
<th> Название </th>   
<th> Адрес  </th>
 </tr>
<?php $result=mysqli_query($connect,"SELECT id, name, address  FROM service");
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td><a href='redservice.php?id=" .$row['id']."'>Редактировать</a></td>";
//запуск скрипта для редактирования
echo "<td><a href='udalenieservice.php?id=" .$row['id']."'>Удалить</a></td>";
//запуск скрипта для удаления записи
echo "</tr>";}print "</table>"; 
$num_rows1 = mysqli_num_rows($result);
// число записей в таблице БД
print("<P>Количество разработчиков: $num_rows1 </p>");

?>		
<p> <a href="servicedobav.php">Новый сервисный центр</a>

	<h4>Заявки на ремонт</h4>		 
<table border="3"> <tr> 
<th> Дата начала ремонта </th>   
<th> Дата окончания  </th>
<th> Холодильник </th> 
<th> Сервисный центр </th>
<th> ФИО клиента </th>  
<th> Стоимость </th> 
 </tr>
<?php $result=mysqli_query($connect,"SELECT id, daten, dateo, name_f, name_c, fio, cost  FROM request");
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . date_format(date_create_from_format('Y-m-d', $row['daten']),'d.m.Y')  . "</td>";
echo "<td>" . date_format(date_create_from_format('Y-m-d', $row['dateo']),'d.m.Y')  . "</td>";
echo "<td>" . $row['name_f']."</td>";
echo "<td>" . $row['name_c'] . "</td>";
echo "<td>" . $row['fio'] . "</td>";
echo "<td>" . $row['cost'] . "</td>";
echo "<td><a href='redreq.php?id=" .$row['id']."'>Редактировать</a></td>";
//запуск скрипта для редактирования
echo "<td><a href='udaleniereq.php?id=" .$row['id']."'>Удалить</a></td>";
//запуск скрипта для удаления записи
echo "</tr>";}print "</table>"; 
$num_rows1 = mysqli_num_rows($result);
// число записей в таблице БД
print("<P>Количество приложений: $num_rows1 </p>");
?>		
<p> <a href="reqdobav.php">Новая заявка</a>

<p> <a href="gen_pdf.php">PDF</a>
<p> <a href="gen_xls.php">Сохранить Excel</a>		

<p><a href="index.php">Вернуться назад </a></p>

	</body>
</html>
