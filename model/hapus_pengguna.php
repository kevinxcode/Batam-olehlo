<?php
include "../config/config.php";
$sql="DELETE FROM `tb_pengguna` WHERE `username` =
'$_GET[username]'";
mysql_query($sql) or die("Gagal Menghapus");

echo header('location:../session.php?p=User&error=4');
?>