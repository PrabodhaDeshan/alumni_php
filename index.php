<?php
require 'db.php';


?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>KINGSWOOD ALUMNI</title>
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
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#events">Events</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.php">Contacts</a>
                        </li>
                    </ul>

                    <div class="sign-in">
                        <a href="sign_in.php" class="btn btn-link fw-medium text-decoration-none text-body">Sign in</a>
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->


        <!-- start hero section -->
        <section class="section ">

            <div class="sliders">
                <div class="left">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid mx-auto"
                                    src="https://thumbs.dreamstime.com/b/vertical-shot-road-magnificent-mountains-under-blue-sky-captured-california-163571053.jpg"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid mx-auto"
                                    src="https://thumbs.dreamstime.com/b/vertical-shot-road-magnificent-mountains-under-blue-sky-captured-california-163571053.jpg"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid mx-auto"
                                    src="https://thumbs.dreamstime.com/b/vertical-shot-road-magnificent-mountains-under-blue-sky-captured-california-163571053.jpg"
                                    alt="Third slide">
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

                    <div class="events">

                        <div class="col-xl-12 col-lg-6">
                            <div class="card" >

                                <div class="card-body">

                                    <!-- Swiper -->
                                        <h3>Events</h3>

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
                                                                        <div class="event-name">
                                                                            <a href="event_page.php?event_id=<?= base64_encode($row["event_id"]); ?>" style="color:red;" target="_blank">
                                                                                <?php echo $row['event_title']; ?>
                                                                            </a>
                                                                        </div>
                                                                        <div class="event-location">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>

                                                         
                                                        <?php endforeach; ?>

                                        <!-- <div class="swiper-button-next material-shadow"></div>
                                        <div class="swiper-button-prev material-shadow"></div> -->
                                        <div class="swiper-pagination"></div>
                                </div>
                                <!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>


                </div>

                <div class="right">
    <div class="col-xl-12">
        <!-- Pagination Variables -->
        <?php
        $postsPerPage = 2; // Number of posts per page
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($currentPage - 1) * $postsPerPage;

        // Get total number of posts
        $totalPostsQuery = "SELECT COUNT(*) AS total FROM post";
        $totalPostsResult = $conn->query($totalPostsQuery);
        $totalPosts = $totalPostsResult->fetch_assoc()['total'];
        $totalPages = ceil($totalPosts / $postsPerPage);

        // Fetch posts for the current page
        $sql = "SELECT * FROM post LIMIT $postsPerPage OFFSET $offset";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="card">
                    <div class="card-body">
                        <a href="post_page.php?post_id=<?= base64_encode($row["post_id"]); ?>" target="_blank">
                            <h2 class="card-title"><?php echo $row['post_title']; ?></h2>
                        </a>
                        <br>
                        <img src="backend/uploads/<?php echo $row['post_image1']; ?>" alt="">
                        <br> &nbsp;
                        <p class="card-text"><?php echo $row['post_description']; ?></p>
                        <a href="#" class="btn btn-primary">Share</a>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No books found.";
        }
        ?>
        
        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item <?= ($currentPage == 1) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?page=<?= $currentPage - 1; ?>" aria-label="Previous">
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


            </div>

        </section>
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
                        <p class="copyright-text">Tritcal International LLC - © 2014-<?= date("Y") ?> All Rights Reserved</p>
						
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
</body>


</html>