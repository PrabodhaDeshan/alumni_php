<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>KINGSWOOD ALUMNI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />


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

<span class="loader"></span>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="p-md-5 p-4 auth-one-bg ">
                                    <div class="bg-overlay" style="display:flex; justify-content:center;">

                                        <div class="mt-logo center">
                                            <center>
                                                <img src="assets/images/kingswood.png" alt="" style="width:50%;">
                                                <h3 class="text-primary" style="color:#000000;">Old kingswoodian's Cadet Union</h3>
                                                <p>Login</p>
                                            </center>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <h3 class="text-primary">SIGN IN</h3>
                                    </div>

                                    <div class="mt-4">

                                        <div class="mt-4">
                                            <?php
                                            session_start();
                                            if (isset($_SESSION['error'])) {
                                                echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['error'] . "</div>";
                                                unset($_SESSION['error']);
                                            }
                                            ?>
                                        </div>
                                        <form action="login.php" method="POST">

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="member_username"
                                                    id="username" placeholder="Enter username">
                                            </div>

                                            <div class="mb-3">

                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5 password-input"
                                                        placeholder="Enter password" name="password"
                                                        id="password-input">
                                                    <button
                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none"
                                                        type="button" id="password-addon"><i
                                                            class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Sign In</button>
                                            </div>



                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p class="mb-0">Go Back to <a href="index.php"
                                                class="fw-semibold text-primary "> Home</a> </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

        <!-- footer -->

        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- password-addon init -->
    <script src="assets/js/pages/password-addon.init.js"></script>
</body>


</html>