<?php

	function soma(float ...$valores):float{
		return array_sum($valores);
	}

	echo var_dump(soma(2,2))."<br>";
	echo soma(25,35)."<br>";
	echo soma(1.5,3.21)."<br>";

	
?> 