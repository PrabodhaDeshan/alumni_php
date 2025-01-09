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
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Post Title</th>
                                                    <th>Date and Time</th>
                                                    <th>Status</th>
                                                    <th>View</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * FROM post ORDER BY post_status DESC";
                                                $result = $conn->query($sql);

                                                if ($result && $result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        ?>
                                                        <tr data-post-id="<?php echo $row['post_id']; ?>">
                                                            <td><?php echo $row['post_title']; ?></td>
                                                            <td><?php echo $row['post_date']; ?>
                                                        <br>
                                                        <p style="font-size:12px;" ><?php echo $row['post_time']; ?></td></p> 
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
                                                                <a style="font-size:14px; font-weight:600; color:green;" href="post_page.php?post_id=<?= base64_encode($row['post_id']); ?>">View</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-secondary btn-sm approve-btn">Approve</button>
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
