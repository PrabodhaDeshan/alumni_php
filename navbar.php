<?php
session_start();

if ($_SESSION) {
    $role =  $_SESSION['role'];
} else {
    $role =  0;
}
?>

<nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" id="navbar">
    <div class="container-fluid custom-container">
        <a class="navbar-brand" href="index.php">
            <div class="logo1" style=" width:200px;">
                <img src="assets/images/KCU-logo.png" alt="" style="width:100%;">
            </div>
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
                <!-- <li class="nav-item">
                            <a class="nav-link" href="contacts.php">Contacts</a>
                        </li> -->
            </ul>

            <div class="sign-in">
                <?php
                if ($role == 1) {
                ?>
                    <a href="admin_dashboard.php" class="btn btn-link fw-medium text-decoration-none text-body" style="font-size: 18px; ">Admin Account</a>
                <?php
                } elseif ($role == 2) {
                ?>
                    <a href="member_dashboard.php" class="btn btn-link text-decoration-none text-body" style="font-size: 18px; ">Member Account</a>
                <?php
                } else {
                ?>
                    <a href="sign_in.php" class="btn btn-link fw-medium text-decoration-none text-body" style="font-size: 18px; ">Sign in</a>
                    <a href="member_reg.php" class="btn btn-link fw-medium text-decoration-none text-body" style="font-size: 18px; ">Sign up</a>
                <?php
                }
                ?>

            </div>
        </div>

    </div>
</nav>