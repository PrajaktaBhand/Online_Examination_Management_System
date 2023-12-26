-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 08:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'uniprogramming systems\r\n', 1),
(2, 'uniprocessing systems', 1),
(3, 'unitasking systems', 1),
(4, 'none of the mentioned', 1),
(5, 'address space and global variables\r\n', 2),
(6, 'open files\r\n', 2),
(7, 'pending alarms, signals and signal handlers\r\n', 2),
(8, 'all of the mentioned', 2),
(9, 'fork\r\n', 3),
(10, 'create', 3),
(11, 'new', 3),
(12, 'none of the above', 3),
(13, 'normal exit\r\n', 4),
(14, 'fatal error\r\n', 4),
(15, 'killed by another process\r\n', 4),
(16, 'all of the mentioned', 4),
(17, 'when process is scheduled to run after some execut...\r\n', 5),
(18, 'when process is unable to run until some task has ...\r\n', 5),
(19, 'when process is using the CPU\r\n', 5),
(20, 'none of the mentioned', 5);

-- --------------------------------------------------------

--
-- Table structure for table `class_syllabus`
--

CREATE TABLE `class_syllabus` (
  `id` int(11) NOT NULL,
  `class` int(10) NOT NULL,
  `year` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_syllabus`
--

INSERT INTO `class_syllabus` (`id`, `class`, `year`, `image`) VALUES
(1, 1, 'firstyear', 'https://drive.google.com/file/d/1ToVS7DEl8odqyyhdecX4IJyJphnvn_nn/view?usp=sharing'),
(2, 1, 'secondyear', 'https://drive.google.com/file/d/1wZRu2y0LDhhS0BOzyP7-DQm0rM9urZQo/view?usp=sharing'),
(3, 1, 'fourthyear', 'https://drive.google.com/file/d/1WW0MQuCDL-BqQnOufSeDEG8CoP1GPyl9/view?usp=sharing'),
(4, 2, 'firstyear', 'https://drive.google.com/file/d/1ToVS7DEl8odqyyhdecX4IJyJphnvn_nn/view?usp=sharing'),
(5, 2, 'secondyear', 'https://drive.google.com/file/d/1WfS3c90J_hVU64bd9oLpQ38F63bDOj07/view?usp=sharing'),
(6, 2, 'fourthyear', 'https://drive.google.com/file/d/1_Qj8Cr-kc7hrhr5oaS2kw4LFkYfkTRzK/view?usp=sharing'),
(7, 5, 'firstyear', 'https://drive.google.com/file/d/1ToVS7DEl8odqyyhdecX4IJyJphnvn_nn/view?usp=sharing'),
(8, 5, 'secondyear', 'https://drive.google.com/file/d/1Y-XCSVKl05IX8DXo9ru9sBfPv94IXnJn/view?usp=sharing'),
(9, 5, 'thirdyear', 'https://drive.google.com/file/d/1Ft7smboofebFpZagiUsDWpHfDZPvGW8P/view?usp=sharing'),
(10, 5, 'fourthyear', 'https://drive.google.com/file/d/1M7w1FTo1Is8WxrZakvuWuVHdujE11isW/view?usp=sharing'),
(11, 3, 'firstyear', 'https://drive.google.com/file/d/1ToVS7DEl8odqyyhdecX4IJyJphnvn_nn/view?usp=sharing'),
(12, 3, 'secondyear', 'https://drive.google.com/file/d/1dBD0YvyHE_2cui2q93qZuCzNdxvwz1h-/view?usp=sharing'),
(13, 3, 'thirdyear', 'https://drive.google.com/file/d/1DZiOkwYNV7z9DVuoYhzoBQ0hQ1eh87n6/view?usp=sharing'),
(14, 3, 'fourthyear', 'https://drive.google.com/file/d/1y2OVOdgsiJWA_7w3PZbptjVcoGMUW6TX/view?usp=sharing'),
(15, 4, 'firstyear', 'https://drive.google.com/file/d/1ToVS7DEl8odqyyhdecX4IJyJphnvn_nn/view?usp=sharing'),
(16, 4, 'secondyear', 'https://drive.google.com/file/d/1Woj6aMSGZXbLVc2qvpd3FYpMz1-OD_-S/view?usp=sharing'),
(17, 4, 'thirdyear', 'https://drive.google.com/file/d/1XB59D_CFZxtI37EhhRs8Xrey6JpSHRF0/view?usp=sharing'),
(18, 4, 'fourthyear', 'https://drive.google.com/file/d/1rUFSyy4yyqY57OVxCctu6E85NRLH6Wgw/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `class_timetable`
--

CREATE TABLE `class_timetable` (
  `id` int(11) NOT NULL,
  `class` int(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `image` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_timetable`
--

INSERT INTO `class_timetable` (`id`, `class`, `sem`, `image`) VALUES
(1, 2, 'sem I', 'https://drive.google.com/file/d/1-TvE-i-Op40LsMliSRJk3dsdEcAy1_fO/view?usp=sharing'),
(2, 2, 'sem II', 'https://drive.google.com/file/d/1POtpY-P6Cdm8FOmHVPqcgibidhJ16c7f/view?usp=sharing'),
(3, 2, 'sem III', 'https://drive.google.com/file/d/1jEOYAFKt54utrMgxtXiOqMfskykiiEhj/view?usp=sharing'),
(4, 2, 'sem IV', 'https://drive.google.com/file/d/1sQ8z2oVLACZWWK8J_m4Cr_bSxS-GBUBe/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `Course_name` varchar(50) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `Course_name`, `Created_date`) VALUES
(1, 'Computer Science', '2020-10-15 16:21:24'),
(2, 'Information Technology', '2020-10-15 16:23:08'),
(3, 'Electrical', '2020-10-15 16:23:08'),
(4, 'E&TC', '2020-10-15 16:23:08'),
(5, 'Mechanical', '2020-10-15 16:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL,
  `created_DT` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_DT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `sub_id`, `unit_id`, `question`, `ans_id`, `created_DT`, `updated_DT`) VALUES
(1, 1, 1, 'The systems which allow only one process execution.', 2, '2020-11-22 08:57:42', '2020-11-22 08:57:42'),
(2, 1, 1, ' In operating system, each process has its own _...', 8, '2020-11-22 08:57:50', '2020-11-22 08:57:50'),
(3, 1, 1, ' In Unix, Which system call creates the new proc.', 9, '2020-11-22 09:01:08', '2020-11-22 09:01:08'),
(4, 1, 1, 'A process can be terminated due to', 16, '2020-11-22 09:01:44', '2020-11-22 09:01:44'),
(5, 1, 1, 'What is the ready state of a process?', 17, '2020-11-22 09:02:28', '2020-11-22 09:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `quize`
--

CREATE TABLE `quize` (
  `id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `unit_id` int(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option_A` varchar(500) NOT NULL,
  `option_B` varchar(500) NOT NULL,
  `option_C` varchar(500) NOT NULL,
  `option_D` varchar(500) NOT NULL,
  `correct_answer` varchar(500) NOT NULL,
  `created-date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quize`
--

INSERT INTO `quize` (`id`, `sub_id`, `unit_id`, `question`, `option_A`, `option_B`, `option_C`, `option_D`, `correct_answer`, `created-date`, `updated_date`) VALUES
(1, 1, 1, 'The systems which allow only one process execution at a time, are called __________', ' uniprogramming systems', 'uniprocessing systems', 'unitasking systems', 'none of the mentioned', ' uniprocessing systems', '2020-11-16 08:40:02', '2020-11-16 08:40:02'),
(2, 1, 1, '2. In operating system, each process has its own __________', ' address space and global variables', 'open files', 'pending alarms, signals and signal handlers', 'all of the mentioned', 'all of the mentioned', '2020-11-16 08:56:07', '2020-11-16 08:56:07'),
(3, 1, 1, '3. In Unix, Which system call creates the new process?', ' fork', 'create', 'new', 'none of the above', 'fork', '2020-11-16 08:56:07', '2020-11-16 08:56:07'),
(4, 1, 1, '4. A process can be terminated due to __________', 'normal exit', 'fatal error', ' killed by another process', 'all of the mentioned', 'all of the mentioned', '2020-11-16 08:56:07', '2020-11-16 08:56:07'),
(5, 1, 1, '5. What is the ready state of a process?', 'when process is scheduled to run after some execution', 'when process is unable to run until some task has been completedr', ' when process is using the CPU', 'none of the mentioned', 'when process is scheduled to run after some execution', '2020-11-16 08:56:07', '2020-11-16 08:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `relational_table`
--

CREATE TABLE `relational_table` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `sem_id` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relational_table`
--

INSERT INTO `relational_table` (`id`, `user_id`, `course_id`, `sem_id`, `sub_id`) VALUES
(1, 1, 2, 5, 1),
(2, 1, 2, 5, 2),
(3, 1, 2, 5, 3),
(4, 1, 2, 5, 4),
(5, 1, 2, 5, 5),
(6, 5, 2, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `semster`
--

CREATE TABLE `semster` (
  `id` int(10) NOT NULL,
  `sem_name` varchar(50) NOT NULL,
  `sem_course_id` int(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semster`
--

INSERT INTO `semster` (`id`, `sem_name`, `sem_course_id`, `created_date`, `updated_date`) VALUES
(1, 'semester I', 2, '2020-10-29 09:23:24', '2020-10-29 09:23:24'),
(2, 'semester II', 2, '2020-10-29 09:23:29', '2020-10-29 09:23:29'),
(3, 'Semester III', 2, '2020-10-29 09:26:24', '2020-10-29 09:26:24'),
(4, 'Semester IV', 2, '2020-10-29 09:26:50', '2020-10-29 09:26:50'),
(5, 'Semester V', 2, '2020-10-29 09:27:36', '2020-10-29 09:27:36'),
(6, 'Semester VI', 2, '2020-10-29 09:28:17', '2020-10-29 09:28:17'),
(7, 'Semester VII', 2, '2020-10-29 09:28:18', '2020-10-29 09:28:18'),
(8, 'Semester VIII', 2, '2020-10-29 09:28:18', '2020-10-29 09:28:18'),
(9, 'Semester I', 1, '2020-10-29 09:53:45', '2020-10-29 09:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` bigint(50) NOT NULL,
  `course_id` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table examination.signin: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `examination`.`signin`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) NOT NULL,
  `sub_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_name`) VALUES
(1, 'Operating System'),
(2, 'Theory Of Computation'),
(3, 'Human Computer Interface'),
(4, 'Software Engineering Project Management'),
(5, 'Database Management System'),
(6, 'Computer Network');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(10) NOT NULL,
  `unit_sub_id` int(10) NOT NULL,
  `unit_name` varchar(10) NOT NULL,
  `url` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit_sub_id`, `unit_name`, `url`, `created_date`) VALUES
(1, 1, 'Unit 1', 'https://drive.google.com/file/d/1Exb38FnV08SctDmT-0Ugto0TYaKFbVpS/view?usp=sharing', '2020-11-21 12:27:33'),
(2, 1, 'unit 2', 'https://drive.google.com/file/d/1N9H3FafV6lg-bXQR6Qa97rwPpUQy52PT/view?usp=sharing', '2020-11-21 12:30:14'),
(3, 1, 'unit 3', 'https://drive.google.com/file/d/1p6mXYiTf02WhRzk8Ps1DzgX6_ZY47gqP/view?usp=sharing', '2020-11-21 12:31:17'),
(4, 1, 'unit 4', 'https://drive.google.com/file/d/1Bpfz_bSVHMCyxOBXFIbJiD7s5gKo2QKi/view?usp=sharing', '2020-11-21 12:31:52'),
(5, 1, 'unit 5', 'https://drive.google.com/file/d/10YqPgmSOVr9nVDr4b1UQv4Qz50Qjm-8s/view?usp=sharing', '2020-11-21 12:32:32'),
(6, 1, 'unit 6', 'https://drive.google.com/file/d/1eixdw59J247_4VLEVOjicx6TD3QRo6lF/view?usp=sharing', '2020-11-21 12:33:09'),
(8, 2, 'Unit 1', 'https://drive.google.com/file/d/1uI5zQYPBlK8LfziZ8I0aqbu55TyfW4wf/view?usp=sharing', '2020-11-21 12:36:46'),
(9, 2, 'Unit 2', 'https://drive.google.com/file/d/1LCNt1mIu-JetvwSoK584ujaJPTTemG0V/view?usp=sharing', '2020-11-21 12:39:45'),
(10, 2, 'Unit 3', 'https://drive.google.com/file/d/1aW6e9GO47qUp_dcUSkCcJFpdGdjHo8cW/view?usp=sharing', '2020-11-21 12:39:45'),
(11, 2, 'Unit 4', 'https://drive.google.com/file/d/1wyCRtOTQul6XLDKDjcRSyodCHeWjjE5p/view?usp=sharing', '2020-11-21 12:43:52'),
(12, 2, 'Unit 5', 'https://drive.google.com/file/d/1jSiDKBWSZs3e9AU6p6djgFsgx12iBtuO/view?usp=sharing', '2020-11-21 12:43:52'),
(13, 2, 'Unit 6', '', '2020-11-21 12:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `totalques` int(250) NOT NULL,
  `attempt_question` int(20) NOT NULL,
  `answerscorrect` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `attempt_question`, `answerscorrect`) VALUES
(20, 'nik', 5, 4, 3),
(21, 'nik', 5, 4, 3),
(22, 'nik', 5, 5, 3),
(23, 'nik', 5, 5, 3),
(24, 'nik', 5, 5, 4),
(25, 'nik', 5, 0, 0),
(26, 'nik', 5, 0, 0),
(27, 'nik', 5, 0, 0),
(28, 'nik', 5, 0, 0),
(29, 'nik', 5, 5, 5),
(30, 'nik', 5, 5, 4),
(31, 'nik', 5, 0, 0),
(32, 'nik', 5, 0, 0),
(33, 'nik', 5, 0, 0),
(34, 'varsha', 5, 4, 5),
(35, 'varsha', 5, 5, 5),
(36, 'varsha', 5, 5, 5),
(37, 'varsha', 5, 5, 5),
(38, 'varsha', 5, 5, 4),
(39, 'varsha', 5, 5, 4),
(40, 'varsha', 5, 3, 5),
(41, 'varsha', 5, 1, 5),
(42, 'varsha', 5, 1, 5),
(43, 'varsha', 5, 5, 3),
(44, 'varsha', 5, 5, 2),
(45, 'varsha', 5, 1, 5),
(46, 'varsha', 5, 2, 5),
(47, 'varsha', 5, 2, 5),
(48, 'varsha', 5, 3, 5),
(49, 'varsha', 5, 2, 5),
(50, 'varsha', 5, 2, 3),
(51, 'varsha', 5, 2, 3),
(52, 'varsha', 5, 2, 3),
(53, 'varsha', 5, 2, 3),
(54, 'varsha', 5, 2, 3),
(55, 'varsha', 5, 2, 1),
(56, 'varsha', 5, 2, 1),
(57, 'varsha', 5, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `class_syllabus`
--
ALTER TABLE `class_syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_timetable`
--
ALTER TABLE `class_timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quize`
--
ALTER TABLE `quize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relational_table`
--
ALTER TABLE `relational_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semster`
--
ALTER TABLE `semster`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sem_course_id` (`sem_course_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `class_timetable`
--
ALTER TABLE `class_timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quize`
--
ALTER TABLE `quize`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `relational_table`
--
ALTER TABLE `relational_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semster`
--
ALTER TABLE `semster`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `semster`
--
ALTER TABLE `semster`
  ADD CONSTRAINT `semster_ibfk_1` FOREIGN KEY (`sem_course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `signin`
--
ALTER TABLE `signin`
  ADD CONSTRAINT `signin_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
