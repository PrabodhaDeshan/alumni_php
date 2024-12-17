<?php
require 'db.php';

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Home</title>
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

<style>
    body{
        overflow-x: hidden;
    }
</style>


<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">


        <?php include 'navbar.php'; ?>
        <!-- end navbar -->


        <!-- start hero section -->
        <section class="section ">
            <div class="row">
                <div class="col-md-4 left">
                    <div class="sliders">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">

                                <div class="carousel-item active">

                                    <img class="d-block img-fluid mx-auto" src="assets/images/kwd.jpg"
                                        alt="First slide">
                                    <h2
                                        class="position-absolute top-50 start-50 translate-middle text-white opacity-50 text-center">
                                        Kingswood Alumni</h2>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid mx-auto" src="assets/images/wood.jpg"
                                        alt="Second slide">
                                    <h2
                                        class="position-absolute top-50 start-50 translate-middle text-white opacity-50 text-center">
                                        Kingswoodians alumni Cadet union </h2>
                                </div>
                              
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="events">
                        <div class="col-lg-12 col-md-6" style=" width:100%">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Swiper -->
                                    <h3>Events</h3>
                                    <?php
                                    $sql = "SELECT * FROM events ORDER BY event_id DESC LIMIT 10";
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
                                        <a href="event_page.php?event_id=<?= base64_encode($row["event_id"]); ?>"
                                            target="_blank">
                                            <div class="event-card">
                                                <div class="date">
                                                    <?php
                                                    $timestamp = strtotime($row['event_date']);
                                                    $day = date('d', $timestamp);
                                                    $month = date('F', $timestamp);
                                                    ?>
                                                    <div class="day"><?php echo $day; ?></div>
                                                    <div class="month"><?php echo $month; ?></div>
                                                </div>
                                                <div class="info-container">
                                                    <div class="event-name" style="color:red;">
                                                        <?php echo $row['event_title']; ?>
                                                    </div>
                                                    <div class="event-location">
                                                        <?php echo $row['event_location']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <br>
                                    <?php endforeach; ?>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>
                </div>
                <div class="col-md-8 right">
                    <div class="col-md-12">
                        <!-- Pagination Variables -->
                        <?php
                        $postsPerPage = 10;
                        $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                        $offset = ($currentPage - 1) * $postsPerPage;

                        $totalPostsQuery = "SELECT COUNT(*) AS total FROM post";
                        $totalPostsResult = $conn->query($totalPostsQuery);
                        $totalPosts = $totalPostsResult->fetch_assoc()['total'];
                        $totalPages = ceil($totalPosts / $postsPerPage);

                        $sql = "SELECT * FROM post LIMIT $postsPerPage OFFSET $offset";
                        $result = $conn->query($sql);
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="card">
                                    <div class="card-body">
                                        <a href="post_page.php?post_id=<?= base64_encode($row["post_id"]); ?>" target="_blank">
                                            <div class="post-head">
                                                <h2 class="card-title"><?php echo $row['post_title']; ?></h2>
                                                <p style="color:#afafaf;"><?php echo $row['post_date']; ?> &nbsp
                                                    <?php echo $row['post_time']; ?>
                                                </p>
                                            </div>
                                        </a>
                                        <br>
                                        <img src="backend/uploads/<?php echo $row['post_image1']; ?>" alt="">
                                        <br> &nbsp;
                                        <p class="card-text"><?php echo $row['post_description']; ?></p>

                                        <div class="post-buttons">
                                            <div class="readmore">
                                                <a style="width:200px; height:40px;"
                                                    class="btn btn-primary waves-effect waves-light "
                                                    href="post_page.php?post_id=<?= base64_encode($row["post_id"]); ?>"
                                                    target="_blank">Read More</a>
                                            </div>
                                            <div class="social-area2">
                                                <!-- Base Buttons -->

                                                <ul class="dz-social-icon style-3" style="display:flex;">
                                                    <script src="https://static.elfsight.com/platform/platform.js"
                                                        async></script>
                                                    <div class="elfsight-app-438eb5f8-dd42-434a-a9d5-f935f21635e1"
                                                        data-elfsight-app-lazy>
                                                    </div>
                                                </ul>
                                            </div>
                                            <!-- Base Buttons -->
                                        </div>
                                        <hr>

                                    </div>
                                    <?php
                            }
                        } else {
                            echo "No Posts found.";
                        }
                        ?>

                            <!-- Pagination -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item <?= ($currentPage == 1) ? 'disabled' : ''; ?>">
                                        <a class="page-link" href="?page=<?= $currentPage - 1; ?>"
                                            aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                        <li class="page-item <?= ($currentPage == $i) ? 'active' : ''; ?>">
                                            <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                                        </li>
                                    <?php endfor; ?>
                                    <li class="page-item <?= ($currentPage == $totalPages) ? 'disabled' : ''; ?>">
                                        <a class="page-link" href="?page=<?= $currentPage + 1; ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div>
                </div> </div>
        </section>
    </div>

    <!-- end hero section -->

    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                        <p class="text-muted mb-4 ff-secondary">We thrive when coming up with innovative ideas but
                            also understand that a smart concept should be supported with faucibus sapien odio
                            measurable results.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                            <div class="ff-secondary fw-semibold">4461 Cedar Street Moro, <br />AR 72368</div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                            <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New Orleans, LA</div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                            <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-8">
                    <div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label fs-13">Name</label>
                                        <input name="name" id="name" type="text"
                                            class="form-control bg-light border-light" placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="email" class="form-label fs-13">Email</label>
                                        <input name="email" id="email" type="email"
                                            class="form-control bg-light border-light" placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-4">
                                        <label for="subject" class="form-label fs-13">Subject</label>
                                        <input type="text" class="form-control bg-light border-light" id="subject"
                                            name="subject" placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label fs-13">Message</label>
                                        <textarea name="comments" id="comments" rows="3"
                                            class="form-control bg-light border-light"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->


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
</body>

</html>