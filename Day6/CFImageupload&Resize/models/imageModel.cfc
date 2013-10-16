<cfcomponent>

	<cffunction name="imgResize" returntype="void" access="public">
		<cfargument name="orgfile" type="any">
		<cfargument name="newfile" type="any">
		<cfargument name="h" type="any">
		<cfargument name="w" type="any">

		<!--- <cfset n =  >
		<cfset ar =  >	
		<cfset orgw =  >
		<cfset orgh =  > --->

	</cffunction>


	<cffunction name="fileUpload" returntype="void" access="public">
		<cfargument name="file" type="any">

		<cffile 
		    action = "upload"
		    destination = "/Applications/railo-express-4.0.4.001-macosx/webapps/www/SSL"
		    fileField = file
		    accept = "image/jpg, image/gif" >

	</cffunction>



	<cffunction name="imgResize" returntype="void" access="public">
	<cfargument name="img" type="any">

	<cfset myImage=ImageNew(img)>
	<cfset ImageResize(myImage,"60%","","blackman",2)>
	<cfimage source="#myImage#" action="write" destination="/Applications/railo-express-4.0.4.001-macosx/webapps/www/SSL/test_myImage.jpeg" overwrite="yes">
	
	<img src="test_myImage.jpeg"/>

	</cffunction>


</cfcomponent>