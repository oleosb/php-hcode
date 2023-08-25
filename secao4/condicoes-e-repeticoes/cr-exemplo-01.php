<?php

	$qualSuaIdade = 125;

	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	if($qualSuaIdade < $idadeCrianca){
		echo "crianca";
	} elseif ($qualSuaIdade < $idadeMaior) {
		echo "adolescente";
	} elseif ($qualSuaIdade < $idadeMelhor){
		echo "adulto";
	} else {
		echo "Idoso";
	}

	echo "<br>";

	echo ($qualSuaIdade < $idadeMaior) ? "menor de idade" : "maior de idade";
?>