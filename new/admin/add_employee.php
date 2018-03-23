<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Adminca bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Form Layouts</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="../assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="../assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="../assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="../assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    
    <!-- PLUGINS STYLES-->    
    <link href="../assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="../assets/vendors/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />    
    <link href="../assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="../assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="../dropify/dropify.css" rel="stylesheet" />



</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a href="index.html">
                    <span class="brand">AdminCa</span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link search-toggler js-search-toggler"><i class="ti-search"></i>
                            <span>Search here...</span>
                        </a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="timeout-toggler">
                        <a class="nav-link toolbar-icon" data-toggle="modal" data-target="#session-dialog" href="javascript:;"><i class="ti-alarm-clock timeout-toggler-icon rel"><span class="notify-signal"></span></i></a>
                    </li>
                    <li class="dropdown dropdown-inbox">
                        <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-email"></i>
                            <span class="envelope-badge">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header text-center">
                                <div>
                                    <span class="font-18"><strong>7 New</strong> Messages</span>
                                </div>
                                <a class="text-muted font-13" href="javascript:;">view all</a>
                            </div>
                            <div class="p-3">
                                <div class="media-list media-list-divider scroller" data-height="350px" data-color="#71808f">
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="../assets/img/users/u8.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">Lynn Weaver<small class="text-muted float-right">Just now</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-primary"><i class="ti-support mr-2"></i>Support</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="../assets/img/users/u6.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Connor Perez<small class="text-muted float-right">18 mins</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-success mr-3"><i class="ti-lock mr-2"></i>Security</span>
                                                <span class="d-inline-flex align-items-center text-pink"><i class="ti-credit-card mr-2"></i>Payment</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="../assets/img/users/u11.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Tyrone Carroll<small class="text-muted float-right">42 mins</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="../assets/img/users/u10.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Stella Obrien<small class="text-muted float-right">1 hrs</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-purple"><i class="ti-settings mr-2"></i>Technical</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="../assets/img/users/u2.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Becky Brooks<small class="text-muted float-right">3 hrs</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="../assets/img/users/u5.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Bob Gonzalez<small class="text-muted float-right">3 hrs</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-primary mr-3"><i class="ti-support mr-2"></i>Support</span>
                                                <span class="d-inline-flex align-items-center text-pink"><i class="ti-shopping-cart mr-2"></i>Shopping</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="../assets/img/users/u9.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Tammy Newman<small class="text-muted float-right">3 hrs</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-primary"><i class="ti-ticket mr-2"></i>Client Support</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-bell rel"><span class="notify-signal"></span></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header text-center">
                                <div>
                                    <span class="font-18"><strong>14 New</strong> Notifications</span>
                                </div>
                                <a class="text-muted font-13" href="javascript:;">view all</a>
                            </div>
                            <div class="p-3">
                                <ul class="timeline scroller" data-height="320px">
                                    <li class="timeline-item"><i class="ti-check timeline-icon"></i>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                    <li class="timeline-item"><i class="ti-announcement timeline-icon"></i>
                                        <span>7 new feedback
                                            <span class="badge badge-warning badge-pill ml-2">important</span>
                                        </span><small class="float-right text-muted">5 mins</small></li>
                                    <li class="timeline-item"><i class="ti-truck timeline-icon"></i>25 new orders sent<small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                                    <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                                    <li class="timeline-item"><i class="ti-user timeline-icon"></i>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                                    <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>
                                        <span>Server Error
                                            <span class="badge badge-success badge-pill ml-2">resolved</span>
                                        </span><small class="float-right text-muted">2 hrs</small></li>
                                    <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>
                                        <span>System Warning
                                            <a class="text-purple ml-2">Check</a>
                                        </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                                    <li class="timeline-item"><i class="fa fa-file-excel-o timeline-icon"></i>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                                    <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                                    <li class="timeline-item"><i class="ti-arrow-circle-up timeline-icon"></i>Production server up<small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                                    <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                    <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <span>Super User</span>
                            <img src="../assets/img/users/admin-image.png" alt="image" />
                        </a>
                        <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header">
                                <div class="admin-avatar">
                                    <img src="../assets/img/users/admin-image.png" alt="image" />
                                </div>
                                <div>
                                    <h5 class="font-strong text-white">Super User</h5>
                                    <div>
                                        <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                                        <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-menu-features">
                                <a class="admin-features-item" href="javascript:;"><i class="ti-user"></i>
                                    <span>PROFILE</span>
                                </a>
                                <a class="admin-features-item" href="javascript:;"><i class="ti-support"></i>
                                    <span>SUPPORT</span>
                                </a>
                                <a class="admin-features-item" href="javascript:;"><i class="ti-settings"></i>
                                    <span>SETTINGS</span>
                                </a>
                            </div>
                            <div class="admin-menu-content">
                                <div class="text-muted mb-2">Your Wallet</div>
                                <div><i class="ti-wallet h1 mr-3 text-light"></i>
                                    <span class="h1 text-success"><sup>$</sup>12.7k</span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <a class="text-muted" href="javascript:;">Earnings history</a>
                                    <a class="d-flex align-items-center" href="javascript:;">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link quick-sidebar-toggler">
                            <span class="ti-align-right"></span>
                        </a>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-home"></i>
                            <span class="nav-label">Dashboards</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="index.html">Visitors</a>
                            </li>
                            <li>
                                <a href="dashboard_ecommerce.html">Shop</a>
                            </li>
                            <li>
                                <a href="dashboard_blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="dashboard_4.html">Dashboard v4</a>
                            </li>
                            <li>
                                <a href="dashboard_5.html">Dashboard v5</a>
                            </li>
                            <li>
                                <a href="dashboard_6.html">Dashboard v6</a>
                            </li>
                            <li>
                                <a href="dashboard_7.html">Dashboard v7</a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-paint-roller"></i>
                            <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="panels.html">Panels</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Tabs</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="tabs-pill.html">Pills</a>
                                    </li>
                                    <li>
                                        <a href="tabs-line.html">Line tabs</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="tooltip_popover.html">Tooltip &amp; Popover</a>
                            </li>
                            <li>
                                <a href="badges_progress.html">Badges &amp; Progress</a>
                            </li>
                            <li>
                                <a href="lists.html">List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-package"></i>
                            <span class="nav-label">Components</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="toastr.html">Toastr Notifications</a>
                            </li>
                            <li>
                                <a href="sweetalert.html">Sweet Alert</a>
                            </li>
                            <li>
                                <a href="alertify.html">Alertify</a>
                            </li>
                            <li>
                                <a href="idle_timer.html">Idle timer</a>
                            </li>
                            <li>
                                <a href="session_timeout.html">Session Timeout</a>
                            </li>
                            <li>
                                <a href="code_editor.html">Code Editor</a>
                            </li>
                            <li>
                                <a href="tree_view.html">Tree View</a>
                            </li>
                            <li>
                                <a href="nestable.html">Nestable List</a>
                            </li>
                            <li>
                                <a href="clipboard.html">Clipboard</a>
                            </li>
                            <li>
                                <a href="masonry.html">Masonry</a>
                            </li>
                            <li>
                                <a href="pdf_viewer.html">PDF viewer</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-heart"></i>
                            <span class="nav-label">Buttons</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Base Buttons</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="buttons-default.html">Default style</a>
                                    </li>
                                    <li>
                                        <a href="buttons-rounded.html">Rounded style</a>
                                    </li>
                                    <li>
                                        <a href="buttons-square.html">Square style</a>
                                    </li>
                                    <li>
                                        <a href="buttons-air.html">Air style</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="button-icon.html">Button Icon</a>
                            </li>
                            <li>
                                <a href="button-labeled.html">Labeled buttons</a>
                            </li>
                            <li>
                                <a href="button-animated.html">Animated buttons</a>
                            </li>
                            <li>
                                <a href="buttons-fab.html">FAB buttons</a>
                            </li>
                            <li>
                                <a href="button-groups.html">Button Groups</a>
                            </li>
                            <li>
                                <a href="button-dropdowns.html">Button dropdowns</a>
                            </li>
                            <li>
                                <a href="buttons-social.html">Social Buttons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-layers-alt"></i>
                            <span class="nav-label">Widgets</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="widgets-statistics.html">Statistics Widgets</a>
                            </li>
                            <li>
                                <a href="widgets-list.html">App &amp; List Widgets</a>
                            </li>
                            <li>
                                <a href="widgets-user.html">User Widgets</a>
                            </li>
                            <li>
                                <a href="widgets-blog.html">Blog Widgets</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:;"><i class="sidebar-item-icon ti-check-box"></i>
                            <span class="nav-label">Forms</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse in">
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Form Controls</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="form-controls.html">Inputs</a>
                                    </li>
                                    <li>
                                        <a href="form-switch.html">Switch</a>
                                    </li>
                                    <li>
                                        <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                                    </li>
                                    <li>
                                        <a href="form-input-groups.html">Input Groups</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="active" href="form_layouts.html">Form Layouts</a>
                            </li>
                            <li>
                                <a href="form_advanced.html">Advanced Plugins</a>
                            </li>
                            <li>
                                <a href="form_masks.html">Form input masks</a>
                            </li>
                            <li>
                                <a href="form_validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="text_editors.html">Text Editors</a>
                            </li>
                            <li>
                                <a href="form_dropzone.html">Dropzone File Upload</a>
                            </li>
                            <li>
                                <a href="image_cropping.html">Image Cropping</a>
                            </li>
                            <li>
                                <a href="autocomplete.html">Autocomplete</a>
                            </li>
                            <li>
                                <a href="form_wizard.html">Form Wizard</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-layout-tab-window"></i>
                            <span class="nav-label">Tables</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="table_basic.html">Basic Tables</a>
                            </li>
                            <li>
                                <a href="datatables.html">Datatables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-bar-chart"></i>
                            <span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="charts_flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="charts_morris.html">Morris Charts</a>
                            </li>
                            <li>
                                <a href="chartjs.html">Chart.js</a>
                            </li>
                            <li>
                                <a href="c3.html">C3 Charts</a>
                            </li>
                            <li>
                                <a href="charts_peity.html">Peity Charts</a>
                            </li>
                            <li>
                                <a href="charts_sparkline.html">Sparkline Charts</a>
                            </li>
                            <li>
                                <a href="charts_rickshaw.html">Rickshaw Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-map-alt"></i>
                            <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="maps_google.html">Google maps</a>
                            </li>
                            <li>
                                <a href="datamaps.html">Datamaps</a>
                            </li>
                            <li>
                                <a href="maps_vector.html">Vector maps</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html"><i class="sidebar-item-icon ti-comments-smiley"></i>
                            <span class="nav-label">Icons</span>
                        </a>
                    </li>
                    <li class="heading">PAGES</li>
                    <li>
                        <a href="mailbox.html"><i class="sidebar-item-icon ti-email"></i>
                            <span class="nav-label">Mailbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-pencil"></i>
                            <span class="nav-label">Blog</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="blog_list.html">List</a>
                            </li>
                            <li>
                                <a href="article.html">Article</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-shopping-cart"></i>
                            <span class="nav-label">E-Commerce</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="dashboard_ecommerce.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="ecommerce_products_list.html">Products list</a>
                            </li>
                            <li>
                                <a href="ecommerce_add_product.html">Add new product</a>
                            </li>
                            <li>
                                <a href="ecommerce_orders_list.html">Orders list</a>
                            </li>
                            <li>
                                <a href="ecommerce_order_details.html">Order details</a>
                            </li>
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="ecommerce_customers.html">Customers</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html"><i class="sidebar-item-icon ti-calendar"></i>
                            <span class="nav-label">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-files"></i>
                            <span class="nav-label">General Pages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="search.html">Search</a>
                            </li>
                            <li>
                                <a href="timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="timeline_horizontal.html">Horizontal timeline</a>
                            </li>
                            <li>
                                <a href="pricing-table-1.html">Pricing Table v1</a>
                            </li>
                            <li>
                                <a href="pricing-table-2.html">Pricing Table v2</a>
                            </li>
                            <li>
                                <a href="pricing-table-3.html">Pricing Table v3</a>
                            </li>
                            <li>
                                <a href="pricing-table-4.html">Pricing Table v4</a>
                            </li>
                            <li>
                                <a href="pricing-table-5.html">Pricing Table v5</a>
                            </li>
                            <li>
                                <a href="pricing-table-6.html">Pricing Table v6</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-user"></i>
                            <span class="nav-label">Custom Pages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">User Pages</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login v1</a>
                                    </li>
                                    <li>
                                        <a href="login-2.html">Login v2</a>
                                    </li>
                                    <li>
                                        <a href="login-3.html">Login v3</a>
                                    </li>
                                    <li>
                                        <a href="login-4.html">Login v4</a>
                                    </li>
                                    <li>
                                        <a href="login-5.html">Login v5</a>
                                    </li>
                                    <li>
                                        <a href="lockscreen.html">Lockscreen</a>
                                    </li>
                                    <li>
                                        <a href="forgot_password.html">Forgot password</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Error Pages</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="error_404.html">404 error</a>
                                    </li>
                                    <li>
                                        <a href="error_404-2.html">404 error v2</a>
                                    </li>
                                    <li>
                                        <a href="error_403.html">403 error</a>
                                    </li>
                                    <li>
                                        <a href="error_500.html">500 error</a>
                                    </li>
                                    <li>
                                        <a href="maintenance.html">Maintenance Mode</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-anchor"></i>
                            <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="javascript:;">Level 2</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="javascript:;">Level 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Level 3</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="javascript:;"><i class="ti-announcement"></i></a>
                    <a href="calendar.html"><i class="ti-calendar"></i></a>
                    <a href="javascript:;"><i class="ti-comments"></i></a>
                    <a href="login.html"><i class="ti-power-off"></i></a>
                </div>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Add Employee</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Employee</li>
                    <li class="breadcrumb-item">Add Employee</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <form action="javascript:;">
                        <div class="ibox-head">
                            <div class="ibox-title">Employee Details</div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label>Full Name</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <span class="input-icon input-icon-left"><i class="ti-user"></i></span>
                                            <input class="form-control" type="text" placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Email</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <span class="input-icon input-icon-left"><i class="ti-email"></i></span>
                                            <input class="form-control" type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Mobile number</label>
                                        <div class="input-group">
                                            <div class="input-group-btn bg-white">
                                                <button class="btn btn-outline-secondary">+91</button>
                                            </div>
                                            <input class="form-control" type="text" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6 form-group" id="date_3">
                                            <label>Date of Birth</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                <input class="form-control" type="text">
                                            </div>
                                            <span class="help-block">Please select your date of birth.</span>
                                        </div>
                                        <div class="col-md-6 form-group" id="date_1">
                                            <label>Date of Joining</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                <input class="form-control" type="text" value="auto calculate">
                                            </div>
                                            <span class="help-block">Please select date of joining.</span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6">
                                              <label>Nature of Employment</label>
                                              <div class="mt-1">
                                                  <label class="radio radio-inline radio-grey radio-primary">
                                                      <input type="radio" name="d" checked>
                                                      <span class="input-span"></span>Employee</label>
                                                  <label class="radio radio-inline radio-grey radio-primary">
                                                      <input type="radio" name="d">
                                                      <span class="input-span"></span>Contract</label>
                                              </div>
                                              <span class="help-block">Select one of 2 types of accounts.</span>
                                          </div>

                                        <div class="col-md-6">
                                            <label>Employee ID</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-id-badge"></i></span>
                                                <input class="form-control" type="text" placeholder="Predefined ID by algo based on nature of employement">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Designation</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <span class="input-icon input-icon-left"><i class="ti-briefcase"></i></span>
                                            <input class="form-control" type="text" placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">                                       
                                        <label>Qualifications</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <input class="tagsinput form-control" type="text" value="" placeholder="Enter Qualifications">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                         <label for="input-file-now-custom-1">Add Profile Photo</label>
                                          <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../assets/employee.png" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6">
                                            <label>Aadhaar Number</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-id-badge"></i></span>
                                                <input class="form-control" type="text" placeholder="Enter Aadhaar No">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>PAN Number</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-id-badge"></i></span>
                                                <input class="form-control" type="text" placeholder="Enter PAN No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6">
                                            <label>Emergency Contact Person</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-user"></i></span>
                                                <input class="form-control" type="text" placeholder="Enter Emergency Contact Person Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Emergency Contact Number</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <div class="input-group">
                                                    <div class="input-group-btn bg-white">
                                                        <button class="btn btn-outline-secondary">+91</button>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Blood Group</label>
                                        <div>
                                            <select class="selectpicker show-tick form-control" data-width="200px">
                                                <option>O +</option>
                                                <option>O -</option>
                                                <option>A +</option>
                                                <option>A -</option>
                                                <option>B +</option>
                                                <option>B -</option>
                                                <option>AB +</option>
                                                <option>AB -</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-4 col-md-4">
                                     <label for="input-file-now-custom-1">Supporting Documents</label>
                                      <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../assets/employee.png" />
                                </div>
                                <div class="form-group mb-4 col-md-4">
                                     <label for="input-file-now-custom-1">Service Level Agreement (For Contract)</label>
                                      <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../assets/employee.png" />
                                </div>
                                <div class="form-group mb-4 col-md-4">
                                     <label for="input-file-now-custom-1">Offer Letter/ Employement Agrement (Employee)</label>
                                      <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../assets/employee.png" />
                                </div>
                            </div>
                            
                        </div>
                        <div class="ibox-footer">
                            <button class="btn btn-primary mr-2" type="button">Submit</button>
                            <button class="btn btn-outline-secondary" type="reset">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>Adminca</b> - Save your time, choose the best</div>
                <div>
                    <a class="px-3 pl-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">Purchase</a>
                    <a class="px-3" href="http://admincast.com/adminca/documentation.html" target="_blank">Docs</a>
                </div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- START SEARCH PANEL-->
    <form class="search-top-bar" action="search.html">
        <input class="form-control search-input" type="text" placeholder="Search...">
        <button class="reset input-search-icon"><i class="ti-search"></i></button>
        <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    <!-- END SEARCH PANEL-->
    <!-- BEGIN THEME CONFIG PANEL-->
    <div class="theme-config">
        <div class="theme-config-toggle"><i class="ti-settings theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
        <div class="theme-config-box">
            <h5 class="text-center mb-4 mt-3">SETTINGS</h5>
            <div class="font-strong mb-3">LAYOUT OPTIONS</div>
            <div class="check-list mb-4">
                <label class="checkbox checkbox-grey checkbox-primary">
                    <input id="_fixedNavbar" type="checkbox" checked>
                    <span class="input-span"></span>Fixed navbar</label>
                <label class="checkbox checkbox-grey checkbox-primary mt-3">
                    <input id="_fixedlayout" type="checkbox">
                    <span class="input-span"></span>Fixed layout</label>
                <label class="checkbox checkbox-grey checkbox-primary mt-3">
                    <input class="js-sidebar-toggler" type="checkbox">
                    <span class="input-span"></span>Collapse sidebar</label>
                <label class="checkbox checkbox-grey checkbox-primary mt-3">
                    <input id="_drawerSidebar" type="checkbox">
                    <span class="input-span"></span>Drawer sidebar</label>
            </div>
            <div class="font-strong mb-3">LAYOUT STYLE</div>
            <div class="check-list mb-4">
                <label class="radio radio-grey radio-primary">
                    <input type="radio" name="layout-style" value="" checked="">
                    <span class="input-span"></span>Fluid</label>
                <label class="radio radio-grey radio-primary mt-3">
                    <input type="radio" name="layout-style" value="1">
                    <span class="input-span"></span>Boxed</label>
            </div>
        </div>
    </div>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- New question dialog-->
    <div class="modal fade" id="session-dialog">
        <div class="modal-dialog" style="width:400px;" role="document">
            <div class="modal-content timeout-modal">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mt-3 mb-4"><i class="ti-lock timeout-icon"></i></div>
                    <div class="text-center h4 mb-3">Set Auto Logout</div>
                    <p class="text-center mb-4">You are about to be signed out due to inactivity.<br>Select after how many minutes of inactivity you log out of the system.</p>
                    <div id="timeout-reset-box" style="display:none;">
                        <div class="form-group text-center">
                            <button class="btn btn-danger btn-fix btn-air" id="timeout-reset">Deactivate</button>
                        </div>
                    </div>
                    <div id="timeout-activate-box">
                        <form id="timeout-form" action="javascript:;">
                            <div class="form-group pl-3 pr-3 mb-4">
                                <input class="form-control form-control-line" type="text" name="timeout_count" placeholder="Minutes" id="timeout-count">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-fix btn-air" id="timeout-activate">Activate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End New question dialog-->
    <!-- QUICK SIDEBAR-->
    <div class="quick-sidebar">
        <ul class="nav nav-tabs tabs-line">
            <li class="nav-item">
                <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-comment"></i>
                    <div>Messages</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i>
                    <div>Settings</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-notepad"></i>
                    <div>Logs</div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane chat-panel active" id="tab-1">
                <div class="chat-list">
                    <div class="scroller">
                        <div class="media-list">
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u3.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-muted">12:05</small>
                                    <div class="media-heading">Frank Cruz</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u8.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-right text-success"><i class="badge-point badge-success mr-2"></i>12:05<br><span class="badge badge-danger badge-circle">3</span></small>
                                    <div class="media-heading">Lynn Weaver</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u2.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-muted">12:05</small>
                                    <div class="media-heading">Becky Brooks</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u5.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-muted">12:05</small>
                                    <div class="media-heading">Bob Gonzalez</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u6.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-right text-success"><i class="badge-point badge-success mr-2"></i>12:05</small>
                                    <div class="media-heading">Connor Perez</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u11.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-muted">12:05</small>
                                    <div class="media-heading">Tyrone Carroll</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u9.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-right text-success"><i class="badge-point badge-success mr-2"></i>12:05<br><span class="badge badge-danger badge-circle">1</span></small>
                                    <div class="media-heading">Tammy Newman</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u1.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-muted">12:05</small>
                                    <div class="media-heading">Jeanne Gonzalez</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u10.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-muted">12:05</small>
                                    <div class="media-heading">Stella Obrien</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                            <a class="media" href="javascript:;" data-toggle="show-chat">
                                <div class="media-img">
                                    <img class="img-circle" src="../assets/img/users/u7.jpg" alt="image" width="40" />
                                </div>
                                <div class="media-body"><small class="float-right text-muted">12:05</small>
                                    <div class="media-heading">Jeanne Smith</div>
                                    <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="messenger">
                    <div class="messenger-header">
                        <a class="messenger-return" href="javascript:;">
                            <span class="ti-angle-left"></span>
                        </a>
                        <div class="text-center text-white">
                            <h6 class="mb-1 font-16">Lynn Weaver</h6>
                            <div>
                                <span class="badge-point badge-danger mr-2"></span><small>Online</small></div>
                        </div>
                        <div class="dropdown">
                            <a class="messenger-more dropdown-toggle" data-toggle="dropdown">
                                <span class="ti-more-alt"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item">
                                    <span class="ti-heart m-r-10"></span>Add to favorite</a>
                                <a class="dropdown-item">
                                    <span class="ti-close m-r-10"></span>Clear chat</a>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-messages">
                        <div class="scroller">
                            <div class="messenger-message">
                                <div class="message-image">
                                    <img src="../assets/img/users/u8.jpg" alt="image" />
                                </div>
                                <div class="message-body">Hi Jack. You are comfortable today.</div>
                            </div>
                            <div class="messenger-message messenger-message-answer">
                                <div class="message-body">Hi Lynn. Yes Sure.</div>
                            </div>
                            <div class="messenger-message">
                                <div class="message-image">
                                    <img src="../assets/img/users/u8.jpg" alt="image" />
                                </div>
                                <div class="message-body">Hi. What is your main principle in work.</div>
                            </div>
                            <div class="messenger-message messenger-message-answer">
                                <div class="message-body">Our main principle: We work hard to make our client comfortable.</div>
                            </div>
                            <div class="message-time">4.30 PM</div>
                            <div class="messenger-message">
                                <div class="message-image">
                                    <img src="../assets/img/users/u8.jpg" alt="image" />
                                </div>
                                <div class="message-body">
                                    <p>Here are some beautiful photos.</p>
                                    <div class="mb-3">
                                        <img src="../assets/img/blog/culinary-1.jpeg" alt="image" />
                                    </div>
                                    <div>
                                        <img src="../assets/img/blog/01.jpeg" alt="image" />
                                    </div>
                                </div>
                            </div>
                            <div class="messenger-message messenger-message-answer">
                                <div class="message-body">Thanks, they are beautiful.</div>
                            </div>
                            <div class="messenger-message">
                                <div class="message-image">
                                    <img src="../assets/img/users/u8.jpg" alt="image" />
                                </div>
                                <div class="message-body">How many hours are you comfortable.</div>
                            </div>
                            <div class="messenger-message messenger-message-answer">
                                <div class="message-body">In the evening at 6.30 clock.</div>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-form">
                        <div class="messenger-form-inner">
                            <input class="messenger-input" type="text" placeholder="Type a message">
                            <div class="messenger-actions">
                                <span class="messanger-button messanger-paperclip">
                                    <input type="file"><i class="la la-paperclip"></i></span>
                                <a class="messanger-button" href="javascript:;"><i class="fa fa-send-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-2">
                <div class="scroller">
                    <div class="font-bold mb-4 mt-2">APP SETTINGS</div>
                    <div class="settings-item">Show notifications
                        <label class="ui-switch switch-icon">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="settings-item">Enable autologout
                        <label class="ui-switch switch-icon">
                            <input type="checkbox" checked>
                            <span></span>
                        </label>
                    </div>
                    <div class="settings-item">Show recent activity
                        <label class="ui-switch switch-icon">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="settings-item">Chat history
                        <label class="ui-switch switch-icon">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="settings-item">Users activity
                        <label class="ui-switch switch-icon">
                            <input type="checkbox" checked>
                            <span></span>
                        </label>
                    </div>
                    <div class="settings-item">Orders history
                        <label class="ui-switch switch-icon">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="settings-item">SMS Alerts
                        <label class="ui-switch switch-icon">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="font-bold mb-4">SYSTEM SETTINGS</div>
                    <div class="settings-item">Error Reporting
                        <label class="ui-switch switch-icon">
                            <input type="checkbox" checked>
                            <span></span>
                        </label>
                    </div>
                    <div class="settings-item">Server logs
                        <label class="ui-switch switch-icon">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="settings-item">Global search
                        <label class="ui-switch switch-icon">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-3">
                <div class="log-tabs">
                    <a class="active" href="javascript:;" data-type="all" data-toggle="tooltip" data-original-title="All logs"><i class="ti-view-grid"></i></a>
                    <a href="javascript:;" data-type="server" data-toggle="tooltip" data-original-title="Server logs"><i class="ti-harddrives"></i></a>
                    <a href="javascript:;" data-type="app" data-toggle="tooltip" data-original-title="App logs"><i class="ti-pulse"></i></a>
                </div>
                <div class="logs">
                    <div class="scroller">
                        <ul class="logs-list">
                            <li class="log-item" data-type="app"><i class="ti-check log-icon text-success"></i>
                                <div>
                                    <a>2 Issue fixed</a><small class="float-right text-muted">Just now</small></div>
                            </li>
                            <li class="log-item" data-type="app"><i class="ti-announcement log-icon"></i>
                                <div>
                                    <a>7 new feedback</a>
                                    <span class="badge badge-warning badge-pill ml-1">important</span><small class="float-right text-muted">5 mins</small></div>
                            </li>
                            <li class="log-item" data-type="server"><i class="ti-check log-icon text-success"></i>
                                <div>
                                    <a>Production server up</a><small class="float-right text-muted">24 mins</small></div>
                            </li>
                            <li class="log-item" data-type="app"><i class="ti-shopping-cart log-icon"></i>
                                <div>
                                    <a>12 New orders</a><small class="float-right text-muted">45 mins</small></div>
                            </li>
                            <li class="log-item" data-type="server"><i class="ti-info-alt log-icon text-danger"></i>
                                <div>
                                    <a>Server error</a>
                                    <span class="badge badge-primary badge-pill ml-1">resolved</span><small class="float-right text-muted">1 hrs</small></div>
                            </li>
                            <li class="log-item" data-type="server"><i class="ti-harddrives log-icon text-danger"></i>
                                <div>
                                    <a>Server overloaded 91%</a><small class="float-right text-muted">2 hrs</small></div>
                            </li>
                            <li class="log-item" data-type="app"><i class="ti-user log-icon"></i>
                                <div>
                                    <a>18 new users registered</a><small class="float-right text-muted">12.07</small></div>
                            </li>
                            <li class="log-item" data-type="app"><i class="ti-shopping-cart log-icon"></i>
                                <div>
                                    <a>5 New orders</a>
                                    <span class="badge badge-success badge-pill ml-1">pending</span><small class="float-right text-muted">12.30</small></div>
                            </li>
                            <li class="log-item" data-type="server"><i class="ti-info-alt log-icon text-danger"></i>
                                <div>
                                    <a>System error</a><small class="float-right text-muted">13.45</small></div>
                            </li>
                            <li class="log-item" data-type="app"><i class="fa fa-file-excel-o log-icon"></i>
                                <div>
                                    <a>The invoice is ready</a><small class="float-right text-muted">16.30</small></div>
                            </li>
                            <li class="log-item" data-type="server"><i class="ti-server log-icon text-danger"></i>
                                <div>
                                    <a>Database overloaded 92%</a><small class="float-right text-muted">17.15</small></div>
                            </li>
                            <li class="log-item" data-type="server"><i class="ti-check log-icon text-success"></i>
                                <div>
                                    <a>Production server up</a><small class="float-right text-muted">18.05</small></div>
                            </li>
                            <li class="log-item" data-type="app"><i class="ti-user log-icon"></i>
                                <div>
                                    <a>12 new users registered</a><small class="float-right text-muted">18.22</small></div>
                            </li>
                            <li class="log-item" data-type="app"><i class="ti-shopping-cart log-icon"></i>
                                <div>
                                    <a>8 New orders</a><small class="float-right text-muted">20.00</small></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICK SIDEBAR-->
    <!-- CORE PLUGINS-->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
    <script src="../assets/vendors/toastr/toastr.min.js"></script>
    <script src="../assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    
    <!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <script src="../assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/vendors/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/vendors/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
    <script src="../assets/vendors/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/vendors/multiselect/js/jquery.multi-select.js"></script>
    <script src="../assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>
    <script src="../assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

    <!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="../dropify/src/js/dropify.js"></script>
    <script src="../assets/js/scripts/form-plugins.js"></script>
    <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

               
                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

</body>

</html>