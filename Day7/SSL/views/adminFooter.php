</div><!-- /#temp-->
	</div><!-- /.admin-content-->
	<?php if($_GET['action'] === 'view-posts'): ?>
		<div class="pagination">
			<p>Go To Page: </p>
				<ul>
					<?php 
					  $i = 0;
					  $pageCount = 0; 
					  //calculates length of returned posts for pagination
					  $disp = ceil(count($data)/10);

					  foreach($data as $par){ 

						$pageCount++; ?>
						<li><a href="?action=view-posts&page=<?=$pageCount?>"><?=$pageCount?></a></li>
					   
					  <?php if($pageCount == $disp || $pageCount == 10){ 
					  	break; 
					  } 

					  } ?>
				</ul>
			<p>. . .</p>
		</div><!-- /.pagination-->
	<? endif?>
</div><!-- /.admin-page-->
