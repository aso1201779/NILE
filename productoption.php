<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">
</head>
<body onload="Gazou2()">
<?php include 'top.php';?>
<div class="center">
<?php
$id = $_GET['id'];
$name = $_GET['name'];

?>
<br><br>
<ul id="productoption">
	<li><?php echo $id?></li>
	<li><?php echo $name?></li>
</ul>
<div class="clear"></div>
<?php include 'imgscript.php';?>

</div>
</body>
</html>