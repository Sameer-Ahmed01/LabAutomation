<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['btnReg'])) {

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];

		$_ErrorMessage = "";
		if ($firstname == "") {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Please Enter UserName</div>";
		} else if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Only letters and white space allowed</div>";
		} else if ($lastname == "") {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Please Enter UserName</div>";
		} else if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Only letters and white space allowed</div>";
		} else if ($email == "") {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Please Enter Email</div>";
		} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Invalid email format</div>";
		} else if ($password == "") {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Please Enter Password</div>";
		} else if ($confirmpassword == "") {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Please Enter Confirm Password</div>";
		} else if ($password != $confirmpassword) {
			$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Password Does Not Match!</div>";
		}

		if ($_ErrorMessage == "") {
			// Check for the Username 
			$query = "select * from `users` where `email` ='$email'";
			$queryResult = mysqli_query($conn, $query);
			$RecordCount = mysqli_num_rows($queryResult);
			if ($RecordCount > 0) {
				$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Email already Exist!</div>";
			} else {
				$passwordEncrypt = md5($password);
				$query = "insert into `users` (firstname,lastname,email,password) values ('$firstname', '$lastname' ,'$email', '$passwordEncrypt')";
				$queryResult = mysqli_query($conn, $query);

				if ($queryResult) {
					$_ErrorMessage = "<div class='mt-4 alert alert-success'>Account Created</div>";
				} else {
					$_ErrorMessage = "<div class='mt-4 alert alert-danger'>Please try again !</div>";
				}
			}
		}
		//==============
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta data -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta content="Azea - Admin Panel HTML template" name="description">
	<meta content="Spruko Private Limited" name="author">
	<meta name="keywords" content="admin, admin dashboard template in php, admin panel bootstrap php theme, admin panel in php, admin panel template, admin template, best php admin panel, bootstrap 5 admin dashboard templates, dashboard, dashboard template, php admin panel, php admin panel template, php, admin template, php dashboard template, php framework">

	<!-- Title -->
	<title>Azea - PHP Admin & Dashboard Template</title>

	<!--Favicon -->
	<link rel="icon" href="../assets/images/brand/favicon.ico" type="image/x-icon" />

	<!--Bootstrap css -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Style css -->
	<link href="../assets/css/style.css" rel="stylesheet" />
	<link href="../assets/css/dark.css" rel="stylesheet" />
	<link href="../assets/css/skin-modes.css" rel="stylesheet" />

	<!-- Animate css -->
	<link href="../assets/css/animated.css" rel="stylesheet" />

	<!---Icons css-->
	<link href="../assets/css/icons.css" rel="stylesheet" />

	<!-- Color Skin css -->
	<link id="theme" href="../assets/colors/color1.css" rel="stylesheet" type="text/css" />


</head>

<body class="register1">


	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="../assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->



	<div class="page">
		<div class="page-single">
			<div class="container">
				<div class="row">
					<div class="col mx-auto">
						<div class="row justify-content-center">
							<div class="col-xl-7 col-lg-12">
								<div class="row p-0 m-0">
									<div class="col-lg-6 p-0">
										<div class="text-justified text-white p-5 register-1 overflow-hidden">
											<div class="custom-content">
												<div class="mb-5 br-7">
													<!-- <img src="../assets/images/brand/logo1.png" class="header-brand-img desktop-lgo" alt="Azea logo"> -->
												</div>
												<div class="ms-5">
													<div class="fs-16 mb-6 font-weight-bold text-white">Welcome Back To Lab !</div>
													<div class="mb-6 text-white-50">
														Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem et esse in velit deleniti facilis quo, placeat totam aliquam veniam, quis rerum itaque, incidunt sequi quidem magni error est! Provident!
													</div>
													<h6 class="text-white-50">Already a member ?</h6>
													<a href="login.php" class="btn btn-white text-primary font-weight-bold ">Login Here</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-8 col-lg-6 p-0 mx-auto">
										<div class="bg-white text-dark  br-7 br-tl-0 br-bl-0">
											<div class="card-body">
												<div class="text-center mb-3">
													<h1 class="mb-2">Sign Up</h1>
													<a href="javascript:void(0);" class="">Create New Account</a>
													<?php if(isset($_ErrorMessage)) {echo $_ErrorMessage;} ?>
												</div>
												<!-- form start -->
												<form class="mt-5" action="register.php" method="POST">
													<div class="input-group mb-4">
														<div class="input-group-text">
															<i class="fe fe-user"></i>
														</div>
														<input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php if(isset($firstname)) { echo $firstname;} else { echo "";} ?>">
													</div>
													<div class="input-group mb-4">
														<div class="input-group-text">
															<i class="fe fe-user"></i>
														</div>
														<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php if(isset($lastname)) { echo $lastname;} else { echo "";} ?>">
													</div>
													<div class="input-group mb-4">
														<div class="input-group-text">
															<i class="fe fe-mail"></i>
														</div>
														<input type="text" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) { echo $email;} else { echo "";} ?>">
													</div>
													<div class="input-group mb-4">
														<div class="input-group" id="Password-toggle">
															<a href="" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
															</a>
															<input class="form-control" type="password" name="password" placeholder="Password">
														</div>
													</div>
													<div class="input-group mb-4">
														<div class="input-group" id="Password-toggle1">
															<a href="" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
															</a>
															<input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password">
														</div>
													</div>
													<div class="form-group">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" />
															<span class="custom-control-label">I Agree For<a href="javascript:void(0);" class="font-weight-bold"> Terms & Conditions.</a></span>
														</label>
													</div>
													<div class="form-group text-center mb-3">
														<!-- <a href="login.php" class="btn btn-primary btn-lg w-100 br-7">Sign Up</a> -->
														<button type="submit" name="btnReg" class="btn btn-primary btn-lg w-100 br-7">Sign Up</button>
													</div>
													<div class="form-group fs-12 text-center">
														By Clicking Sign up,Your agree to our <a href="javascript:void(0);" class="font-weight-bold">Terms & Conditions</a> and have read and acknowledge our <a href="javascript:void(0);" class="font-weight-bold">Privacy & Services.</a>
													</div>
												</form>
												<!-- form End -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- End Page -->
	<!-- Jquery js-->
	<script src="../assets/js/jquery.min.js"></script>

	<!-- Bootstrap5 js-->
	<script src="../assets/plugins/bootstrap/popper.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!--Othercharts js-->
	<script src="../assets/plugins/othercharts/jquery.sparkline.min.js"></script>

	<!-- Circle-progress js-->
	<script src="../assets/js/circle-progress.min.js"></script>

	<!-- Jquery-rating js-->
	<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

	<!-- Show Password -->
	<script src="../assets/js/bootstrap-show-password.min.js"></script>

	<!-- Custom js-->
	<script src="../assets/js/custom.js"></script>


</body>

</html>