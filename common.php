<?php
	session_start();

	function connect(){
		return new PDO("mysql:host=127.0.0.1;dbname=nile","root","nile");
	}

	function img_tag($code){
		if(file_exists("image/product/$code.jpg")) $name = $code;
		else $name = 'noimage';
		return 'image/product/' . $name;
	}
?>