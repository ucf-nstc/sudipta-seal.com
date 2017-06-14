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
	$index = 0;
	foreach ($json as $post) {
		while ($index < 3) {
			include('./views/partials/news-post.php');
			$index++;
		}
	}
?>
</p>
<br>
<a href="./?page=news" class="button is-info">More news</a>