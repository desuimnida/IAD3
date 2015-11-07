<!doctype html>
<html>
	<head>
		<title>Staff Members Listing</title>
		<link rel="stylesheet" href="_css/styles.css">
	</head>
	<body>
		
		<div id="staff" class="cf">
			<h1>Staff</h1>
			<?php
			/*-------------------------------------
			| 1. PHPMyAdmin
			| Create Database table called Staff 
			| 	under the class database we set up.
			| Primary key = id
			| Additional columns: name and imageURL
			|
			| 			CREATE TABLE `staff` (
			| 			  `id` int(11) NOT NULL AUTO_INCREMENT,
			| 			  `name` varchar(50) NOT NULL,
			| 			  `imageURL` varchar(255) NOT NULL,
			| 			  PRIMARY KEY (`id`)
			| 			)
			| Insert a record for each staff member (8)
			-------------------------------------*/

			/*-------------------------------------
			| 2. Connect to Database
			-------------------------------------*/
			
			/*-------------------------------------
			| 3. Test Connection
			-------------------------------------*/

			/*-------------------------------------
			| 4. Query Staff table
			-------------------------------------*/

			/*-------------------------------------
			| 5. Display/Loop Results.
			-------------------------------------*/
			?>
			<!-- loop block begins -->
			<div class="member">
				<img src="_img/cj-donham.jpg" width="150" height="200">
				<h1>CJ Donham</h1>
			</div>
			<!-- loop block ends -->
		</div>

	</body>
</html>