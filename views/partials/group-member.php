<article class="media">
	<div class="media-left">
		<figure class="image">
			<img src="./public/images/group/members/<?=$image?>" alt="<?=$name?>" class="card group-image">
		</figure>
	</div>
	<div class="media-content">
		<div class="content">
			<h3 class="title is-5"><strong><?=$name?></strong></h3>
			<p class="subtitle is-6">
				<?=$member->affiliation?><br>
				<?=$member->education?><br>
				<a href="<?=$member->email?>"><?=$member->email?></a><br>
				Research: <?=$member->research?><br>
			</p>
		</div>
	</div>
</article>
