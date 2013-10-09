

	<div class="new-post">
		<h3>Post Title</h3>

		<form action="?action=new-post" method="post">
			<input type="text" name="new-post-title" id="new-post-title" value=""/>

			<p>Published Date: <img src="images/cal-icon.png" width="18" height="18"/> </p>

			<textarea id="edit-post-tiny" name="new-post-wysiwyg" width="750" height="375"></textarea>

			<div class="button-container">
				<input class="new-post-submit" type="submit" value="Save Post" />
				<input class="post-cancel" type="submit" value="Cancel" />
			</div><!-- / .button-container-->
					
							<!-- ** WYSIWYG Script** -->
		<script type="text/javascript" id="tinyScript">			
			if($('#new-post-tiny')){
				var editor = new TINY.editor.edit('editPost', {
					id: 'edit-post-tiny',
					width: 750,
					height: 375,
					cssclass: 'new-post-tiny',
					controlclass: 'tinyeditor-control',
					rowclass: 'tinyeditor-header',
					dividerclass: 'tinyeditor-divider',
					controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
						'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
						'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
						'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
					footer: true,
					fonts: ['Open Sans','Verdana','Arial','Georgia','Trebuchet MS',"Helvetica Neue"],
					xhtml: true,
					cssfile: 'tinyeditor.css',
					bodyid: 'newPost',
					footerclass: 'tinyeditor-footer',
					toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
					resize: {cssclass: 'resize'}
				});
			};
		</script>
		</form>
	</div><!-- /.new-post-->

		
