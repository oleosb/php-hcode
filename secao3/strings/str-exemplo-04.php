<?php

	$nome = "leonardo barbosa";

	$word = "barbosa";

	$q = strpos($nome, "barbosa");
	echo $q;
	echo '<br/>';

	$w = substr($nome, 0, $q);
	echo $w;
	echo '<br/>';

	$d = substr($nome, $q + strlen($word), strlen($nome));
	echo $w;
	echo '<br/>';
  ?>