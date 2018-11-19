<?php

	$HOST = "localhost";
	$USER = "root";
	$PASSWORD = "";
	$DATABASE = "nicholas";


	$conn = new mysqli($HOST, $USER, $PASSWORD, $DATABASE);
	if ($conn->connect_error)
		throw new Exception('Falha na conexão com o MySQL: ' . $conn->connect_error);
?>