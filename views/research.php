<section class="section">
	<h1 class="title is-3">Research Overview</h1>
	<hr>

	<?php
	// Pull research overview articles from the ./content/research directory. To add a new research article, add
	// the markup to that directory
	$dir = './content/research/';
	$article_array = array();
	$article_array = scandir($dir);
	
	foreach ($article_array as $article) {
		if (strpos($article, 'html') !== false) {
			include($dir . $article);
		}
	}

	?>
</section>

<!-- Script for toggling article visibility -->
<script type="text/javascript" src="../public/js/script.js"></script>