<?php
// Pull research technology item content from content/technology.json and then display on the page

$json = file_get_contents('./content/research/technology.json');
$item_array = json_decode($json);

// Returns each json object as a php object
foreach ($item_array as $item) {
	include('./views/partials/research-technology-item.php');
}

?>