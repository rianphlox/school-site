<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/school/config/DB.php';    

    $db = new DB();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // check if username exists
        $sql = "SELECT id, username, password FROM student_auth Where username = ?";
        $stmt = $db->conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->bind_result($id, $userID, $pass);
        $stmt->fetch();
        if (!$id) {
            echo "No user found";
        } else {
            // check if user and password is correct
            if ($username == $userID && $password == $pass) {
                // echo "User exists";
                header('location: /school/student-details?h=s');
            }
        }
    }


?>

<?php include '../head.php' ?>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="/school/assets/img/login.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Welcome to Preskool</h1>
                            <p class="account-subtitle">Need an account? <a href="register">Sign Up</a></p>
                            <h2>Sign in</h2>

                            <form method="POST" action="<?= htmlentities((basename($_SERVER['PHP_SELF'], '.php') )) ?>">
                                <div class="form-group">
                                    <label>Username <span class="login-danger">*</span></label>
                                    <input class="form-control" name="username" type="text">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input name="password" class="form-control pass-input" type="password">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <div class="forgotpass">
                                    <div class="remember-me">
                                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                            <input type="checkbox" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <a href="forgot-password">Forgot Password?</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>
                                </div>
                            </form>

                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                            <div class="social-login">
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/school/assets/js/jquery-3.6.0.min.js"></script>

    <script src="/school/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/school/assets/js/feather.min.js"></script>

    <script src="/school/assets/js/script.js"></script>
</body>

</html>