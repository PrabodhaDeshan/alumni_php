<?php

require 'db.php';
$user = $_SESSION['member_id'];

$query = "SELECT * FROM members WHERE member_id = '$user'";

$userData = mysqli_fetch_assoc(mysqli_query($conn, $query));

// if ($result) {
//     $userData = mysqli_fetch_assoc($result);

//     if (!$userData) {

//         echo "User not found.";
//         exit();
//     }
// } else {
//     echo "Error: " . mysqli_error($conn);
//     exit();
// }

?>


<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <h3>Alumni</h3>
                        </span>
                        <span class="logo-lg">
                            <h3>Alumni</h3>

                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <h3>Alumni</h3>

                        </span>
                        <span class="logo-lg">
                            <h3>Alumni</h3>

                        </span>
                    </a>
                </div>

                <button type="button"
                    class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->

            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>
                <div class="dropdown ms-sm-3 header-item topbar-user" style="background-color:white;">
                    <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="background-color:white;">
                        <span class="d-flex align-items-center">
                            <?php
                            if ($userData['profile_pic'] == NULL) {
                                ?>
                                <img src="inc/user.png" alt="" class="img-thumbnail rounded-circle" style="width:40px;">
                                <?php
                            } else {
                                ?>
                                <img src="backend/uploads/<?= $userData['profile_pic']; ?>" alt=""
                                    class="img-thumbnail rounded-circle" style="width:40px;">
                                <?php
                            }

                            ?>
                            <span class="text-start ms-xl-2">
                                <?php echo $_SESSION['member_username']; ?>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Admin</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="admin_profile.php"><span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="index.php"> <span class="align-middle">Home</span></a>
                        <a class="dropdown-item" href="logout.php"> <span class="align-middle">Logout</span></a>

                        <!-- <button type="submit">Logout</button> -->

                        <!-- <a class="dropdown-item" href="login.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>