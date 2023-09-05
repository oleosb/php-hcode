<?php
	$serverName = "DESKTOP-DN5AJTS\SQLEXPRESS";
	$database = "dbphp7";
	$uid = "";
	$password = "";

	$connection = [
		"Database" => $database,
		"Uid" => $uid,
		"PWD" => $password
	];

	$conn = sqlsrv_connect($serverName, $connection);
	if(!$conn)
		die(print_r(sqlsrv_errors(), true));
	else
		echo "connection established";
?>