<?php
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    header("Location: admin_dashboard.php");
    exit();
}
?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bcrypt/3.0.6/bcrypt.min.js"></script>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include './inc/admin_header.php'; ?>

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
        <?php include './inc/admin_sidebar.php'; ?>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Add new member</h4>

                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="member_submit.php" method="POST">
                                            <div class="row gy-4">

                                                <div class="col-xxl-3 col-md-6">
                                                    <div>

                                                        <label for="basiInput" class="form-label">Username</label>
                                                        <input type="text" class="form-control" name="member_username">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="basiInput" class="form-label">First name</label>
                                                        <input type="text" class="form-control" name="member_first_name">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Last name</label>
                                                        <input type="text" class="form-control" name="member_last_name">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Member ID number</label>
                                                        <input type="text" class="form-control" name="member_id_no">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Batch</label>
                                                        <input type="text" class="form-control" name="member_batch">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label for="role_id">Member Type</label>
                                                        <select class="form-select" id="role_id" name="role">
                                                            <option value="Admin" disabled>Select Admin Type</option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">Member</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Member's NIC</label>
                                                        <input type="text" class="form-control" name="member_nic">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="exampleInputdate" class="form-label">Member's workplace</label>
                                                        <input type="text" class="form-control" name="member_wrokplace">

                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="exampleInputdate" class="form-label">Address line 1</label>
                                                        <input type="text" class="form-control" name="member_address">

                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="exampleInputdate" class="form-label">Address line 2</label>
                                                        <input type="text" class="form-control" name="member_address_line2">

                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="exampleFormControlTextarea5" class="form-label">Designation</label>
                                                        <input type="text" class="form-control" name="member_designation">

                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="formtextInput" class="form-label">Email</label>
                                                        <input type="email" class="form-control form-control-icon" name="member_email" id="iconrightInput" placeholder="example@gmail.com">


                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="exampleFormControlTextarea5" class="form-label">Contact number</label>
                                                        <input type="text" class="form-control" name="contact_number" id="basiInput">

                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label for="role_id">Status</label>
                                                        <select class="form-select" id="role_id" name="status">
                                                            <option value="Admin" disabled>Select status</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="passwordInput" class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="password" id="passwordInput" required>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="confirmPasswordInput" class="form-label">Confirm Password</label>
                                                        <input type="password" class="form-control" name="confirm_password" id="confirmPasswordInput" required>
                                                        <div id="passwordMatchMessage" style="color: red; font-size: 0.9em; display: none;">
                                                            Passwords do not match.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end row-->
                                                <div class="col-12">
                                                   
                                                <button class="btn btn-primary" type="submit" onclick="validatePassword()">Submit</button>
                                              
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
            return false; // Prevent form submission
        } else {
            message.style.display = 'none';
            return true; // Allow form submission
        }
    }

    document.getElementById('confirmPasswordInput').addEventListener('input', validatePassword);
</script>

</body>

</html>