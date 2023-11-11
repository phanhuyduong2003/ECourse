<?php
include_once './backend/db_conn.php';
session_start();
$isSignIn = 0;
if (isset($_SESSION['signin'])) {
    if ($_SESSION['signin'] == 1) {
        $isSignIn = 1;
    }
}
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);
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
    <link rel="stylesheet" href="./assets/css/about.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <div class="header">
        <div class="header-container container">
            <div class="navbar">
                <a href="/ECourse/index" class="logo"><img src="./assets/image/image_logo.png" alt="" class="img-logo" /></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/ECourse/index" class="nav-item--link">Home</a>
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
                    <?php if ($isSignIn == 1 || isset($user_id)) { ?>
                        <li class="nav-item">
                            <a href="#" class="nav-item--link">Hello, <?php echo mysqli_fetch_assoc($result)['name'] ?></a>
                            <span>/</span>
                            <a href="backend/auth/signout" class="nav-item--link">Sign out</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="signin" class="nav-item--link">Sign in</a>
                            <span>/</span>
                            <a href="signup" class="nav-item--link">Sign up</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="sec-heading">
            <span class="tagline">About us</span>
            <h3 class="sec-title text center">
                Educating and empowering the community
            </h3>
        </div>
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-sm-6">
                    <div class="entry-content">
                        <h3>
                            What is ECourse?
                        </h3>
                        <p>
                            ECourse is a learning management system providing a platform for e-learning and it helps the various educators considerably in conceptualizing the various courses, course structures and curriculum thus facilitating interaction with online students.
                        </p>
                        <h6>
                            Pedagogical approach
                        </h6>
                        <p>
                            The stated philosophy of Ecourse includes a constructivist and social constructionist approach to education, emphasizing that learners (and not just teachers) can contribute to the educational experience. Using these pedagogical principles, Ecourse provides an environment for learning communities.
                        </p>
                        <p>
                            Monitor your learners with completion tracking and personalised learning plans, built from competency frameworks and learning objectives.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="video-box"><img src="assets/image/about/video-bg.bee56b7d.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <div class="certification">
            <div class="sec-heading">
                <h3 class="sec-title">Our Sponsors</h3>
            </div>
            <div class="container">
                <div class="container text-center my-3">
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel slide carousel-sponsors" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item carousel-sponsors--item active" data-bs-interval="4000">
                                    <div class="col-md-3">
                                        <div class="card" style="margin-right: 25px">
                                            <div class="card-img">
                                                <img src="./assets/image/about/1.png" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item carousel-sponsors--item" data-bs-interval="4000">
                                    <div class="col-md-3">
                                        <div class="card" style="margin-right: 25px">
                                            <div class="card-img">
                                                <img src="./assets/image/about/2.png" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item carousel-sponsors--item" data-bs-interval="4000">
                                    <div class="col-md-3">
                                        <div class="card" style="margin-right: 25px">
                                            <div class="card-img">
                                                <img src="./assets/image/about/3.png" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item carousel-sponsors--item" data-bs-interval="4000">
                                    <div class="col-md-3">
                                        <div class="card" style="margin-right: 25px">
                                            <div class="card-img">
                                                <img src="./assets/image/about/4.png" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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