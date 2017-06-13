<section class="section">
	<div class="columns">

		<div class="column is-one-quarter">
			<?php
				// Sidebar
				require('./views/partials/research-sidebar.php'); ?>
		</div>

		<div class="column">
			<h1 class="title is-3 is-spaced">Research</h1>
			<h2 class="subtitle is-4">Overview</h2>
			<hr>

			<?php
			// Pull research overview articles from the ./content/research directory. To add a new research article, add
			// the markup to that directory
			$dir = './content/research/';
			$article_array = array();
			$article_array = scandir($dir);
			
			foreach ($article_array as $article) {
				if (strpos($article, '.html') !== false || strpos($article, '.php') !== false) {
					include($dir . $article);
					include('./views/partials/research-article.php');
				}
			}

			?>
		</div>
	</div>
</section>

<!-- Script for toggling article visibility -->
<script type="text/javascript" src="../public/js/script.js"></script>