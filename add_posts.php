<?php
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    header("Location: admin_dashboard.php");
    exit();
}
?>



<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>Add posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './inc/admin_sidebar.php'; ?>


        <div class="vertical-overlay"></div>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Add posts</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="live-preview">
                                <form method="post" action="backend/post_upload.php" enctype="multipart/form-data">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Post Title</label>
                                        <input type="text" name="post_title" class="form-control" id="placeholderInput"
                                            placeholder="Enter post tittle">
                                    </div>
                                    <br>
                                    <div>
                                        <label for="exampleFormControlTextarea5" class="form-label">Post
                                            Description</label>
                                        <textarea class="form-control" name="post_description"
                                            id="exampleFormControlTextarea5" rows="3"></textarea>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="formFile" class="form-label">Upload Post</label>
                                        <input class="form-control" type="file" name="post_images[]" id="formFile"
                                            multiple accept="image/*">
                                        <small>You can upload up to 5 images.</small>
                                    </div>
                                    <br>
                                    <label for="role_id">Post category</label>
                                    <select class="form-select" id="role_id" name="post_category" required>
                                        <option value="Admin" disabled>Select Post category </option>
                                        <option value="1">Feed</option>
                                        <option value="2">Blog</option>
                                        <option value="3">History</option>
                                    </select>
                                    <br>
                                    <div>
                                        <label for="placeholderInput" class="form-label"> Tags</label>
                                        <input type="text" name="tags" class="form-control" id="placeholderInput"
                                            placeholder="#Enter Tags here">
                                    </div>
                                    <br>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <select class="form-select" id="post_status" name="post_status">
                                                <option selected value="1"></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Add post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include './inc/dash_footer.php'; ?>
    </div>

    </div>

    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>


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
    <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <script src="assets/js/pages/form-editor.init.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>