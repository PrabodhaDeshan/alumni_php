<?php
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    header("Location: admin_dashboard.php");
    exit();
}
echo "Welcome, " . $_SESSION['member_username'];

require 'db.php';
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>View Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">

    <!-- Sweet Alert CSS -->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App CSS-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="layout-wrapper">
        <?php include './inc/admin_header.php'; ?>
        <?php include './inc/admin_sidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Posts</h4>
                                </div>
                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">

                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control search"
                                                            placeholder="Search...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Post Title</th>
                                                        <th>Date and Time</th>
                                                        <th>Posted by</th>
                                                        <th>Status</th>
                                                        <th>View</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                    $sql = "SELECT * FROM post ORDER BY post_status DESC";
                                                    $result = $conn->query($sql);

                                                    if ($result && $result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                           <tr data-post-id="<?php echo $row['post_id']; ?>">
                                                                <td class="name"><?php echo $row['post_title']; ?></td>

                                                                <td><?php echo $row['post_date']; ?>
                                                                    <br>
                                                                    <p style="font-size:12px;"><?php echo $row['post_time']; ?>
                                                                    </p>
                                                                </td>
                                                                <td><?php echo $row['admin_id']; ?></td>

                                                                <td class="status">
                                                                <?php
                                                                if ($row['post_status'] == 1) {
                                                                    echo '<span class="badge text-success">Approved</span>';
                                                                } elseif ($row['post_status'] == 2) {
                                                                    echo '<span class="badge text-info">Pending</span>';
                                                                }
                                                                ?>
                                                            </td>
                                                                
                                                                <td>
                                                                    <a style="font-size:14px; font-weight:600; color:green;"
                                                                        href="post_page.php?post_id=<?= base64_encode($row['post_id']); ?>">View</a>
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        class="btn btn-secondary btn-sm approve-btn">Approve</button>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='5'>No data found.</td></tr>";
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './inc/dash_footer.php'; ?>
        </div>
    </div>

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/js/app.js"></script>
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

    <!-- App js -->
</body>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const approveButtons = document.querySelectorAll(".approve-btn");

        approveButtons.forEach((button) => {
            button.addEventListener("click", function () {
                const row = button.closest("tr");
                const postId = row.dataset.postId;

                fetch("approve_post.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({ post_id: postId }),
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.success) {
                            const statusCell = row.querySelector(".status");
                            statusCell.innerHTML = '<span class="badge text-success">Approved</span>';
                            Swal.fire("Success", "Post approved successfully!", "success");
                        } else {
                            Swal.fire("Error", "Failed to approve the post: " + data.message, "error");
                        }
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                        Swal.fire("Error", "An error occurred.", "error");
                    });
            });
        });
    });
</script>
</body>

</html>