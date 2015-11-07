<nav id="mainmenu">
				<a href="index.php"		<?php if ($pageTitle == 'Home') 		{ echo ' class="chosen"'; } ?>>Home</a>
				<a href="about.php"		<?php if ($pageTitle == 'About') 		{ echo ' class="chosen"'; } ?>>About</a>
				<a href="portfolio.php"	<?php if ($pageTitle == 'Portfolio') 	{ echo ' class="chosen"'; } ?>>Portfolio</a>
				<a href="contact.php"	<?php if ($pageTitle == 'Contact') 		{ echo ' class="chosen"'; } ?>>Contact</a>
			</nav>