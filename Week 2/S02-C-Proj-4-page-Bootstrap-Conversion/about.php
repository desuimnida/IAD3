<?php $pageTitle = 'About';
require('req_global.php'); 
?>
<!doctype html>
<html>
	<head>
		<title><?php echo $pageTitle; ?> 
				:: 
				<?php echo $siteTitle; ?></title>
				<link rel="stylesheet" type="text/css" href="_css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="_css/styles.css">

	</head>
	<body>
		<div id="container">
			<header>
				<center><img class="logo" src="_img/Huli-Logo.png" width="154" height="201"></center>
			</header>
			<?php include('inc_mainmenu.php'); ?>
			<div id="main" class="cf">

			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
				<article>
					<h1><?php echo $pageTitle; ?></h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<aside>
					<h1>Aside</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</aside>
				</div>
				</div>
			</div>
			<footer>FOOTER</footer>
		</div>
	</body>
</html>