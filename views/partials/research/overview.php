<?php
// Pull research overview articles from the ./content/research directory. To add a new research article, add
// the markup to that directory
$dir = './content/research/overview/';
$article_array = array();
$article_array = scandir($dir);

foreach ($article_array as $article) {
	if (strpos($article, '.html') !== false || strpos($article, '.php') !== false) {
		include($dir . $article);
		include('./views/partials/research-article.php');
	}
}

?>
