<?php
	$nome = (int)$_GET['a'];

	//var_dump($nome);

	$ip = $_SERVER["REMOTE_ADDR"];
	$ip2 = $_SERVER["SCRIPT_NAME"];
	echo $ip;
	echo "<br/>";
	echo $ip2;
?>	