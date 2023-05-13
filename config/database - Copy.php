<?php

// konfigurasi database
$db_host = 'localhost';
$db_user = 'colk2336_olelo';
$db_pass = 'GHGsubasd567523nashdf324sd9nhfd987';
$db_base = 'colk2336_db_batamolelo';

// koneksi database
@mysql_connect($db_host, $db_user, $db_pass) or die('Tidak terhubung ke MySQL : ' . mysql_error());
@mysql_select_db($db_base) or die('Tidak terhubung ke Database : ' . mysql_error());


?>
