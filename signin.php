<?php
session_start();
if (isset($_SESSION['signin'])) {
    if ($_SESSION['signin'] == 1) {
        header('Location: index');
    }
} else if (isset($_SESSION['error_signin'])) {
    $error = $_SESSION['error_signin'];
}
?>
<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECourse - Nền tảng khoá học trực tuyến</title>
    <link rel="shortcut icon" href="./assets/image/image_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/icon/css/all.css" />
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/signin.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <div class="header">
        <div class="header-container container">
            <div class="navbar">
                <a href="/ECourse" class="logo"><img src="./assets/image/image_logo.png" alt="" class="img-logo" /></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/ECourse" class="nav-item--link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about" class="nav-item--link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="course" class="nav-item--link">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact" class="nav-item--link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="signin" class="nav-item--link">Sign in</a>
                        <span>/</span>
                        <a href="signup" class="nav-item--link">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="wapper">
            <div class="form-box login">
                <h2>Login</h2>
                <form action="./backend/auth/signin.php" method="post">
                    <div class="input-box">
                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" placeholder="Password" name="password" required />
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" />Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <?php if (isset($error)) { ?>
                        <span class="signin-error"><?php echo $error ?></span>
                    <?php } ?>
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>
                            Don't have an account?
                            <a href="signup" class="register-link">
                                Create Account</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="image">
            <img src="assets/image/signin/vector.2c8f9b80.png" alt="" />
        </div>
    </div>
    <div class="footer">
        <div class="foo-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-navigation">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380376.2528849214!2d105.47129676578332!3d20.816329378877626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1699368176067!5m2!1svi!2s" width="100%" height="200" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-navigation">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul>
                                <li>
                                    <a href="">Contact Searches</a>
                                </li>
                                <li>
                                    <a href="">Jobs and Vacancies</a>
                                </li>
                                <li>
                                    <a href="">University images</a>
                                </li>
                                <li>
                                    <a href="">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="">Terms and Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-navigation">
                            <h4 class="widget-title">Information About</h4>
                            <ul>
                                <li>
                                    <a href="">Strategic Plan</a>
                                </li>
                                <li>
                                    <a href="">Fees and Funding</a>
                                </li>
                                <li>
                                    <a href="">Museums and collections</a>
                                </li>
                                <li>
                                    <a href="">Statement on Modern Slavery</a>
                                </li>
                                <li>
                                    <a href="">Data privacy / GDPR</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-navigation">
                            <h4 class="widget-title">Security Brand</h4>
                            <ul>
                                <li>
                                    <a href="">Privacy Statement</a>
                                </li>
                                <li>
                                    <a href="">Report Copyright Infringement</a>
                                </li>
                                <li>
                                    <a href="">Report Security Issue</a>
                                </li>
                                <li>
                                    <a href="">Trademark Notice</a>
                                </li>
                                <li>
                                    <a href="">Access Control</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="foo-btm">
            <div class="container">
                <p class="copyright">
                    Copyright © 2023
                    <a href="/ECourse">ECourse</a>
                    . All rights reserved.
                </p>
            </div>
        </div>
    </div>
    <script src="./assets/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/js/jquery-3.7.0.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>