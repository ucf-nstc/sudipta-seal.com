<article class="message is-info research-article">
  <div class="message-header">
    <a class="toggle"><p><?=$title?></p></a>
    <button class="delete hide hidden"></button>
  </div>
  <div class="message-body media hidden">
 		<div class="media-content">
    	<div class="content">
        <?=$content?>
      </div>
    	<br>

      <?php
      if ($applications) { ?>
        <h3 class="title is-5">Applications</h3>
        <hr>
        <div class="content">
          <?=$applications?>
        </div>
      <?php }

      if ($funding) { ?>
        <br>
        <br>
      	<h3 class="title is-5">Funding</h3>
      	<hr>
      	<div class="content">
          <?=$funding?>
        </div>
      <?php }

      if ($collaborators) { ?>
        <br>
        <br>
        <h3 class="title is-5">Collaborators</h3>
        <hr>
        <div class="content">
          <?=$collaborators?>
        </div>
      <?php } ?>

    </div>

    <?php
      if ($image) { ?>
        <div class="media-right">
          <figure class="image">
            <img src="<?=$image?>">
          </figure>
        </div>
      <?php } ?>

  </div>
</article>