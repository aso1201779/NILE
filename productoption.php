<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">
</head>
<body>
<?php include 'top.php';?>
<h1>商品選択後ページ</h1>
<div class="center">
<?php
$id = $_GET['id'];
$name = $_GET['name'];

?>
<ul id="productoption">
	<li><?php echo $id?></li>
	<li><?php echo $name?></li>
</ul>
</div>
</body>
</html>