<?php
include_once './backend/db_conn.php';

$sql_course = 'SELECT * FROM courses';
$result_course = mysqli_query($conn, $sql_course);
$num_course = mysqli_num_rows($result_course);

$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$course_per_page = 3;
$total_page = ceil($num_course / $course_per_page);
$offset = $course_per_page * ($page - 1);


$sql = "SELECT * from courses LIMIT $course_per_page OFFSET $offset";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die(mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECourse - Nền tảng khoá học trực tuyến</title>
    <link rel="shortcut icon" href="./assets/image/image_icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/icon/css/all.css" />
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/course.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <div class="wrapper">
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
        <div class="content">
            <div class="course-banner">
                <div class="course-banner--text">
                    <h2 class="course-text--title">Courses</h2>
                    <div class="course-text--breadcrumb">
                        <a href="index.html">Home</a>
                        <span>/ Courses</span>
                    </div>
                </div>
            </div>
            <ul class="course-list container">
                <?php foreach ($result as $course) { ?>
                    <li class="course-item">
                        <div class="course-item--image">
                            <img src="#" alt="" class="img-course" />
                        </div>
                        <div class="course-item--info">
                            <a href="#" class="course-info--title">
                                <?php echo $course['name'] ?>
                            </a>
                            <p class="course-info--description">
                                <?php echo $course['description'] ?>
                            </p>
                            <div class="course-info--enroll">
                                <div class="course-enroll--rating">
                                    <div class="course-rating--list">
                                        <i class="fa-light fa-star"></i><i class="fa-light fa-star"></i><i class="fa-light fa-star"></i><i class="fa-light fa-star"></i><i class="fa-light fa-star"></i>
                                    </div>
                                    <span class="course-rating--view"><?php echo $course['views'] ?> views</span>
                                </div>
                                <button class="course-enroll--button">
                                    ENROLL NOW
                                </button>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <ul class="course-list--pagination container">
                <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                    <li><a href="?page=<?php echo $i ?>" <?php echo ($i == $page) ? 'class="current-page"' : ''; ?>><?php echo $i ?></a></li>
                <?php } ?>
                <?php if ($page < $total_page) { ?>
                    <li><a href="?page=<?php echo $page + 1 ?>">Next</a></li>
                <?php } else { ?>
                    <li><button>Next</button></li>
                <?php } ?>
            </ul>
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
                        Copyright © 2023
                        <a href="/ECourse">ECourse</a>
                        . All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/js/jquery-3.7.0.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>