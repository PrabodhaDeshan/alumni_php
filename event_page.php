<?php
require 'db.php';

if (isset($_GET['event_id'])) {

    $id = intval(base64_decode($_GET["event_id"]));

    $sql = "SELECT * FROM events WHERE event_id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $event = $result->fetch_assoc();
    } else {
        echo "Book not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}


?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>Events</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <!-- Layout config Js -->
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
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" id="navbar">
            <div class="container-fluid custom-container">
                <a class="navbar-brand" href="index.html">
                    <h3>KINGSWOOD ALUMNI</h3>
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.php">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="sign_in.php" class="btn btn-link fw-medium text-decoration-none text-body">Sign in</a>
                        <!-- <a href="auth-signup-basic.html" class="btn btn-primary">Sign Up</a> -->
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->

        <br> &nbsp;&nbsp;&nbsp;

        <section class="section bg-light py-5" id="features">
            <div class="container-ev" style="padding:40px" >
                <div class="row align-items-center gy-4">
                   

                    <div class="col-lg-6">
                        <div class="text-muted">

                            <h3 class="mb-3 fw-semibold"><?php echo htmlspecialchars($event['event_title']); ?></h3>
                           

                            <div class="row pt-3" style=" display:block;">
                                <div class="col-3">
                                    <div class="event-text-center">
                                        <div class="event-icon">
                                            <img src="./assets/images/svg/date.svg" alt="" style="width:40px;">
                                        </div>
                                        <div class="event-p">
                                            <p><?php echo htmlspecialchars($event['event_date']); ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class="col-3">
                                <div class="event-text-center">
                                    <div class="event-icon">
                                        <img src="./assets/images/svg/time.svg" alt="" style="width:40px;">
                                    </div>
                                    <div class="event-p">
                                        <p><?php echo htmlspecialchars($event['event_time']); ?></p>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-3">
                                <div class="event-text-center">
                                    <div class="event-icon">
                                        <img src="./assets/images/svg/location.svg" alt="" style="width:40px;">
                                    </div>
                                    <div class="event-p">
                                        <p><?php echo htmlspecialchars($event['event_location']); ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <p class="mb-4 ff-secondary fs-16">
                                <?php echo htmlspecialchars($event['event_description']); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-7 mx-auto">
                        <div class="event-image">
                            <img src="backend/uploads/events<?php echo $event['event_image']; ?>"
                                alt="<?php echo htmlspecialchars($event['event_title']); ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="social-area">
                        <ul class="dz-social-icon style-3">
                            <script src="https://static.elfsight.com/platform/platform.js" async></script>
                            <div class="elfsight-app-438eb5f8-dd42-434a-a9d5-f935f21635e1" data-elfsight-app-lazy>
                            </div>
                        </ul>
                    </div>
                </div>

                <!-- end col -->
            <!-- end row -->
    </div>
    <!-- end container -->
    </section>
    <!-- start client section -->
    <div class="pt-8 mt-8" style="height:500px;">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-center mt-5">
                    <h3 class="mb-3 fw-semibold">Related Events</h3>
              

                        <!-- Swiper -->
                        <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                            <div class="swiper-wrapper">

                                <?php
                                $sql = "SELECT * FROM events ORDER BY event_id DESC LIMIT 7";
                                $result = $conn->query($sql);
                                $data = [];
                                if ($result) {
                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {
                                            $events[] = $row;
                                        }
                                    } else {
                                        $data = [];
                                    }
                                } else {

                                    echo "Error: " . $conn->error;
                                }
                                ?>

                                <?php foreach ($events as $row): ?>
                                    <div class="swiper-slide" style="height:100px; ">
                                        <div class="events-cards">
                                            <div class="dates">
                                                <?php
                                                $timestamp = strtotime($row['event_date']);
                                                $day = date('d', $timestamp);
                                                $month = date('F', $timestamp);
                                                ?>

                                                <div class="days"><?php echo $day; ?></div>
                                                <div class="months"><?php echo $month; ?></div>
                                            </div>
                                            <div class="info-containers">
                                                <div class="event-names" style="color:red;">
                                                <?php echo $row['event_title']; ?>
                                                </div>
                                                <div class="event-locations">
                                                <?php echo $row['event_location']; ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end row -->
        <!-- end container -->
    </div>
    <!-- end client section -->


    <!-- Start footer -->
    <footer class="custom-footer bg-dark py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div>
                        <div>
                            <h3>KINGSWOOD ALUMNI</h3>

                        </div>
                        <div class="mt-4 fs-13">
                            <p>Premium Multipurpose Admin & Dashboard Template</p>
                            <p>You can build any type of web application like eCommerce, CRM, CMS, Project
                                management apps, Admin Panels, etc using Velzon.</p>
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 ms-lg-auto">
                    <div class="row">
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">Company</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li><a href="pages-profile.html">About Us</a></li>
                                    <li><a href="pages-gallery.html">Gallery</a></li>
                                    <li><a href="pages-team.html">Team</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">For Jobs</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li><a href="apps-job-lists.html">Job List</a></li>
                                    <li><a href="apps-job-application.html">application</a></li>
                                    <li><a href="apps-job-new.html">New Job</a></li>
                                    <li><a href="apps-job-companies-lists.html">Company List</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">Support</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li><a href="pages-faqs.html">FAQ</a></li>
                                    <li><a href="pages-faqs.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row text-center text-sm-start align-items-center mt-5">
                <div class="col-sm-6">
                    <div>
                        <p class="copyright-text">Tritcal International LLC - © 2014-<?= date("Y") ?> All Rights
                            Reserved</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end mt-3 mt-sm-0">
                        <ul class="list-inline mb-0 footer-list gap-4 fs-13">
                            <li class="list-inline-item">
                                <a href="pages-privacy-policy.html">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="pages-term-conditions.html">Terms & Conditions</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="pages-privacy-policy.html">Security</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
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

    <!--job landing init -->
    <script src="assets/js/pages/job-lading.init.js"></script>
    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- swiper.init js -->
    <script src="assets/js/pages/swiper.init.js"></script>

    <!-- landing init -->
    <script src="assets/js/pages/landing.init.js"></script>
</body>


</html>