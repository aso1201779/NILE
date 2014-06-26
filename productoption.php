<?php
	require 'common.php';
	$pdo = connect();
	$st = $pdo->query("SELECT product_code,product_name,tanka,product_kubun_name,meika_kubun_name,genre_kubun_name,stock
						FROM product left outer join product_kubun on product.product_kubun = product_kubun.product_kubun_code
						left outer join meika_kubun on product.meika_kubun = meika_kubun.meika_kubun_code
						left outer join genre_kubun on product.genre_kubun = genre_kubun.genre_kubun_code
						left outer join stock using(product_code)
						where product_code like '{$_GET['code']}%' and product_kubun like '{$_GET['kubun']}%' ");
	$product = $st->fetchAll();
	require 'productitiran.php';
?>