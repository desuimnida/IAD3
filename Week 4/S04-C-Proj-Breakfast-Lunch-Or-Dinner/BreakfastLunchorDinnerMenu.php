<?php
/*-------------------------------------
| initialize variables
-------------------------------------*/

$menu = 'Dinner';



/*-------------------------------------
| Process The Form Only if it is Set (e.g. isset())
-------------------------------------*/
if (isset($_POST['menu']))
{
	$menu = $_POST['menu'];
}



/*-------------------------------------
| Determine Which Image
-------------------------------------*/

?>
<!doctype html>
<html>
	<head>
		<title> <?php echo $menu; ?> :: Menu</title>
		<link rel="stylesheet" href="_css/styles.css">
	</head>
	<body>
		<div id="container">
			<header><?php echo $menu; ?> Menu</header>


			<form method="post" action="BreakfastLunchorDinnerMenu.php">
				<div class="row">
					<label>Enjoy A Delicious Meal</label>
					<select name="menu">
						<option value="Breakfast" <?php if ($menu == 'Breakfast') { echo 'selected'; } ?>>Breakfast</option>
						<option value="Lunch" <?php if ($menu == 'Lunch') { echo 'selected'; } ?>>Lunch</option>
						<option value="Dinner" <?php if ($menu == 'Dinner') { echo 'selected'; } ?>>Dinner</option>
					</select>
					<button type="submit">Submit</button>
				</div>
			</form>

			<hr>
			<div class="results">

			<?php if ($menu == 'Dinner'): ?>
				<h1>Steak and Baked Potato</h1>
				<img src="_img/dinner1.jpg" width="500" height="250">
				<p>Indulge your carnivorous side with a classic sirloin steak dinner with a side of baked potato and classic salad to satisfy your taste buds.  </p>
			<?php endif; ?>

			<?php if ($menu == 'Dinner'): ?>
				<h1>Angel-Hair Tomato Pasta </h1>
				<img src="_img/dinner2.jpg" width="500" height="250">
				<p>In the mood for pasta? You can't go wrong with a spaghetti style tomato basil and meatball classic.</p>
			<?php endif; ?>

			<?php if ($menu == 'Dinner'): ?>
				<h1>Seafood Paella</h1>
				<img src="_img/dinner3.jpg" width="500" height="250">
				<p>Rice at Its Best! Authentic paella calls for the right pan and a thin blanket of rice with an assortment of fresh seafood.</p>
			<?php endif; ?>



			<?php if ($menu == 'Lunch'): ?>
				<h1>Assorted Sushi</h1>
				<img src="_img/lunch1.jpg" width="500" height="250">
				<p>A dozen different types of sushi and sashimi at your fingertips when choosing this meal and party tray.</p>
			<?php endif; ?>

			<?php if ($menu == 'Lunch'): ?>
				<h1>Classic Salad</h1>
				<img src="_img/lunch2.jpg" width="500" height="250">
				<p>You dont have to be watching your health to eat this salad! Fresh and delicious Ceasar with a twist.</p>
			<?php endif; ?>

			<?php if ($menu == 'Lunch'): ?>
				<h1>Hamburger</h1>
				<img src="_img/lunch3.jpg" width="500" height="250">
				<p>Your classic 1 lbs. burger served with our secret sauce with a side of onion rings or classic fries.</p>
			<?php endif; ?>



			<?php if ($menu == 'Breakfast'): ?>
				<h1>Oatmeal and Yogurt</h1>
				<img src="_img/breakfast1.jpg" width="500" height="250">
				<p>A very light breakfast with all the nutrients needed to start your day. Let's start your day right with the fruit toppings of your choice! </p>
			<?php endif; ?>

<?php if ($menu == 'Breakfast'): ?>
				<h1>French Breakfast</h1>
				<img src="_img/breakfast2.jpg" width="500" height="250">
				<p>Croissants, fruits, and a good old cup o' joe. Simple and sweet breakfast to have while relaxing on a nice day.</p>
			<?php endif; ?>

<?php if ($menu == 'Breakfast'): ?>
				<h1>All Around Breakfast</h1>
				<img src="_img/breakfast3.jpg" width="500" height="250">
				<p>Our take on what makes your mornings a happy one, perfect for a breakfast in bed. Take a moment to indulge in our pancakes, bacon. eggs and fruit. </p>
			<?php endif; ?>


			</div>
		</div>
	</body>
</html>