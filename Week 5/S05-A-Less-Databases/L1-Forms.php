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
									
									<h2>Get Method</h2>
									<form class="myform" method="get" action="L1-Forms-Get.php">
										<input class="control" type="text" name="favColor1" placeholder="Favorite Color 1">
										<input class="control" type="text" name="favColor2" placeholder="Favorite Color 2">
										<input class="mybutton" type="submit" value="Get Me Some">
									</form>
									
									<h2>Post Method</h2>
									<form class="myform" method="post" action="L1-Forms-Post.php">
										<input class="control" type="text" name="favMovie" placeholder="Favorite Movie">
										<input class="mybutton" type="submit" value="Post Me Some">
									</form>


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