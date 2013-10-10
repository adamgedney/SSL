<cfcomponent>

	<cffunction name="getAll" returntype="query">
		
		<cfquery datasource="ssl" name="posts">
			SELECT post_id, title, article FROM posts;
		</cfquery>

		<cfreturn posts>

	</cffunction>




	<cffunction name="getPost" returntype="query">
		<cfargument name="postID" required="yes">

		<cfquery datasource="ssl" name="posts">
			SELECT post_id, title, article FROM posts WHERE post_id = <cfqueryparam value="#postID#">;
		</cfquery>

		<cfreturn posts>

	</cffunction>




	<cffunction name="deletePost" returntype="void">
		<cfargument name="postID" required="yes">

		<cfquery datasource="ssl" name="posts">
			DELETE FROM posts WHERE post_id = 
			<cfqueryparam value="#postID#">;
		</cfquery>

	</cffunction>




	<cffunction name="addPost" returntype="void">
		<cfargument name="formtitle" required="yes">
		<cfargument name="formarticle" required="yes">
		
		<cfquery datasource="ssl" name="posts">
			insert into posts(title,article, created) values(
			<cfqueryparam value="#formtitle#">, <cfqueryparam value="#formarticle#">, NOW());
		</cfquery>

	</cffunction>




	<cffunction name="updatePost" returntype="void">
		<cfargument name="formtitle" required="yes">
		<cfargument name="formarticle" required="yes">
		<cfargument name="postID" required="yes">
		
		<cfquery datasource="ssl" name="posts">
			update posts set
							title = <cfqueryparam value="#formtitle#">,
							article = <cfqueryparam value="#formarticle#">,
							created = NOW()
							where post_id = <cfqueryparam value="#postID#">;
		</cfquery>

	</cffunction>
	


</cfcomponent>