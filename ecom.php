
<?php
require 'db.php';

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <?php include 'navbar.php'; ?>
        <section class="section bg-light" id="marketplace">
            <div class="container2" style=" margin: 0; padding: 50px;">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Explore Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="assets/images/mens.jpg" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                <a href="product_details.php" type="button" class="btn btn-dark waves-effect waves-light">View product</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-1"><a href="apps-nft-item-details.html"><?php echo $row['item_name']; ?></a></h5>
                                <p class="text-muted mb-0"><?php echo $row['samall_desc']; ?></p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                         LKR: <span class="fw-large"><?php echo $row['item_name']; ?></span>
                                    </div>
                                    <a href="#!" class="btn btn-success"> Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="assets/images/mens.jpg" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                <a href="product_details.php" type="button" class="btn btn-dark waves-effect waves-light">View product</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-1"><a href="apps-nft-item-details.html"><?php echo $row['item_name']; ?></a></h5>
                                <p class="text-muted mb-0"><?php echo $row['samall_desc']; ?></p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                         LKR: <span class="fw-large"><?php echo $row['item_name']; ?></span>
                                    </div>
                                    <a href="#!" class="btn btn-success"> Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start footer -->
        <?php include 'footer.php'; ?>
        <!-- end footer -->


        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!--job landing init -->
    <script src="assets/js/pages/job-lading.init.js"></script>
</body>

</html>