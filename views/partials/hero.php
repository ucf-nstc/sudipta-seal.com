 <?php 
	// Navigation
	require_once('./views/partials/nav.php');

	$dir = './public/images/home/slider/';
	$images = scandir($dir);
?>

<link href="./public/css/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="./public/js/js-image-slider.js" type="text/javascript"></script>
<link href="./public/css/generic.css" rel="stylesheet" type="text/css" />

<!-- Slider -->
<!-- Hero Body -->
<div class="hero-body is-paddingless">
	<div class="columns is-gapless">

		<div class="column">
			<div id="sliderFrame">
		    <div id="slider">

		      <?php
		      	foreach ($images as $image) {
							if (strpos($image, '.png') || strpos($image, '.jpg')) { ?>

								<img src="<?=$dir . $image?>" alt="" class="slider-image"/>

							<?php }
						} ?>

		      </div>
		  </div>
		</div>

		<div class="column has-text-centered">
			<img src="./public/images/home/quote.jpg">
		</div>

	</div>
</div>	