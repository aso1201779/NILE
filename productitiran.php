<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">
<script type="text/javascript" src="show.js"></script>

<!--   highslide  -->
<link rel="stylesheet" type="text/css" href="http://isys.jpn.ph/home_test/highslide/highslide/highslide.css" />
<script type="text/javascript" src="http://isys.jpn.ph/home_test/highslide/highslide/highslide-with-html.js"></script>
<script type="text/javascript" src="http://isys.jpn.ph/home_test/highslide/highslide/highslide.js"></script>

</head>

<!--   << body start >>  -->
<body>
<div class="center">
<?php

		include 'top.php';
?>
<ul id="productoption">
	<li><?php echo $_GET['id']?></li>
	<li><?php echo $_GET['name']?></li>
</ul>
<div class="clear"></div>
</div>

<div class="item_list">
<form method="post" action="cart.php" name="DEF_Fgoodslist">
<!++++++++++ ▼商品表示　start ++++++++++>
<table width="100%" border="0" cellspacing="1" cellpadding="4">
	<?php foreach ($product as $p){ ?>
	<!--   ◆商品counter No.= (No.1)  -->
	<tr bgcolor="#FFFFFF">
	  <td align="center" valign="top" rowspan="3" width="20%" style="padding:5px">
		<font color="#666666" size="2">
			<b></b></font>
	  <!--【商品画像（サムネイル）】-->
			<a id="thumb1" href="./ynx-sht-12f-227-1[1].jpg" alt="" class="highslide" onclick="return hs.expand(this)">
			<img style="width:80px;border:1 solid;" src="ynx-sht-12f-227-1[1].jpg"  pbshowcaption="false" /></a>
			<div class="highslide-caption"></div>
		</td>
	  <td valign="top" width="90%">
	    <!--【商品分類】-->
			<?php echo $p['genre_kubun_name']?>　|　<?php echo $p['product_kubun_name']?>　|　<?php echo $p['meika_kubun_name'] ?>
	  </td>
	  <td valign="top" nowrap align="right" width="10%">
	    <!--【在庫数】-->
			在庫：<?php echo $p['stock'] ?>台
	  </td>
	</tr>
	<tr bgcolor="#FFFFFF">
	  <td valign="top" width="90%"><b>
	    <!--【商品コード】-->
			<a href="./highslide/index.htm" onclick="return hs.htmlExpand(this)"><?php echo $p['product_code'] ?></a>
		<div class="highslide-maincontent" style="text-align:left;margin-left:20px;widh:200px;">
			<h4>商品コード：<br><br><br>シューズ | ヨネックス<br><br></h4><br></div><br>
	    <!--【メーカー名】-->
			<?php echo $p['meika_kubun_name'] ?><br>
	    <!--【商品名】-->
			<?php echo $p['product_name'] ?>
	    </b>
		</td>
	  <td valign="top" align="right" nowrap width="10%">
	    <!--【販売単価】-->
	    <b><font color="#FF3300">
	    　販売価格         <?php echo $p['tanka'] ?>（税込）　</font></b>
	    　</td>
	</tr>
	<tr bgcolor="#FFFFFF">
	  <td valign="top" colspan="1" style="width:90%;font-size:12px;">
			<!--【商品説明１（先頭100文字分、HTMLタグ無効）】-->
	    <!--商品属性1：0【商品属性1】1～20まで使用可-->
	  </td>
		<td align="center">
			<input type="image" src="image/カート2.jpg" alt="カートに入れる" onclick="CartIn('DEF_Fgoodslist','r_gcode','N0012')" />
	<select name="r_gquant[{$p['product_code']}]">
		<option value="1">1</option>
	</select>

	<span style="float:right; color:red;"></span>
	  </td>
	</tr>
	<tr bgcolor="#FFFFFF">
	  <td height="5" colspan="3" align="center">
	  </td>
	</tr>
	<?php }?>
</table>
</form>
</div>

<div class="left">
<ul><h3>メーカー別</h3>
	<li><a href="#"></a>メーカー名</li>
</ul>
<ul><h3>ランキング別</h3>
	<li><a href="#"></a>製品名</li>
</ul>
</div>
<div class="left">
<ul><h3><?php echo $_GET['id']?></h3>
	<li><a href="#"></a>その他の種類</li>
</ul>
</div>
</body>
</html>