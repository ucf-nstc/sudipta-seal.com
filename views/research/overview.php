<?php
// Include general Research overview writeup
require_once('content/research/overview-general.html');

// Pull research overview article content from content/overview.json and then display on the page
$json = file_get_contents('./content/research/overview.json');
$article_array = json_decode($json);

// Returns each json object as a php object
foreach ($article_array as $article) {
	include('./views/partials/research-overview-article.php');
}

?>
