<?php
require 'db.php';
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title></title>
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
        <div class="row" style="padding:30px;">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Sign In To Kingswoodian's Cadet Union</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="backend/member_registration.php" method="POST" enctype="multipart/form-data">
                                <div class="row gy-4">

                                    <div class="col-xxl-3 col-md-6">
                                        <div>

                                            <label for="basiInput" class="form-label">Username<strong
                                                    style="color:red;"> *</strong></label>
                                            <input type="text" class="form-control" name="member_username" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">First name<strong
                                                    style="color:red;"> *</strong></label>
                                            <input type="text" class="form-control" name="member_first_name" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Last name<strong
                                                    style="color:red;"> *</strong></label>
                                            <input type="text" class="form-control" name="member_last_name" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="valueInput" class="form-label">Member ID number<strong
                                                    style="color:red;"> *</strong></label>
                                            <input type="text" class="form-control" name="member_id_no" required>
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
                                    <div class="col-xxl-3 col-md-6" hidden>
                                        <div class="form-group">
                                            <label for="role_id">Member Type<strong style="color:red;">
                                                    *</strong></label>
                                            <select class="form-select" id="role_id" name="role" required>
                                                <option value="Admin" disabled>Select Admin Type</option>
                                                <option value="1">Admin</option>
                                                <option selected value="2">Member</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Member's NIC<strong
                                                    style="color:red;"> *</strong></label>
                                            <input type="text" class="form-control" name="member_nic">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Member's workplace</label>
                                            <input type="text" class="form-control" name="member_wrokplace">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Address line 1<strong
                                                    style="color:red;"> *</strong></label>
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
                                            <label for="exampleFormControlTextarea5"
                                                class="form-label">Designation</label>
                                            <input type="text" class="form-control" name="member_designation">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="formtextInput" class="form-label">Email</label>
                                            <input type="email" class="form-control form-control-icon"
                                                name="member_email" id="iconrightInput" placeholder="example@gmail.com">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="exampleFormControlTextarea5" class="form-label">Contact
                                                number<strong style="color:red;"> *</strong></label>
                                            <input type="text" class="form-control" name="contact_number" id="basiInput"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="exampleFormControlTextarea5" class="form-label">Profile
                                                Picture</label>
                                            <input type="file" class="form-control" name="profile_pic" id="basiInput">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6" hidden>
                                        <div class="form-group">
                                            <label for="role_id">Status</label>
                                            <select class="form-select" id="role_id" name="status">
                                                <option value="Admin" disabled>Select status</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                                <option selected value="3">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="passwordInput" class="form-label">Password<strong
                                                    style="color:red;"> *</strong></label>
                                            <input type="password" class="form-control" name="password"
                                                id="passwordInput" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="confirmPasswordInput" class="form-label">Confirm Password<strong
                                                    style="color:red;"> *</strong></label>
                                            <input type="password" class="form-control" name="confirm_password"
                                                id="confirmPasswordInput" required>
                                            <div id="passwordMatchMessage"
                                                style="color: red; font-size: 0.9em; display: none;">
                                                Passwords do not match.
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="col-12" style="display:flex; justify-content:end;">
                                        <button class="btn btn-primary" type="submit"
                                            onclick="validatePassword()">Submit</button>
                                        &nbsp;
                                        <a class="btn btn-dark" href="sign_in.php">Bck To Login</a>
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

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
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

    <script src="assets/js/pages/nft-landing.init.js"></script>

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