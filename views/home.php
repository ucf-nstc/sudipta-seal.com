<section class="section">
	<div class="container">
		<div class="columns">

			<!-- Sidebar -->
			<div class="column is-one-quarter">
				<?php 
					require_once('./views/partials/sidebar.php'); ?>
			</div>

			<!-- Home container -->
		  <div class="container column">

		  	<!-- Slider -->
		  	<div class="column is-paddingless is-hidden-mobile">
		  		<div class="columns">

		  			<div class="column">
				  		<figure class="image is-2by1 card">
				  			<img src="./public/images/home/slider/1.jpg">
				  		</figure>
				  	</div>

				  	<div class="column is-one-third">
				  		<figure class="image card">
				  			<img src="./public/images/home/quote.jpg">
				  		</figure>
				  	</div>

		  		</div>
		  	</div>
		  	<hr>

			  <!-- Title -->
				<h2 class="title">About Dr. Seal</h2>
				<hr>

		  	<div class="columns">

			  	<!-- Content -->
			  	<div class="column">
						<div class="content">
							<?php 
			  				require_once('./content/home.html'); ?>
						</div>
					</div>

					<!-- Card -->
					<div class="column is-one-third">
						<?php 
						require_once('./views/partials/seal-card.php'); ?>
					</div>
				</div>

		  </div>

		</div>
	</div>
</section>