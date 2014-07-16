<?php
	$error = '';
	if(@$_POST['kaiin']){
		if(!$_POST['lname'])$error .= '名前(姓)がありません。<br>';
		if(!$_POST['fname'])$error .= '名前(名)がありません。<br>';
		if(!$_POST['lname2'])$error .= 'フリガナ(姓)がありません。<br>';
		if(!$_POST['fname2'])$error .= 'フリガナ(名)がありません。<br>';
		if(!$_POST['post1'])$error .= '郵便番号に誤りがあります。<br>';
		if(!$_POST['post2'])$error .= '郵便番号に誤りがあります。<br>';
		if(!$_POST['prefecture'])$error .= '都道府県を選択してください。<br>';
		if(!$_POST['municipality'])$error .= '市町村がありません。<br>';
		if(!$_POST['number'])$error .= '番地がありません。<br>';
		if(!$_POST['mail'])$error .= 'メールアドレスがありません。<br>';
		if(!$_POST['year'])$error .= '生まれた年を選択してください。<br>';
		if(!$_POST['month'])$error .= '生まれた月を選択してください。<br>';
		if(!$_POST['day'])$error .= '生まれた日を選択してください。<br>';

		if(!$error){
			header('Location: kaiin2.php');
			exit();
		}
	}
	require 'kaiin.php';
?>