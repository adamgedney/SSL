

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
	<link rel="stylesheet" href="css/responsive-gs-12col.css" /><!-- responsive.gs grid system -->
	<link rel="stylesheet" href="css/ie.css" /><!-- resopnsive.gs grid system -->
	<link rel="stylesheet" href="css/main.css" />

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->



</head>
	<body>
		<header>
			<div class="header-inner">
				<h1><a href="index.php"><img src="images/logo.png" alt="Bloggity logo" width="128" height="40"/></a></h1>

				<!-- gets nav-->
				<? include 'views/nav.php';?> 
				
				<div class="login-form">
					<form>
						<input type="text" placeholder="username" />
						<input type="password" placeholder="password"/>
						<input type="submit" value="submit"/>
					</form>
				</div><!-- /.login-form -->
		</div><!-- /.header-inner -->
		</header>
