

<?php foreach($data as $data){ ?>

	<div class="post-folded post-block" >
		<h2 class="post-title"><a href="?action=edit-post-view&postId='<?=$data['post_id']?>'" ><?=$data['title']?></a></h2><a href="?action=delete-post&postId='<?=$data['post_id']?>'"><img class="admin-delete-post-icon" src="images/trash-icon.png" width="18" height="18"/></a>
		<h3 class="post-meta"><a href="?action=edit-post-view&postId='<?=$data['post_id']?>'"><img class="edit-post-icon" src="images/edit-icon.png" width="18" height="18"/>  &nbsp; <img src="images/cal-icon.png" width="18" height="18"/><?=$data['created']?>  &nbsp;<img src="images/profile-icon.png" width="18" height="18"/> by <?=$data['user_id']?></h3>
	</div><!-- /.post-->

<?php } ?>