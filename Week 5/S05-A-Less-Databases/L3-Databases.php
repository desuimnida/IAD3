<?php
/*-------------------------------------
| draw in shared variables and functionality
-------------------------------------*/
require('req_globals.php'); 

/*-------------------------------------
| page specific variables
-------------------------------------*/
$pageTitle = 'Databases'; 

/*-------------------------------------
| Include Shared Header
-------------------------------------*/
include('inc_header.php'); 
?>
			<div id="main">
				<div class="inset">

					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8">
								<article>
									<h1><?php echo $pageTitle; ?></h1>
									
								<div id="dbSlides">

								<?php
								/*-------------------------
								|1. Connext to Database
								-------------------------*/ 
								// server, username, password, database
								$con = mysqli_connect('localhost', 'root', 'root', 'des471');

								if ($con == false)
								{
									die('Database Error:' . mysqli_connect_error());
								}
								/*-------------------------
								|2. Query Database
								-------------------------*/ 
								$slides = mysqli_query($con, 'SELECT * FROM slideshow');


								/*-------------------------
								|1. Display the Results
								-------------------------*/
								while($slide = mysqli_fetch_assoc($slides)): 
								?>

										<div class="slide">
											<img src="img/slides/<?php echo $slide['imageURL']; ?>" height="300" width="600">
											<div class="bio">
											<h1><?php echo $slide['title']; ?></h1>
											<div class="text"><?php echo $slide['text']; ?></div>
										</div>
										</div>
									<?php endwhile; ?>

									</div>


								</article>
							</div>
							<div class="col-md-4">
								<aside>
									<h1>All Lessons</h1>

									<?php include('inc_nav_lessons.php'); ?>
									
								</aside>
							</div>
						</div>
					</div>

				</div>
			</div>	
<?php include('inc_footer.php'); ?>