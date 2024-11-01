-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 11:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingswood_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_description` varchar(255) DEFAULT NULL,
  `event_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_date`, `event_time`, `event_location`, `event_description`, `event_image`) VALUES
(16, 'ewfwef', '2024-10-15', '06:49:00', 'fnfdff', 'gbdbdb', NULL),
(17, 'fwefw', '2024-10-12', '15:55:00', 'fwef', 'efwef', NULL),
(18, 'ewwf', '2024-10-02', '03:00:00', 'wfw', 'fwefwf', NULL),
(19, 'sport meet', '2024-10-07', '17:00:00', 'feww', 'fwefwfwefwe', '20241028112949happy-cute-brunette-caucasian-grad-260nw-789412666.png');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(255) NOT NULL,
  `member_first_name` varchar(255) NOT NULL,
  `member_last_name` varchar(255) NOT NULL,
  `member_id_no` varchar(255) NOT NULL,
  `member_batch` varchar(255) DEFAULT NULL,
  `member_address` varchar(255) DEFAULT NULL,
  `member_address_line2` varchar(255) DEFAULT NULL,
  `member_nic` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `member_wrokplace` varchar(255) DEFAULT NULL,
  `member_designation` varchar(255) DEFAULT NULL,
  `member_email` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_username`, `member_first_name`, `member_last_name`, `member_id_no`, `member_batch`, `member_address`, `member_address_line2`, `member_nic`, `role`, `member_wrokplace`, `member_designation`, `member_email`, `contact_number`, `password`, `confirm_password`, `status`) VALUES
(20, 'admin', 'adam', 'ff', 'rgeg', '69', 'kandy', 'kandy', '424442453', '1', 'office3', 'manager', 'adminesh97@gmail.com', 2147483647, '$2y$10$PJ32cCLv6m.SeaGoUJKBqOX.lvPcs2CA/WwzAM.9Pa5KAS7g3kZpG', '1111', 'Active'),
(21, 'member', 'member', 'member', 'fbdfsss', '69', '445 Heddnega33ma, Harankahawa', 'fdffdff', '4454', '2', 'office3', 'ddsss', 'kk455esh97@gmail.com', 2147483647, '$2y$10$SIiSyTWMYmzKSfbiQOgzb.72lb/csMFy7gx.T2o5YpDwszRpmOHQ6', '1234', 'Active'),
(22, 'Prabodha', 'Prabodha', 'Deshan', '5161646464646456', '69', 'ghewrwery546', 'therhertherherherherh', '785856856856865', '2', 'tritcal', 'erhrthhr hrth', 'deshan@gmail.com', 2147483647, '$2y$10$lpExZCUewbNH6g.m81iDa.Cm4OlQX.MwdHqnNB1dHVLW9duYC/D6W', '4444', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `member_renewal`
--

CREATE TABLE `member_renewal` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `membership_type` varchar(255) NOT NULL,
  `receipt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `massege_date` date NOT NULL,
  `massege_time` time NOT NULL,
  `massege_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_id`, `receiver_id`, `massege_date`, `massege_time`, `massege_description`) VALUES
(1, 20, 21, '2024-10-28', '06:41:17', 'wefwefewf'),
(2, 20, 22, '2024-10-28', '06:41:21', 'fewfff'),
(3, 20, 21, '2024-10-28', '06:41:24', 'wfwfwefwf'),
(4, 20, 22, '2024-10-28', '06:41:29', 'f yuo'),
(5, 20, 22, '2024-10-28', '06:43:58', 'hii'),
(6, 20, 21, '2024-10-28', '06:44:04', 'hello'),
(7, 20, 21, '2024-10-28', '06:50:02', 'oiii'),
(8, 20, 21, '2024-10-28', '06:50:08', 'whatsauppppp!!'),
(9, 22, 20, '2024-10-28', '06:53:14', 'hrethert'),
(10, 22, 20, '2024-10-28', '06:53:16', 'hrthrehrth'),
(11, 20, 21, '2024-10-28', '07:20:58', 'wefwef wefwfefwffweffwf'),
(12, 20, 22, '2024-10-28', '07:21:33', 'ewfwqfe fqwef gbernrn ernreerhrth'),
(13, 20, 22, '2024-10-28', '07:29:27', 'f rgwg wer fhh uhehf weifoh oih oi fwiqef oih hi oih'),
(14, 21, 20, '2024-10-28', '07:36:10', 'rwerwere gwergr '),
(15, 21, 22, '2024-10-28', '07:37:16', 'hii prabodha im member'),
(16, 22, 21, '2024-10-28', '07:37:52', 'hii member'),
(17, 20, 22, '2024-10-28', '08:26:22', 'ggetgerwgg er');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_description` varchar(255) DEFAULT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `post_time` time NOT NULL DEFAULT current_timestamp(),
  `post_image1` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `admin_id`, `post_title`, `post_description`, `post_date`, `post_time`, `post_image1`) VALUES
(21, 0, 'Kingswood rugby', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, habitant ornare pulvinar gravida sem per euismod, himenaeos fames ridiculus ante habitasse fermentum. Torquent turpis lobortis vitae eleifend et nunc auctor blandit nec imperdiet, posuere quis class ', '2024-10-28', '14:47:27', '20241028101727hq720.jpg'),
(22, 0, 'Post sample post', 'senectus curabitur scelerisque fusce, tempor sodales est varius pellentesque at cum convallis ut dis conubia. Cum mattis suspendisse quis hac mauris placerat vitae at sociosqu, vulputate primis orci suscipit aliquet curabitur sodales luctus interdum, dapi', '2024-10-28', '14:50:42', '20241028102042happy-cute-brunette-caucasian-grad-260nw-789412666.png');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `type`, `password`) VALUES
(2, 'member', 'member', '1234'),
(3, 'admin', 'admin', '4444');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', '1234', 1),
(2, 'member', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_renewal`
--
ALTER TABLE `member_renewal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `member_renewal`
--
ALTER TABLE `member_renewal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `members` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
