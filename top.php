<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="nile.css">
</head>
<body>
<div class="body">
<div id="left">
    <div id="icon">
    	<a href="index.php"><img src="image/nile.png" border="0"></a>
    </div>
    <div id="search">
            <form method="get" action="search.php">
            <input type="search" id="searchform" name="searchform" placeholder="何をお探しですか？" list="data1" />
            <datalist id="data1">
            	<option value="野球"></option>
            	<option value="サッカー"></option>
            	<option value="バスケットボール"></option>
            	<option value="テニス"></option>
            </datalist>
            <input type="submit" name="submit" value="検索" />
            <input type="image" src="image/search.png" alt="検索する" />
            </form>
    </div>
</div>
<div id="right">
	<ul>
	  <li><a href="coin.php"><img src="image/coin.png" border="0"><br>コイン</a></li>
	  <li><a href="productinfo.php"><img src="image/会員情報.png" border="0"><br>会員情報</a></li>
	  <li><a href="cart.php"><img src="image/カート.jpg" border="0"><br>カート</a></li>
	  <li><a href="buyhis.php"><img src="image/購入履歴.jpg" border="0"><br>購入履歴</a></li>
	  <li><a href="help.php"><img src="image/help.jpg" border="0"><br>ヘルプ</a></li>
	</ul>
</div>
<br><br><br><br>
<ul id="dropmenu">
	<li><a href="#">Baseball</a>
		<ul>
			<li><a href="#">スパイク</a></li>
			<li><a href="#">バット</a></li>
			<li><a href="#">グローブ</a></li>
			<li><a href="#">ボール</a></li>
		</ul>
	</li>
	<li><a href="#">Soccer</a>
		<ul>
			<li><a href="#">スパイク</a></li>
			<li><a href="#">ユニフォーム</a></li>
			<li><a href="#">ボール</a></li>
		</ul>
	</li>
	<li><a href="#">Basketball</a>
		<ul>
			<li><a href="#">シューズ</a></li>
			<li><a href="#">トップス</a></li>
			<li><a href="#">ハーフパンツ</a></li>
		</ul>
	</li>
	<li><a href="#">Tennis</a>
		<ul>
			<li><a href="#">シューズ</a></li>
			<li><a href="#">ラケット</a></li>
			<li><a href="#">ボール</a></li>
		</ul>
	</li>
</ul>
</div>
</body>
</html>