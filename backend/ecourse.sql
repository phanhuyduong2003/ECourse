-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2023 at 02:12 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `views` int NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `views`, `image`) VALUES
(1, 'HTML5 cho người mới bắt đầu', 'Bạn đã bao giờ tự hỏi về cách xây dựng và thiết kế trang web? Khoá học \"HTML5 cho Người Mới Bắt Đầu\" là sự lựa chọn hoàn hảo cho những người muốn tìm hiểu về cách sử dụng ngôn ngữ lập trình HTML5 để tạo các trang web đẹp và hiệu quả. HTML5 là một phiên bản cập nhật của ngôn ngữ HTML (Hypertext Markup Language), và nó mang đến nhiều tính năng và khả năng mới giúp bạn tạo ra các trang web tương tác và hấp dẫn.', 100, ''),
(2, 'CSS cho người mới bắt đầu', 'Bạn đã học HTML và muốn biết cách biến trang web của bạn trở nên đẹp và thú vị hơn? Khoá học \"CSS cho Người Mới Bắt Đầu\" là lựa chọn lý tưởng để bạn tìm hiểu về Cascading Style Sheets (CSS), một ngôn ngữ lập trình phía máy khách mạnh mẽ để thiết kế và định dạng trang web của bạn.', 323, ''),
(3, 'JavaScript cho người mới bắt đầu', 'Bạn muốn học cách tạo các trang web động, tương tác và thông minh? Khoá học \"JavaScript cho Người Mới Bắt Đầu\" là sự lựa chọn tuyệt vời để bạn bắt đầu với ngôn ngữ lập trình JavaScript, một công cụ mạnh mẽ để thêm tính năng tương tác vào trang web của bạn.', 204, ''),
(4, 'Học lập trình Python từ con số 0', 'Bạn muốn học lập trình, nhưng chưa bao giờ có kinh nghiệm về nó? Khoá học \"Lập Trình Python từ Con Số 0\" là sự lựa chọn hoàn hảo cho bạn. Python, một ngôn ngữ lập trình dễ học và mạnh mẽ. Khoá học này hứa hẹn sẽ là cánh cửa hoàn hảo để bạn bắt đầu hành trình lập trình của mình.', 194, ''),
(5, 'Tổng quan về học máy', 'Bạn muốn hiểu về lĩnh vực học máy và tầm quan trọng của nó trong thế giới công nghệ ngày nay? Khoá học \"Tổng Quan về Học Máy\" là lựa chọn lý tưởng để bạn tìm hiểu về khái niệm, phạm vi và ứng dụng của học máy.', 148, ''),
(6, 'Học lập trình Backend với Laravel 9', 'Bạn muốn trở thành một lập trình viên backend chuyên nghiệp và xây dựng các ứng dụng web mạnh mẽ? Khoá học \"Học Lập Trình Backend với Laravel 9\" là sự lựa chọn tuyệt vời để bạn tìm hiểu về Laravel, một trong những framework phát triển ứng dụng web PHP phổ biến nhất và mạnh mẽ nhất.', 187, ''),
(7, 'Xây dựng web full-stack với ReactJS và NodeJS', 'Bạn muốn học cách xây dựng các ứng dụng web hoàn chỉnh từ phía frontend đến phía backend? Khoá học \"Xây Dựng Web Full-Stack với ReactJS và Node.js\" là lựa chọn tuyệt vời cho bạn. Khoá học này sẽ hướng dẫn bạn thông qua quá trình xây dựng ứng dụng web full-stack sử dụng hai công nghệ phổ biến và mạnh mẽ: ReactJS cho phía frontend và Node.js cho phía backend.', 423, ''),
(8, 'Xây dựng RESTful API bằng Node.js', 'Bạn muốn học cách xây dựng các ứng dụng web hoàn chỉnh từ phía frontend đến phía backend? Khoá học \"Xây Dựng Web Full-Stack với ReactJS và NodeJS\" là lựa chọn tuyệt vời cho bạn. Khoá học này sẽ hướng dẫn bạn thông qua quá trình xây dựng ứng dụng web full-stack sử dụng hai công nghệ phổ biến và mạnh mẽ: ReactJS cho phía frontend và NodeJS cho phía backend.', 323, '');

-- --------------------------------------------------------

--
-- Table structure for table `course_detail`
--

DROP TABLE IF EXISTS `course_detail`;
CREATE TABLE IF NOT EXISTS `course_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `overview` text COLLATE utf8mb4_general_ci NOT NULL,
  `author` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `author_avt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` double NOT NULL,
  `objective` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_detail`
--

INSERT INTO `course_detail` (`id`, `course_id`, `overview`, `author`, `author_avt`, `price`, `objective`) VALUES
(1, 1, 'Khoá học cung cấp các kiến thức cơ bản về HTML5 giúp người học hiểu các thẻ và chức năng của chúng.', 'Nguyễn Hoàng Hưng', '', 200000, '1. Cú pháp HTML5: Bạn sẽ tìm hiểu cách viết mã HTML5 đúng cách và cách sử dụng các thẻ để định dạng và cấu trúc trang web.\r\n<br/>\r\n2. Đối tượng và Multimédia: Khoá học sẽ giới thiệu bạn với các đối tượng và phương tiện đa phương tiện như hình ảnh, video và âm thanh, và cách nhúng chúng vào trang web.\r\n<br/>\r\n3. Biểu mẫu và Hộp thoại: Bạn sẽ học cách tạo biểu mẫu để lấy thông tin từ người dùng và tạo hộp thoại thông báo.\r\n<br/>\r\n4. Tích hợp CSS: Chúng tôi cũng sẽ giới thiệu cách sử dụng CSS (Cascading Style Sheets) để tạo trang web đẹp mắt và thú vị.\r\n<br/>\r\n5. Tiêu chuẩn Web và Khả năng tương tác: HTML5 hỗ trợ các tiêu chuẩn web và khả năng tương tác, và bạn sẽ học cách sử dụng chúng để tạo trang web đáng chú ý.\r\n<br/>\r\n6. Tương tác với JavaScript: Khoá học sẽ giới thiệu bạn với JavaScript, ngôn ngữ lập trình phía máy khách mạnh mẽ, để tạo các chức năng tương tác trên trang web của bạn.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
