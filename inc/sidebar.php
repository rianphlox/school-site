

<?php $file_name = basename($_SERVER['PHP_SELF'], '.php')  ?>
<!-- <?= $file_name ?> -->

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <?php $d_page = ['index', 'teacher-dashboard', 'student-dashboard'] ?>
                <li class="submenu <?= in_array($file_name, $d_page) ? 'active' : '' ?>">
                    <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="/" class="<?= $file_name == 'index' ? 'active' : '' ?>">Admin Dashboard</a></li>
                        <li><a href="teacher-dashboard" class="<?= $file_name == 'teacher-dashboard' ? 'active' : '' ?>">Teacher Dashboard</a></li>
                        <li><a href="student-dashboard">Student Dashboard</a></li>
                    </ul>
                </li>
                <?php $s_page = ['student-details', 'student-details', 'edit-student'] ?>
                <li class="submenu <?= in_array($file_name, $s_page) ? 'active': '' ?>">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="students" class="<?= $file_name == 'students' ? 'active' : '' ?>">Student List</a></li>
                        <li><a href="student-details" class="<?= $file_name == 'student-details' ? 'active' : '' ?>">Student View</a></li>
                        <li><a href="edit-student" class="<?= $file_name == 'edit-student' ? 'active' : '' ?>">Student Edit</a></li>
                        <!-- <li><a href="add-student">Student Add</a></li> -->
                    </ul>
                </li>

                <?php if($status == 'teacher'): ?>
                    <?php $t_page = ['teachers', 'teacher-details', 'add-teacher', 'edit-teacher', 'add-student'] ?>
                    <li class="submenu <?= in_array($file_name, $t_page) ? 'active' : '' ?>">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="teachers" class="<?= $file_name == 'teachers' ? 'active' : '' ?>">Teacher List</a></li>
                            <li><a href="teacher-details" class="<?= $file_name == 'teacher-details' ? 'active' : '' ?>">Teacher View</a></li>
                            <li><a href="add-teacher" class="<?= $file_name == 'add-teacher' ? 'active' : '' ?>">Teacher Add</a></li>
                            <li><a href="edit-teacher" class="<?= $file_name == 'edit-teacher' ? 'active' : '' ?>">Edit Teacher Profile</a></li>
                            <li><a href="add-student" class="<?= $file_name == 'add-student' ? 'active' : '' ?>">Add Student</a></li>
                        </ul>
                    </li>
                <?php endif ?>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="subjects">Subject List</a></li>
                        <li><a href="add-subject">Subject Add</a></li>
                        <li><a href="edit-subject">Subject Edit</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <li>
                    <a href="fees"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                </li>
                <li>
                    <a href="exam"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                </li>
                <li>
                    <!-- <a href="settings"><i class="fas fa-cog"></i> <span>Settings</span></a> -->
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
                    </ul>
                </li>



            </ul>
        </div>
    </div>
</div>