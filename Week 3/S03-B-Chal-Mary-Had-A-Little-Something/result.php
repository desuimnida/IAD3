<?php
// Your $_POST PHP processing goes here.
?>
<!doctype html>
<html>
	<head>
		<title>The Results :: <?php echo $_POST['name']; ?> Had a <?php echo $_POST['adjective']; ?> <?php echo $_POST['noun']; ?></title>
		<link rel="stylesheet" href="_css/styles.css">
	</head>
	<body class="results">
		<div id="container">
			<header>The Results</header>

			<div id="main">
				<a href="index.php">Back to Form</a>

				<h1><?php echo $_POST['name']; ?> Had a <?php echo $_POST['adjective']; ?> <?php echo $_POST['noun']; ?></h1>

				<p><span class="name"><?php echo $_POST['name']; ?></span> had a <span class="adj"><?php echo $_POST['adjective']; ?></span> <span class="noun"><?php echo $_POST['noun']; ?></span>,<br>
				<span class="adj"><?php echo $_POST['adjective']; ?></span> <span class="noun"><?php echo $_POST['noun']; ?></span>, <span class="adj"><?php echo $_POST['adjective']; ?></span> <span class="noun"><?php echo $_POST['noun']; ?></span>,<br>
				<span class="name"><?php echo $_POST['name']; ?></span> had a <span class="adj"><?php echo $_POST['adjective']; ?></span> <span class="noun"><?php echo $_POST['noun']; ?></span>,<br>
				its fleece was white as snow.</p>

				<p>And everywhere that <span class="name"><?php echo $_POST['name']; ?></span> went,<br>
				<span class="name"><?php echo $_POST['name']; ?></span> went, <span class="name"><?php echo $_POST['name']; ?></span> went,<br>
				and everywhere that <span class="name"><?php echo $_POST['name']; ?></span> went,<br>
				the <span class="noun"><?php echo $_POST['noun']; ?></span> was sure to go.</p>

				<p>It followed her to school one day,<br>
				school one day, school one day,<br>
				It followed her to school one day,<br> 
				which was against the rules.</p>

				<p>It made the children laugh and play,<br>
				laugh and play, laugh and play,<br>
				it made the children laugh and play,<br>
				to see a <span class="noun"><?php echo $_POST['noun']; ?></span> at school.</p>

				<p>And so the teacher turned it out,<br>
				turned it out, turned it out,<br>
				And so the teacher turned it out,<br>
				but still it lingered near.</p>

				<p>And waited patiently about,<br>
				patiently about, patiently about,<br>
				And waited patiently about,<br>
				till <span class="name"><?php echo $_POST['name']; ?></span> did appear.</p>

				<p>"Why does the <span class="noun"><?php echo $_POST['noun']; ?></span> love <span class="name"><?php echo $_POST['name']; ?></span> so?"<br>
				Love <span class="name"><?php echo $_POST['name']; ?></span> so? Love <span class="name"><?php echo $_POST['name']; ?></span> so?<br>
				"Why does the <span class="noun"><?php echo $_POST['noun']; ?></span> love <span class="name"><?php echo $_POST['name']; ?></span> so,"<br>
				the eager children cry.</p>

				<p>"Why, <span class="name"><?php echo $_POST['name']; ?></span> loves the <span class="noun"><?php echo $_POST['noun']; ?></span>, you know."<br>
				The <span class="noun"><?php echo $_POST['noun']; ?></span>, you know, the <span class="noun"><?php echo $_POST['noun']; ?></span>, you know,<br>
				"Why, <span class="name"><?php echo $_POST['name']; ?></span> loves the <span class="noun"><?php echo $_POST['noun']; ?></span>, you know,"<br>
				the teacher did reply.</p>
			</div>
		</div>
	</body>
</html>