<?php
 session_start();
 session_destroy();
	echo header('location:../index.php?p=home&error=1');
?>
