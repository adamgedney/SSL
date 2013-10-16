<cfcomponent>

	<cffunction name="cap" returntype="void" access="public">
		<cfargument name="msg" type="any">

		<cfimage action="captcha" fontSize="25" width="162" height="75" text="#msg#" fonts="Verdana,Arial,Courier New, Courier">
	</cffunction>
</cfcomponent>