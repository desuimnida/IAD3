<?php
/*-------------------------------------
| draw in shared variables and functionality
-------------------------------------*/
require('req_globals.php'); 

/*-------------------------------------
| page specific variables
-------------------------------------*/
$pageTitle = 'L1: Forms'; 

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
									
									<h2>Get Results</h2>

									<a href="L1-Forms.php">Back To Form</a>

									<?php echo $_GET['favColor']; ?>
									
								
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