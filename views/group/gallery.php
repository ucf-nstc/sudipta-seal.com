<?php 
/*
 * If I had more time this would be setup using the get-gallery.php api route to pull in 
 * image data, and then to display using lightbox, etc. As it is, the images will just be
 * pulled from folders in the images/group/gallery/ dir and a .json file will supply the 
 * album title
 *
 * The sorting method is pretty hacky. Better than it was though
 */

// filter invalid folders from album list
// TODO refactor into function
function is_valid_file($filename) {
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

// TODO refactor into function
$dir = './public/images/group/gallery/';
$dir_contents = scandir($dir);

$album_index = array();
$albums = array();

foreach($dir_contents as $folder) {
	if (is_valid_file($folder)) {
		array_push($albums, $folder);
	}
}

arsort($albums);

foreach ($albums as $album) {

	$album_info = json_decode(file_get_contents($dir . $album . '/album.json'));

	if (!in_array($album_info->title, $album_index)) {
		?>
		<br>
		<br>
		<h2 class="title is-4"><?=$album_info->title?></h2>
		<hr>
		<?php
	}

	$images = scandir($dir . $album);
	foreach ($images as $image) {
		if (is_valid_file($image)) {
			$path = $dir . $album . '/' . $image;
			include('./views/partials/group-gallery-image.php');
		}
	}
}


?>