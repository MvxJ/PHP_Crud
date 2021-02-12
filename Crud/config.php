<?php
	$server = "localhost";
	$database = "crud_maksymilian_jachymczak";
	$username = "root";
	$password = "";
	$connection = mysqli_connect($server,$username,$password,$database);
	if ($connection->connect_error){
		die("Błąd połączenia : ".$connection->connect_error);
	}
?>