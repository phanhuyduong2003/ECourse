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
    <link rel="stylesheet" href="./assets/icon/css/all.css" />
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <article>
        <header class="header">
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
                        <?php if ($isSignIn == 1 || isset($user_id)) { ?>
                            <li class="nav-item">
                                <a href="#" class="nav-item--link">Xin chào, <?php echo mysqli_fetch_assoc($result)['name'] ?></a>
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
        </header>
        <main>
            <section class="page-feature">
                <div class="container text-center">
                    <h2>Contact</h2>
                    <div class="breadcrumb">
                        <a href="">Home</a>
                        <span>/Contact</span>
                    </div>
                </div>
            </section>
            <section class="give-cmt">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-9 text-center m-auto">
                            <div class="sec-heading">
                                <span class="tagline">CONTACT US</span>
                                <h3 class="sec-title">
                                    If You Have Any Query, Pls Ask Me
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <form class="leave-a-cmt">
                                    <div class="form-cmt">
                                        <p>
                                            Don’t worry ! Your email address will
                                            not be published. Required fields are
                                            marked (*).
                                        </p>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>
                                                        <span>Your Message *</span>
                                                        <textarea name="comment" class="form-control" required aria-required="true" cols="40" rows="6"></textarea>
                                                    </label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>
                                                        <span>Your First Name *</span>
                                                        <input type="text" name="name" required aria-required="true" class="form-control" />
                                                    </label>
                                                    <label>
                                                        <span>Your Last Name *</span>
                                                        <input type="text" name="name" required aria-required="true" class="form-control" />
                                                    </label>
                                                    <label>
                                                        <span>Your Email *</span>
                                                        <input type="text" name="email" required aria-required="true" class="form-control" />
                                                    </label>
                                                    <label>
                                                        <span>Your Phone </span>
                                                        <input type="tel" name="Phone" class="form-control" />
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-default">
                                                        Send Message
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <aside class="sidebar">
                                <div class="widget contact-info">
                                    <h3 class="widget-title">Contact info</h3>
                                    <p>
                                        We aim to reply within three working days, but if your question requires more detailed information or is of a technical nature, our response time may be longer
                                    </p>
                                    <div class="">
                                        <h6>Location Info</h6>
                                        <span>Address line 1, Yen Nghia - Ha Dong - Hanoi</span>
                                    </div>
                                    <div class="">
                                        <h6>Hotline numbers</h6>
                                        <a href="">+123 4567 8912</a>
                                        <a href="">+312 2134 8121</a>
                                    </div>
                                    <div class="">
                                        <h6>Email Us</h6>
                                        <a href="">help@example.com</a>
                                        <a href="">youremail@domain.com</a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
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
                                <h4 class="widget-title">
                                    Information About
                                </h4>
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
                                        <a href="">Report Copyright
                                            Infringement</a>
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
                        Copyright © 2019
                        <a href="">themeies.com</a>
                        . All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </article>
</body>

</html>