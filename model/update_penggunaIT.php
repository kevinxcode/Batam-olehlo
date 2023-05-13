<?php
	include "../config/config.php";
	if ($_POST['password']=='') {
		$sql="UPDATE `tb_pengguna` SET
		`username` = '$_POST[username]',
		`nama_lengkap` = '$_POST[nama_lengkap]',
		`level` = '$_POST[level]' WHERE `username` =
		'$_POST[username2]';";
	}else{
		$sql="UPDATE `tb_pengguna` SET
		`username` = '$_POST[username]',
		`password` = md5('$_POST[password]'),
		`nama_lengkap` = '$_POST[nama_lengkap]',
		`level` = '$_POST[level]' WHERE `username` =
		'$_POST[username2]';";
	}
	mysql_query($sql) or die("Gagal Memperbaharui");
	//header ("location:../index.php?p=pengguna");
	
	echo header('location:../session.php?p=User&error=2');
	
?>