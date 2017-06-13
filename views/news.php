<?php 
	
	/*
	 * This page generates news content from the nanoscience database. If a news item in the news 
	 * table has the research group name in the 'groups' column, then the news item will be 
	 * displayed. The group is set using the $group variable below.
	 * 
	 * *** PLEASE DON'T ADD NEWS ITEMS TO THIS FILE ***
	 * Just put them in the database and make sure the correct 'groups' value is there.
	 * Additionally, if the news item should only be displayed on the specific group page and not
	 * AMPAC or NSTC news pages, make sure the 'department' field is set to 'grouponly'
	 */

	// TODO - refactor this out as a function to be used on other group sites


	$group = 'seal';

	$json = json_decode(file_get_contents('http://nanoscience.ucf.edu/api/get-news.php'));
	date_default_timezone_set('America/New_York');
?>

<section class="section">
	<h1 class="title is-3">News</h1>
	<hr>

	<!-- Featured news item -->
	<?php 
		require_once('./views/partials/news-feature.php'); ?>

	<div>
	<?php 
		$year_index = array();
		foreach ($json as $post) {

			// small bug since php sees 0 == false and stringpos returns position of 
			// string which sometimes is 0. Fixed with exact evaluation !==
			if (strpos($post->groups, $group) !== false) {

				// Post year header if it's not there yet
				$year = date('Y', strtotime($post->postdate));
				if (array_search($year, $year_index) === false) {
					?>
					</div>
					<br><br>
					<h1 class="title is-4"><?=$year?></h1>
					<hr>
					<div>
					<?php 
					array_push($year_index, $year);
				}

				include('./views/partials/news-post.php');
			}
		}
	?>

	</div>

	<br>
	<br>
	<a href="" class="button">View Legacy News</a>
</section>