<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu  page-header-fixed <?= isset($page) && $page == 'all-homestay' ? 'page-sidebar-menu-closed' : '' ?>" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="glocal_admin" class="nav-link ">
                        <i class="icon-grid"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Rooms</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="glocal_admin/all-homestay" class="nav-link ">
                                <span class="title">All Rooms</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="glocal_admin/add_new_home" class="nav-link ">
                                <span class="title">Add new</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-pointer"></i>
                        <span class="title">Locations</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="glocal_admin/locations" class="nav-link ">
                                <span class="title">All Locations</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="glocal_admin/add_new_location" class="nav-link ">
                                <span class="title">Add new</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-pencil"></i>
                        <span class="title">Blog</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="glocal_admin/all_post" class="nav-link ">
                                <span class="title">All Posts</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="glocal_admin/add_new_post" class="nav-link ">
                                <span class="title">Add new</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="glocal_admin/blog_categories" class="nav-link ">
                                <span class="title">Categories</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="glocal_admin/blog_tags" class="nav-link ">
                                <span class="title">Tags</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-users"></i>
                        <span class="title">Users</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="glocal_admin/manage_subs_user" class="nav-link ">
                                <span class="title">Subscription</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="glocal_admin/manage_hosts_user" class="nav-link ">
                                <span class="title">Hosting</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-directions"></i>
                        <span class="title">Reservation</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="glocal_admin/reservation_bank_tranfer" class="nav-link ">
                                <span class="title">Bank Tranfer</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="glocal_admin/reservation_credit" class="nav-link ">
                                <span class="title">Credti Card</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="glocal_admin/reservation_cancel_request" class="nav-link ">
                                <span class="title">Cancel Request</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item  ">
                    <a href="glocal_admin/chat" class="nav-link">
                        <i class="icon-support"></i>
                        <span class="title">Chat</span>
                    </a>
                </li>
                <!-- <li class="nav-item  ">
                    <a href="glocal_admin/web_config" class="nav-link">
                        <i class="icon-settings"></i>
                        <span class="title">Web config</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="glocal_admin/statistic" class="nav-link">
                        <i class="icon-graph"></i>
                        <span class="title">Statistic</span>
                    </a>
                </li> -->
                
            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
