<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>Nile</title>
<script type="text/javascript" src="show.js"></script>

<!--   highslide  -->
<link rel="stylesheet" type="text/css" href="http://isys.jpn.ph/home_test/highslide/highslide/highslide.css" />
<script type="text/javascript" src="http://isys.jpn.ph/home_test/highslide/highslide/highslide-with-html.js"></script>
<script type="text/javascript" src="http://isys.jpn.ph/home_test/highslide/highslide/highslide.js"></script>
</head>
<body onload="Gazou2()">
<?php	include 'common.php';
include 'top.php';?>
<br>
<table width="95%" margin-left="auto" margin-right="auto" align="center">
<tr>
	<td align="left" width="90%">
	<!--【商品名】-->
		<?php echo $_GET['product_name'];?>
		</b>
	</td>
	<td rowspan="2" valign="top" align="right" nowrap width="10%">
		<form action="cart.php">
			<input type="image" src="image/カート2.jpg" alt="カートに入れる" onclick="CartIn('DEF_Fgoodslist','r_gcode','N0012')" />
			<select name="r_gquant[{$p['product_code']}]">
			<?php
				for($i = 1;$i <= $_GET['stock'] and $i <= 9; $i++){
					echo "<option>$i</option>";
				}
			?>
			</select>
		</form>
	</td>
</tr>
<tr>

		<td valign="top" align="left" nowrap width="90%">
			<!--【販売単価】-->
			<b><font color="#FF3300">
			販売価格         <?php echo $_GET['tanka'];?>円（税込）　</font></b>
		</td>

</tr>
 </table>
<hr>
<div class="center">
<SCRIPT LANGUAGE="JavaScript">
<!--
function Gazou(mysrc){
	document.pIMG.src=mysrc;
}
//-->
</SCRIPT>
<img name="pIMG" src="<?php echo img_tag($_GET['product_code']); ?>.jpg" border="0" width="300" height="300">
<br>
<FORM>
<INPUT type="radio" name="myRB" onClick="Gazou('<?php echo img_tag($_GET['product_code']); ?>.jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('<?php echo img_tag($_GET['product_code']); ?>(2).jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('<?php echo img_tag($_GET['product_code']); ?>(3).jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('<?php echo img_tag($_GET['product_code']); ?>(4).jpg')">

</FORM>
</div>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<br>
<title>商品の説明(タブメニュー編)</title>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
<script type="text/javascript">
var tab = {
	init: function(){
		var tabs = this.setup.tabs;
		var pages = this.setup.pages;

		for(i=0; i<pages.length; i++) {
			if(i !== 0) pages[i].style.display = 'none';
			tabs[i].onclick = function(){ tab.showpage(this); return false; };
		}
	},

	showpage: function(obj){
		var tabs = this.setup.tabs;
		var pages = this.setup.pages;
		var num;

		for(num=0; num<tabs.length; num++) {
			if(tabs[num] === obj) break;
		}

		for(var i=0; i<pages.length; i++) {
			if(i == num) {
				pages[num].style.display = 'block';
				tabs[num].className = 'present';
			}
			else{
				pages[i].style.display = 'none';
				tabs[i].className = null;
			}
		}
	}
}

</script>
<style type="text/css">

img {
	border:0
}
body {
	color: #666;

}
h1 {
	font-size: 0.8em;
	color:#69F;
	padding-bottom:10px;
}
.center{
	text-align:center;
}
#tab-wrapper {
	float:left;
	width:50%;
	margin-left: 10px;
	padding-top:00px;
}
#tab-a1 {
	border-left: 1px solid #ccc;
}
#tab li {
	float: right;
	width: 100px;
	height:20px;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-top: 1px solid #ccc;
	list-style-type: none;
}
#tab li a {
	display: block;
	width: 60px;
	color: #777;
	text-align: left;
	text-decoration:none;
	font-size:10px;
	padding:2px;
}
#tab li a:hover, #tab li.present a {
	background-color:#768AE9;
	color: #fff;
}
#tokutyo, #douga{
	clear:both;
	border:1px solid #cccccc;
	padding:5px;
	height:160px;
	font-size:13px;
	color:#666;
}

aaaa{
float:right;
width:30%
}
</style>


<div id="tab-wrapper">
 <ul id="tab">
 <li class="present" id="tab-a1"><a href="#tokutyo">特徴</a></li>
 <li ><a href="#douga">実演動画</a></li>
 </ul>
 <div id="tokutyo">
    <p><?php echo $_GET['comment'];?></p>
  </div>
  <div id="douga">
      <p>今日のスポーツは・・・・・・<br />
ここがタブ2の内容です！</p>
  </div>

<script type="text/javascript">
  tab.setup = {
	tabs: document.getElementById('tab').getElementsByTagName('li'),

	pages: [
		document.getElementById('tokutyo'),
		document.getElementById('douga'),
	]
}
tab.init();
</script>
</div>
<br>
<form action="./test.php" method="POST">
<select name="test1">
	<option value="val1">1</option>
	<option value="val2" selected>2</option>
	<option value="val3">3</option>
</select><br/>
</form>
<font>size</font><br>

<form name="form1" method="post" action="view.php">

<input type="radio" name="size" value="23">23

<input type="radio" name="size" value="24">24

<input type="radio" name="size" value="25">25

<input type="radio" name="size" value="26">26

<input type="radio" name="size" value="27">27

<input type="radio" name="size" value="28">28



<br>

</form>

<div id="aaaa">
<?php
if( isset( $_POST[ 'test1' ] ) ){
	//選択されたドロップダウンリストの value を表示する。
	print "送信された内容は{$_POST['test1']}です。<br/>";
}
?>

原産国　日本<br>
在庫：<?php echo $_GET['stock']?>
</div>
<br>
<br>
<div class="clear"></div>

この商品を買った人はこれも買っています

<h2>オススメ商品</h2>
<div class="item_list">
<div class="item">
<div class="name"><a href="/ca5/3/p-r-s/?style=custam">ホカ弁</a></div>
<a href="/ca5/3/p-r-s/?style=custam"><img style="width:180px;" src="PROHOLD TOUR Z AC（プロホールドツアー Z AC）DPSZA8.jpg" alt="TY-02" border="0"></a>
<div class="other">価格：<b>3,560円</b></div>
</div>
</div>
<div class="item_list">
<div class="item">
<div class="name"><a href="/ca5/5/p-r-s/?style=custam">ホカ弁2</a></div>
<a href="/ca5/5/p-r-s/?style=custam"><img style="width:180px;" src="YONEX(ヨネックス)【POWER CUSHION .png" alt="SA-03" border="0"></a>
<div class="other">価格：<b>2,350円</b></div>
</div>
</div>
<div class="item_list">
<div class="item">
<div class="name"><a href="/ca2/9/p-r-s/?style=custam">ホカ弁3</a></div>
<a href="/ca2/9/p-r-s/?style=custam"><img style="width:180px;" src="YONEX(ヨネックス)【POWER CUSHION 161LT（パワークッション161LT） SHT161LT.jpg" alt="アロマオイル" border="0"></a>
<div class="other">価格：<b>780円</b></div>
</div>
</div>
<br style="clear: both"><div class="item_list">
<div class="item">
<div class="name"><a href="/ca4/10/p-r-s/?style=custam">かえる置物</a></div>
<a href="/ca4/10/p-r-s/?style=custam"><img style="width:180px;" src="パワ-クッション ワイド 1002 SHT1002W115.jpg" alt="かえる置物" border="0"></a>
<div class="other">価格：<b>5,670円</b></div>
</div>
</div>
<div class="clear"></div>
<br><br><br>
</body>
</html>