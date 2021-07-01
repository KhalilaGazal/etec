<?php
	$host = "localhost";
	$dbname = "patrono";
	$user = "root";
	$pass = "";
	
	$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass,array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
		PDO::ATTR_PERSISTENT => false,
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	));	
?>