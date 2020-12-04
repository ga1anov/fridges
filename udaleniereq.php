<?php
$connect = mysqli_connect("localhost", "root", "root", "galanov" );
mysqli_query($connect, "SET NAMES utf8");
$zapros1="DELETE FROM request WHERE id=".$_GET['id'];
mysqli_query($connect, $zapros1);
echo "<script>window.location.href='laba4.php'</script>";
exit;
?>