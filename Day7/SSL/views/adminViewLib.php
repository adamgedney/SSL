

	<div id="library">
		<?php foreach($data as $par): ?>

			<div class="image-block" >
				<a href="images/library/<?=$par?>" data-lightbox="<?=$par?>" class="gal-lb"><img class="library-image" data-imgId="" src="images/library/<?=$par?>" alt="library image"/></a>
			</div><!-- /.image-block-->
		
		<?php endforeach; ?>
	</div><!-- /#library -->
