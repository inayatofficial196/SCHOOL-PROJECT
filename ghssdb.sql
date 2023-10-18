-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 07:16 AM
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
-- Database: `ghssdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image_name`, `image_path`, `upload_date`) VALUES
(12, 'School.jpg', 'Gallery Uploads/School.jpg', '2023-10-06 19:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `feeslip_image` varchar(255) NOT NULL,
  `session` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_cnic` varchar(13) NOT NULL,
  `student_mobile` varchar(13) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_cnic` varchar(13) NOT NULL,
  `father_mobile` varchar(13) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_birth` date NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `school_board` varchar(255) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `passing_year` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `obtained_marks` int(11) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `groups` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `profile_image`, `feeslip_image`, `session`, `student_name`, `student_cnic`, `student_mobile`, `father_name`, `father_cnic`, `father_mobile`, `gender`, `date_birth`, `blood_group`, `home_address`, `email`, `religion`, `school_board`, `roll_number`, `passing_year`, `total_marks`, `obtained_marks`, `percentage`, `grade`, `groups`, `status`, `upload_date`) VALUES
(44, 'Admission Uploads/Teacher-01.jpg', 'Admission Uploads/Fee Slip.jpg', 2023, 'Hamza Hasan', '1510120385885', '03359090327', 'Umar Hasan', '1510109292483', '03323146124', 'Male', '2001-05-01', 'O Positive', 'Village Elai, District Buner', 'hamzahasan0327@gmail.com', 'Islam', 'Muslim School & Swat Board', 99066, 2017, 1100, 909, '90%', 'A1', 'Computer Science', 'Verified', '2023-10-05 04:41:54'),
(45, 'Admission Uploads/Teacher-02.jpg', 'Admission Uploads/Fee Slip.jpg', 2024, 'Hanzala Hashmi', '1510112345678', '03409090327', 'Umar Hassan', '1510109292483', '03122596124', 'Male', '2010-08-17', 'B Positive', 'Village Elai, District Buner', 'hhasan0327@gmail.com', 'Islam', 'Usmania School & Swat Board', 55022, 2024, 1100, 850, '85%', 'A', 'Pre-Medical', 'Unverified', '2023-10-07 04:54:35'),
(46, 'Admission Uploads/Teacher-03.jpg', 'Admission Uploads/Fee Slip.jpg', 2023, 'Saeed Ullah', '1510180383687', '03319696075', 'Ubaid Ullah', '1510151147913', '03489341426', 'Male', '2000-08-05', 'A Positive', 'Village Daggar, District Buner', 'saeed.mian0348@gmail.com', 'Islam', 'APS Daggar & Swat Board', 11220, 2017, 1100, 838, '83%', 'B', 'Pre-Engineering', 'Pending', '2023-10-07 04:43:07'),
(47, 'Admission Uploads/Teacher-04.jpg', 'Admission Uploads/Fee Slip.jpg', 2023, 'Inayat Ullah', '1510118406225', '03410721196', 'Rafi Ullah', '1510112345678', '03111920296', 'Male', '2000-04-01', 'B Positive', 'Village Dokada, District Buner', 'iu334454@gmail.com', 'Islam', 'JPS Pirbaba & Swat Board', 33440, 2016, 1100, 836, '82%', 'B', 'Humanities', 'Pending', '2023-10-07 04:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `message` longtext NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `upload_date`) VALUES
(11, 'Hamza', 'Hasan', 'hamzahasan0327@gmail.com', '03359090327', 'Good Morning!', '2023-10-06 20:09:17'),
(12, 'Saeed', 'Ullah', 'saeed075@gmail.com', '03319696075', 'Good Afternoon!', '2023-10-06 20:10:03'),
(13, 'Inayat', 'Ullah', 'inayat196@gmail.com', '03410721196', 'Good Evening!', '2023-10-06 20:10:47'),
(14, 'Babar', 'Azam', 'babar056@gmail.com', '03126862327', 'Good Day!', '2023-10-06 20:11:27'),
(15, 'Imran', 'Khan', 'imran010@gmail.com', '03042370327', 'Nice Website.', '2023-10-06 20:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `file_name`, `file_path`, `upload_date`) VALUES
(26, 'Calendar Simple (2022).pdf', 'Document Uploads/Calendar Simple (2022).pdf', '2023-10-06 16:31:26'),
(27, 'Calendar Colour (2022).pdf', 'Document Uploads/Calendar Colour (2022).pdf', '2023-10-06 16:31:34'),
(28, 'Calendar Simple (2023).pdf', 'Document Uploads/Calendar Simple (2023).pdf', '2023-10-06 16:31:44'),
(29, 'Calendar Colour (2023).pdf', 'Document Uploads/Calendar Colour (2023).pdf', '2023-10-06 16:31:52'),
(30, 'Calendar Simple (2024).pdf', 'Document Uploads/Calendar Simple (2024).pdf', '2023-10-06 16:32:01'),
(31, 'Calendar Colour (2024).pdf', 'Document Uploads/Calendar Colour (2024).pdf', '2023-10-06 16:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_name`, `image_path`, `upload_date`) VALUES
(40, 'Student-01.jpg', 'Gallery Uploads/Student-01.jpg', '2023-10-06 19:02:33'),
(41, 'Student-02.jpg', 'Gallery Uploads/Student-02.jpg', '2023-10-06 19:02:40'),
(42, 'Student-03.jpg', 'Gallery Uploads/Student-03.jpg', '2023-10-06 19:02:50'),
(43, 'Student-04.jpg', 'Gallery Uploads/Student-04.jpg', '2023-10-06 19:02:58'),
(44, 'Student-05.jpg', 'Gallery Uploads/Student-05.jpg', '2023-10-06 19:03:09'),
(45, 'Student-06.jpg', 'Gallery Uploads/Student-06.jpg', '2023-10-06 19:03:18'),
(46, 'Student-07.jpg', 'Gallery Uploads/Student-07.jpg', '2023-10-06 19:03:25'),
(47, 'Student-08.jpg', 'Gallery Uploads/Student-08.jpg', '2023-10-06 19:03:33'),
(48, 'Student-09.jpg', 'Gallery Uploads/Student-09.jpg', '2023-10-06 19:03:45'),
(49, 'Student-10.jpg', 'Gallery Uploads/Student-10.jpg', '2023-10-06 19:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `upload_date`) VALUES
(1, 'admin', 'school123', '2023-10-02 13:31:22'),
(2, 'school', 'pakistan', '2023-10-02 13:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `id` int(11) NOT NULL,
  `news` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `news`, `upload_date`) VALUES
(29, 'Start your academic journey with us in 2023 – Apply online for admissions!', '2023-10-06 19:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `upload_date`) VALUES
(16, 'EID-UL-FITR', 'Eid Mubarak! In celebration of Eid-ul-Fitr, our school will remain closed on [DATE: 21st April to 23rd April]. \r\nThis joyous occasion marks the end of Ramadan, a month of fasting and spiritual reflection for Muslims \r\naround the world. We hope this special day brings you peace, happiness, and prosperity. May you enjoy the \r\nfestivities with your loved ones, sharing moments of love, forgiveness, and gratitude. Regular classes will \r\nresume on [DATE 24th April]. Until then, we wish you a blessed and delightful Eid-ul-Fitr celebration. Eid \r\nMubarak to all!', '2023-10-06 19:39:29'),
(17, 'EID-UL-ADHA', 'Eid Mubarak! In celebration of Eid-ul-Adha, our school will remain closed on [DATE: 28th June to 30th June]. \r\nThis significant religious festival is a time of reflection, sacrifice, and joy for Muslims worldwide. We hope this \r\noccasion fills your hearts with happiness, love, and peace. May you enjoy this blessed day with your family \r\nand friends, cherishing the values of unity and compassion. Regular classes will resume on [DATE: 1st July]. \r\nUntil then, we wish you a delightful and safe Eid-ul-Adha celebration. Eid Mubarak to all!', '2023-10-06 19:40:10'),
(18, 'EID MILAD-UN-NABI', 'Dear Students, Parents, and Staff, In observance of Eid Milad-un-Nabi, our school will be closed on [26 September 2023]. May this blessed day inspire us to embody the teachings of love, kindness, and unity that Prophet Muhammad (peace be upon him) exemplified. Regular classes will resume on [27 September 2023]. Wishing you a reflective and joyous holiday!', '2023-10-06 19:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `principal_name` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `image_name`, `image_path`, `principal_name`, `upload_date`) VALUES
(35, 'Teacher-18.jpg', 'Teachers Uploads/Teacher-18.jpg', 'Syed Kamal Shah Termizi', '2023-10-06 18:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_post` varchar(255) NOT NULL,
  `teacher_details` varchar(1000) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `image_path`, `teacher_name`, `teacher_post`, `teacher_details`, `facebook`, `twitter`, `instagram`, `whatsapp`, `email`, `upload_date`) VALUES
(30, 'Teachers Uploads/Teacher-01.jpg', 'Hamza Hasan', 'Computer Science', 'Education: BS Computer Science University Of Buner, Address: District Buner.', 'https://www.facebook.com/hhasanofficial', 'https://www.twitter.com/hhasanofficial0', 'https://www.instagram.com/hhasanofficial', 'https://wa.me/03359090327', 'mailto:hamzahasan0327@gmail.com', '2023-10-06 19:20:36'),
(31, 'Teachers Uploads/Teacher-02.jpg', 'Saeed Ullah', 'English Lecturer', 'Education: BS English University Of Buner, Address: District Buner.', 'https://www.facebook.com/saeedofficial075', 'https://www.twitter.com/saeedofficial075', 'https://www.instagram.com/saeedofficial075', 'https://wa.me/03319696075', 'mailto:saeed.main0348@gmail.com', '2023-10-06 19:23:08'),
(32, 'Teachers Uploads/Teacher-03.jpg', 'Inayat Ullah', 'Urdu Lecturer', 'Education: BS Urdu University Of Buner, Address: District Buner.', 'https://www.facebook.com/inayatofficial196', 'https://www.twitter.com/inayatofficial196', 'https://www.instagram.com/inayatofficial196', 'https://wa.me/03410721196', 'mailto:iu334454@gmail.com', '2023-10-06 19:24:18'),
(33, 'Teachers Uploads/Teacher-04.jpg', 'Babar Azam', 'Mathematics Lecturer', 'Education: BS Mathematics University Of Lahore, Address: Country Pakistan.', 'https://www.facebook.com/babarazam56', 'https://www.twitter.com/babarazam56', 'https://www.instagram.com/babarazam56', 'https://wa.me/03126862327', 'mailto:hhasan0327@gmail.com', '2023-10-06 19:26:12'),
(34, 'Teachers Uploads/Teacher-05.jpg', 'Imran Khan', 'Biology Lecturer', 'Education: BS Biology University Of Swat, Address: Country Pakistan.', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'https://wa.me/', 'mailto:', '2023-10-06 19:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`, `upload_date`) VALUES
(17, 'Hamza Hasan', 'hamzahasan0327@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '2023-10-02 17:43:42'),
(18, 'Hanzala Hashmi', 'hhasan0327@gmail.com', '1e01ba3e07ac48cbdab2d3284d1dd0fa', '', '2023-10-04 05:10:27'),
(20, 'Saeed Ullah', 'saeed.mian0348@gmail.com', '849e060f05808577361b084ba1e3eca7', '', '2023-10-07 04:38:26'),
(21, 'Inayat Ullah', 'iu334454@gmail.com', '696f0897b08585720ba4c54f55895ac1', '', '2023-10-07 04:45:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
