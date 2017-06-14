<?php
$group = 'seal';
$json = json_decode(file_get_contents('http://nanoscience.ucf.edu/api/get-news.php'));
date_default_timezone_set('America/New_York');
?>

<p class="title is-3 is-highlighted-text"><strong>News</strong></p>
<hr>
<p>

<?php
	// Three news items by default
	$index = 1;
	foreach ($json as $post) {

		// small bug since php sees 0 == false and stringpos returns position of 
		// string which sometimes is 0. Fixed with exact evaluation !==
		if (strpos($post->groups, $group) !== false) {
			include('./views/partials/news-post.php');
			$index++;
		}

		// Not sure why the while loop didn't work on it's own
		if ($index > 3) {
			break;
		}
	}
?>

</p>
<br>
<a href="./?page=news" class="button is-info">More news</a>