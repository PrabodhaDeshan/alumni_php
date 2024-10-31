<?php
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '2') {
    header("Location: member_dashboard.php");
    exit();
}

?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:11:49 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Basic Elements | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    <?php include './inc/member_header.php';?>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <?php include './inc/member_sidebar.php';?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">


                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Member Renewal</h4>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <div class="live-preview">
                                        <form class="row g-3" method="post" action="backend/member_renewal_upload.php" enctype="multipart/form-data">
                                            <div class="col-md-4">
                                                <label for="validationDefault01" class="form-label">Full name</label>
                                                <input type="text" class="form-control" name="full_name" id="validationDefault01" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationDefaultUsername" class="form-label">Email address</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                    <input type="text" class="form-control" name="email_address" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationDefault04" class="form-label">Membership type</label>
                                                <select class="form-select" name="membership_type" id="validationDefault04" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option >Member</option>
                                                    <option >Admin</option>
                                                </select>
                                            </div>
                                            <div class="col-md-11">
                                            <input type="file" class="form-control" name="receipt" aria-label="file example" required>
                                            </div>
                                           
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </form>
                                    </div>


                                   

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                        <!-- end row -->

                        <!-- end row -->

                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include './inc/dash_footer.php';?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

 

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <script src="assets/js/pages/form-validation.init.js"></script>


    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/master/forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:11:50 GMT -->
</html>