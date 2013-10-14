<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bloggity</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link type="text/plain" rel="author" href="/humans.txt" />
	<link rel="shortcut icon" href="http://adamshields.com/favicon.ico" />
	<link href="css/lightbox.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.css" />
	<link rel="stylesheet" href="tinyeditor.css">
	<link rel="stylesheet" href="css/responsive-gs-12col.css" /><!-- responsive.gs grid system -->
	<link rel="stylesheet" href="css/ie.css" /><!-- resopnsive.gs grid system -->
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/admin.css" />

	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="tiny.editor.packed.js"></script>
	
	

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->



</head>
	<body>
		<header>
			<div class="header-inner">
				<h1><a href="index.php?action=home&page=1"><img src="images/logo.png" alt="Bloggity logo" width="128" height="40"/></a></h1>

				<!-- gets nav-->
				<?php include 'views/nav.php';?> 
				<!-- models/checklogin.php        ?action=login-->
				<div class="login-form">
					<form action="?action=login" method="post" name="login-form">
						<input id="login-email" type="text" name="email" placeholder="email" />
						<input id="login-pw" type="password" name="password" placeholder="password"/>
						<input id="login-submit-button" type="submit" value="login"/>
					</form>
					<p class="login-error error"></p>
				</div><!-- /.login-form -->
		</div><!-- /.header-inner -->
		</header>
