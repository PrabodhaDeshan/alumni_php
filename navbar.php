<?php
session_start();

if ($_SESSION) {
    $role = $_SESSION['role'];
} else {
    $role = 0;
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
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
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
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ecom.php">Store</a>
                </li>
            </ul>

            <div class="sign-in">
                <?php
                if ($role == 1) {
                    ?>
                    <li class="nav-item dropdown" style="list-style:none;">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Admin Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="admin_dashboard.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="admin_chat.php">Chat</a></li>
                            <li><a class="dropdown-item" href="add_posts.php">Add new post</a></li>
                            <li><a class="dropdown-item" href="posts.php">Post Approval </a></li>
                            <li><a class="dropdown-item" href="add_events.php">Add Events </a></li>
                            <li><a class="dropdown-item" href="add_new_members.php">Add new members </a></li>
                            <li><a class="dropdown-item" href="view_members.php">View members </a></li>
                            <li><a class="dropdown-item" href="view_member_renewals.php">View member renewals</a></li>
                            <li><a class="dropdown-item" href="admin_member_renewal.php">My member renewals </a></li>
                            <li><a class="dropdown-item" href="admin_member_renewal_history.php">My renewal history </a>
                            </li>
                            <li><a class="dropdown-item" href="admin_change.php">Admin change </a></li>
                            <li><a class="dropdown-item" href="admin_password_change.php">Password settings </a></li>
                            <li><a class="dropdown-item" href="add_products.php">Add Items</a></li>
                            <li><a class="dropdown-item" href="a_profile_settings.php">Profile settings </a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <?php
                } elseif ($role == 2) {

                    $member_id = $_SESSION['member_id'];
                    $sql = "SELECT member_username FROM members WHERE member_id = '$member_id'";
                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $member_username = $row['member_username'];
                    }


                    ?>

                    <li class="nav-item dropdown" style="list-style:none;">


                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php echo htmlspecialchars($member_username); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="member_dashboard.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="member_chat.php">Chat</a></li>
                            <li><a class="dropdown-item" href="member_renewal.php">Member renewals</a></li>
                            <li><a class="dropdown-item" href="member_renewal_history.php">My renewal history </a></li>
                            <li><a class="dropdown-item" href="member_post.php">Add post </a></li>
                            <li><a class="dropdown-item" href="member_password_change.php">Password settings </a></li>
                            <li><a class="dropdown-item" href="profile_settings.php">Profile settings </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>

                    <?php
                } else {
                    ?>
                    <a href="sign_in.php" class="btn btn-link fw-medium text-decoration-none text-body"
                        style="font-size: 16px; ">Sign in</a>
                    <a href="member_reg.php" class="btn btn-link fw-medium text-decoration-none text-body"
                        style="font-size: 16px; ">Sign up</a>
                    <?php
                }
                ?>

            </div>
        </div>

    </div>
</nav>