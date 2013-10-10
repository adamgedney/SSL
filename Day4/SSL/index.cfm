
<!---instantiates a new view--->
<cfset views = createObject("component","models/viewsModel")>
<cfset posts = createObject("component","models/postsModel")>

<cfset views.getView('../views/header.cfm')>


<!--- <cfset data = arrayNew(1)> --->
<!--- <cfset data[1]="adam"> --->


<!---uses dot syntax to call functions etc.--->

<!--- <cfif isdefined(form.action)>  $_POST --->

<cfif isdefined('url.action')>

	<cfif url.action is "delete">
		<cfset posts.deletePost(url.id)>
		<cfset data = posts.getAll()>
		<cfset views.getView('../views/body.cfm', data)>

			<cfelseif url.action is "add">	
				<cfset posts.addPost(form.titleText, form.articleText)>
				<cfset data = posts.getAll()>
				<cfset views.getView('../views/body.cfm', data)>

					<cfelseif url.action is "update">	
						<cfset data = posts.getPost(url.id)>
						<cfset views.getView('../views/form.cfm', data)>

							<cfelseif url.action is "updatePost">	
								<cfset posts.updatePost(form.titleText, form.articleText, url.id)>
								<cfset data = posts.getAll()>
								<cfset views.getView('../views/body.cfm', data)>

	</cfif>
</cfif>



<cfset views.getView('../views/footer.cfm')>
