<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>Gallery </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">
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
    <div class="page-content">
        <div class="container-fluid">
            <!-- Begin page -->
            <div class="layout-wrapper landing">
            <?php include 'navbar.php';?>
                <div class="row" style="padding:20px;" >
                    <div class="col-lg-12">
                        <div class="">
                            <div class="card-body px-1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row gallery-wrapper">
                                            <div class="element-item col-md-3 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="assets/images/small/img-1.jpg" alt=""
                                                            onclick="openModal('assets/images/small/img-1.jpg')" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="element-item col-md-3 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="assets/images/small/img-3.jpg" alt=""
                                                            onclick="openModal('assets/images/small/img-3.jpg')" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="element-item col-md-3 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="assets/images/small/img-6.jpg" alt=""
                                                            onclick="openModal('assets/images/small/img-6.jpg')" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="element-item col-md-3 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="assets/images/small/img-7.jpg" alt=""
                                                            onclick="openModal('assets/images/small/img-7.jpg')" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- end row -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row gallery-wrapper">
                                            <div class="element-item col-md-3 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="assets/images/small/img-5.jpg" alt=""
                                                            onclick="openModal('assets/images/small/img-5.jpg')" />
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="element-item col-md-3 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="assets/images/small/img-8.jpg" alt=""
                                                            onclick="openModal('assets/images/small/img-8.jpg')" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="element-item col-md-3 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="assets/images/small/img-9.jpg" alt=""
                                                            onclick="openModal('assets/images/small/img-9.jpg')" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="element-item col-md-3 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="assets/images/small/img-10.jpg" alt=""
                                                            onclick="openModal('assets/images/small/img-10.jpg')" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>


                <!--start back-to-top-->
                <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
                    <i class="ri-arrow-up-line"></i>
                </button>
                <!--end back-to-top-->

            </div>
        </div>
    </div>

  
    <!-- Start footer -->
    <?php include 'footer.php';?>
    <!-- end footer -->

    <!-- end layout wrapper -->

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    function openModal(imageSrc) {
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        modal.show();
    }
</script>

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
    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- swiper.init js -->
    <script src="assets/js/pages/swiper.init.js"></script>

</body>






</html>