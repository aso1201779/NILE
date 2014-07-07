<?php
include 'common.php';
	$pdo = connect();
	$pr = $pdo->query("SELECT product_code,product_name,tanka,product_kubun_name,meika_kubun_name,genre_kubun_name,stock,comment
						FROM product left outer join product_kubun on product.product_kubun = product_kubun.product_kubun_code
						left outer join meika_kubun on product.meika_kubun = meika_kubun.meika_kubun_code
						left outer join genre_kubun on product.genre_kubun = genre_kubun.genre_kubun_code
						left outer join stock using(product_code)
						where product_code like '{$_GET['code']}%' and product_kubun like '{$_GET['kubun']}%' ");
	$product = $pr->fetchAll();

	$me = $pdo->query("SELECT DISTINCT meika_kubun_code,meika_kubun_name
			FROM product left outer join product_kubun on product.product_kubun = product_kubun.product_kubun_code
			left outer join meika_kubun on product.meika_kubun = meika_kubun.meika_kubun_code
			where product_code like '{$_GET['code']}%' and product_kubun like '{$_GET['kubun']}%' ");
	$meika = $me->fetchAll();

	$etcpr = $pdo->query("SELECT DISTINCT product_kubun_code,product_kubun_name
						FROM product left outer join product_kubun on product.product_kubun = product_kubun.product_kubun_code
						left outer join meika_kubun on product.meika_kubun = meika_kubun.meika_kubun_code
						where product_code like '{$_GET['code']}%' and product_kubun <> ('{$_GET['kubun']}') ");
	$etcpr = $etcpr->fetchAll();

	require 'productitiran.php';
?>