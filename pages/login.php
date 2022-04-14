<?php
session_start();
if (isset($_SESSION["UserID"])) {
	header('Location: index.php');
}


include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['btnLogin'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$_ErrorMessage  = "";
		if ($email == "") {
			$_ErrorMessage = "<div class='alert alert-danger'>Error: Please Enter Email</div>";
		} elseif ($password == "") {
			$_ErrorMessage = "<div class='alert alert-danger'>Error: Please Enter Password</div>";
		}

		//Now checking for Login Details username and password in Database
		if ($_ErrorMessage == "") {

			$passwordEncrypt = md5($password);
			$querySearch = "select * from users where email = '" . $email . "' AND password = '" . $passwordEncrypt . "'";
			$queryResult = mysqli_query($conn, $querySearch);
			$RecordCount = mysqli_num_rows($queryResult); // 	
			$UserRecords = mysqli_fetch_assoc($queryResult);

			if ($RecordCount > 0) {

				$_SESSION["UserID"] = $UserRecords["id"];
				$_SESSION["UserFullName"] = $UserRecords["firstname"] . " " . $UserRecords["lastname"];
				$_SESSION["UserEmail"] = $UserRecords["email"];
				header('Location: index.php');
			} else {
				$_ErrorMessage = "<div class='alert alert-danger'>Invalid Email/ Password!</div>";
			}
		}
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

<body>

	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="../assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<div class="register1">
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
														<div class="fs-18 mb-6 font-weight-bold text-white">Welcome Back To Lab !</div>
														<div class="mb-6 text-white-50">
															Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem et esse in velit deleniti facilis quo!
														</div>
														<h6 class="text-white-50">Don't Have an Account?</h6>
														<a href="register.php" class="btn btn-white text-primary text-transparent font-weight-bold ">Create Here</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-8 col-lg-6 p-0 mx-auto">
											<div class="bg-white text-dark br-7 br-tl-0 br-bl-0">
												<div class="card-body">
													<div class="text-center mb-3">
														<h1 class="mb-2">Log In</h1>
														<a href="javascript:void(0);" class="">Hello There !</a>
														<?php if (isset($_ErrorMessage)) {
															echo $_ErrorMessage;
														} ?>
													</div>
													<!-- form start -->
													<form class="mt-5" action="login.php" method="POST">
														<div class="input-group mb-4">
															<div class="input-group-text">
																<i class="fe fe-user"></i>
															</div>
															<input type="text" class="form-control" name="email" placeholder="Email">
														</div>
														<div class="input-group mb-4">
															<div class="input-group" id="Password-toggle">
																<a href="" class="input-group-text">
																	<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
																<input class="form-control" type="password" name="password" placeholder="Password">
															</div>
														</div>
														<div class="form-group">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" />
																<span class="custom-control-label">Remember Me</span>
															</label>
														</div>
														<div class="form-group text-center mb-3">
															<button type="submit" name="btnLogin" class="btn btn-primary btn-lg w-100 br-7">Log In</button>
														</div>
														<div class="form-group fs-13 text-center">
															<a href="forgot-password-1.php">Forget Password ?</a>
														</div>
														<div class="form-group fs-14 text-center font-weight-bold">
															<a href="javascript:void(0);">Click Here To Backup Mail</a>
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