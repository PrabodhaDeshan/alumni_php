<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
       
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu" style=" padding-top:50px;" >
            </div>
            <ul class="navbar-nav" id="navbar-nav"  >

                <li class="nav-item">
                    <a class="nav-link menu-link" href="member_dashboard.php">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="member_chat.php">
                        <i class="ri-chat-1-line"></i> <span data-key="t-widgets">Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="member_renewal.php">
                        <i class="ri-repeat-line"></i> <span data-key="t-widgets">My Member Renewal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="member_renewal_history.php">
                        <i class="ri-honour-line"></i> <span data-key="t-widgets">My Renewal History</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="member_post.php">
                        <i class="ri-honour-line"></i> <span data-key="t-widgets">Add Posts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="ri-settings-2-line"></i> <span data-key="t-charts">Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="member_password_change.php" class="nav-link" data-key="t-chartjs"> Password
                                    settings</a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="profile_settings.php" class="nav-link" data-key="t-chartjs"> profile
                                    settings</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>