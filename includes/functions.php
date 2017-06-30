<?php

function getPageTitle() {
	if (!$_GET['page']) {
		return 'Home';
	} else {
		return $_GET['page'];
	} 
}

function displayGallery($dir) {
	$images = scandir($dir);
	foreach ($images as $image) {
		if (isValidFile($image)) {
			$path = $dir . $image;
			include('./views/partials/gallery-image.php');
		}
	}
}

function isValidFile($filename) {
	switch ($filename) {
		case '.':
			return false;
			break;
		
		case '..':
			return false;
			break;

		case '.DS_Store':
			return false;
			break;

		case 'album.json':
			return false;
			break;

		case 'readme.txt':
			return false;
			break;

		default:
			return true;
			break;
	}
}