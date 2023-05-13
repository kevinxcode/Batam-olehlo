<?php
include "../config/config.php";
$sql="DELETE FROM `kategori` WHERE `id_kategori` =
'$_GET[id_kategori]'";
mysql_query($sql) or die("Gagal Menghapus");
echo header('location:../session.php?p=kategori&error=4');
?>