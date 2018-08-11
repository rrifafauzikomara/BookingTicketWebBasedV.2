<?php

	$server		= "localhost"; //sesuaikan dengan nama server
	$user		= "root"; //sesuaikan username
	$password	= ""; //sesuaikan password
	$database	= "primajasa"; //sesuaikan target databese
	
	$con = mysqli_connect($server, $user, $password, $database);

	if (mysqli_connect_errno()) {

	echo "Gagal terhubung MySQL: " . mysqli_connect_error();

 	}

?>