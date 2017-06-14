<article class="message is-info research-article">
  <div class="message-header">
    <a class="toggle"><p><?=$article->title?></p></a>
    <button class="delete hide hidden"></button>
  </div>
  <div class="message-body media hidden">
 		<div class="media-content">
    	<div class="content">
        <?=$article->content?>
      </div>
    	<br>

      <?php
      if ($article->applications) { ?>
        <h3 class="title is-5">Applications</h3>
        <hr>
        <div class="content">
          <?=$article->applications?>
        </div>
      <?php }

      if ($article->funding) { ?>
        <br>
        <br>
      	<h3 class="title is-5">Funding</h3>
      	<hr>
      	<div class="content">
          <?=$article->funding?>
        </div>
      <?php }

      if ($article->collaborators) { ?>
        <br>
        <br>
        <h3 class="title is-5">Collaborators</h3>
        <hr>
        <div class="content">
          <?=$article->collaborators?>
        </div>
      <?php } ?>

    </div>

    <?php
      if ($article->image) { ?>
        <div class="media-right">
          <figure class="image">
            <img src="<?=$article->image?>">
          </figure>
        </div>
      <?php } ?>

  </div>
</article>