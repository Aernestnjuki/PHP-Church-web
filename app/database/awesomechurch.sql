-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 03:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awesomechurch`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `rev_image` varchar(255) NOT NULL,
  `about_rev` varchar(255) NOT NULL,
  `church_image` varchar(255) NOT NULL,
  `about_church` varchar(255) NOT NULL,
  `publish` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `admin_id`, `rev_image`, `about_rev`, `church_image`, `about_church`, `publish`) VALUES
(1, 1, '1656273795_IMG-20210106-WA0001.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ', '1656273795_IMG-20210106-WA0001.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `appoint_email` varchar(255) NOT NULL,
  `appoint_name` varchar(255) NOT NULL,
  `appoint_county` varchar(255) NOT NULL,
  `appoint_mobile` int(10) NOT NULL,
  `appoint_date` date NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `admin_id`, `appoint_email`, `appoint_name`, `appoint_county`, `appoint_mobile`, `appoint_date`, `meeting_date`, `meeting_time`) VALUES
(3, 6, 1, 'jeff@gmail.com', 'jeff mugendi', 'Tharakanithi', 765341287, '2022-07-01', '2022-06-23', '16:10:00'),
(5, 4, 1, 'bena@gmail.com', 'Benard', 'Kiambu', 765431289, '2022-06-23', '2022-06-23', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `blogTitle` varchar(255) NOT NULL,
  `blogBody` varchar(2000) NOT NULL,
  `blogAuthor` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publish` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `counselling`
--

CREATE TABLE `counselling` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `your_name` varchar(255) NOT NULL,
  `Phone_number` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `meeting_date` varchar(255) NOT NULL,
  `meeting_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselling`
--

INSERT INTO `counselling` (`id`, `user_id`, `admin_id`, `your_name`, `Phone_number`, `country`, `religion`, `gender`, `request`, `meeting_date`, `meeting_time`) VALUES
(1, 4, 1, 'jeff mugendi', '0765341287', 'Uganda', 'Hindu', 'Male', 'Anxiety', '2022-07-09', '10:12');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `event_venue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `admin_id`, `image`, `event_title`, `event_date`, `time`, `event_venue`) VALUES
(1, 1, '1655836866_IMG-20210129-WA0029.jpg', 'Church fund raising', '2022-07-09', '14:10', 'kinoru stadium'),
(2, 1, '1655839655_IMG-20210223-WA0004.jpg', 'Church development fund raising', '2022-06-29', '13:30', 'Church hall');

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `depit` double NOT NULL,
  `credit` double NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finances`
--

INSERT INTO `finances` (`id`, `admin_id`, `date`, `ref`, `description`, `depit`, `credit`, `balance`) VALUES
(1, 1, '2022-06-13', 'HYGTU78', 'M-PESA', 0, 2000, 2000),
(2, 1, '2022-06-15', 'HYTG098', 'KCB INVOICE', 1990, 90, 1900);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `admin`, `username`, `email`, `phone`, `password`) VALUES
(1, 1, 'aernest', 'anjuki@gmail.com', 712233445, '$2y$10$xQ6qbpIqEbxunbHi436Xl.U59g8WH6iTFXh3/AbdFYD..6o6Lg5SW'),
(2, 0, 'mark', 'mark@gmail.com', 712233445, '$2y$10$RU34ECBeXvGsc9582lfQqeBNhDYNdoFfLliX0azevlofrmmLn0MNW'),
(3, 1, 'ruth', 'ruthwanguii@gmail.com', 787654322, '$2y$10$wDz4gWolifagjEh3p58Sme9pbQsgKxRBRoE8xPb64upmaPd/1qIk6'),
(4, 0, 'benard', 'benna@gmail.com', 765431289, '$2y$10$4IYLdSfBIgi8/XEQ8qnvB.6zUsY7x9yWYzZd7s15iHSDPujRBdPge'),
(6, 0, 'jeff', 'jeffm@gmail.com', 754327896, '$2y$10$ZsmSAUqjO/9s6cBKiuKsdeGMDErsKaHmF5StO2vyQo6Q90FRnussS');

-- --------------------------------------------------------

--
-- Table structure for table `sermons`
--

CREATE TABLE `sermons` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `sermon_name` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `publish` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sermons`
--

INSERT INTO `sermons` (`id`, `admin_id`, `sermon_name`, `youtube_link`, `publish`) VALUES
(2, 1, 'Spiritual Warfare', 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0', 1),
(3, 1, 'Fruits of the holy spirit', 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0', 1),
(4, 1, 'Contentment', 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0', 1),
(5, 1, 'family', 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `verse`
--

CREATE TABLE `verse` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `bible_verse` varchar(255) NOT NULL,
  `verse_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verse`
--

INSERT INTO `verse` (`id`, `admin_id`, `bible_verse`, `verse_content`) VALUES
(1, 1, 'Exodus 14:14', 'The Lord will fight for you; you need only to be still.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `myappoint` (`admin_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog` (`admin_id`);

--
-- Indexes for table `counselling`
--
ALTER TABLE `counselling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conselling` (`admin_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events` (`admin_id`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cash` (`admin_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sermons`
--
ALTER TABLE `sermons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test` (`admin_id`);

--
-- Indexes for table `verse`
--
ALTER TABLE `verse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counselling`
--
ALTER TABLE `counselling`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `verse`
--
ALTER TABLE `verse`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `myappoint` FOREIGN KEY (`admin_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blog` FOREIGN KEY (`admin_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `counselling`
--
ALTER TABLE `counselling`
  ADD CONSTRAINT `conselling` FOREIGN KEY (`admin_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events` FOREIGN KEY (`admin_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `finances`
--
ALTER TABLE `finances`
  ADD CONSTRAINT `cash` FOREIGN KEY (`admin_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sermons`
--
ALTER TABLE `sermons`
  ADD CONSTRAINT `Test` FOREIGN KEY (`admin_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
