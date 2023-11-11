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
    <link rel="stylesheet" href="./assets/css/index.css" />
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
            <section class="banner">
                <div class="vector-img">
                    <img src="./assets/image/image_index/home_pic1.png" alt="" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6">
                            <div class="banner-content">
                                <h2>
                                    <span>EDUCATE!</span>
                                    SMART IS GREAT
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Ullam dicta at
                                    aliquam...
                                </p>
                                <a href="#" class="btn btn-default">
                                    Become a totur
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features boxed">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sfBox">
                                <i class="fas fa-drafting-compass"></i>
                                <strong>100,000 online courses</strong>
                                <span>Explore a variety of fresh topics</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sfBox">
                                <i class="far fa-user-circle"></i>
                                <strong>Instant Expert instruction</strong>
                                <span>Find the right instructor for you</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sfBox">
                                <i class="fas fa-history"></i>
                                <strong>Lifetime course access</strong>
                                <span>Learn on your schedule anytime</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="categories bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-9 text-center m-auto">
                            <div class="sec-heading">
                                <span class="tagline">Top categories</span>
                                <h3 class="sec-title">
                                    Pick the right category Build your
                                    career
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="icon-list-block">
                                <img src="./assets/image/image_index/icon_categories_1.png" alt="" />
                                <span>IT & Software</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="icon-list-block">
                                <img src="./assets/image/image_index/icon_categories_2.png" alt="" />
                                <span>Data science</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="icon-list-block">
                                <img src="./assets/image/image_index/icon_categories_3.png" alt="" />
                                <span>Development</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="icon-list-block">
                                <img src="./assets/image/image_index/icon_categories_4.png" alt="" />
                                <span>Graphics design</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="icon-list-block">
                                <img src="./assets/image/image_index/icon_categories_5.png" alt="" />
                                <span>Marketing</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="icon-list-block">
                                <img src="./assets/image/image_index/icon_categories_6.png" alt="" />
                                <span>Music</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="icon-list-block">
                                <img src="./assets/image/image_index/icon_categories_7.png" alt="" />
                                <span>Photography</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="icon-list-block">
                                <img src="./assets/image/image_index/icon_categories_8.png" alt="" />
                                <span>Self Development</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="serices">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="iconBox">
                                <img src="./assets/image/image_index/icon_services.png" alt="" class="img-icon" />
                                <h5>
                                    <a href="">Worldwide Service</a>
                                </h5>
                                <p>
                                    Torem ipsum dolor sit amet, consectetur
                                    adiising elit, sed do eiusmod tempor
                                    incididunt.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ullam
                                    dicta at aliquam...
                                </p>
                                <a href="" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iconBox">
                                <img src="./assets/image/image_index/icon_services.png" alt="" class="img-icon" />
                                <h5>
                                    <a href="">Qualified Trainers</a>
                                </h5>
                                <p>
                                    Torem ipsum dolor sit amet, consectetur
                                    adiising elit, sed do eiusmod tempor
                                    incididunt.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ullam
                                    dicta at aliquam...
                                </p>
                                <a href="" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iconBox">
                                <img src="./assets/image/image_index/icon_services.png" alt="" class="img-icon" />
                                <h5>
                                    <a href="">Job Opputunity</a>
                                </h5>
                                <p>
                                    Torem ipsum dolor sit amet, consectetur
                                    adiising elit, sed do eiusmod tempor
                                    incididunt.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ullam
                                    dicta at aliquam...
                                </p>
                                <a href="" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="work">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-9 text-center m-auto">
                            <div class="sec-heading">
                                <span class="tagline">WORK PROCESS</span>
                                <h3 class="sec-title">
                                    We Work Best When We Work Together
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-5 mb-lg-0">
                                <div class="process">
                                    <h3>for student</h3>
                                    <ul>
                                        <li>
                                            <span class="icon-bg">
                                                <img src="./assets/image/image_index/icon_bg_work.png" alt="" class="icon" />
                                            </span>
                                            <h5>
                                                <a href="">Free Registration</a>
                                            </h5>
                                            <p>
                                                Their over fly creature
                                                first fish fruitful fourth
                                                our very thing said man our
                                                land
                                            </p>
                                        </li>
                                        <li>
                                            <span class="icon-bg">
                                                <img src="./assets/image/image_index/icon_work2.png" alt="" class="icon" />
                                            </span>
                                            <h5>
                                                <a href="">Find Your Lesson</a>
                                            </h5>
                                            <p>
                                                Their over fly creature
                                                first fish fruitful fourth
                                                our very thing said man our
                                                land
                                            </p>
                                        </li>
                                        <li>
                                            <span class="icon-bg">
                                                <img src="./assets/image/image_index/icon_work3.png" alt="" class="icon" />
                                            </span>
                                            <h5>
                                                <a href="">Schedule A Lesson</a>
                                            </h5>
                                            <p>
                                                Their over fly creature
                                                first fish fruitful fourth
                                                our very thing said man our
                                                land
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="process">
                                    <h3>for Tutorasfa</h3>
                                    <ul>
                                        <li>
                                            <span class="icon-bg">
                                                <img src="./assets/image/image_index/icon_bg_work.png" alt="" class="icon" />
                                            </span>
                                            <h5>
                                                <a href="">Free Registration</a>
                                            </h5>
                                            <p>
                                                Their over fly creature
                                                first fish fruitful fourth
                                                our very thing said man our
                                                land
                                            </p>
                                        </li>
                                        <li>
                                            <span class="icon-bg">
                                                <img src="./assets/image/image_index/icon_work4.png" alt="" class="icon" />
                                            </span>
                                            <h5>
                                                <a href="">Create Tutor Profile</a>
                                            </h5>
                                            <p>
                                                Their over fly creature
                                                first fish fruitful fourth
                                                our very thing said man our
                                                land
                                            </p>
                                        </li>
                                        <li>
                                            <span class="icon-bg">
                                                <img src="./assets/image/image_index/icon_work5.png" alt="" class="icon" />
                                            </span>
                                            <h5>
                                                <a href="">Schedule A Lesson</a>
                                            </h5>
                                            <p>
                                                Their over fly creature
                                                first fish fruitful fourth
                                                our very thing said man our
                                                land
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-9 text-center m-auto">
                            <div class="sec-heading">
                                <span class="tagline text-white">Testimonials</span>
                                <h3 class="sec-title text-white">
                                    What Our Users Say About Us
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row r-carousel">
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <div class="single-testimonial">
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut
                                            labore eco dolore magna aliqua.
                                            Quis ipsum suspendisse ultrices
                                            gravida. Risus commodo viverra
                                            maecenas accumsan lacus vel
                                            facilisis.
                                        </p>
                                        <div class="testimonial-user">
                                            <img src="./assets/image/image_index/avt1.png" alt="" class="avatar-small circle" />
                                            <strong>Kerra Monie</strong>
                                        </div>
                                    </div>
                                    <div class="carousel-caption"></div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="single-testimonial">
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt .
                                            Quis ipsum suspendisse ultrices
                                            gravida. Risus commodo viverra
                                            maecenas accumsan lacus vel
                                            facilisis.Suspendisse ultrices
                                            gravida.
                                        </p>
                                        <div class="testimonial-user">
                                            <img src="./assets/image/image_index/comment-avatar-01.jpg" alt="" class="avatar-small circle" />
                                            <p>
                                                <strong>Ana Bazen</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-caption"></div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="single-testimonial">
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut
                                            labore eco dolore magna aliqua.
                                            Quis ipsum. Risus commodo
                                            viverra maecenas accumsan lacus
                                            vel facilisissit amet,
                                            consectetur adipiscing.
                                        </p>
                                        <div class="testimonial-user">
                                            <img src="./assets/image/image_index/comment-avatar-03.jpg" alt="" class="avatar-small circle" />
                                            <p>
                                                <strong>Hellen Fores</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-caption"></div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="single-testimonial">
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut
                                            labore eco dolore magna aliqua.
                                            Quis ipsum suspendisse ultrices
                                            gravida. Risus commodo viverra
                                            maecenas. Quis ipsum suspendisse
                                            ultrices
                                        </p>
                                        <div class="testimonial-user">
                                            <img src="./assets/image/image_index/comment-avatar-02.jpg" alt="" class="avatar-small circle" />
                                            <p>
                                                <strong>Kebinz Haze</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-caption"></div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
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
    <script src="./assets/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/js/jquery-3.7.0.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>