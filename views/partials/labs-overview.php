<?php

	$json = file_get_contents('./content/labs/labs.json');
	$item_array = json_decode($json);

	// Returns each json object as a php object
	foreach ($item_array as $lab) {
		include('./views/partials/labs-item.php');
	}

?>