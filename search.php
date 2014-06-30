
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NILE</title>
<link rel="stylesheet" href="nile.css">
</head>
<body>
<?php include 'top.php';
mb_regex_encoding('UTF-8');
require ('common.php');
$pdo = connect();
if (@$_GET['searchform'] != null){
	$input_data = $_GET['searchform'];
	print('入力した値は、'.$input_data.'<br>');

	$input_data = preg_replace('/　/',' ', $input_data);
	$input_data = preg_replace('/\s+/',' ', $input_data);
	$input2 = $input_data;
	$array = explode(' ',$input2);

	$count = 0;
?>

<script type="text/javascript" src="show.js"></script>
<!--   highslide  -->
<link rel="stylesheet" type="text/css" href="http://isys.jpn.ph/home_test/highslide/highslide/highslide.css" />
<script type="text/javascript" src="http://isys.jpn.ph/home_test/highslide/highslide/highslide-with-html.js"></script>
<script type="text/javascript" src="http://isys.jpn.ph/home_test/highslide/highslide/highslide.js"></script>

<?php
	foreach ($array as $value){

		$st = $pdo->query("SELECT product_code,product_name,tanka,product_kubun_name,meika_kubun_name,genre_kubun_name,stock,comment
						FROM product left outer join product_kubun on product.product_kubun = product_kubun.product_kubun_code
						left outer join meika_kubun on product.meika_kubun = meika_kubun.meika_kubun_code
						left outer join genre_kubun on product.genre_kubun = genre_kubun.genre_kubun_code
						left outer join stock using(product_code)
						WHERE product_name LIKE  \"%{$value}%\" OR meika_kubun_name LIKE \"%{$value}%\"
						OR genre_kubun_name LIKE \"%{$value}%\" OR product_kubun_name LIKE \"%{$value}%\"");
		$search = $st->fetchAll();
			?><div class="item_list">
				<form method="post" action="cart.php" name="DEF_Fgoodslist">
				<!++++++++++ ▼商品表示　start ++++++++++>
				<?php foreach ($search as $s){ ?>
				<table width="100%" height="150px" cellspacing="1" cellpadding="4">
					<!--   ◆商品counter No.= (No.1)  -->
					<tr bgcolor="#FFFFFF">
					  <td align="center" valign="top" rowspan="3" width="20%" style="padding:5px">
						<font color="#666666" size="2">
							<b></b></font>
					  <!--【商品画像（サムネイル）】-->
							<a id="thumb1" href="./ynx-sht-12f-227-1[1].jpg" alt="" class="highslide" onclick="return hs.expand(this)">
							<img style="width:150px;border:1 solid;" src=<?php echo img_tag($s['product_code']) ?>  pbshowcaption="false" /></a>
							<div class="highslide-caption"></div>
						</td>
					  <td valign="top" width="90%">
					    <!--【商品分類】-->
							<?php echo $s['genre_kubun_name']?>　|　<?php echo $s['product_kubun_name']?>　|　<?php echo $s['meika_kubun_name'] ?>
					  </td>
					  <td valign="top" nowrap align="right" width="10%">
					    <!--【在庫数】-->
							在庫：<?php echo $s['stock'] ?>台
					  </td>
					</tr>
					<tr bgcolor="#FFFFFF">
					  <td valign="top" width="90%"><b>
						    <!--【商品コード】-->
								<a href="./highslide/index.htm" onclick="return hs.htmlExpand(this)"><?php echo $s['product_code'] ?></a>
							<div class="highslide-maincontent" style="text-align:left;margin-left:20px;widh:200px;">
								商品コード：<?php echo $s['product_code'] ?>
						    <!--【メーカー名】-->
								<?php echo $s['meika_kubun_name'] ?><br>
						    <!--【商品名】-->
								<?php echo $s['product_name'] ?></div>
						    </b>
						</td>
					  <td valign="top" align="right" nowrap width="10%">
					    <!--【販売単価】-->
					    <b><font color="#FF3300">
					    　販売価格         <?php echo $s['tanka'] ?>（税込）　</font></b>
					    　</td>
					</tr>
					<tr bgcolor="#FFFFFF">
					  <td valign="top" colspan="1" style="width:90%;font-size:12px;">
							<!--【商品説明１（先頭100文字分、HTMLタグ無効）】-->
							商品説明<br>　　<?php echo $s['comment'] ?>
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
				</table>
				<Hr>
				<?php $count = $count + 1; }?>
				</form>
				</div>
<?php
	}
	echo ($count.'件ヒット！！');
}
?>
</body>
</html>