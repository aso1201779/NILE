
<?php session_start();

if(isset($_SESSION["user_id"])){
	$errorMessage="ログアウトしました！";
}else{
	$errorMessage="セッションがタイムアウトしました。";
}
//セッション変数のクリア
$_SESSION = array();
//セッションクリア
@session_destroy();
?>

<html>
<head><meta charset="UTF-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">
</head>
 <body bgcolor="#f0fff4">

<div class="center"><h2><FONT COLOR=RED><?php $errorMessage;?></FONT></h2>
<img src="image/秘密な写真.png" width="413" height="237" alt=""></div><br>
<br>

<a href="index.php">メイン画面に戻る</a>
</body>
</html>

