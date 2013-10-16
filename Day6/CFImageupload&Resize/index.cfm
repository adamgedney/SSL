
<!---instantiates a new view--->
<cfset views = createObject("component","models/viewsModel")>
<cfset posts = createObject("component","models/postsModel")>
<cfset captcha = createObject("component","models/captcha")>
<cfset img = createObject("component","models/imageModel")>

<cfset views.getView('../views/header.cfm')>


<!--- <cfset data = arrayNew(1)> --->
<!--- <cfset data[1]="adam"> --->

<!--- ** Image resize **--->
<cfset imagePath = "http://www.google.com/images/logo_sm.gif" >
<cfset img.imgResize("#imagePath#")><br />


<!--- captcha --->
<cfset captcha.cap('weird cap')>


<!---uses dot syntax to call functions etc.--->

<!--- <cfif isdefined(form.action)>  $_POST --->

<cfif isdefined('url.action')>

	<cfif url.action is "delete">
		<!--- <cfset posts.deletePost(url.id)>
		<cfset data = posts.getAll()>
		<cfset views.getView('../views/body.cfm', data)> --->

			<cfelseif url.action is "add">	



				<!--- **File upload** --->
				<cfset img.fileUpload(form.file)>

				<cfset posts.addPost(form.titleText, form.articleText)>
				<cfset data = posts.getAll()>
				<cfset views.getView('../views/body.cfm', data)>

				<cfset >

					<cfelseif url.action is "update">	
						<cfset data = posts.getPost(url.id)>
						<cfset views.getView('../views/form.cfm', data)>

							<cfelseif url.action is "updatePost">	
								<cfset posts.updatePost(form.titleText, form.articleText, url.id)>
								<cfset data = posts.getAll()>
								<cfset views.getView('../views/body.cfm', data)>

	</cfif>
	<cfelse>
		<cfset data = posts.getAll()>
		<cfset views.getView('../views/body.cfm', data)>
		
</cfif>



<cfset views.getView('../views/footer.cfm')>
