<?php include '../includes/header.php' ?>
<?php if (isset($_SESSION['useruid'])) { ?>>

<!-- Begin page -->
<div class="wrapper">

    <?php include '../includes/sidebar.php' ?>
    <!-- Begin page -->
    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">
        <!-- LOGO -->
        <a href="index.html" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="../assets/images/logo.png" alt="" height="16" />
            </span>
            <span class="logo-sm">
                <img src="../assets/images/logo_sm.png" alt="" height="16" />
            </span>
        </a>

        <!-- LOGO -->
        <a href="index.html" class="logo text-center logo-dark">
            <span class="logo-lg">
                <img src="../assets/images/logo-dark.png" alt="" height="16" />
            </span>
            <span class="logo-sm">
                <img src="../assets/images/logo_sm_dark.png" alt="" height="16" />
            </span>
        </a>

        <div class="h-100" id="leftside-menu-container" data-simplebar="">
            <!--- Sidemenu -->
            <ul class="side-nav">
                <li class="side-nav-title side-nav-item">Navigation</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span class="badge bg-success float-end">4</span>
                        <span> Dashboards </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="dashboard-analytics.html">Analytics</a>
                            </li>
                            <li>
                                <a href="dashboard-crm.html">CRM</a>
                            </li>
                            <li>
                                <a href="index.html">Ecommerce</a>
                            </li>
                            <li>
                                <a href="dashboard-projects.html">Projects</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-title side-nav-item">Apps</li>

                <li class="side-nav-item">
                    <a href="apps-calendar.html" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Calendar </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="apps-chat.html" class="side-nav-link">
                        <i class="uil-comments-alt"></i>
                        <span> Chat </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> Ecommerce </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="apps-ecommerce-products.html">Products</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-products-details.html">Products Details</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-orders.html">Orders</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-orders-details.html">Order Details</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-customers.html">Customers</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-sellers.html">Sellers</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                        <i class="uil-envelope"></i>
                        <span> Email </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="apps-email-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="apps-email-read.html">Read Email</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                        <i class="uil-briefcase"></i>
                        <span> Projects </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="apps-projects-list.html">List</a>
                            </li>
                            <li>
                                <a href="apps-projects-details.html">Details</a>
                            </li>
                            <li>
                                <a href="apps-projects-gantt.html">Gantt
                                    <span class="badge rounded-pill badge-light-lighten font-10 float-end">New</span></a>
                            </li>
                            <li>
                                <a href="apps-projects-add.html">Create Project
                                    <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a href="apps-social-feed.html" class="side-nav-link">
                        <i class="uil-rss"></i>
                        <span> Social Feed </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                        <i class="uil-clipboard-alt"></i>
                        <span> Tasks </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="apps-tasks.html">List</a>
                            </li>
                            <li>
                                <a href="apps-tasks-details.html">Details</a>
                            </li>
                            <li>
                                <a href="apps-kanban.html">Kanban Board</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a href="apps-file-manager.html" class="side-nav-link">
                        <i class="uil-folder-plus"></i>
                        <span> File Manager </span>
                    </a>
                </li>

                <li class="side-nav-title side-nav-item">Custom</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                        <i class="uil-copy-alt"></i>
                        <span> Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarPages">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="pages-profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="pages-profile-2.html">Profile 2</a>
                            </li>
                            <li>
                                <a href="pages-invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="pages-faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="pages-pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="pages-maintenance.html">Maintenance</a>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                                    <span> Authentication </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarPagesAuth">
                                    <ul class="side-nav-third-level">
                                        <li>
                                            <a href="pages-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="pages-login-2.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-register-2.html">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout.html">Logout</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout-2.html">Logout 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw.html">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail.html">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                                    <span> Error </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarPagesError">
                                    <ul class="side-nav-third-level">
                                        <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="pages-starter.html">Starter Page</a>
                            </li>
                            <li>
                                <a href="pages-preloader.html">With Preloader</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a href="landing.html" target="_blank" class="side-nav-link">
                        <i class="uil-globe"></i>
                        <span class="badge bg-secondary text-light float-end">New</span>
                        <span> Landing </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                        <i class="uil-window"></i>
                        <span> Layouts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="layouts-horizontal.html">Horizontal</a>
                            </li>
                            <li>
                                <a href="layouts-detached.html">Detached</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-title side-nav-item mt-1">Components</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                        <i class="uil-box"></i>
                        <span> Base UI </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBaseUI">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="ui-accordions.html">Accordions</a>
                            </li>
                            <li>
                                <a href="ui-alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="ui-avatars.html">Avatars</a>
                            </li>
                            <li>
                                <a href="ui-badges.html">Badges</a>
                            </li>
                            <li>
                                <a href="ui-breadcrumb.html">Breadcrumb</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-dropdowns.html">Dropdowns</a>
                            </li>
                            <li>
                                <a href="ui-embed-video.html">Embed Video</a>
                            </li>
                            <li>
                                <a href="ui-grid.html">Grid</a>
                            </li>
                            <li>
                                <a href="ui-list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="ui-offcanvas.html">Offcanvas</a>
                            </li>
                            <li>
                                <a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="ui-popovers.html">Popovers</a>
                            </li>
                            <li>
                                <a href="ui-progress.html">Progress</a>
                            </li>
                            <li>
                                <a href="ui-ribbons.html">Ribbons</a>
                            </li>
                            <li>
                                <a href="ui-spinners.html">Spinners</a>
                            </li>
                            <li>
                                <a href="ui-tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips</a>
                            </li>
                            <li>
                                <a href="ui-typography.html">Typography</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                        <i class="uil-package"></i>
                        <span> Extended UI </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExtendedUI">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="extended-dragula.html">Dragula</a>
                            </li>
                            <li>
                                <a href="extended-range-slider.html">Range Slider</a>
                            </li>
                            <li>
                                <a href="extended-ratings.html">Ratings</a>
                            </li>
                            <li>
                                <a href="extended-scrollbar.html">Scrollbar</a>
                            </li>
                            <li>
                                <a href="extended-scrollspy.html">Scrollspy</a>
                            </li>
                            <li>
                                <a href="extended-treeview.html">Treeview</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a href="widgets.html" class="side-nav-link">
                        <i class="uil-layer-group"></i>
                        <span> Widgets </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                        <i class="uil-streering"></i>
                        <span> Icons </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarIcons">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="icons-dripicons.html">Dripicons</a>
                            </li>
                            <li>
                                <a href="icons-mdi.html">Material Design</a>
                            </li>
                            <li>
                                <a href="icons-unicons.html">Unicons</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                        <i class="uil-document-layout-center"></i>
                        <span> Forms </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarForms">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="form-elements.html">Basic Elements</a>
                            </li>
                            <li>
                                <a href="form-advanced.html">Form Advanced</a>
                            </li>
                            <li>
                                <a href="form-validation.html">Validation</a>
                            </li>
                            <li>
                                <a href="form-wizard.html">Wizard</a>
                            </li>
                            <li>
                                <a href="form-fileuploads.html">File Uploads</a>
                            </li>
                            <li>
                                <a href="form-editors.html">Editors</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                        <i class="uil-chart"></i>
                        <span> Charts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCharts">
                        <ul class="side-nav-second-level">
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                                    <span> Apex Charts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarApexCharts">
                                    <ul class="side-nav-third-level">
                                        <li>
                                            <a href="charts-apex-area.html">Area</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-bar.html">Bar</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-bubble.html">Bubble</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-candlestick.html">Candlestick</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-column.html">Column</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-heatmap.html">Heatmap</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-line.html">Line</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-mixed.html">Mixed</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-pie.html">Pie</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-radar.html">Radar</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-radialbar.html">RadialBar</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-scatter.html">Scatter</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-sparklines.html">Sparklines</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="charts-brite.html">Britecharts</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html">Chartjs</a>
                            </li>
                            <li>
                                <a href="charts-sparkline.html">Sparklines</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                        <i class="uil-table"></i>
                        <span> Tables </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="tables-basic.html">Basic Tables</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Data Tables</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                        <i class="uil-location-point"></i>
                        <span> Maps </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMaps">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="maps-google.html">Google Maps</a>
                            </li>
                            <li>
                                <a href="maps-vector.html">Vector Maps</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                        <i class="uil-folder-plus"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultiLevel">
                        <ul class="side-nav-second-level">
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                    <span> Second Level </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarSecondLevel">
                                    <ul class="side-nav-third-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                    <span> Third Level </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarThirdLevel">
                                    <ul class="side-nav-third-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                <span> Item 2 </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarFourthLevel">
                                                <ul class="side-nav-forth-level">
                                                    <li>
                                                        <a href="javascript: void(0);">Item 2.1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript: void(0);">Item 2.2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <!-- Help Box -->
            <div class="help-box text-white text-center">
                <a href="javascript: void(0);" class="float-end close-btn text-white">
                    <i class="mdi mdi-close"></i>
                </a>
                <img src="../assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
                <h5 class="mt-3">Unlimited Access</h5>
                <p class="mb-3">
                    Upgrade to plan to get access to unlimited reports
                </p>
                <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
            </div>
            <!-- end Help Box -->
            <!-- End Sidebar -->

            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li class="dropdown notification-list d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                            </form>
                        </div>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="../assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12" />
                            <span class="align-middle d-none d-sm-inline-block">English</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="../assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12" />
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="../assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12" />
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="../assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12" />
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="../assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12" />
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-end">
                                        <a href="javascript: void(0);" class="text-dark">
                                            <small>Clear All</small>
                                        </a> </span>Notification
                                </h5>
                            </div>

                            <div style="max-height: 230px" data-simplebar="">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">
                                        Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">
                                        New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="../assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">
                                        Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="../assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">
                                        Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View All
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-sm-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-view-apps noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="../assets/images/brands/slack.png" alt="slack" />
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="../assets/images/brands/github.png" alt="Github" />
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="../assets/images/brands/dribbble.png" alt="dribbble" />
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="../assets/images/brands/bitbucket.png" alt="bitbucket" />
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="../assets/images/brands/dropbox.png" alt="dropbox" />
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="../assets/images/brands/g-suite.png" alt="G Suite" />
                                            <span>G Suite</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- end row-->
                            </div>
                        </div>
                    </li>

                    <li class="notification-list">
                        <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="../assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle" />
                            </span>
                            <span>
                                <span class="account-user-name">Soeng Souy</span>
                                <span class="account-position">Founder</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy me-1"></i>
                                <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="button-menu-mobile open-left">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="app-search dropdown d-none d-lg-block">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search" />
                            <span class="mdi mdi-magnify search-icon"></span>
                            <button class="input-group-text btn-primary" type="submit">
                                Search
                            </button>
                        </div>
                    </form>

                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h5 class="text-overflow mb-2">
                                Found <span class="text-danger">17</span> results
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-notes font-16 me-1"></i>
                            <span>Analytics Report</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-life-ring font-16 me-1"></i>
                            <span>How can I help you?</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-cog font-16 me-1"></i>
                            <span>User profile settings</span>
                        </a>

                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                        </div>

                        <div class="notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="../assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32" />
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Erwin Brown</h5>
                                        <span class="font-12 mb-0">UI Designer</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="../assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32" />
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                        <span class="font-12 mb-0">Developer</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript: void(0);">Hyper</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript: void(0);">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">Profile 2</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Profile 2</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="../assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" />

                                <h4 class="mb-0 mt-2">Soeng Souy</h4>
                                <p class="text-muted font-14">Founder</p>

                                <button type="button" class="btn btn-success btn-sm mb-2">
                                    Follow
                                </button>
                                <button type="button" class="btn btn-danger btn-sm mb-2">
                                    Message
                                </button>

                                <div class="text-start mt-3">
                                    <h4 class="font-13 text-uppercase">About Me :</h4>
                                    <p class="text-muted font-13 mb-3">
                                        Hi I'm Johnathn Deo,has been the industry's standard
                                        dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type.
                                    </p>
                                    <p class="text-muted mb-2 font-13">
                                        <strong>Full Name :</strong>
                                        <span class="ms-2">Geneva D. McKnight</span>
                                    </p>

                                    <p class="text-muted mb-2 font-13">
                                        <strong>Mobile :</strong><span class="ms-2">(123) 123 1234</span>
                                    </p>

                                    <p class="text-muted mb-2 font-13">
                                        <strong>Email :</strong>
                                        <span class="ms-2">user@email.domain</span>
                                    </p>

                                    <p class="text-muted mb-1 font-13">
                                        <strong>Location :</strong>
                                        <span class="ms-2">USA</span>
                                    </p>
                                </div>

                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- Messages-->
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                                <h4 class="header-title mb-3">Messages</h4>

                                <div class="inbox-widget">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img">
                                            <img src="../assets/images/users/avatar-2.jpg" class="rounded-circle" alt="" />
                                        </div>
                                        <p class="inbox-item-author">Tomaslau</p>
                                        <p class="inbox-item-text">
                                            I've finished it! See you so...
                                        </p>
                                        <p class="inbox-item-date">
                                            <a href="#" class="btn btn-sm btn-link text-info font-13">
                                                Reply
                                            </a>
                                        </p>
                                    </div>
                                    <div class="inbox-item">
                                        <div class="inbox-item-img">
                                            <img src="../assets/images/users/avatar-3.jpg" class="rounded-circle" alt="" />
                                        </div>
                                        <p class="inbox-item-author">Stillnotdavid</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">
                                            <a href="#" class="btn btn-sm btn-link text-info font-13">
                                                Reply
                                            </a>
                                        </p>
                                    </div>
                                    <div class="inbox-item">
                                        <div class="inbox-item-img">
                                            <img src="../assets/images/users/avatar-4.jpg" class="rounded-circle" alt="" />
                                        </div>
                                        <p class="inbox-item-author">Kurafire</p>
                                        <p class="inbox-item-text">Nice to meet you</p>
                                        <p class="inbox-item-date">
                                            <a href="#" class="btn btn-sm btn-link text-info font-13">
                                                Reply
                                            </a>
                                        </p>
                                    </div>

                                    <div class="inbox-item">
                                        <div class="inbox-item-img">
                                            <img src="../assets/images/users/avatar-5.jpg" class="rounded-circle" alt="" />
                                        </div>
                                        <p class="inbox-item-author">Shahedk</p>
                                        <p class="inbox-item-text">
                                            Hey! there I'm available...
                                        </p>
                                        <p class="inbox-item-date">
                                            <a href="#" class="btn btn-sm btn-link text-info font-13">
                                                Reply
                                            </a>
                                        </p>
                                    </div>
                                    <div class="inbox-item">
                                        <div class="inbox-item-img">
                                            <img src="../assets/images/users/avatar-6.jpg" class="rounded-circle" alt="" />
                                        </div>
                                        <p class="inbox-item-author">Adhamdannaway</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">
                                            <a href="#" class="btn btn-sm btn-link text-info font-13">
                                                Reply
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <!-- end inbox-widget -->
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-8 col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                    <li class="nav-item">
                                        <a href="#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                            About
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#timeline" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                                            Timeline
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                            Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="aboutme">
                                        <h5 class="text-uppercase">
                                            <i class="mdi mdi-briefcase me-1"></i> Experience
                                        </h5>

                                        <div class="timeline-alt pb-0">
                                            <div class="timeline-item">
                                                <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                                <div class="timeline-item-info">
                                                    <h5 class="mt-0 mb-1">
                                                        Lead designer / Developer
                                                    </h5>
                                                    <p class="font-14">
                                                        websitename.com
                                                        <span class="ms-2 font-12">Year: 2015 - 18</span>
                                                    </p>
                                                    <p class="text-muted mt-2 mb-0 pb-3">
                                                        Everyone realizes why a new common language
                                                        would be desirable: one could refuse to pay
                                                        expensive translators. To achieve this, it would
                                                        be necessary to have uniform grammar,
                                                        pronunciation and more common words.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <i class="mdi mdi-circle bg-primary-lighten text-primary timeline-icon"></i>
                                                <div class="timeline-item-info">
                                                    <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                                    <p class="font-14">
                                                        Software Inc.
                                                        <span class="ms-2 font-12">Year: 2012 - 15</span>
                                                    </p>
                                                    <p class="text-muted mt-2 mb-0 pb-3">
                                                        If several languages coalesce, the grammar of
                                                        the resulting language is more simple and
                                                        regular than that of the individual languages.
                                                        The new common language will be more simple and
                                                        regular than the existing European languages.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                                <div class="timeline-item-info">
                                                    <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                                    <p class="font-14">
                                                        Coderthemes Design LLP
                                                        <span class="ms-2 font-12">Year: 2010 - 12</span>
                                                    </p>
                                                    <p class="text-muted mt-2 mb-0 pb-2">
                                                        The European languages are members of the same
                                                        family. Their separate existence is a myth. For
                                                        science music sport etc, Europe uses the same
                                                        vocabulary. The languages only differ in their
                                                        grammar their pronunciation.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end timeline -->

                                        <h5 class="mb-3 mt-4 text-uppercase">
                                            <i class="mdi mdi-cards-variant me-1"></i> Projects
                                        </h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Clients</th>
                                                        <th>Project Name</th>
                                                        <th>Start Date</th>
                                                        <th>Due Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <img src="../assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" height="24" />
                                                            Halette Boivin
                                                        </td>
                                                        <td>App design and development</td>
                                                        <td>01/01/2015</td>
                                                        <td>10/15/2018</td>
                                                        <td>
                                                            <span class="badge badge-info-lighten">Work in Progress</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <img src="../assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" height="24" />
                                                            Durandana Jolicoeur
                                                        </td>
                                                        <td>Coffee detail page - Main Page</td>
                                                        <td>21/07/2016</td>
                                                        <td>12/05/2018</td>
                                                        <td>
                                                            <span class="badge badge-danger-lighten">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <img src="../assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" height="24" />
                                                            Lucas Sabourin
                                                        </td>
                                                        <td>Poster illustation design</td>
                                                        <td>18/03/2018</td>
                                                        <td>28/09/2018</td>
                                                        <td>
                                                            <span class="badge badge-success-lighten">Done</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <img src="../assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" height="24" />
                                                            Donatien Brunelle
                                                        </td>
                                                        <td>Drinking bottle graphics</td>
                                                        <td>02/10/2017</td>
                                                        <td>07/05/2018</td>
                                                        <td>
                                                            <span class="badge badge-info-lighten">Work in Progress</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <img src="../assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" height="24" />
                                                            Karel Auberjo
                                                        </td>
                                                        <td>Landing page design - Home</td>
                                                        <td>17/01/2017</td>
                                                        <td>25/05/2021</td>
                                                        <td>
                                                            <span class="badge badge-warning-lighten">Coming soon</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab-pane -->
                                    <!-- end about me section content -->

                                    <div class="tab-pane show active" id="timeline">
                                        <!-- comment box -->
                                        <div class="border rounded mt-2 mb-3">
                                            <form action="#" class="comment-area-box">
                                                <textarea rows="3" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
                                                <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-account-circle"></i></a>
                                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-map-marker"></i></a>
                                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-camera"></i></a>
                                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-emoticon-outline"></i></a>
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-dark waves-effect">
                                                        Post
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end .border-->
                                        <!-- end comment box -->

                                        <!-- Story Box-->
                                        <div class="border border-light rounded p-2 mb-3">
                                            <div class="d-flex">
                                                <img class="me-2 rounded-circle" src="../assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="32" />
                                                <div>
                                                    <h5 class="m-0">Jeremy Tomlinson</h5>
                                                    <p class="text-muted">
                                                        <small>about 2 minuts ago</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <p>
                                                Story based around the idea of time lapse, animation
                                                to post soon!
                                            </p>

                                            <img src="../assets/images/small/small-1.jpg" alt="post-img" class="rounded me-1" height="60" />
                                            <img src="../assets/images/small/small-2.jpg" alt="post-img" class="rounded me-1" height="60" />
                                            <img src="../assets/images/small/small-3.jpg" alt="post-img" class="rounded" height="60" />

                                            <div class="mt-2">
                                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-heart-outline"></i> Like</a>
                                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                                            </div>
                                        </div>

                                        <!-- Story Box-->
                                        <div class="border border-light rounded p-2 mb-3">
                                            <div class="d-flex">
                                                <img class="me-2 rounded-circle" src="../assets/images/users/avatar-4.jpg" alt="Generic placeholder image" height="32" />
                                                <div>
                                                    <h5 class="m-0">Thelma Fridley</h5>
                                                    <p class="text-muted">
                                                        <small>about 1 hour ago</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="font-16 text-center fst-italic text-dark">
                                                <i class="mdi mdi-format-quote-open font-20"></i>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla
                                                vel metus scelerisque ante sollicitudin. Cras purus
                                                odio, vestibulum in vulputate at, tempus viverra
                                                turpis. Duis sagittis ipsum. Praesent mauris. Fusce
                                                nec tellus sed augue semper porta. Mauris massa.
                                            </div>

                                            <div class="mx-n2 p-2 mt-3 bg-light">
                                                <div class="d-flex">
                                                    <img class="me-2 rounded-circle" src="../assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="32" />
                                                    <div>
                                                        <h5 class="mt-0">
                                                            Jeremy Tomlinson
                                                            <small class="text-muted">3 hours ago</small>
                                                        </h5>
                                                        Nice work, makes me think of The Money Pit.

                                                        <br />
                                                        <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i class="mdi mdi-reply"></i> Reply</a>

                                                        <div class="d-flex mt-3">
                                                            <a class="pe-2" href="#">
                                                                <img src="../assets/images/users/avatar-4.jpg" class="rounded-circle" alt="Generic placeholder image" height="32" />
                                                            </a>
                                                            <div>
                                                                <h5 class="mt-0">
                                                                    Thelma Fridley
                                                                    <small class="text-muted">5 hours ago</small>
                                                                </h5>
                                                                i'm in the middle of a timelapse animation
                                                                myself! (Very different though.) Awesome
                                                                stuff.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-2">
                                                    <a class="pe-2" href="#">
                                                        <img src="../assets/images/users/avatar-1.jpg" class="rounded-circle" alt="Generic placeholder image" height="32" />
                                                    </a>
                                                    <div class="w-100">
                                                        <input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i class="mdi mdi-heart"></i> Like (28)</a>
                                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                                            </div>
                                        </div>

                                        <!-- Story Box-->
                                        <div class="border border-light p-2 mb-3">
                                            <div class="d-flex">
                                                <img class="me-2 rounded-circle" src="../assets/images/users/avatar-6.jpg" alt="Generic placeholder image" height="32" />
                                                <div>
                                                    <h5 class="m-0">Martin Williamson</h5>
                                                    <p class="text-muted">
                                                        <small>15 hours ago</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <p>
                                                The parallax is a little odd but O.o that house
                                                build is awesome!!
                                            </p>

                                            <iframe src="../../video/87993762.html" height="300" class="img-fluid border-0"></iframe>
                                        </div>

                                        <div class="text-center">
                                            <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load
                                                more
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end timeline content-->

                                    <div class="tab-pane" id="settings">
                                        <form>
                                            <h5 class="mb-4 text-uppercase">
                                                <i class="mdi mdi-account-circle me-1"></i> Personal
                                                Info
                                            </h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstname" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstname" placeholder="Enter first name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lastname" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname" placeholder="Enter last name" />
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="userbio" class="form-label">Bio</label>
                                                        <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="useremail" class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" id="useremail" placeholder="Enter email" />
                                                        <span class="form-text text-muted"><small>If you want to change email please
                                                                <a href="javascript: void(0);">click</a>
                                                                here.</small></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="userpassword" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password" />
                                                        <span class="form-text text-muted"><small>If you want to change password please
                                                                <a href="javascript: void(0);">click</a>
                                                                here.</small></span>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <h5 class="mb-3 text-uppercase bg-light p-2">
                                                <i class="mdi mdi-office-building me-1"></i> Company
                                                Info
                                            </h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="companyname" class="form-label">Company Name</label>
                                                        <input type="text" class="form-control" id="companyname" placeholder="Enter company name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="cwebsite" class="form-label">Website</label>
                                                        <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url" />
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <h5 class="mb-3 text-uppercase bg-light p-2">
                                                <i class="mdi mdi-earth me-1"></i> Social
                                            </h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-fb" class="form-label">Facebook</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                            <input type="text" class="form-control" id="social-fb" placeholder="Url" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-tw" class="form-label">Twitter</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                            <input type="text" class="form-control" id="social-tw" placeholder="Username" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-insta" class="form-label">Instagram</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                            <input type="text" class="form-control" id="social-insta" placeholder="Url" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-lin" class="form-label">Linkedin</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                                            <input type="text" class="form-control" id="social-lin" placeholder="Url" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-sky" class="form-label">Skype</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="mdi mdi-skype"></i></span>
                                                            <input type="text" class="form-control" id="social-sky" placeholder="@username" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-gh" class="form-label">Github</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="mdi mdi-github"></i></span>
                                                            <input type="text" class="form-control" id="social-gh" placeholder="Username" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class="text-end">
                                                <button type="submit" class="btn btn-success mt-2">
                                                    <i class="mdi mdi-content-save"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end settings content-->
                                </div>
                                <!-- end tab-content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </div>
            <!-- container -->
        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        © Hyper - Coderthemes.com
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->
<?php include '../includes/endbar.php' ?>

<div class="rightbar-overlay"></div>
<!-- /End-bar -->

<?php include '../includes/footer.php'; ?>

<?php } else {
    header("location: ../views/pages-404.php");
    exit();
} ?>