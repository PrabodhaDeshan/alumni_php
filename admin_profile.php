<?php
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    header("Location: admin_dashboard.php");
    exit();
}

require 'db.php'; 
$user = $_SESSION['member_id'];


$query = "SELECT * FROM members WHERE member_id = '$user'";

$result = mysqli_query($conn, $query); 

if ($result) {
    $userData = mysqli_fetch_assoc($result);
  
    if (!$userData) {
      
        echo "User not found.";
        exit();
    }
} else {
    echo "Error: " . mysqli_error($conn);
    exit();
}

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Profile | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">
    <script src="assets/js/layout.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="layout-wrapper">
        <?php include './inc/admin_header.php';?>
        
        <?php include './inc/admin_sidebar.php';?>
        
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg"></div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    <img src="assets/images/users/user.png" alt="user-img" class="img-thumbnail rounded-circle" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1"><?php echo htmlspecialchars($userData['member_username']); ?></h3>
                                    <div class="hstack text-white-50 gap-1">
                                        <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i><?php echo htmlspecialchars($userData['member_address']); ?>
                                    , <?php echo htmlspecialchars($userData['member_address_line2']); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">Info</h5>
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">First Name :</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_first_name']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Last Name :</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_last_name']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Member ID number :</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_id_no']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Batch :</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_batch']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Address :</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_address']); ?>
                                                                    , <?php echo htmlspecialchars($userData['member_address_line2']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">NIC :</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_nic']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Workplace :</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_wrokplace']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Designation</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_designation']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Email</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['member_email']); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Contact number</th>
                                                                        <td class="text-muted"><?php echo htmlspecialchars($userData['contact_number']); ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/pages/profile.init.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
