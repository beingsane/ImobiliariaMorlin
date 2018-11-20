<?php

	define("HOST", "fdb22.awardspace.net"); 
	define("USER", "2839050_imobiliariamorlin");
	define("PASSWORD", "@Admwindows123"); 
	define("DATABASE", "2839050_imobiliariamorlin");


	$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
	if ($conn->connect_error)
		throw new Exception('Falha na conexão com o MySQL: ' . $conn->connect_error);
?>