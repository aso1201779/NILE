<?php
if(!isset($_SESSION['user_id'])) { ?>
		<div id="left">
		    <div id="icon">
		    	<a href="index.php"><img src="image/nile.png" border="0"  onMouseOver="this.src='image/nile shadow.png'" onMouseOut="this.src='image/nile.png'"></a>
		    </div>
		    <div id="search">
		            <form method="get" action="search.php">
		            <input type="text" id="searchform" name="searchform" placeholder="何をお探しですか？" />
		            <input type="image" id="searchimage" src="image/search.png" onMouseOver="this.src='image/search shadow.png'" onMouseOut="this.src='image/search.png'" alt="検索する" />
		            </form>
		    </div>
		</div>

		<!-- ifで条件判定 divごと -->
		<div id="right">
			<ul>
			  <li><a href="help.php"><img src="image/help.jpg" border="0" onMouseOver="this.src='image/help shadow.png'" onMouseOut="this.src='image/help.jpg'"><br>ヘルプ</a></li>
			  <li><a href="cart.php"><img src="image/カート.jpg" border="0" onMouseOver="this.src='image/cart shadow.png'" onMouseOut="this.src='image/カート.jpg'"><br>カート</a></li>
			  <li><a href="login.php"><img src="image/login.jpg" border="0" onMouseOver="this.src='image/login shadow.png'" onMouseOut="this.src='image/login.jpg'"><br>ログイン</a></li>
			  </ul>
		</div>
		<div class="clear"></div>

<?php }else{?>
		<div id="left">
		    <div id="icon">
		    	<a href="index.php"><img src="image/nile.png" border="0" onMouseOver="this.src='image/nile shadow.png'" onMouseOut="this.src='image/nile.png'"></a>
		    </div>
		    <div id="search">
		            <form method="get" action="search.php">
		            <input type="text" id="searchform" name="searchform" placeholder="何をお探しですか？" />
		            <input type="image" id="searchimage" src="image/search.png" onMouseOver="this.src='image/search shadow.png'" onMouseOut="this.src='image/search.png'" alt="検索する" />
		            </form>
		    </div>
		</div>

		<!-- ifで条件判定 divごと -->
		<div id="right">
			<ul>
			  <li><a href="logout.php"><img src="image/logout.jpg" border="0" onMouseOver="this.src='image/logout shadow.png'" onMouseOut="this.src='image/logout.jpg'"><br>ログアウト</a></li>
			  <li><a href="help.php"><img src="image/help.jpg" border="0" onMouseOver="this.src='image/help shadow.png'" onMouseOut="this.src='image/help.jpg'"><br>ヘルプ</a></li>
			  <li><a href="buyhis.php"><img src="image/購入履歴.jpg" border="0" onMouseOver="this.src='image/his shadow.png'" onMouseOut="this.src='image/購入履歴.jpg'"><br>購入履歴</a></li>
			  <li><a href="cart.php"><img src="image/カート.jpg" border="0" onMouseOver="this.src='image/cart shadow.png'" onMouseOut="this.src='image/カート.jpg'"><br>カート</a></li>
			  <li><a href="customerinfo.php"><img src="image/会員情報.png" border="0" onMouseOver="this.src='image/droid shadow.png'" onMouseOut="this.src='image/会員情報.png'"><br>会員情報</a></li>
			  <li><a href="coin.php"><img src="image/coin.png" border="0" onMouseOver="this.src='image/coin shadow.png'" onMouseOut="this.src='image/coin.png'"><br>コイン</a></li>
			  <br><?php echo "ようこそ<br />" . $_SESSION['user_name'] . "さん"; ?>
			</ul>
		</div>
		<div class="clear"></div>
<?php }?>
