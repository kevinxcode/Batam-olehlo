<?php

	$DB_HOST = 'localhost';
	$DB_USER = 'colk2336_olelo';
	$DB_PASS = 'GHGsubasd567523nashdf324sd9nhfd987';
	$DB_NAME = 'colk2336_db_batamolelo';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
