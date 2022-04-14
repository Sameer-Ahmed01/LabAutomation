<?php
session_start();
if (empty($_SESSION['UserID'])) {
	header("Location: login.php");
}


include 'config.php';
include APPROOT . '/includes/head.php';
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
							<h4 class="page-title mb-0 text-primary">Dashboard</h4>
						</div>
						<div class="page-rightheader">
							<div class="btn-list">
								<button class="btn btn-outline-primary"><i class="fe fe-download me-2"></i>
									Import</button>
								<a href="javascript:void(0);" class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-calendar me-2 fs-14"></i> Search By Date</a>
								<div class="dropdown-menu border-0">
									<a class="dropdown-item" href="javascript:void(0);">Today</a>
									<a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
									<a class="dropdown-item active" href="javascript:void(0);">Last 7 days</a>
									<a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
									<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
									<a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
									<a class="dropdown-item" href="javascript:void(0);">Last year</a>
								</div>
							</div>
						</div>
					</div>
					<!--End Page header-->

					<!-- Row-1 -->
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden dash1-card border-0 dash1">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="">
												<span class="fs-14 font-weight-normal">Total Product</span>
												<h2 class="mb-2 number-font carn1 font-weight-bold">3,257</h2>
												<span class=""><i class="fe fe-arrow-up-circle"></i> 76% <span class="ms-1 fs-11">Growth This Month</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
											<div class="mx-auto text-right">
												<div id="spark1"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden dash1-card border-0 dash2">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="">
												<span class="fs-14">Total Stats</span>
												<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">1,678</h2>
												<span class=""><i class="fe fe-arrow-down-circle"></i> 15% <span class="ms-1 fs-11">Loss This Month</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
											<div class="mx-auto text-right">
												<div id="spark2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden dash1-card border-0 dash3">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="">
												<span class="fs-14">Total Income</span>
												<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">$2,590</h2>
												<span class=""><i class="fe fe-arrow-up-circle"></i> 62% <span class="ms-1 fs-11">From Last Month</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
											<div class="mx-auto text-right">
												<div id="spark3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden dash1-card border-0 dash4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="text-justify">
												<span>Total Tax</span>
												<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">$1,954</h2>
												<span class=""><i class="fe fe-arrow-up-circle"></i> 53% <span class="ms-1 fs-11">From Last Month</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
											<div class="mx-auto text-right">
												<div id="spark4"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row-1 -->

				</div>
			</div>
			<!-- End app-content-->

			<!--Footer-->
			<?php include APPROOT . '/includes/footer.php'; ?>
			<!-- End Footer-->
		</div>
	</div>

	<!-- End Page -->
	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>
	


</body>

</html>