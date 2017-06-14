<?php
// Pull research funding item content from content/funding.json and then display on the page

$json = file_get_contents('./content/research/funding.json');
$item_array = json_decode($json);
$image_dir = './public/images/funding/';

// Returns each json object as a php object
foreach ($item_array as $item) {
	include('./views/partials/research-funding-item.php');
} 

?>
