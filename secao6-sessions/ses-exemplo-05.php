<?php

	require_once("config.php");

	echo session_save_path() . "<br>";

	var_dump(session_status());

	echo "<br><br>";

	switch (session_status()) {
		case PHP_SESSION_DISABLED:
			echo "se as sessoes estiverem desabilitadas";
			break;
		case PHP_SESSION_NONE:
			echo "se as sessoes estiverem habilitadas, mas nenhuma existir";
			break;
		case PHP_SESSION_ACTIVE:
			echo "se as sessoes estiverem habilitadas e uma existir";
			break;
		default:
			// code...
			break;
	};

?> 