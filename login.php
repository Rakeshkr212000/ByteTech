<?php
session_start();
include('bars/lheader.php');

?>

<?php
require('./login/db.php');

// When form submitted, check and create user session.
if (isset($_POST['username'])) {
	$username = stripslashes($_POST['username']);    // removes backslashes
	$username = mysqli_real_escape_string($con, $username);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($con, $password);
	// Check user is exist in the database
	$query    = "SELECT * FROM `users` WHERE username='" . $username . "'
					 AND password='" . md5($password) . "'";
	$result = mysqli_query($con, $query) or die(mysql_error());
	$rows = mysqli_num_rows($result);

	if ($rows == 1) {
		$_SESSION['username'] = $username;
		$data = mysqli_fetch_array($result);
		if ($data['usertype'] == 1) {
			header("Location:admin/index.php");
			// Redirect to user dashboard page
		} else {
			header("Location:index.php");
			// Redirect to user dashboard page
		}
	} else {
		// echo "<div class='form'>
        //           <h3>Incorrect Username/password.</h3><br/>
        //           <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
		//           </div>";
		$message = "Username and/or Password incorrect.\\nTry again.";
   echo "<script type='text/javascript'>alert('$message ');
   window.location= 'login.php';</script>";
	}
} else {
?>



	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->


	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="registration.php">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" method="post" id="contactForm">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="submit" class="primary-btn">Log In</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
<?php } ?>
<?php
include('bars/footer.php');
?>