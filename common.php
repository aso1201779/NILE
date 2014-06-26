<?php
	session_start();
	session_regenerate_id(true);  //sessionハイジャック防止

	function connect(){
		return new PDO("mysql:dbname=nile","root","nile");
	}

/*	function img_tag($code){
		if(file_exists("images/$code.jpg")) $name = $code;
		else $name = 'noimage';
		return '<img src="images/' . $name . '.jpg" alt="">';
	} */
?>