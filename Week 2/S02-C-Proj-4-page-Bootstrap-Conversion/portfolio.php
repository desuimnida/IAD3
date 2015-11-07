<?php $pageTitle = 'Portfolio'; 
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
			<article class="fullwidth">
			<h1><?php echo $pageTitle; ?></h1>
					<center><img src="_img/gallery/01.jpg" height="200" width="200">
							<img src="_img/gallery/02.jpg" height="200" width="200">
							<img src="_img/gallery/03.jpg" height="200" width="200">
							<img src="_img/gallery/04.jpg" height="200" width="200"><br>
							<img src="_img/gallery/05.jpg" height="200" width="200">
							<img src="_img/gallery/06.jpg" height="200" width="200">
							<img src="_img/gallery/07.jpg" height="200" width="200">
							<img src="_img/gallery/08.jpg" height="200" width="200"></center>
				</article>
			</div>
			<footer>FOOTER</footer>
		</div>
	</body>
</html>