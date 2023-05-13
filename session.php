<?php
	session_start();
		if (empty($_SESSION['username']) AND
			empty($_SESSION['password'])){
		 	header('location:login.php');
			
			}
			else{
				if ($_SESSION['level']=='admin'){
					include 'pages/head.php';
					include 'pages/container_admin.php';
					include 'pages/footer.php';
				}else
				if ($_SESSION['level']=='asisten'){
					include 'pages/head.php';
					include 'pages/container.php';
					include 'pages/footer.php';
				}else
				if ($_SESSION['level']=='sales_admin'){
					include 'pages/head.php';
					include 'pages/container_sales_admin.php';
					include 'pages/footer.php';
				}else
				if ($_SESSION['level']=='counter'){
					include 'pages/head.php';
					include 'pages/container_counter.php';
					include 'pages/footer.php';
				
				}else { header('location:index.php'); }
			}

	
?>
