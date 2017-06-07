<article class="media">
	<figure class="media-left">
		<p>
			<small><?=date("M d, Y", strtotime($post->postdate))?> -</small>
		</p>
	</figure>
	<div class="media-content">
		<div class="content">
			<p>
				<a href="http://nanoscience.ucf.edu/news/index.php?id=<?=$post->id?>">
					<small><?=$post->title?></small>
				</a>
			</p>
		</div>
	</div>
</article>