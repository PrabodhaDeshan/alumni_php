<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <!-- <img src="assets/images/" alt="" height="22"> -->
                    </span>
                    <span class="logo-lg">
                        <!-- <img src="assets/images/" alt="" height="17"> -->
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <!-- <img src="assets/images/" alt="" height="22"> -->
                    </span>
                    <span class="logo-lg">
                        <!-- <img src="assets/images/" alt="" height="17"> -->
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
    
            <div class="dropdown sidebar-user m-1 rounded">
                <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center gap-2">
                        <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Welcome Anna!</h6>
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                    <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                    <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                </div>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">


                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Dashboard</span></li>
                    
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="admin_dashboard.php">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="admin_chat.php">
                                <i class="ri-chat-1-line"></i> <span data-key="t-widgets">Chat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="add_posts.php">
                                <i class="ri-terminal-window-fill"></i> <span data-key="t-widgets">Add Posts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="add_events.php">
                                <i class="bx bx-notepad"></i> <span data-key="t-widgets">Add Events</span>
                            </a>
                        </li>
                       
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                                <i class=" ri-user-line"></i> <span data-key="t-tables">Members</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarTables">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="add_new_members.php" class="nav-link" data-key="t-basic-tables">Add new members</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="view_members.php" class="nav-link" data-key="t-grid-js">View Members</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="view_member_renewals.php" class="nav-link" data-key="t-grid-js">View Member Renewals</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="admin_member_renewal.php">
                                <i class="ri-repeat-line"></i> <span data-key="t-widgets">My Member Renewal</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="admin_member_renewal_history.php">
                                <i class="ri-honour-line"></i> <span data-key="t-widgets">My Renewal History</span>
                            </a>
                        </li>
                     
                       
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                                <i class="ri-settings-2-line"></i> <span data-key="t-charts">Settings</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarCharts">
                                <ul class="nav nav-sm flex-column">
                                   
                                    <li class="nav-item">
                                        <a href="admin_change.php" class="nav-link" data-key="t-chartjs"> Admin Change</a>
                                    </li> 

                                    <li class="nav-item">
                                        <a href="admin_password_change.php" class="nav-link" data-key="t-chartjs"> Password settings</a>
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