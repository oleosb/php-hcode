<?php

$nome = "Glaucio";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Antoni";
	echo $nome;
}

teste();
teste2();

?>	