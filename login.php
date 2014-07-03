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

		header("Location: http://localhost/NILE/main.php");
 		exit;
 	}else {
      			$error_Message = 'ユーザIDまたはパスワードに誤りがあります。';
	}

}
  mysql_close($conn);
 ?>


<html>
    <head>

        <meta charset="UTF-8">
        <title>ログイン画面</title>

    </head>
    <body bgcolor="#f0fff4">
<form action="login.php" method="POST">

    <h1><img src="image/nile.png" alt="nile">会員ページにログイン</h1>
        <hr>
        <div align="center">
            <table border="0">
            <fieldset>
  <center>ユーザIDとパスワードを入力してください
  <br><br>

  ユーザID:<input type="text" id="user_id" name="user_id" value="">
  <br><br><br>
  パスワード:<input type="password" id="password" name="password" value="">
  <br><br>
  <div><h2><FONT COLOR="RED"><?php echo $error_Message; ?></FONT></h2></div>


  <input type="submit" id="login" name="login" value="ログイン">
  </center>


  </fieldset>
  </form>
</table></div></form>

</body>
</html>

