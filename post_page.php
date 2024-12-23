<?php
require 'db.php';

if (isset($_GET['post_id'])) {
    $id = intval(base64_decode($_GET["post_id"]));

    $sql = "SELECT * FROM post WHERE post_id = $id";
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

$imageCount = 0;
for ($i = 1; $i <= 5; $i++) {
    if (!empty($event['post_image' . $i])) {
        $imageCount++;
    }
}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Posts </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">
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
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">

        <?php include 'navbar.php'; ?>

        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start features -->
        <section class="section bg-light py-5" id="features">
            <div class="container-ps " style="padding:100px 40px 40px 40px;">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6">
                        <div class="text-muted">
                            <h3 class="mb-3 fs-20"><?php echo htmlspecialchars($event['post_title']); ?></h3>
                            <p class="mb-4 ff-secondary fs-16">
                                <?php echo htmlspecialchars($event['post_description']); ?>
                            </p>
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
                    <div class="col-lg-6 col-sm-7 mx-auto">
                        <div class="event-image">
                            <img id="mainImage" src="backend/uploads/<?php echo $event['post_image1']; ?>"
                                alt="<?php echo htmlspecialchars($event['post_title']); ?>">
                        </div>

                        <br>

                        <?php if ($imageCount > 1): ?>
                            <div class="thumb">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <?php if (!empty($event['post_image' . $i])): ?>
                                        <div class="thumb-img">
                                            <img src="backend/uploads/<?php echo $event['post_image' . $i]; ?>" alt=""
                                                onclick="updateMainImage(this.src)">
                                        </div>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>

        <!-- Start footer -->
        <?php include 'footer.php'; ?>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>

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

    <script>
        function updateMainImage(src) {
            const mainImage = document.getElementById('mainImage');
            if (mainImage) {
                mainImage.src = src;
            }
        }
    </script>
</body>

</html>
