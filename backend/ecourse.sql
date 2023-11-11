-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2023 at 12:24 PM
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
(1, 'HTML5 cho người mới bắt đầu', 'Bạn đã bao giờ tự hỏi về cách xây dựng và thiết kế trang web? Khoá học \"HTML5 cho Người Mới Bắt Đầu\" là sự lựa chọn hoàn hảo cho những người muốn tìm hiểu về cách sử dụng ngôn ngữ lập trình HTML5 để tạo các trang web đẹp và hiệu quả. HTML5 là một phiên bản cập nhật của ngôn ngữ HTML (Hypertext Markup Language), và nó mang đến nhiều tính năng và khả năng mới giúp bạn tạo ra các trang web tương tác và hấp dẫn.', 100, '/assets/image/upload/image_course1.png'),
(2, 'CSS cho người mới bắt đầu', 'Bạn đã học HTML và muốn biết cách biến trang web của bạn trở nên đẹp và thú vị hơn? Khoá học \"CSS cho Người Mới Bắt Đầu\" là lựa chọn lý tưởng để bạn tìm hiểu về Cascading Style Sheets (CSS), một ngôn ngữ lập trình phía máy khách mạnh mẽ để thiết kế và định dạng trang web của bạn.', 323, '/assets/image/upload/image_course2.png'),
(3, 'JavaScript cho người mới bắt đầu', 'Bạn muốn học cách tạo các trang web động, tương tác và thông minh? Khoá học \"JavaScript cho Người Mới Bắt Đầu\" là sự lựa chọn tuyệt vời để bạn bắt đầu với ngôn ngữ lập trình JavaScript, một công cụ mạnh mẽ để thêm tính năng tương tác vào trang web của bạn.', 204, '/assets/image/upload/image_course3.png'),
(4, 'Học lập trình Python từ con số 0', 'Bạn muốn học lập trình, nhưng chưa bao giờ có kinh nghiệm về nó? Khoá học \"Lập Trình Python từ Con Số 0\" là sự lựa chọn hoàn hảo cho bạn. Python, một ngôn ngữ lập trình dễ học và mạnh mẽ. Khoá học này hứa hẹn sẽ là cánh cửa hoàn hảo để bạn bắt đầu hành trình lập trình của mình.', 194, '/assets/image/upload/image_course4.png'),
(5, 'Tổng quan về học máy', 'Bạn muốn hiểu về lĩnh vực học máy và tầm quan trọng của nó trong thế giới công nghệ ngày nay? Khoá học \"Tổng Quan về Học Máy\" là lựa chọn lý tưởng để bạn tìm hiểu về khái niệm, phạm vi và ứng dụng của học máy.', 148, '/assets/image/upload/image_course5.png'),
(6, 'Học lập trình Backend với Laravel 9', 'Bạn muốn trở thành một lập trình viên backend chuyên nghiệp và xây dựng các ứng dụng web mạnh mẽ? Khoá học \"Học Lập Trình Backend với Laravel 9\" là sự lựa chọn tuyệt vời để bạn tìm hiểu về Laravel, một trong những framework phát triển ứng dụng web PHP phổ biến nhất và mạnh mẽ nhất.', 187, '/assets/image/upload/image_course6.png'),
(7, 'Xây dựng web full-stack với ReactJS và NodeJS', 'Bạn muốn học cách xây dựng các ứng dụng web hoàn chỉnh từ phía frontend đến phía backend? Khoá học \"Xây Dựng Web Full-Stack với ReactJS và Node.js\" là lựa chọn tuyệt vời cho bạn. Khoá học này sẽ hướng dẫn bạn thông qua quá trình xây dựng ứng dụng web full-stack sử dụng hai công nghệ phổ biến và mạnh mẽ: ReactJS cho phía frontend và Node.js cho phía backend.', 423, '/assets/image/upload/image_course7.png'),
(8, 'Xây dựng RESTful API bằng Node.js', 'Bạn muốn học cách xây dựng các ứng dụng web hoàn chỉnh từ phía frontend đến phía backend? Khoá học \"Xây Dựng Web Full-Stack với ReactJS và NodeJS\" là lựa chọn tuyệt vời cho bạn. Khoá học này sẽ hướng dẫn bạn thông qua quá trình xây dựng ứng dụng web full-stack sử dụng hai công nghệ phổ biến và mạnh mẽ: ReactJS cho phía frontend và NodeJS cho phía backend.', 323, '/assets/image/upload/image_course8.png');

-- --------------------------------------------------------

--
-- Table structure for table `course_author`
--

DROP TABLE IF EXISTS `course_author`;
CREATE TABLE IF NOT EXISTS `course_author` (
  `id` int NOT NULL AUTO_INCREMENT,
  `avt` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `work` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_author`
--

INSERT INTO `course_author` (`id`, `avt`, `name`, `work`) VALUES
(1, './assets/image/upload/image_avatar1.png', 'Nguyễn Hoàng Hưng', 'Web Designer'),
(2, './assets/image/upload/image_avatar1.png', 'Hoàng Văn Ngọc', 'UI Designer'),
(3, './assets/image/upload/image_avatar1.png', 'Đặng Thành Công', 'Full-stack Developer'),
(4, './assets/image/upload/image_avatar1.png', 'Bùi Quang Hà', 'Algorithm Research Engineer'),
(5, './assets/image/upload/image_avatar1.png', 'Phạm Hùng Cường', 'AI Engineer'),
(6, './assets/image/upload/image_avatar1.png', 'Trần Hoàng Hải', 'Project Manager'),
(7, './assets/image/upload/image_avatar1.png', 'Văn Trung Hiếu', 'Back-end Developer'),
(8, './assets/image/upload/image_avatar1.png', 'Nguyễn Quang Trường', 'Back-end Developer');

-- --------------------------------------------------------

--
-- Table structure for table `course_curriculum_content`
--

DROP TABLE IF EXISTS `course_curriculum_content`;
CREATE TABLE IF NOT EXISTS `course_curriculum_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_id` int NOT NULL,
  `name_item` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curriculum_id` (`title_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_curriculum_content`
--

INSERT INTO `course_curriculum_content` (`id`, `title_id`, `name_item`) VALUES
(1, 1, 'Khám phá sự phát triển từ HTML truyền thống đến HTML5.'),
(2, 1, 'Hiểu về những tính năng và cải tiến mới mà HTML5 mang lại.'),
(3, 2, 'Học cách xây dựng cấu trúc cơ bản của một trang HTML.'),
(4, 2, 'Sử dụng các thẻ phổ biến như \'<html>\', \'<head>\', và \'<body>\'.'),
(5, 3, 'Hiểu rõ về các thẻ mới của HTML5 như \"<nav>\", \"<article>\", \"<section>\".'),
(6, 3, 'Sử dụng thuộc tính mới như data-* để tăng tính linh hoạt.'),
(7, 4, 'Nhúng âm thanh và video vào trang web bằng thẻ \"<audio>\" và \"<video>\".'),
(8, 4, 'Sử dụng thuộc tính như controls và autoplay.'),
(9, 5, 'Xây dựng các biểu mẫu đơn giản với các thẻ như \"<form>\", \"<input>\", và \"<button>\".'),
(10, 5, 'Sử dụng các loại input mới như email, tel, và date.'),
(11, 6, 'Hiểu cách tạo liên kết với thẻ \"<a>\" và các thuộc tính liên quan.'),
(12, 6, 'Xây dựng thanh điều hướng với thẻ \"<nav>\" và \"<ul>\".');

-- --------------------------------------------------------

--
-- Table structure for table `course_curriculum_title`
--

DROP TABLE IF EXISTS `course_curriculum_title`;
CREATE TABLE IF NOT EXISTS `course_curriculum_title` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `title` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_curriculum_title`
--

INSERT INTO `course_curriculum_title` (`id`, `course_id`, `title`) VALUES
(1, 1, 'Giới thiệu cơ bản về HTML'),
(2, 1, 'Cú Pháp Cơ Bản của HTML'),
(3, 1, 'Thẻ và Thuộc Tính HTML5'),
(4, 1, 'Multimedia và HTML5'),
(5, 1, 'Form và Input trong HTML5'),
(6, 1, 'Tạo Liên Kết và Navigation'),
(7, 2, 'Giới Thiệu về CSS'),
(8, 2, 'Cú Pháp Cơ Bản của CSS'),
(9, 2, 'Màu Sắc và Font trong CSS'),
(10, 2, 'Bố Cục và Kích Thước'),
(11, 2, 'Hiệu Ứng và Transition'),
(12, 2, 'Responsive Design và Media Queries');

-- --------------------------------------------------------

--
-- Table structure for table `course_detail`
--

DROP TABLE IF EXISTS `course_detail`;
CREATE TABLE IF NOT EXISTS `course_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `overview` text COLLATE utf8mb4_general_ci NOT NULL,
  `author_id` int NOT NULL,
  `price` double NOT NULL,
  `objective` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_detail`
--

INSERT INTO `course_detail` (`id`, `course_id`, `overview`, `author_id`, `price`, `objective`) VALUES
(1, 1, 'Khoá học cung cấp các kiến thức cơ bản về HTML5 giúp người học hiểu các thẻ và chức năng của chúng.', 1, 200000, '1. Cú pháp HTML5: Bạn sẽ tìm hiểu cách viết mã HTML5 đúng cách và cách sử dụng các thẻ để định dạng và cấu trúc trang web.\r\n<br/>\r\n2. Đối tượng và Multimédia: Khoá học sẽ giới thiệu bạn với các đối tượng và phương tiện đa phương tiện như hình ảnh, video và âm thanh, và cách nhúng chúng vào trang web.\r\n<br/>\r\n3. Biểu mẫu và Hộp thoại: Bạn sẽ học cách tạo biểu mẫu để lấy thông tin từ người dùng và tạo hộp thoại thông báo.\r\n<br/>\r\n4. Tích hợp CSS: Chúng tôi cũng sẽ giới thiệu cách sử dụng CSS (Cascading Style Sheets) để tạo trang web đẹp mắt và thú vị.\r\n<br/>\r\n5. Tiêu chuẩn Web và Khả năng tương tác: HTML5 hỗ trợ các tiêu chuẩn web và khả năng tương tác, và bạn sẽ học cách sử dụng chúng để tạo trang web đáng chú ý.\r\n<br/>\r\n6. Tương tác với JavaScript: Khoá học sẽ giới thiệu bạn với JavaScript, ngôn ngữ lập trình phía máy khách mạnh mẽ, để tạo các chức năng tương tác trên trang web của bạn.'),
(2, 2, 'Khoá học giúp có tư duy về phân chia bố cục, thiết kế giao diện các phần tử hợp lý. Cách viết chuẩn BEM và nhiều điều đang đón chờ bạn ở khoá học này', 2, 399000, '1. Hiểu về CSS: Bạn sẽ tìm hiểu về cách CSS hoạt động và cách nó tương tác với mã HTML để định dạng trang web.\r\n<br/>\r\n2. Lựa chọn và Hiệu ứng: Khoá học sẽ giới thiệu bạn với cách chọn màu sắc, phông chữ và hiệu ứng để tạo nền cho trang web của bạn.\r\n<br/>\r\n3. Định dạng văn bản và hộp: Bạn sẽ học cách sử dụng CSS để định dạng văn bản, tạo khung hình, và tạo bố cục trang web.\r\n<br/>\r\n4. Các kiểu và Pseudo-classes: Chúng tôi sẽ giới thiệu bạn với các kiểu CSS như classes và ids, cũng như pseudo-classes để tạo kiểu cho các trạng thái đặc biệt.\r\n<br/>\r\n5. Responsive Design: Bạn sẽ học cách tạo thiết kế đáp ứng để trang web của bạn tự động điều chỉnh cho các thiết bị và màn hình khác nhau.\r\n<br/>\r\n6. Tiện ích và Khả năng tùy chỉnh: Khoá học cũng sẽ dẫn bạn qua các tiện ích và khả năng tùy chỉnh trong CSS để làm cho trang web của bạn nổi bật.'),
(3, 3, 'JavaScript là ngôn ngữ lập trình chủ đạo cho phát triển ứng dụng web. Khoá học này sẽ bao gồm các chủ đề như kiểu dữ liệu, biến, hàm, lập trình hướng đối tượng, xử lý bất đồng bộ, tương tác với DOM (Document Object Model), và giới thiệu về Node.js để xây dựng ứng dụng máy chủ.', 3, 400000, '1. Hiểu về Cú pháp và Cơ bản: Bạn sẽ tìm hiểu cú pháp JavaScript và cách sử dụng biến, điều kiện và vòng lặp để kiểm soát luồng của chương trình.\r\n<br/>\r\n2. Tương tác với Trang Web: Khoá học sẽ giới thiệu bạn với cách tương tác với các phần tử HTML và CSS trên trang web bằng JavaScript.\r\n<br/>\r\n3. Xử lý Sự kiện: Bạn sẽ học cách xử lý các sự kiện như nhấp chuột, nhấn phím và nhiều sự kiện khác để làm cho trang web của bạn trở nên tương tác hơn.\r\n<br/>\r\n4. Ajax và Xử lý Dữ liệu: Khoá học sẽ giới thiệu bạn với cách tải dữ liệu từ máy chủ mà không cần tải lại trang web và cách xử lý dữ liệu JSON.\r\n<br/>\r\n5. Tạo Ứng dụng Đơn Trang (SPA): Bạn sẽ học cách tạo các ứng dụng đơn trang mượt mà và tương tác sử dụng thư viện JavaScript.\r\n<br/>\r\n6. Làm việc với Thư viện và Framework: Khoá học sẽ giới thiệu bạn với các thư viện và framework phổ biến như jQuery và React.'),
(4, 4, 'Khoá học này dành cho người mới bắt đầu lập trình. Bạn sẽ học cách sử dụng Python, một ngôn ngữ linh hoạt và dễ đọc. Các chủ đề bao gồm cú pháp cơ bản, kiểu dữ liệu, vòng lặp, điều kiện, hàm, và cấu trúc dữ liệu như danh sách và từ điển. Khoá học cũng sẽ giúp bạn hiểu cách giải quyết vấn đề và ứng dụng lập trình trong nhiều tình huống thực tế.', 4, 480000, '1. Hiểu về Cú pháp và Cấu trúc cơ bản: Bạn sẽ tìm hiểu cách viết mã Python, cách sử dụng biến, lập trình điều kiện, và vòng lặp để kiểm soát chương trình.\r\n<br/>\r\n2. Xây dựng Chương trình: Khoá học sẽ hướng dẫn bạn cách xây dựng các chương trình Python đơn giản từ việc in ra dòng chữ đến việc tính toán và xử lý dữ liệu.\r\n<br/>\r\n3. Cấu trúc Dữ liệu: Bạn sẽ học cách làm việc với danh sách, từ điển, và tuple để lưu trữ và quản lý dữ liệu.\r\n<br/>\r\n4. Hàm và Modularization: Chúng tôi sẽ giới thiệu bạn với cách tạo và sử dụng hàm để tái sử dụng mã và tạo cấu trúc modul hóa.\r\n<br/>\r\n5. Xử lý Lỗi: Bạn sẽ biết cách xử lý lỗi và ngoại lệ trong mã Python.\r\n<br/>\r\n6. Ứng dụng Thực tế: Khoá học sẽ cung cấp cho bạn các ví dụ thực tế để áp dụng kiến thức Python của bạn trong việc giải quyết vấn đề thực tế.'),
(5, 5, 'Khoá học này sẽ giới thiệu bạn vào thế giới của Học Máy (Machine Learning). Bạn sẽ tìm hiểu về khái niệm cơ bản của Học Máy, các loại mô hình, và quy trình xây dựng mô hình. Chúng ta sẽ khám phá các thuật toán phổ biến như học giám sát và học không giám sát, cũng như các khái niệm quan trọng như biểu diễn dữ liệu, tối ưu hóa, và đánh giá hiệu suất mô hình. Cuối cùng, bạn sẽ áp dụng kiến thức này vào các dự án thực tế để xây dựng và đánh giá mô hình Học Máy.', 5, 550000, '1. Hiểu về Học Máy: Bạn sẽ tìm hiểu về các khái niệm cơ bản trong học máy, bao gồm các thuật toán, mô hình, và dữ liệu.\r\n<br/>\r\n2. Các Ứng dụng Học Máy: Khoá học sẽ giới thiệu bạn với nhiều ứng dụng học máy trong cuộc sống hàng ngày và trong nhiều lĩnh vực khác nhau như y tế, tài chính, marketing, và nhiều lĩnh vực công nghiệp khác.\r\n<br/>\r\n3. Cách Làm Việc với Dữ liệu: Bạn sẽ học cách thu thập, tiền xử lý, và phân tích dữ liệu để chuẩn bị cho việc xây dựng mô hình học máy.\r\n<br/>\r\n4. Mô hình Học Máy: Khoá học sẽ giới thiệu bạn với các loại mô hình học máy phổ biến và cách chọn mô hình phù hợp cho một vấn đề cụ thể.\r\n<br/>\r\n5. Đánh giá và Tối ưu hóa: Bạn sẽ học cách đánh giá hiệu suất của mô hình và cách tối ưu hóa nó để đạt được kết quả tốt nhất.\r\n<br/>\r\n6. Tiềm năng và Tương lai của Học Máy: Khoá học sẽ thảo luận về tiềm năng và tương lai của học máy và cách nó có thể thay đổi cách chúng ta làm việc và sống cuộc sống.'),
(6, 6, 'Khoá học này tập trung vào việc hướng dẫn lập trình backend với Laravel 9, một framework PHP mạnh mẽ và hiện đại. Bạn sẽ bắt đầu từ cơ bản như cài đặt môi trường phát triển và hiểu rõ về cú pháp của Laravel. Chúng ta sẽ tìm hiểu về routing, controller, model, và eloquent ORM để tương tác với cơ sở dữ liệu.', 6, 700000, '1. Chào Mừng và Giới Thiệu:\r\nLàm quen với Laravel 9 và tầm quan trọng của việc học lập trình backend.\r\nMục tiêu và kỳ vọng đầu ra của khoá học.\r\n<br/>\r\n2. Cài Đặt và Cấu Hình Laravel 9:\r\nHướng dẫn cài đặt Laravel và cấu hình môi trường phát triển.\r\nSử dụng Composer để quản lý dependencies.\r\n<br/>\r\n3. Laravel Project Structure và Routing:\r\nHiểu cấu trúc thư mục của dự án Laravel.\r\nXây dựng routes và controllers để xử lý các yêu cầu HTTP.\r\n<br/>\r\n4. Xây Dựng Cơ Sở Dữ Liệu với Eloquent ORM:\r\nSử dụng Laravel Migration và Seeder để quản lý cơ sở dữ liệu.\r\nHiểu về Eloquent ORM và cách tương tác với cơ sở dữ liệu.\r\n<br/>\r\n5. Xây Dựng API với Laravel:\r\nTạo RESTful API và sử dụng Resource Controllers.\r\nMiddleware và Authentication cho an ninh ứng dụng.\r\n<br/>\r\n6. Tối Ưu Hóa và Bảo Mật:\r\nÁp dụng biện pháp bảo mật cơ bản của Laravel.\r\nTối ưu hóa hiệu suất ứng dụng và quản lý lỗi.\r\n<br/>\r\n7. Triển Khai Ứng Dụng:\r\nChọn môi trường triển khai phù hợp.\r\nHướng dẫn quá trình triển khai ứng dụng với Laravel Forge hoặc cPanel.\r\n<br/>\r\n8. Hướng Dẫn Tiếp Theo và Cơ Hội Nghề Nghiệp:\r\nTài nguyên học tập bổ sung và dự án thực hành.\r\nCơ hội thực tập và cộng đồng Laravel.'),
(7, 7, 'Khoá học này sẽ hướng dẫn bạn cách xây dựng một ứng dụng web full-stack sử dụng ReactJS cho phần frontend và NodeJS cho phần backend. Bạn sẽ bắt đầu từ cơ bản với ReactJS, học cách tạo các component tương tác, quản lý state, và làm việc với các thư viện phổ biến như Redux.\r\n<br/>\r\nSau đó, chúng ta sẽ chuyển sang phần backend với NodeJS và Express. Bạn sẽ tìm hiểu về xử lý yêu cầu HTTP, tương tác với cơ sở dữ liệu thông qua MongoDB hoặc SQL, và triển khai ứng dụng của mình lên môi trường sản phẩm.\r\n<br/>\r\nKhoá học cũng sẽ giảng dạy cách kết hợp frontend và backend, gửi và nhận dữ liệu qua API, xử lý bảo mật, và triển khai ứng dụng full-stack của bạn. Điều này sẽ giúp bạn có khả năng xây dựng ứng dụng web hoàn chỉnh từ đầu đến cuối bằng cách sử dụng hai công nghệ quan trọng trong cộng đồng phát triển hiện đại.', 7, 1000000, '1. Xây dựng Giao diện người dùng với ReactJS: Bạn sẽ học cách tạo các thành phần giao diện người dùng, quản lý trạng thái ứng dụng, và tương tác với API từ phía backend.\r\n<br/>\r\n2. Tạo Một Backend Ứng dụng với NodeJS: Khoá học sẽ giới thiệu bạn với NodeJS và Express, giúp bạn xây dựng và cấu hình một backend ứng dụng đáp ứng các yêu cầu từ phía frontend.\r\n<br/>\r\n3. Xây dựng và Quản lý Cơ sở Dữ liệu: Bạn sẽ học cách tạo và quản lý cơ sở dữ liệu để lưu trữ thông tin ứng dụng.\r\n<br/>\r\n4. Xử lý Tương tác API: Khoá học sẽ hướng dẫn bạn cách tương tác với API từ phía frontend để truy cập và cập nhật dữ liệu từ phía backend.\r\n<br/>\r\n5. Đảm bảo Bảo mật và Xác thực: Bạn sẽ học cách bảo vệ ứng dụng bằng cách thực hiện các biện pháp bảo mật và xác thực người dùng.\r\n<br/>\r\n6. Triển khai Ứng dụng: Khoá học sẽ hướng dẫn bạn cách triển khai ứng dụng của bạn trực tuyến để người dùng có thể truy cập.'),
(8, 8, 'Khoá học này tập trung vào việc hướng dẫn xây dựng RESTful API sử dụng Node.js, một nền tảng phổ biến cho phát triển ứng dụng server-side. Bạn sẽ bắt đầu với việc hiểu cơ bản về RESTful API và HTTP methods.\r\n\r\nChúng ta sẽ tìm hiểu cách sử dụng Express, một framework Node.js phổ biến, để xây dựng các endpoint API và quản lý các yêu cầu và phản hồi. Bạn sẽ được hướng dẫn về xử lý thao tác CRUD (Create, Read, Update, Delete) với cơ sở dữ liệu, bảo mật API thông qua middleware, và quản lý phiên bản của API.\r\n\r\nCuối cùng, khoá học sẽ giảng dạy về kiểm thử API, tài liệu hóa API, và triển khai ứng dụng của bạn. Sau khi hoàn thành khoá học, bạn sẽ có khả năng tự tin trong việc xây dựng và duy trì RESTful API sử dụng Node.js cho các dự án của mình.', 8, 500000, '1. Hiểu Rõ RESTful API và HTTP Methods: Nắm vững các khái niệm cơ bản về RESTful API và làm quen với các HTTP methods để xử lý yêu cầu và phản hồi.\r\n<br/>\r\n2. Sử Dụng Framework Express: Học cách sử dụng Express, một framework Node.js mạnh mẽ, để nhanh chóng xây dựng các endpoint API và quản lý các chức năng.\r\n<br/>\r\n3. Xử Lý CRUD Operations: Thực hành xử lý thao tác CRUD (Create, Read, Update, Delete) với cơ sở dữ liệu, bao gồm cách tương tác với các loại cơ sở dữ liệu phổ biến.\r\n<br/>\r\n4. Bảo Mật và Middleware: Hiểu cách áp dụng bảo mật thông qua middleware và quản lý các vấn đề an ninh cơ bản của API.\r\n<br/>\r\n5. Kiểm Thử và Tài Liệu Hóa API: Hướng dẫn về kiểm thử API và cách tạo tài liệu API chi tiết để hỗ trợ người sử dụng.\r\n<br/>\r\n6. Triển Khai Ứng Dụng: Học cách triển khai ứng dụng RESTful API của bạn lên các môi trường sản phẩm để sẵn sàng sử dụng.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(5, 'Phan Huy Dương', 'huyduongphan8@gmail.com', '12240bfe5a41f9434c71983c0b25f03d'),
(4, 'phanhuyduong', 'phanhuyduong@gmail.com', '8e96c396b68b24a7bfaae1ae910e65ca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
