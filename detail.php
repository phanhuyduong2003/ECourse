<?php
include_once './backend/db_conn.php';

$course_id = $_GET['id'];

$sql = "SELECT *, courses.name AS course_name FROM course_detail JOIN courses ON course_detail.course_id = courses.id JOIN course_author ON course_detail.author_id = course_author.id WHERE course_detail.id = $course_id";
// die($sql);
$result = mysqli_query($conn, $sql);
// var_dump($result);
if (!$result) {
    die(mysqli_error($conn));
}
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
    $result_user = mysqli_query($conn, $sql);
}

$sql_content = "SELECT * FROM course_curriculum_title JOIN course_curriculum_content ON course_curriculum_title.id = course_curriculum_content.curriculum_id";
$result_content = mysqli_query($conn, $sql_content);
// foreach ($result_content as $content_item) {
//     echo htmlspecialchars($content_item['name_item']);
// }
// var_dump(mysqli_fetch_all($result_content));
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
    <link rel="stylesheet" href="./assets/css/detail.css">
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
                        <?php if ($isSignIn == 1 || isset($user_id)) { ?>
                            <li class="nav-item">
                                <a href="#" class="nav-item--link">Hello, <?php echo mysqli_fetch_assoc($result_user)['name'] ?></a>
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
        <div class="content">
            <div class="course-banner">
                <div class="course-banner--text">
                    <h2 class="course-text--title">Courses</h2>
                    <div class="course-text--breadcrumb">
                        <a href="/ECourse">Home</a>
                        <span>/ Course Detail</span>
                    </div>
                </div>
            </div>
            <div class="course-detail">
                <div class="course-detail--container container">

                    <div class="course-detail--main">
                        <?php foreach ($result as $detail) { ?>
                            <div class="course-main--image"><img src=".<?php echo $detail['image'] ?>" alt="" class="img-detail"></div>
                            <div class="course-main--info">
                                <h3 class="course-info--title"><?php echo $detail['course_name'] ?></h3>
                                <p class="course-info--description"><?php echo $detail['description'] ?></p>
                                <span class="course-info--author">By <a href="#"><?php echo $detail['name'] ?></a></span>
                                <span class="course-info--views"><?php echo $detail['views'] ?> views</span>
                            </div>
                            <div class="course-main--curriculum">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill" data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview" aria-selected="true">Tổng quan</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-curriculum-tab" data-bs-toggle="pill" data-bs-target="#pills-curriculum" type="button" role="tab" aria-controls="pills-curriculum" aria-selected="false">Chương trình</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-objective-tab" data-bs-toggle="pill" data-bs-target="#pills-objective" type="button" role="tab" aria-controls="pills-objective" aria-selected="false">Mục tiêu</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active tab-pane--overview" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab" tabindex="0">
                                        <h2 class="tab-overview--title">Khoá học bao gồm</h2>
                                        <ul class="tab-overview--list">
                                            <li><i class="fa-thin fa-camera-movie"></i><span>Video thời lượng 48 giờ</span></li>
                                            <li><i class="fa-thin fa-clock"></i><span>Truy cập trọn đời</span></li>
                                            <li><i class="fa-thin fa-business-time"></i><span>Học mọi lúc mọi nơi</span></li>
                                            <li><i class="fa-thin fa-file-certificate"></i><span>Chứng chỉ hoàn thành khoá học</span></li>
                                        </ul>
                                        <h2 class="tab-overview--title">Mô tả khoá học</h2>
                                        <p class="tab-overview--description"><?php echo $detail['overview'] ?></p>
                                    </div>
                                    <ul class="tab-pane fade tab-pane--curriculum" id="pills-curriculum" role="tabpanel" aria-labelledby="pills-curriculum-tab" tabindex="0">
                                        <?php
                                        $sql_curriculum = "SELECT *, course_curriculum_title.id AS titleID FROM course_curriculum_title JOIN courses ON course_curriculum_title.course_id = courses.id WHERE course_id = $course_id";
                                        $result_curriculum = mysqli_query($conn, $sql_curriculum);
                                        foreach ($result_curriculum as $curriculum_title) {
                                        ?>
                                            <li class="tab-curriculum--item">
                                                <div data-bs-toggle="collapse" data-bs-target="#curriculum-collapse-<?php echo $curriculum_title['titleID'] ?>" aria-expanded="false" aria-controls="curriculum-collapse-<?php echo $curriculum_title['titleID'] ?>">
                                                    <?php echo $curriculum_title['titleID'] . '. ' . $curriculum_title['title'] ?> </div>
                                                <div class="collapse" id="curriculum-collapse-<?php echo $curriculum_title['titleID'] ?>">
                                                    <ul class="card card-body">
                                                        <?php
                                                        $title_id = $curriculum_title['titleID'];
                                                        $sql_content = "SELECT * FROM course_curriculum_content WHERE title_id = $title_id";
                                                        $result_content = mysqli_query($conn, $sql_content);
                                                        foreach ($result_content as $content_item) {
                                                        ?>
                                                            <li class="card-item">
                                                                <i class="fa-thin fa-caret-right"></i>
                                                                <span><?php echo htmlspecialchars($content_item['name_item']) ?></span>
                                                            </li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <div class="tab-pane fade tab-pane--objective" id="pills-objective" role="tabpanel" aria-labelledby="pills-objective-tab" tabindex="0">
                                        <h2 class="tab-objective--title">Bạn sẽ học từ khoá học:</h2>
                                        <p class="tab-objective--detail"><?php echo $detail['objective'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="course-detail--side">
                        <div class="course-side--author">
                            <div class="course-author--avt"><img src="<?php echo $detail['avt'] ?>" alt="" class="img-avt"></div>
                            <a href="#" class="course-author--name"><?php echo $detail['name'] ?></a>
                            <span class="course-author--work"><?php echo $detail['work'] ?></span>
                            <ul class="course-author--social">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="course-side--buy">
                            <div class="course-buy--price">
                                <h3 class="course-price--new"><?php echo number_format($detail['price'] * 0.7, 0, '', '.') ?>đ</h3>
                                <span class="course-price--old"><?php echo number_format($detail['price'], 0, '', '.') ?>đ</span>
                            </div>
                            <div class="course-buy--time">
                                <i class="fa-thin fa-timer"></i>
                                <span class="course-time--remain">30% off for 23 hours</span>
                            </div>
                            <button class="course-buy--addcart">ADD TO CART</button>
                            <button class="course-buy--buynow">BUY NOW</button>
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