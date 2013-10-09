
<?php foreach($data as $par): ?>

	<div class="upload-container">
		<h2>Upload images to include in your blog posts</h2>
			<form action="?action=file-upload" method="post" id="file-form">
				<input type="file" accept="image/jpg, image/jpeg, image/png"/>
				<input type="submit" value="upload" />
			</form>
		<p>.png .jpg .jpeg are accepted file formats</p>
	</div><!-- /.upload-container-->
	
<?php endforeach; ?>