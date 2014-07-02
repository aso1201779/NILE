<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">
</head>
<body>
<?php include 'top.php';
require ('common.php');
$pdo = connect();
$point = $pdo->query("select point from customer where customer_code = {$session['']}");
$gacha = $point / 300;
?>
<h1>ポイント</h1>
<br><br>
<div class="center">
<div class="centerLeft">
<div style="float:left;width:500px; font-size:17px;">
　　　あなたのポイントは　<?php echo $point ?>ptです<br>
<br>
　　　ガチャが　<?php $gacha ?>回引けます<br>
<br>
　　　１ポイントで１円の割引になります。<br>
　　　３００ポイントでガチャが引けます。<br>
　　　あたりを引くと非売品！Nileの商品が当たります！<br>
</div>
<div style="float:left;width:340px;">
<a href="omikuji.html" ><img src="image/gacha1.jpg" alt="がちゃる" onMouseDown="this.src='image/gacha2.jpg';" border="0"></a>
</div>
</div>
</div>
</body>
</html>