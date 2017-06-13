<?php

	/*
	 * This page generates group members from the nanoscience database. If a group member in the group_members 
	 * table has the research group name in the 'groups' column, then the group member will be 
	 * displayed. The group is set using the $group variable below.
	 * 
	 * *** PLEASE DON'T ADD GROUP MEMBERS TO THIS FILE ***
	 * Just put them in the database and make sure the correct 'groups' value is there.
	 */

	// TODO - refactor this out as a function to be used on other group sites


$group = 'seal';
$json = json_decode(file_get_contents('http://nanoscience.ucf.edu/api/get-group.php'));

?>

<section class="section">
	<h1 class="title is-3">Research Group</h1>
	<hr>

	<div>
	<?php
		$title_index= array();
		foreach($json as $member) {
			$name = $member->firstName . " " . $member->lastName;
			$image = $member->image;
			if ($image === null) {
				$image = 'blank.jpg';
			}

			if (strpos($member->groups, $group) !== false) {
				// display the section header (member title) if the member is part of a new grouping
				if (array_search($member->title, $title_index) === false) {
					?>
					</div>
					<br><br>
					<h2 class="title is-4"><?=$member->title?></h1>
					<hr>
					<div>
					<?php
					array_push($title_index, $member->title);
				}

				include('./views/partials/group-member.php');
			}
		}

	?>
	</div>
	<br>
	<br>
</section>