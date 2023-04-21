
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
                <li class="nav-item dropdown noti-dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-01.svg" alt="">
                    </a>
                    <div class="dropdown-menu ">
                        <div class="noti-content">
                            <div>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                            </div>
                        </div>
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
                    <a href="#" class="nav-link header-nav-list win-maximize">
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
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index" class="active">Admin Dashboard</a></li>
                                <li><a href="teacher-dashboard">Teacher Dashboard</a></li>
                                <li><a href="student-dashboard">Student Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students">Student List</a></li>
                                <li><a href="student-details">Student View</a></li>
                                <li><a href="add-student">Student Add</a></li>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Admin!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Students</h6>
                                        <h3>50055</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Awards</h6>
                                        <h3>50+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Department</h6>
                                        <h3>30+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Revenue</h6>
                                        <h3>$505</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Overview</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Teacher</li>
                                            <li><span class="circle-green"></span>Student</li>
                                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apexcharts-area"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Number of Students</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Girls</li>
                                            <li><span class="circle-green"></span>Boys</li>
                                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill student-space comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title">Star Students</h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table star-student table-hover table-center table-borderless table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Marks</th>
                                                <th class="text-center">Percentage</th>
                                                <th class="text-end">Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile">
                                                        <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" width="25" alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                                <td class="text-end">
                                                    <div>2019</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1245</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile">
                                                        <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="25" alt="Star Students">
                                                        Jolie Hoskins
                                                    </a>
                                                </td>
                                                <td class="text-center">1195</td>
                                                <td class="text-center">99.5%</td>
                                                <td class="text-end">
                                                    <div>2018</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1625</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile">
                                                        <img class="rounded-circle" src="assets/img/profiles/avatar-03.jpg" width="25" alt="Star Students">
                                                        Pennington Joy
                                                    </a>
                                                </td>
                                                <td class="text-center">1196</td>
                                                <td class="text-center">99.6%</td>
                                                <td class="text-end">
                                                    <div>2017</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2516</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile">
                                                        <img class="rounded-circle" src="assets/img/profiles/avatar-04.jpg" width="25" alt="Star Students">
                                                        Millie Marsden
                                                    </a>
                                                </td>
                                                <td class="text-center">1187</td>
                                                <td class="text-center">98.2%</td>
                                                <td class="text-end">
                                                    <div>2016</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile">
                                                        <img class="rounded-circle" src="assets/img/profiles/avatar-05.jpg" width="25" alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                                <td class="text-end">
                                                    <div>2015</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title ">Student Activity </h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="activity-groups">
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="assets/img/icons/award-icon-01.svg" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>1st place in "Chess”</h4>
                                            <h5>John Doe won 1st place in "Chess"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>1 Day ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="assets/img/icons/award-icon-02.svg" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Participated in "Carrom"</h4>
                                            <h5>Justin Lee participated in "Carrom"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="assets/img/icons/award-icon-03.svg" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Internation conference in "St.John School"</h4>
                                            <h5>Justin Leeattended internation conference in "St.John School"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2 Week ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards mb-0">
                                        <div class="award-boxs">
                                            <img src="assets/img/icons/award-icon-04.svg" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Won 1st place in "Chess"</h4>
                                            <h5>John Doe won 1st place in "Chess"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>3 Day ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill fb sm-box">
                            <div class="social-likes">
                                <p>Like us on facebook</p>
                                <h6>50,095</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-01.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill twitter sm-box">
                            <div class="social-likes">
                                <p>Follow us on twitter</p>
                                <h6>48,596</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-02.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill insta sm-box">
                            <div class="social-likes">
                                <p>Follow us on instagram</p>
                                <h6>52,085</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-03.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill linkedin sm-box">
                            <div class="social-likes">
                                <p>Follow us on linkedin</p>
                                <h6>69,050</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-04.svg" alt="Social Icon">
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

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>