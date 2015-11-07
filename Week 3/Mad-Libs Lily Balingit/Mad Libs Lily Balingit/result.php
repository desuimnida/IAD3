<?php
// Your $_POST PHP processing goes here.
?>
<!doctype html>
<html>
	<head>
		<title>The Results :: If You Give a <?php echo $_POST['animal']; ?> a <?php echo $_POST['treat']; ?></title>
		<link rel="stylesheet" href="_css/styles.css">
	</head>
	<body class="results">
		<div id="container">
			<header>The Results</header>

			<div id="main">
				<a href="index.php">Back to Form</a>

				<h1>"The Hanging <span class="plant"><?php echo $_POST['plant']; ?></span>"</h1>

					<p> Are you, are you
					 <span class="verb2"><?php echo $_POST['verb2']; ?></span> to the <span class="plant"><?php echo $_POST['plant']; ?></span>?
					 They <span class="verbpasttense"><?php echo $_POST['verbpasttense']; ?></span> up a <span class="manorwoman"><?php echo $_POST['manorwoman']; ?></span>
					 They say who <span class="verbpasttense1"><?php echo $_POST['verbpasttense1']; ?></span> three.
					 <span class="adjective"><?php echo $_POST['adjective']; ?></span> things did happen here
					 No <span class="adjective"><?php echo $_POST['adjective']; ?></span>r would it be
					 If we met at <span class="timeofday"><?php echo $_POST['timeofday']; ?></span>
					 In the hanging <span class="plant"><?php echo $_POST['plant']; ?></span>.</p>

					<p> Are you, are you
					 <span class="verb2"><?php echo $_POST['verb2']; ?></span> to the <span class="plant"><?php echo $_POST['plant']; ?></span>?
					 Where dead <span class="manorwoman"><?php echo $_POST['manorwoman']; ?></span> called out
					 For his love to <span class="verb"><?php echo $_POST['verb']; ?></span>.
					 <span class="adjective"><?php echo $_POST['adjective']; ?></span> things did happen here
					 No <span class="adjective"><?php echo $_POST['adjective']; ?></span>r would it be
					 If we met at <span class="timeofday"><?php echo $_POST['timeofday']; ?></span>
					 In the hanging <span class="plant"><?php echo $_POST['plant']; ?></span>.</p>

					<p> Are you, are you
					 <span class="verb2"><?php echo $_POST['verb2']; ?></span> to the <span class="plant"><?php echo $_POST['plant']; ?></span>?
					 Where I told you to <span class="verb1"><?php echo $_POST['verb1']; ?></span>,
					 So we'd both be free.
					 <span class="adjective"><?php echo $_POST['adjective']; ?></span> things did happen here
					 No <span class="adjective"><?php echo $_POST['adjective']; ?></span>r would it be
					 If we met at <span class="timeofday"><?php echo $_POST['timeofday']; ?></span>
					 In the hanging <span class="plant"><?php echo $_POST['plant']; ?></span>.</p> 

					<p> Are you, are you
					<span class="verb2"><?php echo $_POST['verb2']; ?></span> to the <span class="plant"><?php echo $_POST['plant']; ?></span>?
					Wear a <span class="noun"><?php echo $_POST['noun']; ?></span> of rope,
					Side by side with me.
					<span class="adjective"><?php echo $_POST['adjective']; ?></span> things did happen here
					No <span class="adjective"><?php echo $_POST['adjective']; ?></span>r would it be
					If we met at <span class="timeofday"><?php echo $_POST['timeofday']; ?></span>
					In the hanging <span class="plant"><?php echo $_POST['plant']; ?></span>.</p>

			</div>
		</div>
	</body>
</html>