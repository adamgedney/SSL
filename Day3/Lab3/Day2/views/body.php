
<?php

	// foreach($data as $par){
	// 	echo "<br>";
	// 	echo $par["product_name"]."<br>";
	// 	echo $par["product_id"]."<br>";
	// 	echo $par["product_desc"]."<br>";
	// 	echo " <a href='?action=delete'> delete</a>";
	// 	echo " < a href='?action=updateform&prod=".$par['product_id']."'> update</a>";

	// 	echo 
	// }


?>


<div class="container">
				<section class="content">
				<img src="images/expand-icon.png" class="expand-all" data-post-flipped="true"/><p class="expand-all" data-post-flipped="true">Expand all articles</p>
				
				<?php foreach($data as $par){ ?>

					<div class="post-folded" data-post-id="1">
						<img data-post-id="1" data-post-flipped="true" class="fold-icon" src="images/fold-icon.png" title="Fold Article" alt="fold article icon">
						<h2><?=$par['title']?></h2><img src="images/edit-icon.png" width="18" height="18"/>
						<h3 class="post-meta">  &nbsp; <img src="images/cal-icon.png" width="18" height="18"/><?=$par['created']?>  &nbsp;<img src="images/profile-icon.png" width="18" height="18"/>by Admin</h3>
						
						<a href="images/featured1.jpg" data-lightbox="img1" class="no-hover"><img class="post-featured" src="images/featured1.jpg"/></a>

						<p><?=$par['article']?></p>
					</div><!-- /.post-folded-->

				<?php } ?>

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