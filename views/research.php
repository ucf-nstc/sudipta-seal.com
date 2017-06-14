<?php

	$subpage = $_GET['page']; 
	$subtitle = ucfirst($subpage);

	if ($subtitle == 'Research') {
		$subtitle = 'Overview';
	} 

?>

<section class="section">
	<div class="columns">

		<div class="column is-one-quarter">
			<?php
				// Sidebar
				require('./views/partials/research-sidebar.php'); ?>
		</div>

		<div class="column">

			<h1 class="title is-3 is-spaced">Research</h1>
			<h2 class="subtitle is-4"><?=$subtitle?></h2>
			<hr>
			
			<?php
				// Research Sub-Router
				$dir = './views/research/';

				switch ($subpage) {
					case 'overview':
						require_once($dir . 'overview.php');
						break;

					case 'patents':
						require_once($dir . 'patents.php');
						break;

					case 'technology':
						require_once($dir . 'technology.php');
						break;

					case 'funding':
						require_once($dir . 'funding.php');
						break;
					
					default:
						require_once($dir . 'overview.php');
						break;
				}

			?>

		</div>
	</div>
</section>