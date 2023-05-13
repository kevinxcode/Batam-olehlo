<?php
	 include "../config/config.php";

	$sql="INSERT INTO `tb_pengguna`(
	`username`,
	`password`,
	`nama_lengkap`,
	`level`)
	VALUES ('$_POST[username]',md5('$_POST[password]'),'$_POST[nama_lengkap]','$_POST[level]')";
	mysql_query($sql) or die("Gagal Menyimpan");
	
	echo header('location:../session.php?p=pengguna&error=2');


?>