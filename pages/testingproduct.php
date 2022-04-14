<?php
include 'config.php';
include APPROOT . '/includes/head.php';
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
                                <a href="javascript:void(0);" class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-calendar me-2 fs-14"></i> Search By Status</a>
                                <div class="dropdown-menu border-0">
                                    <a class="dropdown-item" href="javascript:void(0);">Passed</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Pending</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Page header-->

                    <!-- Row-3 -->
                    <div class="row row-deck">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Top Products
                                    </h3>
                                    <div class="card-options">
                                        <a href="addtestproduct.php" class="btn btn-sm btn-primary">Add Product</a>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover card-table table-vcenter text-nowrap">
                                            <thead class="border-bottom-0 pt-3 pb-3">
                                                <tr>
                                                    <th class="text-center">s.no</th>
                                                    <th>Product Category</th>
                                                    <th>Product Name</th>
                                                    <th>Testing ID</th>
                                                    <th>Product Info</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $qrySearchPro = "select * from testing_product";
                                                $resultPro = mysqli_query($conn, $qrySearchPro);
                                                $x = 1; // for S.NO
                                                while ($RecordsPro =  mysqli_fetch_assoc($resultPro)) {
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $x++; ?></td>
                                                    <td><img class="avatat avatar-md brround me-2" src="../assets/images/orders/7.jpg" alt="img"><?= $RecordsPro['product_category'];?></td>
                                                    <td class="fs-13 text-success"><span class="dot-label bg-success me-2 w-2 h-2"></span><?= $RecordsPro['product_name'];?></td>
                                                    <td><span class="font-weight-normal1"><?= $RecordsPro['testing_id'];?></span></td>
                                                    <td class="text-muted"><?= $RecordsPro['product_desc'];?></td>
                                                    <td><span class="badge fs-11 bg-success-transparent text-success ms-2"><?= $RecordsPro['status'];?></span></td>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                                    <!-- <td class="text-center">1</td>
                                                    <td><img class="avatat avatar-md brround me-2" src="../assets/images/orders/7.jpg" alt="img">Books</td>
                                                    <td class="fs-13 text-success"><span class="dot-label bg-success me-2 w-2 h-2"></span>Book</td>
                                                    <td><span class="font-weight-normal1">$1234</span></td>
                                                    <td class="text-muted">3 days ago</td>
                                                    <td><span class="badge fs-11 bg-success-transparent text-success ms-2">Regular</span></td> -->
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td><img class="avatat avatar-md brround me-2" src="../assets/images/orders/5.jpg" alt="img">Sports</td>
                                                    <td class="fs-13 text-secondary"><span class="dot-label bg-secondary me-2 w-2 h-2"></span>Shoes</td>
                                                    <td><span class="font-weight-normal1">htKS0l3cPW7</span></td>
                                                    <td class="text-muted">Dont Know</td>
                                                    <td><span class="badge fs-11 bg-success-transparent text-success ms-2">Passed</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td><img class="avatat avatar-md brround me-2" src="../assets/images/orders/6.jpg" alt="img">Accesories</td>
                                                    <td class="fs-13 text-danger"><span class="dot-label bg-danger me-2 w-2 h-2"></span>Watch</td>
                                                    <td><span class="font-weight-normal1">GmBWvgNMZAY</span></td>
                                                    <td class="text-muted">Battery Low</td>
                                                    <td><span class="badge fs-11 bg-danger-transparent text-danger ms-2">Pending</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td><img class="avatat avatar-md brround me-2" src="../assets/images/orders/4.jpg" alt="img">Watches</td>
                                                    <td class="fs-13 text-success"><span class="dot-label bg-success me-2 w-2 h-2"></span>Smart Watch</td>
                                                    <td><span class="font-weight-normal1">Nsy67VREdMh</span></td>
                                                    <td class="text-muted">Display Error</td>
                                                    <td><span class="badge fs-11 bg-danger-transparent text-danger ms-2">Pending</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td><img class="avatat avatar-md brround me-2" src="../assets/images/orders/10.jpg" alt="img">speakers</td>
                                                    <td class="fs-13 text-info"><span class="dot-label bg-info me-2 w-2 h-2"></span>Head set</td>
                                                    <td><span class="font-weight-normal1">9G4isJyOAa5</span></td>
                                                    <td class="text-muted">Sound Problem</td>
                                                    <td><span class="badge fs-11 bg-danger-transparent text-danger ms-2">Pending</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row-3 -->
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