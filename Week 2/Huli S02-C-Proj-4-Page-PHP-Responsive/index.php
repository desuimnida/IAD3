<?php 
$pageTitle = 'Home'; 
$siteTitle = '4 Page PHP';
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
				<img class="logo" src="_img/Huli-Logo.png" width="154" height="201">
			</header>
			<?php include('inc_mainmenu.php'); ?>
			<div id="main" class="cf">
			<div class="contrainer-fluid">
				<div class="row">
					<div class="col-md-8 col-sm-4">

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
					<div class="col-md-8 col-sm-4">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<div class="col-md-8 col-sm-4">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>
				<aside>
				<div class="col-md-8 col-sm-4">
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
			<footer>FOOTER</footer>
		</div>
	</body>
</html>