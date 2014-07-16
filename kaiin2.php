

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>会員登録</title>
<link rel="stylesheet" href="nile.css">
</head>
<body>
<img src="image/step2.png" border="0" align="right">
<div class="clear"></div>
<h1>入力された情報に誤りはございませんか？</h1><br />

<div style="text-alig;width:400px;margin-left:auto;margin-right:auto;">
 <form method="post" action="kanryo.php">
 <table border=0 cellspacing=1 cellpadding=3 bgcolor="#000000">
 <tr height="30">
 <td bgcolor="#ffffff" width="150px">名前(姓)</td>
 <td width="250px" bgcolor="#ffffff"><?php
  if (isset($_POST['kaiin'])) {
	  if (isset($_POST['lname'])) {
	  	echo htmlspecialchars($_POST['lname']);
	  }
  ?></td>
 </tr>
 <tr height="30">
 <td bgcolor="#ffffff">名前(名)</td>
 <td bgcolor="#ffffff"><?php
  if (isset($_POST['fname'])) {
	echo htmlspecialchars($_POST['fname']);
  }
  ?></td>
 </tr>
 <tr height="30">
 <td  bgcolor="#ffffff">フリガナ(姓)</td>
 <td bgcolor="#ffffff"><?php
  if (isset($_POST['lname2'])) {
	echo htmlspecialchars($_POST['lname2']);
  }
  ?></td>
 </tr>
 <tr height="30">
 <td  bgcolor="#ffffff">フリガナ(名)</td>
 <td bgcolor="#ffffff"><?php
  if (isset($_POST['fname2'])) {
	echo htmlspecialchars($_POST['fname2']);
  }
  ?></td>
 </tr>
 <tr height="30">
 <td  bgcolor="#ffffff">郵便番号</td>
 <td bgcolor="#ffffff"><?php
  if (isset($_POST['post1'])) {
	echo htmlspecialchars($_POST['post1']);
  }
  ?>
  －
  <?php
  if (isset($_POST['post2'])) {
	echo htmlspecialchars($_POST['post2']);
  }
  ?>
  </td>
 </tr>
 <tr height="30">
 <td bgcolor="#ffffff">都道府県</td>
 <td bgcolor="#ffffff">
	<?php
  if (isset($_POST['prefecture'])) {
	echo htmlspecialchars($_POST['prefecture']);
  }
  ?>
	</td>
	</tr>
	<tr height="30">
	<td bgcolor="#ffffff">市区町村</td>
  	<td bgcolor="#ffffff"><?php
  if (isset($_POST['municipality'])) {
	echo htmlspecialchars($_POST['municipality']);
  }
  ?></td>
  	</tr>
  	<tr height="30">
  	<td bgcolor="#ffffff">番地</td>
  	<td bgcolor="#ffffff"><?php
  if (isset($_POST['number'])) {
	echo htmlspecialchars($_POST['number']);
  }
  ?></td>
  	</tr>
  	<tr height="30">
  	<td bgcolor="#ffffff">アパート・マンション名</td>
  	<td bgcolor="#ffffff"><?php
  if (isset($_POST['Apartment'])) {
	echo htmlspecialchars($_POST['Apartment']);
  }
  ?></td>
  	</tr>
  	<tr height="30">
  	<td bgcolor="#ffffff">メールアドレス</td>
  	<td bgcolor="#ffffff"><?php
  if (isset($_POST['mail'])) {
	echo htmlspecialchars($_POST['mail']);
  }
  ?></td>
  	</tr>
  	<tr height="30">
  	<td bgcolor="#ffffff">生年月日</td>
  	<td bgcolor="#ffffff">
	<?php
	  if (isset($_POST['year'])) {
		echo htmlspecialchars($_POST['year']);
	  }
	  ?>
	年
	<?php
	  if (isset($_POST['month'])) {
		echo htmlspecialchars($_POST['month']);
	  }
	  ?>
	月
	<?php
	  if (isset($_POST['day'])) {
		echo htmlspecialchars($_POST['day']);
	  }
	  ?>
	日 </td>
	</tr>
	<tr height="30">
 	<td bgcolor="#ffffff"> 性別</td>
  	<td bgcolor="#ffffff">
  	<?php
	  if (isset($_POST['sex'])) {
		echo htmlspecialchars($_POST['sex']);
	  }
	  }
	  ?></td>
  	</tr>
 </table>
 <br>
<br>入力情報を確認し、確定を押してください
  <br /><br>
  <input type="button" value="戻る" name="back" style="width: 50px; height: 25px; " onClick='history.back()'>
  <input type="submit" value="確定" name="kaiin" style="WIDTH: 180px; HEIGHT: 50px; float:right;">
 </form>
 </div>
</body>
</html>