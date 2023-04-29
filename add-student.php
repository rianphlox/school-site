<?php
    require_once 'config/DB.php';
    $db = new DB();

    if (isset($_POST['submit'])) {
        // echo "<pre>";
        // print_r($_POST)   ;
        // echo "</pre>";
    }

?>

<?php include './inc/head.php' ?>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index" class="logo logo-small">
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
                        <a class="dropdown-item" href="profile">My Profile</a>
                        <a class="dropdown-item" href="inbox">Inbox</a>
                        <a class="dropdown-item" href="login">Logout</a>
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
                                <li><a href="index">Admin Dashboard</a></li>
                                <li><a href="teacher-dashboard">Teacher Dashboard</a></li>
                                <li><a href="student-dashboard">Student Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <!-- <li><a href="students">Student List</a></li> -->
                                <li><a href="student-details">Student View</a></li>
                                <li><a href="add-student" class="active">Student Add</a></li>
                                <li><a href="edit-student">Student Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers">Teacher List</a></li>
                                <li><a href="teacher-details">Teacher View</a></li>
                                <li><a href="add-teacher">Teacher Add</a></li>
                                <li><a href="edit-teacher">Teacher Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="departments">Department List</a></li>
                                <li><a href="add-department">Department Add</a></li>
                                <li><a href="edit-department">Department Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects">Subject List</a></li>
                                <li><a href="add-subject">Subject Add</a></li>
                                <li><a href="edit-subject">Subject Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoices">Invoices List</a></li>
                                <li><a href="invoice-grid">Invoices Grid</a></li>
                                <li><a href="add-invoice">Add Invoices</a></li>
                                <li><a href="edit-invoice">Edit Invoices</a></li>
                                <li><a href="view-invoice">Invoices Details</a></li>
                                <li><a href="invoices-settings">Invoices Settings</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="fees-collections">Fees Collection</a></li>
                                <li><a href="expenses">Expenses</a></li>
                                <li><a href="salary">Salary</a></li>
                                <li><a href="add-fees-collection">Add Fees</a></li>
                                <li><a href="add-expenses">Add Expenses</a></li>
                                <li><a href="add-salary">Add Salary</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="holiday"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                        </li>
                        <li>
                            <a href="fees"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                        </li>
                        <li>
                            <a href="exam"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="event"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                        </li>
                        <li>
                            <a href="time-table"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>
                        <li>
                            <a href="library"><i class="fas fa-book"></i> <span>Library</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="blog">All Blogs</a></li>
                                <li><a href="add-blog">Add Blog</a></li>
                                <li><a href="edit-blog">Edit Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="blog">All Blogs</a></li>
                                <li><a href="add-blog">Add Blog</a></li>
                                <li><a href="edit-blog">Edit Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login">Login</a></li>
                                <li><a href="register">Register</a></li>
                                <li><a href="forgot-password">Forgot Password</a></li>
                                <li><a href="error-404">Error Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Others</span>
                        </li>
                        <li>
                            <a href="sports"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                        </li>
                        <li>
                            <a href="hostel"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                        </li>
                        <li>
                            <a href="transport"><i class="fas fa-bus"></i> <span>Transport</span></a>
                        </li>
                        <li class="menu-title">
                            <span>UI Interface</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="alerts">Alerts</a></li>
                                <li><a href="accordions">Accordions</a></li>
                                <li><a href="avatar">Avatar</a></li>
                                <li><a href="badges">Badges</a></li>
                                <li><a href="buttons">Buttons</a></li>
                                <li><a href="buttongroup">Button Group</a></li>
                                <li><a href="breadcrumbs">Breadcrumb</a></li>
                                <li><a href="cards">Cards</a></li>
                                <li><a href="carousel">Carousel</a></li>
                                <li><a href="dropdowns">Dropdowns</a></li>
                                <li><a href="grid">Grid</a></li>
                                <li><a href="images">Images</a></li>
                                <li><a href="lightbox">Lightbox</a></li>
                                <li><a href="media">Media</a></li>
                                <li><a href="modal">Modals</a></li>
                                <li><a href="offcanvas">Offcanvas</a></li>
                                <li><a href="pagination">Pagination</a></li>
                                <li><a href="popover">Popover</a></li>
                                <li><a href="progress">Progress Bars</a></li>
                                <li><a href="placeholders">Placeholders</a></li>
                                <li><a href="rangeslider">Range Slider</a></li>
                                <li><a href="spinners">Spinner</a></li>
                                <li><a href="sweetalerts">Sweet Alerts</a></li>
                                <li><a href="tab">Tabs</a></li>
                                <li><a href="toastr">Toasts</a></li>
                                <li><a href="tooltip">Tooltip</a></li>
                                <li><a href="typography">Typography</a></li>
                                <li><a href="video">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="ribbon">Ribbon</a></li>
                                <li><a href="clipboard">Clipboard</a></li>
                                <li><a href="drag-drop">Drag & Drop</a></li>
                                <li><a href="rating">Rating</a></li>
                                <li><a href="text-editor">Text Editor</a></li>
                                <li><a href="counter">Counter</a></li>
                                <li><a href="scrollbar">Scrollbar</a></li>
                                <li><a href="notification">Notification</a></li>
                                <li><a href="stickynote">Sticky Note</a></li>
                                <li><a href="timeline">Timeline</a></li>
                                <li><a href="horizontal-timeline">Horizontal Timeline</a></li>
                                <li><a href="form-wizard">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chart-apex">Apex Charts</a></li>
                                <li><a href="chart-js">Chart Js</a></li>
                                <li><a href="chart-morris">Morris Charts</a></li>
                                <li><a href="chart-flot">Flot Charts</a></li>
                                <li><a href="chart-peity">Peity Charts</a></li>
                                <li><a href="chart-c3">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome">Fontawesome Icons</a></li>
                                <li><a href="icon-feather">Feather Icons</a></li>
                                <li><a href="icon-ionic">Ionic Icons</a></li>
                                <li><a href="icon-material">Material Icons</a></li>
                                <li><a href="icon-pe7">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline">Simpleline Icons</a></li>
                                <li><a href="icon-themify">Themify Icons</a></li>
                                <li><a href="icon-weather">Weather Icons</a></li>
                                <li><a href="icon-typicon">Typicon Icons</a></li>
                                <li><a href="icon-flag">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs">Basic Inputs </a></li>
                                <li><a href="form-input-groups">Input Groups </a></li>
                                <li><a href="form-horizontal">Horizontal Form </a></li>
                                <li><a href="form-vertical"> Vertical Form </a></li>
                                <li><a href="form-mask"> Form Mask </a></li>
                                <li><a href="form-validation"> Form Validation </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic">Basic Tables </a></li>
                                <li><a href="data-tables">Data Table </a></li>
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
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Add Students</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="students">Student</a></li>
                                    <li class="breadcrumb-item active">Add Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card comman-shadow">
                            <div class="card-body">
                                <form method="post" action="<?= htmlentities((basename($_SERVER['PHP_SELF'], '.php') )) ?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title student-info">Enter Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>First Name <span class="login-danger">*</span></label>
                                                <input class="form-control" name="first_name" type="text" placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Last Name <span class="login-danger">*</span></label>
                                                <input name="last_name" class="form-control" type="text" placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Gender <span class="login-danger">*</span></label>
                                                <select name="gender" class="form-control select">
                                                    <option>Select Gender</option>
                                                    <option>Female</option>
                                                    <option>Male</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input name="dob" class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Date of Registration </label>
                                                <input name="date_of_reg" class="form-control" type="text" placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Religion <span class="login-danger">*</span></label>
                                                <select name="religion" class="form-control select">
                                                    <option>Please Select Religion </option>
                                                    <option>Christian</option>
                                                    <option>Islam</option>
                                                    <!-- <option>Others</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>E-Mail <span class="login-danger">*</span></label>
                                                <input name="email" class="form-control" type="text" placeholder="Enter Email Address">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Phone </label>
                                                <input name="phone_number" class="form-control" type="text" placeholder="Enter Phone Number">
                                            </div>
                                        </div>                                        
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Class <span class="login-danger">*</span></label>
                                                <select name="class" class="form-control select">
                                                    <option disabled selected>Please Select Class </option>
                                                    <option>12</option>
                                                    <option>11</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Guardian Name <span class="login-danger">*</span></label>
                                                <input name="guardian_name" type="text" class="form-control" name="guardian_name" id="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Guardian Phone Number <span class="login-danger">*</span></label>
                                                <input name="guardian_phone_number" class="form-control" type="text" name="guardian_phone" id="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Guardian Address </label>
                                                <input class="form-control" name="guardian_address" type="text" placeholder="Enter Guardian Address">
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="col-12 col-sm-4">
                                            <div class="form-group students-up-files">
                                                <label>Upload Student Photo (150px X 150px)</label>
                                                <div class="uplod">
                                                    <label class="file-upload image-upbtn mb-0">
                                                        Choose File <input type="file">
                                                    </label>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>