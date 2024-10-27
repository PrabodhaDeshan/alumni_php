-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 05:22 PM
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
(1, 'sdf', '2024-08-10', '15:12:00', 'ef', 'esf', 'C:\\\\fakepath\\\\student.jpg'),
(2, 'sport meet', '2024-08-24', '20:15:00', 'kandy', 'adidu iudghiaudghadh oaudgadgu oa doihado adiugad', 'C:\\\\fakepath\\\\boy.jpg'),
(4, 'dsfafsafF', '2024-08-17', '10:17:00', 'EFWSEF', 'fsafEFSF', ''),
(8, 'rgege', '2024-08-15', '17:00:00', 'greg', 'rgerg', ''),
(9, 'dfgsdgsd', '2024-08-03', '15:22:00', 'gdgdg', 'fgsdgf', 'C:\\\\fakepath\\\\student.jpg'),
(10, 'event 2', '2024-10-26', '12:00:00', 'colombo', 'no description', 'C:\\\\fakepath\\\\Bank-Deposit-Slip-1.jpg'),
(14, 'anual meetup', '2024-08-10', '22:43:00', 'frfgegrg', 'gergeg', 'C:\\\\fakepath\\\\Bank-Deposit-Slip-1.jpg'),
(15, 'anual meetup 2', '2024-08-10', '22:04:00', 'studio', 'ewfweafewwf', 'C:\\\\fakepath\\\\Bank-Deposit-Slip-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `massage_id` int(11) NOT NULL,
  `massege_from_admin_id` int(11) DEFAULT NULL,
  `massege_to_admin_id` int(11) DEFAULT NULL,
  `massege_date` date DEFAULT NULL,
  `massege_time` time DEFAULT NULL,
  `massege_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(21, 'member', 'member', 'member', 'fbdfsss', '69', '445 Heddnega33ma, Harankahawa', 'fdffdff', '4454', '2', 'office3', 'ddsss', 'kk455esh97@gmail.com', 2147483647, '$2y$10$SIiSyTWMYmzKSfbiQOgzb.72lb/csMFy7gx.T2o5YpDwszRpmOHQ6', '1234', 'Active');

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
(7, 0, 'Kingswwood Rugby ', 'Lorem ipsum dolor sit amet consectetur adipiscing elit vitae, auctor dis duis vivamus nulla nullam tristique, cras netus pretium maecenas facilisi velit metus. Rhoncus lectus rutrum est egestas hac arcu dis faucibus, eros sem nisl fermentum felis quis pre', '2024-09-24', '14:28:27', '66f27f338ce68-maxresdefault.jpg'),
(8, 0, 'Kingswood Week', 'Praesent condimentum libero pretium mus lacus dui, interdum taciti tincidunt enim congue, accumsan aptent eget tempus et. Himenaeos lacus aliquam penatibus platea lacinia consequat urna, ultricies eleifend dictumst semper fames fusce ridiculus tincidunt, ', '2024-09-24', '14:30:29', '66f27fadecfc8-hq720.jpg'),
(9, 0, 'Music Night 2024', 'praesent, iaculis curae nulla magna ad pharetra nunc ut. Tempor potenti lacus nunc euismod fringilla pretium, aenean pulvinar pharetra sociosqu integer enim, habitasse praesent feugiat dis urna. Donec primis at sapien bibendum gravida imperdiet cras iacul', '2024-09-24', '14:49:49', '66f2843560c75-concerts-wallpaper-preview.jpg');

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
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`massage_id`);

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
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `massage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `member_renewal`
--
ALTER TABLE `member_renewal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
