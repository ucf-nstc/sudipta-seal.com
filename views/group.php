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

$subpage = $_GET['page']; 
$subtitle = ucfirst($subpage);

if ($subtitle == 'Group') {
	$subtitle = 'Current';
}

if ($subtitle == 'Reu') {
	$subtitle = 'REU';
}

?>
 
<section class="section">
	<div class="columns">

		<div class="column is-one-quarter">
			<?php 
				require_once('./views/partials/group-sidebar.php'); ?>
		</div>

		<div class="column">
			<h1 class="title is-3 is-spaced">Research Group</h1>
			<h2 class="subtitle is-4"><?=$subtitle?></h2>
			<hr>

			<?php
				// Group Sub-Router
				$dir = './views/group/';

				switch ($subpage) {
					case 'current':
						require_once($dir . 'current.php');
						break;

					case 'alumni':
						require_once($dir . 'alumni.php');
						break;

					case 'reu':
						require_once($dir . 'reu.php');
						break;

					case 'gallery':
						require_once($dir . 'gallery.php');
						break;
					
					default:
						# code...
						break;
				}

			?>

		</div>
	</div>
</section>