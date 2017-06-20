<?php 
	$subpage = $_GET['page'];
?>

<section class="section">
	<h1 class="title is-3 is-spaced">Labs</h1>
	<h2 class="subtitle is-4"></h2>
	<hr>

	<?php

		$json = file_get_contents('./content/labs/labs.json');
		$item_array = json_decode($json);

		// Returns each json object as a php object
		foreach ($item_array as $lab) {
			include('./views/partials/labs-item.php');
		}

	?>


</section>