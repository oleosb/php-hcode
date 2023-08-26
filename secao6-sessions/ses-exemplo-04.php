<?php
	session_id('5gpk5r1a149aumf7aumvb81gsc');

	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

?> 