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

<?php include 'top.php';?>
<div class="center">
<ul id="productoption">
	<li><?php echo $_GET['id'];?></li>
	<li><?php echo $_GET['name'];?></li>
</ul>
<div class="clear"></div>
</div>

<div class="item_list" >

<!++++++++++ ▼商品表示　start ++++++++++>
<hr>
<?php foreach ($product as $p){ ?>
<table width="100%" height="150px" cellspacing="1" cellpadding="4">

	<!--   ◆商品counter No.= (No.1)  -->
	<tr bgcolor="#FFFFFF">
	  <td align="center" valign="top" rowspan="3" width="20%" style="padding:5px">
		<font color="#666666" size="2">
			<b></b></font>
	  <!--【商品画像（サムネイル）】-->
			<a href="customer.php?product_name=<?php echo $p['product_name'];?>&tanka=<?php echo $p['tanka'];?>&comment=<?php echo $p['comment'];?>
			&stock=<?php echo $p['stock'];?>&product_code=<?php echo $p['product_code'];?>">
			<img style="width:150px;border:1 solid;" src=<?php echo img_tag($p['product_code']); ?>.jpg  pbshowcaption="false" /></a>
			<div class="highslide-caption"></div>
		</td>
	  <td valign="top" width="90%">
	    <!--【商品分類】-->
			<?php echo $p['genre_kubun_name'];?>　|　<?php echo $p['product_kubun_name'];?>　|　<?php echo $p['meika_kubun_name']; ?>
	  </td>
	  <td valign="top" nowrap align="right" width="10%">
	    <!--【在庫数】-->
			在庫：<?php echo $p['stock'] ?>
	  </td>
	</tr>
	<tr bgcolor="#FFFFFF">
	  <td valign="top" width="90%"><b>
		<div  style="text-align:left;margin-left:20px;widh:200px;">
	    <!--【メーカー名】-->
			<?php echo $p['meika_kubun_name']; ?><br>
	    <!--【商品名】-->
			　　<a href="customer.php?product_name=<?php echo $p['product_name'];?>&tanka=<?php echo $p['tanka'];?>&comment=<?php echo $p['comment'];?>
			&stock=<?php echo $p['stock'];?>&product_code=<?php echo $p['product_code'];?>"><?php echo $p['product_name']; ?></a></div>
	    </b>
		</td>
	  <td valign="top" align="right" nowrap width="10%">
	    <!--【販売単価】-->
	    <b><font color="#FF3300">
	    　販売価格         <?php echo $p['tanka']; ?>（税込）　</font></b>
	    　</td>
	</tr>
	<tr bgcolor="#FFFFFF">
	  <td valign="top" colspan="1" style="width:90%;font-size:12px;">
			<!--【商品説明１（先頭100文字分、HTMLタグ無効）】-->
			商品説明<br>　　<?php echo $p['comment'] ;?>
	    <!--商品属性1：0【商品属性1】1～20まで使用可-->
	  </td>
		<td align="center">
		<form method="get" action="customer.php" name="DEF_Fgoodslist">
			<input type="hidden" name="product_name" value="<?php echo $p['product_name'];?>" />
			<input type="hidden" name="tanka" value="<?php echo $p['tanka'];?>" />
			<input type="hidden" name="comment" value="<?php echo $p['comment'];?>" />
			<input type="hidden" name="stock" value="<?php echo $p['stock'];?>" />
			<input type="hidden" name="product_code" value="<?php echo $p['product_code'];?>" />

			<input type="image" src="image/syosai.jpg" onMouseOver="this.src='image/syousai shadow.png'" onMouseOut="this.src='image/syosai.jpg'" alt="詳細を見る" />

			<span style="float:right; color:red;"></span>
		</form>
	  </td>
	</tr>
</table>
<Hr>
<?php }?>

</div>

<div class="left">
<ul><h3>メーカー別</h3>
	<?php foreach ($meika as $m){ ?>
		<li><a href="#"><?php echo $m['meika_kubun_name']; ?></a></li>
	<?php }?>
</ul>
<ul><h3>ランキング別</h3>
	<li><a href="#"></a>製品名</li>
</ul>
</div>
<div class="left">
<ul><h3><?php echo $_GET['id'];?>のその他の商品</h3>
	<?php foreach ($etcpr as $ep){ ?>
		<li><a href="productoption.php?code=<?php echo $_GET['code'];?>&kubun=<?php echo $ep['product_kubun_code'];?>&id=<?php echo $_GET['id'];?>&name=<?php echo $ep['product_kubun_name']; ?>"><?php echo $ep['product_kubun_name'] ;?></a></li>
	<?php }?>
</ul>
</div>
</body>
</html>