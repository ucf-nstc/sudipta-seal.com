<div>
<?php

$group = 'seal';
$json = json_decode(file_get_contents('http://nanoscience.ucf.edu/api/get-group.php'));

$title_index = array();

foreach($json as $member) {
	if (!array_search($member->title, $title_index)) {
		if (!$member->alumni) {
			array_push($title_index, $member->title);
		}
	}
}

foreach($title_index as $section) {
	?>
	</div>
	<br><br>
	<h2 class="title is-4"><?=$section?></h2>
	<hr>
	<div>
	<?php

	foreach($json as $member) {
		$name = $member->firstName . " " . $member->lastName;
		$image = $member->image;
		if ($image === null) {
			$image = 'blank.jpg';
		}

		if ($section === $member->title) {
			if (strpos($member->groups, $group) !== false) {
				if (!$member->alumni) {
					include('./views/partials/group-member.php');
				}
			}
		}
	}
}

?>
</div>
<br>
<br>
