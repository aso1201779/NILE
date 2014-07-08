<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">
</head>
<body>
<?php include 'common.php';
include 'top.php';
$point300 = 300;
$pdo = connect();
$tmp = $_SESSION['user_id'];
$db = $pdo->prepare("select point from customer where user_id = ?");
$db->execute(array($tmp));
$row = $db->fetch();
if(!$db){
	$point=0;
}else{
	$point = $row['point'];
}
$gacha = floor(intval($point) / 300);
?>
<h1>ポイント</h1>
<br><br>
<div class="center">
<div class="centerLeft">
<div style="float:left;width:500px; font-size:17px;">
　　　あなたのポイントは　<?php echo  $point; ?>ptです<br>
<br>
　　　ガチャが　<?php echo $gacha ?>回引けます<br>
<br>
　　　１ポイントで１円の割引になります。<br>
　　　３００ポイントでガチャが引けます。<br>
　　　あたりを引くと非売品！Nileの商品が当たります！<br>
</div>
<div style="float:left;width:340px;">
<a href="omikuji.html" onclick="location.replace('omikuji.html'); return false;"><img src="image/gacha1.jpg" alt="がちゃる" onMouseDown="this.src='image/gacha2.jpg';" border="0"></a>
</div>
</div>
</div>
</body>
</html>