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
		switch ($page) {
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
			
			default:
				require_once('views/404.php');
				break;
		}

		require_once('includes/footer.php'); ?>

	</div>
</div>