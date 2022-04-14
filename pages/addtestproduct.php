<?php
include 'config.php';
include APPROOT . '/includes/head.php';

if (isset($_POST['btnAddTest'])) {
    $productName = $_POST['productName'];
    $productCategory = $_POST['productCategory'];
    $productDesc = $_POST['productDesc'];
    $testingID=substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, 11);
    $productImage = "images/product.jpeg";
    $status = "Pending";

    $_ErrorMessage = "";
    if ($productName == "") {
        $_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Please Enter Product Name</div>";
    } else if ($productCategory == "") {
        $_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Please Enter Product Category</div>";
    } else if ($productDesc == "") {
        $_ErrorMessage = "<div class='mt-4 alert alert-danger'>Error: Please Enter Product Description</div>";
    }

    if ($_ErrorMessage == "") {
        //Check for The Testing ID
        $query = "insert into `testing_product` (`product_name`, `product_category`, `testing_id`, `product_image`, `product_desc`, `status`) values ('$productName', '$productCategory', '$testingID', '$productImage', '$productDesc', '$status')";
        $queryResult = mysqli_query($conn, $query);
        
        if ($queryResult) {
            $_ErrorMessage = "<div class='mt-4 alert alert-success'>Product Added For Testing</div>";
        } else {
            $_ErrorMessage = "<div class='mt-4 alert alert-danger'>Please try again !</div>";
        }
    }
}



?>

<body class="app sidebar-mini">

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
                            <h4 class="page-title mb-0 text-primary">Testing Products</h4>
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

                    <form action="addtestproduct.php" method="post">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Product Information</h3>
                                    </div>
                                    <div class="col-sm-3 col-md-3">
                                        <div class="text-center">
                                            <?php if(isset($_ErrorMessage)) {echo $_ErrorMessage;} ?>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Product Name <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" name="productName" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Product Category <span class="text-red">*</span></label>
                                                    <select class="form-control custom-select select2" name="productCategory">
                                                        <option value="0">--Select--</option>
                                                        <option value="TV & Video">TV & Video</option>
                                                        <option value="Audio & Home Theater">Audio & Home Theater</option>
                                                        <option value="Computers">Computers</option>
                                                        <option value="Camera & Photo">Camera & Photo</option>
                                                        <option value="Wearable Technology">Wearable Technology</option>
                                                        <option value="Cell Phones">Cell Phones</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Product Description <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" name="productDesc" placeholder="Product Description">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Testing ID <span class="text-red"></span></label>
                                                    <input type="text" class="form-control" name="testingID" placeholder="Admin Only" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Status <span class="text-red"></span></label>
                                                    <input type="number" class="form-control" name="status" placeholder="Admin Only" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-4 mb-0" type="submit" name="btnAddTest">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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