<?php
	 include "../config/config.php";
// Cek username di database
$cek_konsumen=mysql_num_rows(mysql_query
             ("SELECT kategori FROM kategori
               WHERE kategori='$_POST[kategori]'"));
// Kalau username sudah ada yang pakai
if ($cek_konsumen > 0){
echo header('location:../session.php?p=kategori&error=4');
}
// Kalau username valid, inputkan data ke tabel users
else{
	
	//menyimpan ke table 
	$sql = "insert into kategori
	(kategori,ket) values 
	('{$_POST['kategori']}',
	
	'{$_POST['ket']}')";
	mysql_query($sql) or die('Gagal menyimpan');
		
		echo header('location:../session.php?p=kategori&error=2');
	

}
