<?php
require 'db.php';

session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '2') {
    header("Location: member_dashboard.php");
    exit();
}

$tables = ['members', 'events', 'post', 'member_renewal'];
$rowCounts = [];

foreach ($tables as $table) {
    $sql = "SELECT COUNT(*) AS row_count FROM $table";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $rowCounts[$table] = $row['row_count'];
    } else {
        $rowCounts[$table] = 0;
    }
}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Dashboard-Member</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS Files -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">
    <!-- JS Files -->
    <script src="assets/js/layout.js"></script>
</head>

<body>
    <div id="layout-wrapper">
        <?php include './inc/member_header.php'; ?>

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
                                <h4>Are you sure?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this notification?</p>
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

        <?php include './inc/member_sidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Upcoming Events</h4>
                                            </div>
                                            <div class="card-body pt-0">
                                                <?php
                                                $sql = "SELECT * FROM events ORDER BY event_id DESC LIMIT 10";
                                                $result = $conn->query($sql);
                                                $events = [];

                                                if ($result && $result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        $events[] = $row;
                                                    }
                                                }

                                                // Split events into two columns
                                                $leftColumn = array_slice($events, 0, 5);
                                                $rightColumn = array_slice($events, 5);
                                                ?>

                                                <div class="row">
                                                    <!-- Left Column -->
                                                    <div class="col-md-6">
                                                        <ul class="list-group" >
                                                            <?php foreach ($leftColumn as $row): ?>
                                                                <a href="event_page.php?event_id=<?= base64_encode($row["event_id"]); ?>"target="_blank">
                                                                <li class="list-group-item ps-0" style="border:none">
                                                                    <div class="row align-items-center g-3">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 material-shadow">
                                                                                <div class="text-center">
                                                                                    <?php
                                                                                    $timestamp = strtotime($row['event_date']);
                                                                                    $day = date('d', $timestamp);
                                                                                    $month = date('M', $timestamp);
                                                                                    ?>
                                                                                    <h5 class="mb-0"><?php echo $day; ?>
                                                                                    </h5>
                                                                                    <div class="text-muted">
                                                                                        <?php echo $month; ?></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <h6 class="mt-0 mb-1 text-muted">
                                                                                <?php echo $row['event_title']; ?></h6>
                                                                         
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                </a>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>

                                                    <!-- Right Column -->
                                                    <div class="col-md-6">
                                                        <ul class="list-group">
                                                            <?php foreach ($rightColumn as $row): ?>
                                                                <a href="event_page.php?event_id=<?= base64_encode($row["event_id"]); ?>"target="_blank">
                                                                <li class="list-group-item" style="border:none" >
                                                                    <div class="row align-items-center g-3"  >
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 material-shadow">
                                                                                <div class="text-center">
                                                                                    <?php
                                                                                    $timestamp = strtotime($row['event_date']);
                                                                                    $day = date('d', $timestamp);
                                                                                    $month = date('M', $timestamp);
                                                                                    ?>
                                                                                    <h5 class="mb-0"><?php echo $day; ?>
                                                                                    </h5>
                                                                                    <div class="text-muted">
                                                                                        <?php echo $month; ?></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <h6 class="mt-0 mb-1 text-muted">
                                                                                <?php echo $row['event_title']; ?></h6>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                </a>
                                                            <?php endforeach; ?>
                                                        </ul>
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
            <?php include './inc/dash_footer.php'; ?>
        </div>

        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>

        <!-- JS Files -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>
        <script src="assets/js/app.js"></script>
    </div>
</body>

</html>