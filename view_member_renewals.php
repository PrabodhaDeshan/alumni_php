<?php
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    header("Location: admin_dashboard.php");
    exit();
}
echo "Welcome, " . $_SESSION['member_username'];

require 'db.php';

$result = $conn->query("SELECT * FROM member_renewal");

?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>View Member Renewals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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

                    <!-- start page title -->

                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">View Member Renewals</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">


                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="sort" data-sort="customer_name">Name</th>
                                                        <th class="" data-sort="customer_name">Email</th>
                                                        <th class="" data-sort="email">Member ID number</th>
                                                        <th class="" data-sort="email">Renewal Date</th>
                                                        <th class="" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                    $sql = "SELECT * FROM member_renewal";
                                                    $result = $conn->query($sql);
                                                    if ($result && $result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                            <tr>
                                                                <td class="id" style="display:none;"><a
                                                                        href="javascript:void(0);"
                                                                        class="fw-medium link-primary">#VZ2101</a></td>

                                                                <td class="email"><?php echo $row['full_name']; ?></td>
                                                                <td class="batch"><?php echo $row['email_address']; ?></td>
                                                                <td class="batch"><?php echo $row['member_id']; ?></td>
                                                                <td class="batch"><?php echo $row['created_at']; ?></td>

                                                                </td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <li class="list-inline-item"
                                                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                                data-bs-placement="top" title="View">
                                                                                <a href="backend/uploads/receipt/<?= $row['receipt']; ?>"
                                                                                    style="color: white; width:100%;"
                                                                                    class="mybtn_01 btn btn-warning btn-sm"
                                                                                    target="_blank">View</a>
                                                                            </li>

                                                                        </div>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    } else {
                                                        echo "No data found.";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop" colors="primary:#121331,secondary:#08a88a"
                                                        style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We
                                                        did not find any orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled"
                                                    href="javascript:void(0);">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="javascript:void(0);">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->




                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include './inc/dash_footer.php'; ?>
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
    <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- listjs init -->
    <script src="assets/js/pages/listjs.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


</html>