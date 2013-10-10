
<div class="container">

	<cfloop query="data">
		
		<form action="?action=updatePost&id=<cfoutput>#post_id#</cfoutput>" method="post">
			<h2>Update Post</h2>
			<input type="text" name="titleText" value="<cfoutput>#title#</cfoutput>">

			<h3>Article</h3>
			<textarea name="articleText"><cfoutput>#article#</cfoutput></textarea>

			<input type="submit" value="save">
		</form>

	</cfloop>

</div><!-- /.container-->


