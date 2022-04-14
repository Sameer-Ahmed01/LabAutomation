<?php
session_start();
include 'config.php';
include APPROOT . '/includes/head.php';

//Create this function to use UserName in multiple places
function UserName() {
	if (isset($_SESSION["UserFullName"])) {
		echo $_SESSION["UserFullName"];
	}
}
function UserEmail() {
	if (isset($_SESSION["UserEmail"])) {
		echo $_SESSION["UserEmail"];
	}
}

?>

<body class="app sidebar-mini">

	<!-- Switcher -->
	<div class="switcher-wrapper">
		<div class="demo_changer ">
			<div class="form_holder sidebar-right1">
				<div class="row">
					<div class="predefined_styles">
						<div class="swichermainleft text-center">
							<div class="p-3 d-grid gap-2">
								<a href="https://php.spruko.com/azea/" class="btn ripple btn-primary mt-0">View Demo</a>
								<a href="https://themeforest.net/item/azea-bootstrap-5-admin-dashboard-template/33518740" class="btn ripple btn-success">Buy Now</a>
								<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-red">Our Portfolio</a>
							</div>
						</div>
						<div class="swichermainleft text-center">
							<div class="p-3 d-grid gap-2">
								<a href="https://php.spruko.com/azea/azea/horizontal" class="btn ripple btn-primary mt-0">horizontal Menu</a>
							</div>
						</div>
						<div class="swichermainleft text-center">
							<h4>LTR AND RTL VERSIONS</h4>
							<div class="switch_section p-4">
								<div class="switch-toggle d-flex mt-2">
									<span class="me-auto">LTR</span>
									<a class="onoffswitch2"><input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
										<label for="myonoffswitch54" class="onoffswitch2-label"></label>
									</a>
								</div>
								<div class="switch-toggle d-flex mt-2">
									<span class="me-auto">RTL</span>
									<a class="onoffswitch2"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
										<label for="myonoffswitch55" class="onoffswitch2-label"></label>
									</a>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Theme Style</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Light Theme</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch1" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Dark Theme</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
											<label for="myonoffswitch2" class="onoffswitch2-label"></label>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Leftmenu Styles</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Light Menu</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
											<label for="myonoffswitch3" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Color Menu</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
											<label for="myonoffswitch4" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Dark Menu</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
											<label for="myonoffswitch5" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Gradient Menu</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
											<label for="myonoffswitch25" class="onoffswitch2-label"></label>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Header Styles</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Light Header</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox">
											<label for="myonoffswitch6" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Color Header</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
											<label for="myonoffswitch7" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Dark Header</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
											<label for="myonoffswitch8" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Gradient Header</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
											<label for="myonoffswitch26" class="onoffswitch2-label"></label>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Layout Width Styles</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Full Width</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch9" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Boxed</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
											<label for="myonoffswitch10" class="onoffswitch2-label"></label>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Layout Positions</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Fixed</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch11" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Scrollable</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
											<label for="myonoffswitch12" class="onoffswitch2-label"></label>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Sidemenu layout Styles</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Default Menu</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
											<label for="myonoffswitch13" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Closed Menu</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
											<label for="myonoffswitch30" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Icon with Text</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
											<label for="myonoffswitch14" class="onoffswitch2-label"></label>
										</a>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Icon Overlay</span>
										<a class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
											<label for="myonoffswitch15" class="onoffswitch2-label"></label>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Switcher -->
	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="../assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<!-- Page -->
	<div class="page">
		<div class="page-main">

			<!--aside open-->
			<?php include APPROOT . '/includes/aside.php'; ?>
			<!--aside closed-->
			<!-- App-Content -->
			<div class="app-content main-content">
				<div class="side-app">

					<!--app header-->
					<?php include APPROOT . '/includes/header.php'; ?>
					<!--/app header-->
					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Profile 1</h4>
						</div>
					</div>
					<!--End Page header-->

					<!-- Row -->
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-12">
							<div class="card box-widget widget-user">
								<div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="../assets/images/users/2.jpg"></div>
								<div class="card-body text-center">
									<div class="pro-user">
										<h4 class="pro-user-username mb-1 font-weight-bold"><?php echo UserName(); ?></h4>
										<h6 class="pro-user-desc text-muted">UI UX Designer</h6>
										<div class="wideget-user-rating">
											<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
											<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
											<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
											<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
											<a href="javascript:void(0);"><i class="fa fa-star-o text-warning me-1"></i></a> <span>5 (3876 Reviews)</span>
										</div>
										<a href="javascript:void(0);" class="btn btn-success mt-3"><i class="fa fa-rss me-2"></i>Edit Profile</a>
										<a href="javascript:void(0);" class="btn btn-primary mt-3"><i class="fa fa-pencil me-2"></i> Follow</a>
									</div>
								</div>
								<div class="card-footer p-0">
									<div class="row">
										<div class="col-sm-6 border-end text-center">
											<div class="description-block p-4">
												<h5 class="description-header mb-1 font-weight-bold  number-font">689k</h5>
												<span class="text-muted">Followers</span>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="description-block text-center p-4">
												<h5 class="description-header mb-1 font-weight-bold number-font">3,765</h5>
												<span class="text-muted">Following</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Personal Details</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mb-0">
											<tbody>
												<tr>
													<td class="">
														<span class="font-weight-semibold w-50">Name </span>
													</td>
													<td class=""><?php echo UserName();?></td>
												</tr>
												<tr>
													<td class="">
														<span class="font-weight-semibold w-50">Location </span>
													</td>
													<td class="">USA</td>
												</tr>
												<tr>
													<td class="">
														<span class="font-weight-semibold w-50">Languages </span>
													</td>
													<td class="">English, German</td>
												</tr>
												<tr>
													<td class="">
														<span class="font-weight-semibold w-50">Website </span>
													</td>
													<td class="">smithabgd.com</td>
												</tr>
												<tr>
													<td class="">
														<span class="font-weight-semibold w-50">Email </span>
													</td>
													<td class=""><?php echo UserEmail(); ?></td>
												</tr>
												<tr>
													<td class="">
														<span class="font-weight-semibold w-50">Phone </span>
													</td>
													<td class="">+125 254 3562s</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-12">
							<div class="main-content-body main-content-body-profile card">
								<div class="card-header">
									<h3 class="card-title">Biography</h3>
								</div>
								<div class="main-profile-body">
									<div class="card-body">
										<div class="main-profile-bio mb-5">
											<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries nchanged.</p>
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
											<p class="mb-0">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a></p>
										</div>
										<div class="">
											<form class="profile-edit mb-0">
												<textarea class="form-control br-br-0 br-bl-0" placeholder="What are you doing right now?" rows="5"></textarea>
												<div class="profile-share  border border-top-0">
													<a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Audio"><i class="fe fe-mic"></i></a>
													<a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Video"><i class="fe fe-video"></i></a>
													<a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Picture"><i class="fe fe-image"></i></a>
													<button type="submit" class="btn btn-outline-success pull-right mt-1"><i class="fa fa-share ms-1"></i> Share</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

		<!--Footer-->
		<?php include APPROOT . '/includes/footer.php'; ?>
		<!-- End Footer-->
	</div>

	<!-- End Page -->
	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

	
</body>

</html>