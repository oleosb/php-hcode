<?php

	function ola($text="mundo!", $period="Bom dia!"){
		return "Ola$text $period <br> ";
	}

	echo ola(", mundo!", "Bom dia!");
	echo ola("!", "Boa noite!");
	echo ola(", Glaucio!", "Boa tarde!");
	echo ola(", Joao!", "");

?> 