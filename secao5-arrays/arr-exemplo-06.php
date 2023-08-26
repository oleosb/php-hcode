<?php
	$json = '[{"nome":"Leo","idade":25},{"nome":"Leo2","idade":22}]';

	$data = json_decode($json, true);

	var_dump($data);

?> 