<!doctype html>
<html>
	<head>
		<!-- charachter set - wide range - standard -->
		<meta charset="utf-8">
		<!-- make sure mobile divices do not scale our site - truly responsive. -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $ $pageTitle; ?> :: <?php echo $siteTitle; ?></title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<div id="container">
			<header id="masthead">
				<div class="inset">
					<img class="logo" src="img/crossroads-logo-header.png" width="128" height="36">

					<nav id="mainmenu">
						<a href="index.php" 	<?php if ($pageTitle== 'Home') 	  {echo 'class="chosen"'; } ?>>HOME</a>  
						<a href="about.php"		<?php if ($pageTitle== 'About')   {echo 'class="chosen"'; } ?>>ABOUT</a>  
						<a href="lessons.php" 	<?php if ($pageTitle== 'Lessons') {echo 'class="chosen"'; } ?>>LESSONS</a>  
						<a href="contact.php"	<?php if ($pageTitle== 'Contact') {echo 'class="chosen"'; } ?>>CONTACT</a>  
					</nav>
				</div>
			</header>
		