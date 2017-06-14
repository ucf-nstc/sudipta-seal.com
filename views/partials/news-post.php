<article class="media">
	<figure class="media-left">
		<p>
			<?=date("M d", strtotime($post->postdate))?> -
		</p>
	</figure>
	<div class="media-content">
		<div class="content">
			<p>
				<a href="http://nanoscience.ucf.edu/news/index.php?id=<?=$post->id?>">
					<?=$post->title?>
				</a>
			</p>
		</div>
	</div>
</article>