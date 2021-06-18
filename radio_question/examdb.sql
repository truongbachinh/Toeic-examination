-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 05:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'anh', 'chinh'),
(3, 'anh', 'chinh');

-- --------------------------------------------------------

--
-- Table structure for table `exam_for_user`
--

CREATE TABLE `exam_for_user` (
  `id` int(5) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `time_do_exam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_for_user`
--

INSERT INTO `exam_for_user` (`id`, `exam`, `time_do_exam`) VALUES
(5, 'listen', '1'),
(6, 'reading', '1'),
(11, 'speaking1', '2'),
(12, 'speaking2', '3'),
(13, 'speaking17', '4'),
(14, 'reading2', '5'),
(15, 'php', '1'),
(16, 'admin', '123'),
(17, 'add123', '30'),
(19, 'speaking1234', '30');

-- --------------------------------------------------------

--
-- Table structure for table `exam_materials`
--

CREATE TABLE `exam_materials` (
  `id` int(5) NOT NULL,
  `material_name` varchar(100) NOT NULL,
  `content_of_material` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`id`, `username`, `email`, `exam`, `total_question`, `correct_answer`, `wrong_answer`, `exam_time`) VALUES
(1, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-08'),
(2, 'linhttm', '', 'listen', '5', '5', '0', '2020-06-08'),
(3, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-08'),
(4, 'chinhtb', '', 'listen', '5', '2', '3', '2020-06-08'),
(5, 'linhttm', '', 'listen', '5', '4', '1', '2020-06-08'),
(6, 'linhttm', '', 'speaking1', '2', '1', '1', '2020-06-08'),
(7, 'linhttm', '', 'reading', '2', '1', '1', '2020-06-08'),
(8, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-09'),
(9, 'linhttm', '', 'listen', '5', '2', '3', '2020-06-09'),
(10, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-09'),
(11, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-09'),
(12, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-09'),
(13, 'linhttm', '', 'reading', '2', '0', '2', '2020-06-09'),
(14, 'linhttm', '', 'reading', '2', '0', '2', '2020-06-09'),
(15, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-10'),
(16, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-10'),
(17, 'linhttm', '', 'listen', '5', '2', '3', '2020-06-10'),
(18, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-10'),
(19, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-10'),
(20, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-11'),
(21, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-11'),
(22, 'chinhtb', '', 'reading', '2', '0', '2', '2020-06-11'),
(23, 'chinhtb', '', 'listen', '5', '3', '2', '2020-06-11'),
(24, 'chinhtb', '', 'listen', '5', '3', '2', '2020-06-11'),
(25, 'chinhtb', '', 'listen', '5', '3', '2', '2020-06-11'),
(26, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-11'),
(27, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-11'),
(28, 'chinhtb', '', 'reading', '2', '0', '2', '2020-06-11'),
(29, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-11'),
(30, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-11'),
(31, 'chinhtb', '', 'reading', '2', '0', '2', '2020-06-11'),
(32, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-11'),
(33, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-11'),
(34, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-11'),
(35, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-11'),
(36, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-11'),
(37, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(38, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(39, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(40, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(41, 'chinhtb', '', 'Reading_1', '0', '0', '0', '2020-06-12'),
(42, 'chinhtb', '', 'reading', '2', '0', '2', '2020-06-12'),
(43, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(44, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(45, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(46, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(47, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(48, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(49, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(50, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(51, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(52, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(53, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(54, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(55, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-12'),
(56, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-13'),
(57, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-13'),
(58, 'chinhtb', '', 'reading', '2', '0', '2', '2020-06-13'),
(59, 'chinhtb', '', 'listen', '12', '0', '12', '2020-06-13'),
(60, 'linhttm', '', 'listen', '12', '0', '12', '2020-06-13'),
(61, 'chinhtb', '', 'listen', '15', '0', '15', '2020-06-13'),
(62, 'linhttm', '', 'listen', '15', '0', '15', '2020-06-13'),
(63, 'linhttm', '', 'listen', '15', '0', '15', '2020-06-13'),
(64, 'linhttm', '', 'listen', '6', '0', '6', '2020-06-14'),
(65, 'linhttm', '', 'listen', '7', '0', '7', '2020-06-14'),
(66, 'linhttm', '', 'listen', '7', '0', '7', '2020-06-14'),
(67, 'linhttm', '', 'listen', '7', '0', '7', '2020-06-14'),
(68, 'linhttm', '', 'listen', '7', '0', '7', '2020-06-14'),
(69, 'linhttm', '', 'listen', '7', '0', '7', '2020-06-14'),
(70, 'linhttm', '', 'listen', '7', '0', '7', '2020-06-14'),
(71, 'linhttm', '', 'listen', '7', '0', '7', '2020-06-14'),
(72, 'linhttm', '', 'listen', '7', '0', '7', '2020-06-14'),
(73, 'linhttm', '', 'listen', '9', '0', '9', '2020-06-14'),
(74, 'linhttm', '', 'listen', '16', '0', '16', '2020-06-14'),
(75, 'linhttm', '', 'listen', '16', '0', '16', '2020-06-14'),
(76, 'linhttm', '', 'listen', '16', '0', '16', '2020-06-14'),
(77, 'linhttm', '', 'listen', '17', '0', '17', '2020-06-14'),
(78, 'linhttm', '', 'listen', '17', '0', '17', '2020-06-14'),
(79, 'linhttm', '', 'listen', '14', '0', '14', '2020-06-14'),
(80, 'linhttm', '', 'listen', '14', '0', '14', '2020-06-14'),
(81, 'linhttm', '', 'listen', '23', '0', '23', '2020-06-15'),
(82, 'linhttm', '', 'listen', '23', '0', '23', '2020-06-15'),
(83, 'linhttm', '', 'listen', '21', '0', '21', '2020-06-15'),
(84, 'linhttm', '', 'listen', '12', '0', '12', '2020-06-15'),
(85, 'linhttm', '', 'listen', '12', '0', '12', '2020-06-15'),
(86, 'linhttm', '', 'listen', '12', '0', '12', '2020-06-15'),
(87, 'linhttm', '', 'listen', '12', '0', '12', '2020-06-15'),
(88, 'linhttm', '', 'listen', '12', '0', '12', '2020-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `id` int(5) NOT NULL,
  `instruct` varchar(100) NOT NULL,
  `contents` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(5) NOT NULL,
  `material_name` varchar(1000) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `authod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `material_name`, `content`, `authod`) VALUES
(3, 'Material reading', 'admon', 'admin'),
(5, 'Material Listening', 'các thức tiến hành làm bài 1231231231', 'linh'),
(6, 'Material Writing', 'a day r', 'a'),
(7, 'Material Speaking', 'a', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `image_question` varchar(1000) NOT NULL,
  `radio_question` varchar(1000) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `exam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question_no`, `question`, `image_question`, `radio_question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `exam`) VALUES
(34, '1', 'what is your name ?', '', '', 'chinh', 'linh', 'chung', 'trinh', 'linh', 'listen'),
(37, '1', 'what is your name ?', '', '', 'Chinh', 'Linh', 'Trinh', 'Chung', 'Chinh', 'reading'),
(38, '2', 'what is your name ?', '', '', 'Chinh', 'Linh', 'Trinh', 'Chung', 'Chinh', 'reading'),
(39, '1', '2+1+2 = ?', '', '', '2', '3', '4', '5', '5', 'speaking1'),
(40, '2', '2+1+2 = ?', '', '', '2', '3', '4', '5', '5', 'speaking1'),
(42, '2', 'what is your name 12?', '', '', '12', '123', '123', '123', '123', 'listen'),
(46, '3', 'what is your name1234567 ?', '', '', '13', '123', '123', '123', '123213', 'listen'),
(48, '1', 'what is your name  1?', '', '', '1', '2', '3', '4', '4', 'add123'),
(49, '2', 'what is your nameqưewqe ?', '', '', '2', '2wqe', 'qưe', 'qưe', 'qưe', 'add123'),
(50, '3', 'what is your name123 ?', '', '', '123123', '123', '123', '123', '12312312312312', 'add123'),
(51, '4', '123123', '', '', '123123', '123213213', '123123123', '1231231231', '23123123123123', 'add123'),
(52, '5', '123123', '', '', '123123123', '123123123', '123123123', '312312312', '123123123123', 'add123'),
(79, '4', 'what is your nameaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa ?', '', '', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '', '', '', 'listen'),
(84, '5', 'what is your name123 ?', '', '', '2', '1', '3', '4', '4', 'listen'),
(103, '6', 'as123', '', '', '', '', '', '', '', 'listen'),
(104, '7', 'âssssssssssssssssssssssssss', '', '', '', '', '', '', '', 'listen'),
(105, '8', 'ád123', '', '', '', '', '', '', '', 'listen'),
(107, '9', '1134', '', '', '1234', '1234', '1234', '1234', '12314', 'listen'),
(108, '10', 'ấd213', '', '', '', '', '', '', '', 'listen'),
(114, '11', 'ssss', '', '', '', '', '', '', '', 'listen'),
(131, '12', 'listen this audio', '', 'radio_question/14a8a8bfa1c9e29fe4b3b7d350febb46thanksyou.mp3', '1', '2', '3', '4', '3', 'listen');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `contact` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'tr??ng', 'chính', 'chinhtb', 'anhchinh123', 'truongbachinh205', 'anhhhh'),
(2, 'trương', 'chính', 'ngoclinh8c', 'anhchinh123', 'truongbachinh205', 'anhhhh'),
(3, 'ad', 'chính', 'chinhtbc', 'anhchinh123', 'phongvan19201@gmail.com', '0965560564'),
(4, 'trương', 'chính', 'anhanhhc123', 'anhchinh123', 'truongbachinh205', '1234556'),
(5, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(5) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit`) VALUES
(9, 'aaaa'),
(10, 'av');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `phone`, `address`) VALUES
(3, 'anh', 'anh', 'anhanhhcasdasdadasádasdasdasdasd123', 'anhanh', 'aaa', '0', 'aaa'),
(4, 'trương', 'chính', 'chinhtbcdce', '123456', 'truongbachinh205', '0965560564', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(5, 'trương', 'chính', 'chinhtbaaav', '123456', 'chinhtbgch17527@fpt.edu.vn', '0965560564', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(7, 'trương', 'chính', 'chinhtbhc', '123456', 'anhchinhhc12@gmail.com', '0965560564', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(8, 'trương', 'chính', 'chinhtb000', '123456', '', '0965560564', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(9, 'trương', 'chính', 'ngoclinh8caaa', 'anh123', 'anhchinhhc12@gmail.com', '', ''),
(10, 'trương', 'chính', 'admindd', 'anh123', 'anhanhpham99@gmail.com', '', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(12, 'ad', 'ad', 'admin', 'admin', '', '', ''),
(13, 'Trần Thị Mỹ', ' Linh', 'linhttm', '123456', 'linhttm@fpt.edu.vn', '0332565795', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(14, 'trương', 'chính', 'asd', 'asd', 'asd', '', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_for_user`
--
ALTER TABLE `exam_for_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_materials`
--
ALTER TABLE `exam_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam_for_user`
--
ALTER TABLE `exam_for_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `exam_materials`
--
ALTER TABLE `exam_materials`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
