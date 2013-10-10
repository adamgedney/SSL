
<div class="container">


	<form action="?action=add" method="post">
		<h2>New Post</h2>
		<input type="text" name="titleText">

		<h3>Article</h3>
		<textarea name="articleText"></textarea>

		<input type="submit" value="save">
	</form>

	<cfloop query="data">
		
		<h1><cfoutput>#title#</cfoutput></h1>
		<br />
		<p><cfoutput>#article#</cfoutput></p>
		<a href="?action=delete&id=<cfoutput>#post_id#</cfoutput>">delete</a>
		<a href="?action=update&id=<cfoutput>#post_id#</cfoutput>">update</a>
	</cfloop>

	<!--- <cfdump var="#data#"> ---> 



</div><!-- /.container-->


