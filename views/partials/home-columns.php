<!-- Home Columns Section -->
<div class="columns">

	<!-- News -->
	<div class="column">
		<div class="content is-small">
			<?php 
				require_once('./views/partials/home-news.php'); ?>
		</div>
	</div>

	<!-- About -->
	<div class="column">
		<div class="content is-small">
			<?php 
				require_once('./content/home/about.html'); ?>
		</div>
	</div>

	<!-- Research -->
	<div class="column">
		<div class="content is-small">
			<?php 
				require_once('./content/home/research.html'); ?>
		</div>
	</div>

	<!-- Opportunities -->
	<div class="column">
		<div class="content is-small">
			<?php 
				require_once('./content/home/opportunities.html'); ?>

			<!-- Contact -->
			<?php 
				require_once('./content/home/contact.html'); ?>
		</div>
	</div>
	
</div>
	