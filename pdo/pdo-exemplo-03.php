<?php
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root123");

	$stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

	$login = "joseph";
	$password = "123456";

	$stmt -> bindParam(":LOGIN", $login);
	$stmt -> bindParam(":PASSWORD", $password);

	$stmt -> execute();

	echo "Inserido OK!";
?>