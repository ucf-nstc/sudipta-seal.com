<div>
<?php

$group = 'seal';
$json = json_decode(file_get_contents('http://nanoscience.ucf.edu/api/get-group.php'));

$title_index= array();
foreach($json as $member) {
	$name = $member->firstName . " " . $member->lastName;
	$image = $member->image;
	if ($image === null) {
		$image = 'blank.jpg';
	}

	if (strpos($member->groups, $group) !== false) {
		if (!$member->alumni) {
			// display the section header (member title) if the member is part of a new grouping
			if (array_search($member->title, $title_index) === false) {
				?>
				</div>
				<br><br>
				<h2 class="title is-4"><?=$member->title?></h2>
				<hr>
				<div>
				<?php
				array_push($title_index, $member->title);
			}

			include('./views/partials/group-member.php');
		}
	}
}

?>
</div>
<br>
<br>