<?php
/*-------------------------------------
| initialize variables
-------------------------------------*/

$weather = 'Rain';



/*-------------------------------------
| Process The Form Only if it is Set (e.g. isset())
-------------------------------------*/
if (isset($_GET['weather']))
{
	$weather = $_GET['weather'];
}



/*-------------------------------------
| Determine Which Image
-------------------------------------*/

?>
<!doctype html>
<html>
	<head>
		<title> <?php echo $weather; ?> :: Menu</title>
		<link rel="stylesheet" href="_css/styles.css">
	</head>
	<body>
		<div id="container">
			<header><?php echo $weather; ?> Menu</header>


			<form method="get" action="conditional-weather.php">
				<div class="row">
					<label>What's The Weather Like?</label>
					<select name="weather">
						<option value="Clear" <?php if ($weather == 'Clear') { echo 'selected'; } ?>>Clear</option>
						<option value="Cloudy" <?php if ($weather == 'Cloudy') { echo 'selected'; } ?>>Cloudy</option>
						<option value="Rain" <?php if ($weather == 'Rain') { echo 'selected'; } ?>>Rain</option>
					</select>
					<button type="submit">Submit</button>
				</div>
			</form>

			<hr>
			<div class="results">

			<?php if ($weather == 'Rain'): ?>
				<img src="_img/rain.jpg" width="640" height="480">
				<h1>Rain</h1>
			<?php endif; ?>

			<?php if ($weather == 'Cloudy'): ?>
				<img src="_img/cloudy.jpg" width="640" height="480">
				<h1>Cloudy</h1>
			<?php endif; ?>

			<?php if ($weather == 'Clear'): ?>
				<img src="_img/clear.jpg" width="640" height="480">
				<h1>Clear</h1>
			<?php endif; ?>


			</div>
		</div>
	</body>
</html>