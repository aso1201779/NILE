<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">
</head>
<body onload="Gazou2()">
<div class="center">
<?php include 'top.php';?>

<SCRIPT LANGUAGE="JavaScript">
<!--

mySrc=new Array("image/tokusyu/baseboll.jpg","image/tokusyu/soccor.jpg","image/tokusyu/basketball.jpg","image/tokusyu/tennis.jpg");
n=0;
function Gazou2(){
document.myIMG.src=mySrc[n];
n++;
if(n==4){n=0}
setTimeout("Gazou2()",5000);
}
function Gazou(mysrc){
	document.myIMG.src=mysrc;
}
//-->
</SCRIPT>
<img name="myIMG" src="image/tokusyu/baseboll.jpg" border="0" width="1260" height="359">
<br>
<div class="center">
<FORM>
<INPUT type="radio" name="myRB" onClick="Gazou('image/tokusyu/baseboll.jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('image/tokusyu/soccor.jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('image/tokusyu/basketball.jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('image/tokusyu/tennis.jpg')">
</FORM>
<br><br>
<p>
<a href=inquiry.php>お問い合わせ</a>
<a href=shopinfo.php>店舗情報</a>
<a href=policy.php>利用規約</a>
</p>
</div>
</div>
</body>
</html>