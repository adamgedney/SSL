
<div class="container">
				<section class="content">
				<img src="images/expand-icon.png" class="expand-all" data-post-flipped="true"/><p class="expand-all" data-post-flipped="true">Expand all articles</p>
				
				<?php foreach($data as $par){ ?>

					<div class="post-folded" data-post-id="<?=$par['post_id']?>">
						<img data-post-id="<?=$par['post_id']?>" data-post-flipped="true" class="fold-icon" src="images/fold-icon.png" title="Fold Article" alt="fold article icon">
						<h2><?=$par['title']?></h2><a href="admin.php?action=edit-post-view&postId='<?=$par['post_id']?>'"><img class="home-edit-icon" src="images/edit-icon.png" width="18" height="18"/></a>
						<h3 class="post-meta">  &nbsp; <img src="images/cal-icon.png" width="18" height="18"/><?=date_format(new DateTime($par['created']), 'm-d-Y')?>  &nbsp;<img src="images/profile-icon.png" width="18" height="18"/>by <a href=""><?=$par['username']?></a></h3>
						
						<a href="images/featured1.jpg" data-lightbox="img1" class="no-hover"><img class="post-featured" src="images/featured1.jpg"/></a>

						<p><?=$par['article']?></p>
					</div><!-- /.post-folded-->

				<?php } ?>

			<div class="pagination home-pagination">
				<p>Go To Page: </p>
				<ul>
					<?php

						  $i = 0;
						  $pageCount = 0; 
						  //calculates length of returned posts for pagination
						  $disp = ceil(count($posts)/10);

						  foreach($posts as $par){ 

							$pageCount++; ?>
							<li><a href="?action=home&page=<?=$pageCount?>"><?=$pageCount?></a></li>
						   
						  <?php if($pageCount == $disp || $pageCount == 10){ 
						  	break; 
						  } 

						  } ?>
				</ul>
				<p>. . .</p>
			</div><!-- /.pagination-->

				</section><!-- /.content -->

				<section class="sidebar">
					<h2>Recent Posts</h2>
						<ul>
							<?php $i=0; foreach($data as $par){ ?>

							<li><a href="?action=recent&postId=<?=$par['post_id']?>"><?=$par['title']?></a></li>

							<?php $i++; if($i == 5){ break; }} ?>
						</ul>

						<div class="sidebar-ads">
							<script type="text/javascript"><!--
							google_ad_client = "ca-pub-6392619401477214";
							/* SSL Blog Project */
							google_ad_slot = "5422591503";
							google_ad_width = 336;
							google_ad_height = 280;
							//-->
							</script>
							<script type="text/javascript"
							src="//pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
						</div><!-- /.sidebar-ads-->
				</section><!-- /.sidebar-->

			</div><!-- /.container -->