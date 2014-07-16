<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="nile.css">
<title>登録が完了しました</title>
</head>
<body>
<img src="image/step3.png" border="0" align="right">
<div class="clear"></div>
<h1>登録が完了しました。</h1><br />

<div style="text-alig;width:550px;margin-left:auto;margin-right:auto;">
入力していただいたメールアドレスにユーザIDとパスワードを送付しました
<br />
メールをご確認ください<br />
<br />
サーバが混雑する場合がありますので本登録メールの送信が遅くなる場合がございます。<br />
あらかじめご了承ください。<br />
<br />
24時間以内に届かない場合は<a href="inquiry.php">お問い合わせ</a>まで<br />
</div>
</body>
</html>

<?php
	require 'common.php';
	$error = $name = $comment =$price = '';
	$pdo = connect();
	if(@$_POST['submit']){
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$price = $_POST['price'];
		if(!$name)$error .= '商品名がありません。<br>';
		if(!$comment)$error .= '商品説明がありません。<br>';
		if(!$price)$error .= '価格がありません。<br>';
		if(preg_match('/\D/',$price))$error .= '価格が不正です。<br>';
		if(!$error){
			$pdo->query("insert into goods(name,comment,price) values('$name','$comment',$price)");
			header('Location: index.php');
			exit();
		}
	}
?>