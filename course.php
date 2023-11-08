<?php
include_once './backend/db_conn.php';
$sql = "SELECT * from courses";
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
                    <a href="index.html" class="logo"><img src="./assets/image/image_logo.png" alt="" class="img-logo" /></a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.html" class="nav-item--link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-item--link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="course.html" class="nav-item--link">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-item--link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="signin.html" class="nav-item--link">Sign in</a>
                            <span>/</span>
                            <a href="signup.html" class="nav-item--link">Sign up</a>
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
                            <img src=" " alt="" class="img-course" />
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
            <div class="course-list--pagination container"></div>
        </div>
    </div>
    <script src="./assets/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/js/jquery-3.7.0.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>