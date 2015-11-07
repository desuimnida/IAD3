<!doctype html>
<html>
	<head>
		<title>The Form :: Collecting Data</title>
		<link rel="stylesheet" href="_css/styles.css">
	</head>
	<body class="form">
		<div id="container">
			<header>The Form</header>
 
			<div id="main">
				<form class="myform" method="post" action="result.php">
					<div class="myRow cf">
						<div class="label">Name:</div> 
						<div class="input"><input class="control"  input type="text" name="name" placeholder="Someone's Name"></div>
					</div>
					<div class="myRow cf">
						<div class="label">Adjective:</div> 
						<div class="input"> <input class="control"  input type="text" name="adjective" placeholder="An Adjective"></div>
					</div>
					<div class="myRow cf">
						<div class="label">Noun:</div> 
						<div class="input"> <input class="control"  input type="text" name="noun" placeholder="A Noun"></div>
					</div>
					<div class="myRow cf">
						<div class="input"> <input class="mybutton" input type="submit" value="Generate Story"></div>
					</div>

				</form>
			</div>

		</div>
	</body>
</html>