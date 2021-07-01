<?php
	$servidor = "localhost";
	$banco= "musica";
	$usuario= "root";
	$senha= "";	
	
	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha,array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
		PDO::ATTR_PERSISTENT => false,
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	));	
?>