-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 06:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xth_ezcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `thumbnail`, `status`) VALUES
(7, 'Javascript', 'Lập trình Front end', 'jscb.jpg', 0),
(8, 'PHP', 'Web back end', 'php.jpg', 0),
(9, 'Python', 'Dành cho lập trình AI', 'python.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `id_course`, `content`, `created_at`) VALUES
(17, 5, 2, 'admin 2', '2024-01-31 12:45:48.525947'),
(18, 5, 3, 'new', '2024-01-31 13:04:48.929649'),
(19, 5, 4, 'new', '2024-01-31 13:16:57.946111'),
(21, 5, 9, 'Khóa học tuyệt vời', '2024-01-31 15:16:39.946337'),
(22, 1, 9, 'Rất hay ạ', '2024-01-31 15:17:50.071906'),
(23, 1, 11, 'hay', '2024-02-01 00:27:28.404683');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `total_register` int(11) NOT NULL DEFAULT 0,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `price`, `image`, `total_register`, `cate_id`) VALUES
(9, 'Javascript cơ bản', 'Dành cho người mới bắt đầu', 199000, 'jscb.jpg', 0, 7),
(10, 'Javascript Nâng cao', 'Dành cho người nâng cao', 99000, 'jsnangcao.jpg', 0, 7),
(11, 'Javascript Oop', 'Lập trình hướng đối tượng', 299000, 'jsoop.jpg', 0, 7),
(12, 'PHP cơ bản', 'Dành cho người bắt đầu', 99000, 'phpcoban.jpg', 0, 8),
(13, 'PHP Nâng cao', 'Dành cho người học muốn nâng cao kỹ năng', 288000, 'php.jpg', 0, 8),
(14, 'PHP Thực nghiệp', 'Nâng cao kỹ năng thực chiến', 88000, 'phpnangcao.jpg', 0, 8),
(15, 'Python cơ bản', 'Dành cho người mới bắt đầu', 99000, 'btpython.jpg', 0, 9),
(16, 'Python nâng cao', 'Nâng cao kỹ năng giải quyết bài toán', 99000, 'python.jpg', 0, 9),
(17, 'PHP in 10 hour', 'Học nhanh trong 10 tiếng', 100000, 'python2.jpg', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `course_content`
--

CREATE TABLE `course_content` (
  `id` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_content`
--

INSERT INTO `course_content` (`id`, `id_course`, `title`, `content`) VALUES
(2, 2, 'Biến', 'Hiểu về biến'),
(4, 2, 'Bài 2', 'Học nhiều cái'),
(5, 9, 'Bài 1: Biến, Kiểu dữ liệu', 'Hiểu về biến'),
(7, 9, 'Bài 2: Array', 'Hiểu về mảng'),
(8, 9, 'Bài 3: Vòng lặp', 'Hiểu về vòng lặp'),
(10, 9, 'Bài 4: Hàm', 'Hiểu về hàm, function'),
(12, 9, 'Bài 5: oop', 'hiểu về oop'),
(13, 10, 'Bài 1: biến', 'Học về biến');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `id_user`, `id_course`, `rating`) VALUES
(26, 5, 4, 5),
(27, 5, 4, 3),
(28, 5, 2, 3),
(29, 5, 2, 3),
(30, 1, 9, 4),
(31, 1, 9, 3),
(32, 1, 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `avt` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `gender`, `tel`, `avt`, `role`) VALUES
(1, 'chucdoan', '123456', 'mtpmurad003@gmail.com', NULL, NULL, NULL, NULL, 0),
(5, 'admin2', '123456', 'mtpmurad003@gmail.com', NULL, NULL, NULL, NULL, 1),
(8, 'newuse', '123456', 'mtpmurad003@gmail.com', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

CREATE TABLE `user_courses` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `payments_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `id_user`, `id_course`, `status`, `payments_status`) VALUES
(18, 1, 9, 0, 1),
(19, 1, 12, 0, 1),
(20, 1, 15, 0, 1),
(21, 8, 10, 0, 0),
(22, 8, 13, 0, 0),
(23, 8, 16, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `course_content`
--
ALTER TABLE `course_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_courses`
--
ALTER TABLE `user_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
