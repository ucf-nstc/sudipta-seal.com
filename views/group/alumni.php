<?php

$group = 'seal';
$json = json_decode(file_get_contents('http://nanoscience.ucf.edu/api/get-group.php'));
?>



<table class="table">
	<thead>
		<tr>
			
			<th>Name</th>
			<th>Research</th>
			<th>Title</th>

		</tr>
	</thead>

	<tbody>
		
		<?php 
		foreach ($json as $member) { 
			if ($member->alumni) {
				$name = substr($member->firstName, 0, 1)
					. '. '
					. $member->lastName; ?>

				<tr>
					<th><?=$name?></th>
					<td><?=$member->research?></td>
					<td><?=$member->title?></td>
				</tr>

				<?php 
				} 
			} 
		?>

	</tbody>

</table>