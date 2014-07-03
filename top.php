<?php
include 'common.php';
if(!isset($_SESSION['user_id'])) { ?>
		<div id="left">
		    <div id="icon">
		    	<a href="index.php"><img src="image/nile.png" border="0"></a>
		    </div>
		    <div id="search">
		            <form method="get" action="search.php">
		            <input type="text" id="searchform" name="searchform" placeholder="何をお探しですか？" />
		            <input type="image" id="searchimage" src="image/search.png" alt="検索する" />
		            </form>
		    </div>
		</div>

		<!-- ifで条件判定 divごと -->
		<div id="right">
			<ul>
			  <li><a href="help.php"><img src="image/help.jpg" border="0"><br>ヘルプ</a></li>
			  <li><a href="cart.php"><img src="image/カート.jpg" border="0"><br>カート</a></li>
			  <li><a href="login.php"><img src="image/login.jpg" border="0"><br>ログイン</a></li>
			  </ul>
		</div>
		<div class="clear"></div>

<?php }else{?>
		<div id="left">
		    <div id="icon">
		    	<a href="index.php"><img src="image/nile.png" border="0"></a>
		    </div>
		    <div id="search">
		            <form method="get" action="search.php">
		            <input type="text" id="searchform" name="searchform" placeholder="何をお探しですか？" />
		            <input type="image" id="searchimage" src="image/search.png" alt="検索する" />
		            </form>
		    </div>
		</div>

		<!-- ifで条件判定 divごと -->
		<div id="right">
			<ul>
			  <li><a href="logout.php"><img src="image/logout.jpg" border="0"><br>ログアウト</a></li>
			  <li><a href="help.php"><img src="image/help.jpg" border="0"><br>ヘルプ</a></li>
			  <li><a href="buyhis.php"><img src="image/購入履歴.jpg" border="0"><br>購入履歴</a></li>
			  <li><a href="cart.php"><img src="image/カート.jpg" border="0"><br>カート</a></li>
			  <li><a href="customerinfo.php"><img src="image/会員情報.png" border="0"><br>会員情報</a></li>
			  <li><a href="coin.php"><img src="image/coin.png" border="0"><br>コイン</a></li>
			  <br><?php echo "ようこそ" . $_SESSION['user_name'] . "さん"; ?>
			</ul>
		</div>
		<div class="clear"></div>
<?php }?>
