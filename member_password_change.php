<?php
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '2') {
    header("Location: member_dashboard.php");
    exit();
}
?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>Password change</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bcrypt/3.0.6/bcrypt.min.js"></script>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include './inc/member_header.php'; ?>

    
        <!-- ========== App Menu ========== -->
        <?php include './inc/member_sidebar.php'; ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Change Your Password </h4>

                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                    <form action="backend/m_password_change.php" method="POST">
                                            <div class="row gy-4">

                                                <!--end col-->
                                                <div class="col-lg-6 col-md-6">
                                                    <div>
                                                        <label for="passwordInput" class="form-label">New 
                                                            Password<strong style="color:red;"> *</strong></label>
                                                        <input type="password" class="form-control" name="password"
                                                            id="passwordInput" placeholder="Enter your new password here" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div>
                                                        <label for="confirmPasswordInput" class="form-label">Confirm New
                                                            Password<strong style="color:red;"> *</strong></label>
                                                        <input type="password" class="form-control"
                                                            name="confirm_password" id="confirmPasswordInput" placeholder="Confirm your new passord" required>
                                                        <div id="passwordMatchMessage"
                                                            style="color: red; font-size: 0.9em; display: none;">
                                                            Passwords do not match.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end row-->
                                                <div class="col-12">

                                                    <button class="btn btn-primary" type="submit"
                                                        onclick="validatePassword()">Change</button>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->


                    </div>
                </div>

            </div>
            <?php include './inc/dash_footer.php';?>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>

        <script src="assets/js/app.js"></script>


        <script>
    function validatePassword() {
        const password = document.getElementById('passwordInput').value;
        const confirmPassword = document.getElementById('confirmPasswordInput').value;
        const message = document.getElementById('passwordMatchMessage');

        if (password !== confirmPassword) {
            message.style.display = 'block';
            return false; 
        } else {
            message.style.display = 'none';
            return true; 
        }
    }

    document.getElementById('confirmPasswordInput').addEventListener('input', validatePassword);
</script>

</body>

</html>