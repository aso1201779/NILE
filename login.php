<?php
 session_start();
$error_Message = "";
$viewUserId = "";

//データベースにログイン
$conn = mysql_connect('127.0.0.1','root','nile' );
	//接続チェック
	if ($conn == false)
	{
		die("mysql接続エラー");
	}

//データベースの指定
$result = mysql_select_db('nile',$conn);
//文字型をセット
$result = mysql_query('SET NAMES utf8', $conn);
//表の呼び出し
$result = mysql_query('SELECT * FROM customer ', $conn);
 	//mysql_query()関数のコールで得られたSQL実行結果を格納
	while($rows = mysql_fetch_array($result))

//もしもログインボタンが押されたら
if (isset($_POST['login'])) {

	if ($_POST['user_id'] == $rows['user_id'] && $_POST['password'] == $rows['password'] ){
		session_regenerate_id(TRUE);
		$_SESSION['user_id'] = $rows['user_id'];
		$_SESSION['user_name'] = $rows['customer_name'];

		header("Location: http://localhost/NILE/index.php");
 		exit;
 	}else {
      			$error_Message = 'ユーザIDまたはパスワードに誤りがあります。';
	}

}
  mysql_close($conn);
 ?>


<html>
	<head><meta charset="UTF-8">
		<title>NILE</title>
		<link rel="stylesheet" href="nile.css">
	</head>
    <body bgcolor="#f0fff4">

	<?php include 'top2.php';?>
    <h1>会員ページにログイン</h1>
        <hr>
        <div class="center">
			<FONT COLOR="RED"><?php echo $error_Message; ?></FONT><br><br>
        	ユーザIDとパスワードを入力してください
				<br><br>
		<form action="login.php" method="POST">
            <table align="center">
			<tr>
			<td >ユーザID：</td>
			<td><input type="text" id="user_id" name="user_id" value=""></td>
			</tr>
			<tr>
			<td>パスワード：</td>
			<td><input type="password" id="password" name="password" value=""></td>
			</tr>
			<tr>
			<td colspan="2" align="center">
				<input type="submit" id="login" name="login" value="ログイン">

			</td>
			</tr>
			</table>
		</form>
<br><br>
初めてご利用ですか？<a href="kaiin.php">新規登録はこちら</a>
</div>

</body>
</html>

