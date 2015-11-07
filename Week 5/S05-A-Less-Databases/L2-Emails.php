<?php
/*-------------------------------------
| draw in shared variables and functionality
-------------------------------------*/
require('req_globals.php'); 

/*-------------------------------------
| page specific variables
-------------------------------------*/
$pageTitle = 'L2: Emails'; 

/*-------------------------------------
| Email Processing
-------------------------------------*/
// initialize variables
$uname = '';
$uemail = '';
$favColor = '';
$umessage = '';

$feedback = false; //hide feedback by default

$errors = false; //there are no errors to start with
$fb = array(); //empty to start with

if ( isset($_POST['uemail']) ) //did they use the form?
{
	$feedback = true; // Show feedback only if they used the form
	
	// convert form variables to our initialized variables.
	$uemail = $_POST['uemail'];
	$uname = $_POST['uname'];
	$favColor = $_POST['favColor'];
	$umessage = $_POST['umessage'];

	/*-------------------------------------
	| Validate
	-------------------------------------*/
	if (empty($uemail))
	{
		$errors = true; // houston there is a problem
		$fb[] = 'You forgot to fill out the <b>Email</b> field.';
	}
	if (empty($uname))
	{
		$errors = true; // houston there is a problem
		$fb[] = 'You forgot to fill out the <b>Name</b> field.';
	}
	if (empty($umessage))
	{
		$errors = true; // houston there is a problem
		$fb[] = 'You forgot to fill out the <b>Message</b> field.';
	}


	/*-------------------------------------
	| Compose The Email
	-------------------------------------*/
	$message = '
		<p>Hello Customer,</p>

		<p>You have a messsage from <b>' . $uname . '</b>.</p>

		<p>
			' . $umessage . '
		</p>

		<p>
			Cheers,<br>
			Your Web Team
		</p>

		<p>This message was generated from your website</p>
	';

	// $fb[] = $message;

	/*-------------------------------------
	| Sending the Email
	-------------------------------------*/
	if ($errors == false)
	{
		$to = 'meatch@me.com';
		$subject = 'Email from our website';

		$headers = "From: " . strip_tags('meatched@gmail.com') . "\r\n";
		$headers .= "Reply-To: ". strip_tags($uemail) . "\r\n";
		// $headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		if (mail($to, $subject, $message, $headers))
		{
			$fb[] = 'Message Sent';
		}
		else
		{
			$fb[] = 'Message <b>FAILED</b>';
		}
	}

} // here ends our form submit condition


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
									
									<?php 
										if ($feedback == true) : 

										$alertClass = ($errors == true) ? 'alert-danger':'alert-info';
									?>
									<div class="feedback alert <?php echo $alertClass; ?>">
										<h2>Feedback</h2>

										<ul>
											<?php foreach($fb as $line) : ?> 
											<li><?php echo $line; ?></li>
											<?php endforeach; ?>
										</ul>
									</div>
									<?php endif; ?>

									<div class="contact">
										<form method="post" action="L2-Emails.php">
											<div class="form-group">
												<label for="uname">Name</label>
												<input type="text" class="form-control" id="uname" name="uname" placeholder="Name" value="<?php echo $uname; ?>">
											</div>
											<div class="form-group">
												<label for="uemail">Email</label>
												<input type="text" class="form-control" id="uemail" name="uemail" placeholder="Email" value="<?php echo $uemail; ?>">
											</div>
											<div class="form-group">
												<label for="favColor">Favorite Color</label>
												<select name="favColor" id="favColor"  class="form-control">
													<option value="red" <?php if ($favColor == 'red') { echo 'selected'; } ?>>Red</option>
													<option value="green" <?php if ($favColor == 'green') { echo 'selected'; } ?>>Green</option>
													<option value="blue"  <?php if ($favColor == 'blue') { echo 'selected'; } ?>>Blue</option>
												</select>
											</div>
											<div class="form-group">
												<label for="umessage">Message</label>
												<textarea class="form-control" id="umessage" name="umessage" placeholder="Message"><?php echo $umessage; ?></textarea>
											</div>
											<button type="submit" class="btn btn-default">Submit</button>
										</form>
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