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

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">
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
        <?php include 'navbar.php'; ?>
        <!-- end navbar -->

        <br> &nbsp;&nbsp;&nbsp;

        <section class="section bg-light py-5" id="features">
            <div class="container-ev"
                style="padding-top:40px;  align-items: center; display: flex; justify-content: center; ">
                <div class="row align-items-center gy-4" style="width:90%;">


                    <div class="col-lg-6">
                        <div class="text-muted">

                            <h3 class="mb-3 fw-semibold"><?php echo htmlspecialchars($event['event_title']); ?></h3>


                            <div class="row pt-3">
                                <div class="event-outer" style="display:flex; width:100%">
                                    <div class="event-text-center">
                                        <div class="event-icon">
                                            <img src="./assets/images/svg/date.svg" alt="" style="width:30px;">
                                        </div>
                                        <div class="event-p">
                                            <p><?php echo htmlspecialchars($event['event_date']); ?></p>
                                        </div>
                                    </div>
                                    <div class="event-text-center" style="display:flex; align-items:center;">
                                        <div class="event-icon">
                                            <img src="./assets/images/svg/time.svg" alt="" style="width:30px;">
                                        </div>
                                        <div class="event-p">
                                            <p><?php echo htmlspecialchars($event['event_time']); ?></p>

                                        </div>
                                    </div>
                                    <div class="loc_d">
                                <div class="event-text-center">
                                        <div class="event-icon">
                                            <img src="./assets/images/svg/location.svg" alt="" style="width:30px;">
                                        </div>
                                        <div class="event-p">
                                            <p><?php echo htmlspecialchars($event['event_location']); ?></p>
                                        </div>
                                    </div>
                                </div>
                                   
                                </div>

                                <div class="loc_m">
                                <div class="event-text-center">
                                        <div class="event-icon">
                                            <img src="./assets/images/svg/location.svg" alt="" style="width:30px;">
                                        </div>
                                        <div class="event-p">
                                            <p><?php echo htmlspecialchars($event['event_location']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

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
                    <ul class="dz-social-icon style-3">
                        <script src="https://static.elfsight.com/platform/platform.js" async></script>
                        <div class="elfsight-app-438eb5f8-dd42-434a-a9d5-f935f21635e1" data-elfsight-app-lazy>
                    </ul>


                    <hr>

                </div>

            </div>
    </div>
    <!-- end container -->
    </section>
    <!-- start client section -->
    <!--<div class="pt-8 mt-8" style="height:500px;">-->
    <div class="row" style="background-color:white; " >
        <div class="col-lg-12">
            <div class="text-center mt-5"
                style="display:flex; height:300px; background-color:white; ">
                <!-- Swiper -->
                <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                    <h3 class="mb-3 fw-semibold" style="text-align:center;">Related Events</h3>
                     <br>
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
                            <div class="swiper-slide" style="height:100px; background-color:white; ">
                            
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
                                    <a href="event_page.php?event_id=<?= base64_encode($row["event_id"]); ?>">

                                        <div class="event-names" style="color:red;">
                                            <?php echo $row['event_title']; ?>
                                        </div></a>
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
    <!--</div>-->
    <!-- end client section -->


    <!-- Start footer -->
    <?php include 'footer.php'; ?>
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