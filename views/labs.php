<?php 
	require_once('./includes/functions.php');

	$subpage = $_GET['page'];
	$subtitle = ucfirst($subpage) . ' Lab';

	if ($subpage == 'labs') {
		$subtitle = 'Overview';
	} 

	if ($subpage == 'surface') {
		$subtitle = 'Surface Engineering & NanoTechnology Lab';
	}
?>

<section class="section">
	<div class="columns">
		<div class="column is-one-quarter">
			<?php
				require_once('./views/partials/labs-sidebar.php') ?>
		</div>

		<div class="column">
			<h1 class="title is-3 is-spaced">Labs</h1>
			<h2 class="subtitle is-4"><?=$subtitle?></h2>
			<hr>

			<?php
				// Labs Sub-Router
				$dir = './content/labs/';

				switch ($subpage) {
					case 'plasma':
						require_once($dir . 'plasma.html');
						break;

					case 'surface':
						require_once($dir . 'surface.html');
						break;

					case 'nsolgel':
						require_once($dir . 'nsolgel.html');
						break;

					case '':
						require_once('./views/partials/labs-overview.php');
						break;

					case 'labs':
						require_once('./views/partials/labs-overview.php');
						break;
					
					default:
						# code...
						break;
				}

			?>

		</div>

	</div>
</section>