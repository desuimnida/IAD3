<nav id="mainmenu">
				<a href="index.php"		<?php if ($pageTitle == 'Welcome') 	{ echo ' class="chosen"'; } ?>>Home</a>
				<a href="about.php"		<?php if ($pageTitle == 'About') 	{ echo ' class="chosen"'; } ?>>About</a>
				<a href="gallery.php"	<?php if ($pageTitle == 'Gallery') 	{ echo ' class="chosen"'; } ?>>Gallery</a>
				<a href="contact.php"	<?php if ($pageTitle == 'Contact') 	{ echo ' class="chosen"'; } ?>>Contact</a>
			</nav>