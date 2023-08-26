<?php
	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'Leo',
		'idade' => 25
	));

	array_push($pessoas, array(
			'nome' => 'Leo2',
			'idade' => 22
		));	

	echo json_encode($pessoas);

?>