<div class="seal-container">
	<section class="section">
		<div class="card">

			<?php

			// Dr. Sudipta Seal Research Site
			// Austin Tindle - tindleaj@gmail.com

			require_once('./includes/functions.php');
			require_once('./includes/header.php');

			if (isset($_GET['page'])) {
				switch ($_GET['page']) {
					case 'home':
						require_once('views/home.php');
						break;
					
					default:
						require_once('views/404.php');
						break;
				}
			} else {
				require_once('views/home.php');
			}



			require_once('includes/footer.php'); ?>

		</div>
	</section>
</div>