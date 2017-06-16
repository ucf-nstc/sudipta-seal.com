<div class="site-container">
	<div class="card">

		<?php

		// Dr. Sudipta Seal Research Site
		// Austin Tindle - tindleaj@gmail.com || austin.tindle@ucf.edu

		require_once('./includes/functions.php');
		require_once('./includes/header.php');

		$page = $_GET['page']; ?>

		<section class="hero">
		<?php
		if (!$page === 'home' || !$page) {
			// require hero on home page only
			require_once('views/partials/hero.php');
		} else {
			// just the navbar otherwise
			require_once('views/partials/nav.php');
		} ?>
		</section>

		<?php
		// Router
		// Sub page variables (?page=funding, for example) should be routed to their 
		// index (parent) page and from there the parent should handle further routing / display
 		switch ($page) {

 			// Main

			case '':
				require_once('views/home.php');
				break;

			case 'home':
				require_once('views/home.php');
				break;

			case 'news':
				require_once('views/news.php');
				break;

			case 'group':
				require_once('views/group.php');
				break;

			case 'research':
				require_once('views/research.php');
				break;

			case 'positions':
				require_once('views/positions.php');
				break;

			case 'labs':
				require_once('views/labs.php');
				break;

			// Sub

			// Research
			case 'overview':
				require_once('views/research.php');
				break;

			case 'patents':
				require_once('views/research.php');
				break;

			case 'technology':
				require_once('views/research.php');
				break;

			case 'funding':
				require_once('views/research.php');
				break;

			// Group
			case 'current':
					require_once('views/group.php');
					break;

			case 'alumni':
					require_once('views/group.php');
					break;

			case 'reu':
					require_once('views/group.php');
					break;

			case 'gallery':
					require_once('views/group.php');
					break;
			
			default:
				break;
		}

		require_once('includes/footer.php'); ?>

	</div>
</div>