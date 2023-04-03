<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Teachers</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.php" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">
                <li class="nav-item dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-01.svg" alt="">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                    </div>
                </li>

                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-05.svg" alt="">
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list">
                        <img src="assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="inbox.php">Inbox</a>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.php">Admin Dashboard</a></li>
                                <li><a href="teacher-dashboard.php">Teacher Dashboard</a></li>
                                <li><a href="student-dashboard.php">Student Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.php">Student List</a></li>
                                <li><a href="student-details.php">Student View</a></li>
                                <li><a href="add-student.php">Student Add</a></li>
                                <li><a href="edit-student.php">Student Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.php" class="active">Teacher List</a></li>
                                <li><a href="teacher-details.php">Teacher View</a></li>
                                <li><a href="add-teacher.php">Teacher Add</a></li>
                                <li><a href="edit-teacher.php">Teacher Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="departments.php">Department List</a></li>
                                <li><a href="add-department.php">Department Add</a></li>
                                <li><a href="edit-department.php">Department Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.php">Subject List</a></li>
                                <li><a href="add-subject.php">Subject Add</a></li>
                                <li><a href="edit-subject.php">Subject Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoices.php">Invoices List</a></li>
                                <li><a href="invoice-grid.php">Invoices Grid</a></li>
                                <li><a href="add-invoice.php">Add Invoices</a></li>
                                <li><a href="edit-invoice.php">Edit Invoices</a></li>
                                <li><a href="view-invoice.php">Invoices Details</a></li>
                                <li><a href="invoices-settings.php">Invoices Settings</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="fees-collections.php">Fees Collection</a></li>
                                <li><a href="expenses.php">Expenses</a></li>
                                <li><a href="salary.php">Salary</a></li>
                                <li><a href="add-fees-collection.php">Add Fees</a></li>
                                <li><a href="add-expenses.php">Add Expenses</a></li>
                                <li><a href="add-salary.php">Add Salary</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="holiday.php"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                        </li>
                        <li>
                            <a href="fees.php"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                        </li>
                        <li>
                            <a href="exam.php"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="event.php"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                        </li>
                        <li>
                            <a href="time-table.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>
                        <li>
                            <a href="library.php"><i class="fas fa-book"></i> <span>Library</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="blog.php">All Blogs</a></li>
                                <li><a href="add-blog.php">Add Blog</a></li>
                                <li><a href="edit-blog.php">Edit Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.php"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="forgot-password.php">Forgot Password</a></li>
                                <li><a href="error-404.php">Error Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page.php"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Others</span>
                        </li>
                        <li>
                            <a href="sports.php"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                        </li>
                        <li>
                            <a href="hostel.php"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                        </li>
                        <li>
                            <a href="transport.php"><i class="fas fa-bus"></i> <span>Transport</span></a>
                        </li>
                        <li class="menu-title">
                            <span>UI Interface</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="alerts.php">Alerts</a></li>
                                <li><a href="accordions.php">Accordions</a></li>
                                <li><a href="avatar.php">Avatar</a></li>
                                <li><a href="badges.php">Badges</a></li>
                                <li><a href="buttons.php">Buttons</a></li>
                                <li><a href="buttongroup.php">Button Group</a></li>
                                <li><a href="breadcrumbs.php">Breadcrumb</a></li>
                                <li><a href="cards.php">Cards</a></li>
                                <li><a href="carousel.php">Carousel</a></li>
                                <li><a href="dropdowns.php">Dropdowns</a></li>
                                <li><a href="grid.php">Grid</a></li>
                                <li><a href="images.php">Images</a></li>
                                <li><a href="lightbox.php">Lightbox</a></li>
                                <li><a href="media.php">Media</a></li>
                                <li><a href="modal.php">Modals</a></li>
                                <li><a href="offcanvas.php">Offcanvas</a></li>
                                <li><a href="pagination.php">Pagination</a></li>
                                <li><a href="popover.php">Popover</a></li>
                                <li><a href="progress.php">Progress Bars</a></li>
                                <li><a href="placeholders.php">Placeholders</a></li>
                                <li><a href="rangeslider.php">Range Slider</a></li>
                                <li><a href="spinners.php">Spinner</a></li>
                                <li><a href="sweetalerts.php">Sweet Alerts</a></li>
                                <li><a href="tab.php">Tabs</a></li>
                                <li><a href="toastr.php">Toasts</a></li>
                                <li><a href="tooltip.php">Tooltip</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="video.php">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="ribbon.php">Ribbon</a></li>
                                <li><a href="clipboard.php">Clipboard</a></li>
                                <li><a href="drag-drop.php">Drag & Drop</a></li>
                                <li><a href="rating.php">Rating</a></li>
                                <li><a href="text-editor.php">Text Editor</a></li>
                                <li><a href="counter.php">Counter</a></li>
                                <li><a href="scrollbar.php">Scrollbar</a></li>
                                <li><a href="notification.php">Notification</a></li>
                                <li><a href="stickynote.php">Sticky Note</a></li>
                                <li><a href="timeline.php">Timeline</a></li>
                                <li><a href="horizontal-timeline.php">Horizontal Timeline</a></li>
                                <li><a href="form-wizard.php">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chart-apex.php">Apex Charts</a></li>
                                <li><a href="chart-js.php">Chart Js</a></li>
                                <li><a href="chart-morris.php">Morris Charts</a></li>
                                <li><a href="chart-flot.php">Flot Charts</a></li>
                                <li><a href="chart-peity.php">Peity Charts</a></li>
                                <li><a href="chart-c3.php">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.php">Feather Icons</a></li>
                                <li><a href="icon-ionic.php">Ionic Icons</a></li>
                                <li><a href="icon-material.php">Material Icons</a></li>
                                <li><a href="icon-pe7.php">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.php">Simpleline Icons</a></li>
                                <li><a href="icon-themify.php">Themify Icons</a></li>
                                <li><a href="icon-weather.php">Weather Icons</a></li>
                                <li><a href="icon-typicon.php">Typicon Icons</a></li>
                                <li><a href="icon-flag.php">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs.php">Basic Inputs </a></li>
                                <li><a href="form-input-groups.php">Input Groups </a></li>
                                <li><a href="form-horizontal.php">Horizontal Form </a></li>
                                <li><a href="form-vertical.php"> Vertical Form </a></li>
                                <li><a href="form-mask.php"> Form Mask </a></li>
                                <li><a href="form-validation.php"> Form Validation </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.php">Basic Tables </a></li>
                                <li><a href="data-tables.php">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> <span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="student-group-form">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by ID ...">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Name ...">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Phone ...">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">

                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Teachers</h3>
                                        </div>
                                        <div class="col-auto text-end float-end ms-auto download-grp">
                                            <a href="teachers.php" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                            <a href="teachers-grid.php" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                            <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                            <a href="add-teacher.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread">
                                            <tr>
                                                <th>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Gender</th>
                                                <th>Subject</th>
                                                <th>Section</th>
                                                <th>Mobile Number</th>
                                                <th>Address</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE2209</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Aaliyah</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>Female</td>
                                                <td>Mathematics</td>
                                                <td>A</td>
                                                <td>097 3584 5870</td>
                                                <td>911 Deer Ridge Drive,USA</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE2213</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Malynne</a>
                                                    </h2>
                                                </td>
                                                <td>8</td>
                                                <td>Female</td>
                                                <td>Physics</td>
                                                <td>A</td>
                                                <td>242 362 3100</td>
                                                <td>Bacardi Rd P.O. Box N-4880, New Providence</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE2143</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Levell Scott</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>Male</td>
                                                <td>Science</td>
                                                <td>B</td>
                                                <td>026 7318 4366</td>
                                                <td>P.O. Box: 41, Gaborone</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE2431</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Minnie</a>
                                                    </h2>
                                                </td>
                                                <td>11</td>
                                                <td>Male</td>
                                                <td>History</td>
                                                <td>C</td>
                                                <td>952 512 4909</td>
                                                <td>4771 Oral Lake Road, Golden Valley</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE1534</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Lois A</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>Female</td>
                                                <td>English</td>
                                                <td>B</td>
                                                <td>413 289 1314</td>
                                                <td>2844 Leverton Cove Road, Palmer</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE2153</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Calvin</a>
                                                    </h2>
                                                </td>
                                                <td>9</td>
                                                <td>Male</td>
                                                <td>Mathematics</td>
                                                <td>C</td>
                                                <td>701 753 3810</td>
                                                <td>1900 Hidden Meadow Drive, Crete</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE1434</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Vincent</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>Male</td>
                                                <td>Mathematics</td>
                                                <td>C</td>
                                                <td>402 221 7523</td>
                                                <td>3979 Ashwood Drive, Omaha</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE2345</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Kozma Tatari</a>
                                                    </h2>
                                                </td>
                                                <td>9</td>
                                                <td>Female</td>
                                                <td>Science</td>
                                                <td>A</td>
                                                <td>04 2239 968</td>
                                                <td>Rruga E Kavajes, Condor Center, Tirana</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE2365</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">John Chambers</a>
                                                    </h2>
                                                </td>
                                                <td>11</td>
                                                <td>Male</td>
                                                <td>Botony</td>
                                                <td>B</td>
                                                <td>870 663 2334</td>
                                                <td>4667 Sunset Drive, Pine Bluff</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>PRE1234</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="teacher-details.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
                                                        <a href="teacher-details.php">Nathan Humphries</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>Male</td>
                                                <td>Biology</td>
                                                <td>A</td>
                                                <td>077 3499 9959</td>
                                                <td>86 Lamphey Road, Thelnetham</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="edit-teacher.php" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer>
                <p>Copyright © 2022 Dreamguys.</p>
            </footer>

        </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>