<?php
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root123");

	$stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

	$id = 1;

	$stmt -> bindParam(":ID", $id);

	$stmt -> execute();

	echo "Delete OK!";
?>