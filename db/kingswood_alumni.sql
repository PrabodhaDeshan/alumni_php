-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 05:07 AM
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
(19, 'sport meet', '2024-10-07', '17:00:00', 'feww', 'fwefwfwefwe', '20241028112949happy-cute-brunette-caucasian-grad-260nw-789412666.png'),
(22, 'Music event', '2024-10-11', '05:25:00', 'efwqfwqefqwf', 'spendisse, viverra leo natoque mi mattis non imperdiet ullamcorper vitae sollicitudin, cras cum lacinia ultricies porttitor facilisis nostra tempor. Convallis eu enim molestie ligula accumsan hac sapien metus sodales commodo, quisque himenaeos cras nascet', '20241029105616images.jpeg'),
(25, 'jdfyjrjeryerjyje', '2024-10-12', '23:26:00', 'yjydfhtjhrdtjhr', 'tjerjrjerjer', '20241031045625images.jpeg'),
(27, 'cricket match', '2024-10-19', '00:30:00', 'wefwqfqwf', 'wfwfwqfqwfwqf', '20241031045806happy-cute-brunette-caucasian-grad-260nw-789412666.png'),
(28, 'wwqgqwhherhhe', '2024-10-19', '09:38:00', 'werhwehew', 'ehewh wehweh', '20241031050628images.jpeg'),
(29, 'hwehweh we hwew e', '2024-10-05', '01:40:00', 'erhwehhweh', 'ehewhwehrh', '20241031050642images.jpeg'),
(30, 'erhwerhewthhweh', '2024-10-12', '09:39:00', 'wehwehewhwe', 'hewhewrhweh', '20241031050653images.jpeg'),
(31, 'erhweh ewehewhe', '2024-10-19', '23:37:00', 'erhwerhwerwer', 'weherhehh', '20241031050707images.jpeg'),
(32, 'gettogether', '2024-11-15', '11:40:00', 'efewfweq', 'fwefw', '20241031050857images.jpeg'),
(34, 'Anual meetup 2024', '2024-11-03', '17:00:00', 'school', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nisl varius, id phasellus pellentesque iaculis augue eget volutpat erat senectus condimentum, consequat mus diam sem mollis integer sociosqu mattis. Suscipit iaculis habitant himenaeos nunc platea, he', '20241031052541images.jpeg');

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
(20, 'admin', 'admin', 'lastname', 'rgeg', '69', 'kandy', 'kandy', '424442453', '1', 'admin', 'manager', 'adminesh97@gmail.com', 2147483647, '$2y$10$PJ32cCLv6m.SeaGoUJKBqOX.lvPcs2CA/WwzAM.9Pa5KAS7g3kZpG', '1111', 'Active'),
(21, 'member', 'member', 'member', 'fbdfsss', '69', '445 Heddnega33ma, Harankahawa', 'fdffdff', '4454', '2', 'office3', 'ddsss', 'kk455esh97@gmail.com', 2147483647, '$2y$10$SIiSyTWMYmzKSfbiQOgzb.72lb/csMFy7gx.T2o5YpDwszRpmOHQ6', '1234', 'Active'),
(22, 'Prabodha', 'rgerge', 'gergegwe', '45355', '3453535', 'gdfgdgg', 'dgdgdgg', '45455', '2', 'gdgd', 'tggdgdfg', 't34@nmm.jj', 56463456, '$2y$10$lpExZCUewbNH6g.m81iDa.Cm4OlQX.MwdHqnNB1dHVLW9duYC/D6W', '4444', 'Active'),
(23, 'lakshitha', 'member2', 'member2', '4234234', '24', 'kandy', 'e44wgerg gewrgergewrgwe', '34234324432', '2', 'lakshitha', 'gregwergrweg', 'gwerggerg@dg.jj', 564643656, '$2y$10$l7BcIRL3EZHyTC57S2R8EeD.DQFKjOIDaXWi9Zs9eAh5xStQe3vBS', '5555', 'Active'),
(24, 'User1', 'User1', 'User1', '34242325', '46', 'hrethrthrthrthdheh', 'ghergewrgwergweg', '653463456436', '1', 'User1', 'rtetwetwet', 'efwefwf@hh.jj', 64563465, '$2y$10$K1IQoJCX7EphETcn3LOEFuZX1o/VgIHXEg1nqAqx29HufaDwSsBTO', '5555', 'Active'),
(25, 'brian', 'brian', 'brian', '342342', '44', 'gergge', 'gergweg', 't3t3', '2', 't3t3t3', 'gewgewge', 'gerg@ff.kk', 2147483647, '$2y$10$f8TkolUB/6bl1g2cISVaYuLO3pUynEHKiPr1fFqGJIWneUkQnXBDe', '0000', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `member_renewal`
--

CREATE TABLE `member_renewal` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `receipt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_renewal`
--

INSERT INTO `member_renewal` (`id`, `full_name`, `email_address`, `member_id`, `receipt`) VALUES
(15, 'efqefwq', 'fwefwqee@ff.kk', 21, '20241105114455uu.png'),
(16, 'wdfqdwqf', 'efwqef@ff.ll', 21, '20241105114846aaature.PNG'),
(17, 'regwegwegweg', 'fgwegr@ff.ll', 22, '20241105115301asefe.jpg'),
(23, 'mbkgnndfb', 'm@hlsd.lk', 20, '20241106043507Capture.PNG'),
(24, 'Admindd', 'ad@gmu.ll', 20, '20241106044605deposit-receipt_x.png');

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
(26, 22, 20, '2024-10-29', '07:36:36', '.uiluyul'),
(46, 21, 20, '2024-10-29', '08:04:24', 'Lorem ipsum dolor sit amet consectetur adipiscing '),
(47, 21, 20, '2024-10-29', '08:04:34', 'felis commodo eget curae'),
(48, 21, 22, '2024-10-29', '08:04:54', '#FFFFFF'),
(49, 21, 22, '2024-10-29', '08:05:04', 'Lorem ipsum dolor sit amet'),
(50, 21, 22, '2024-10-29', '08:05:16', 'viverra'),
(51, 21, 20, '2024-10-29', '08:09:17', 'hii'),
(52, 21, 20, '2024-10-29', '08:30:41', 'wrfguiuiewguio'),
(53, 21, 20, '2024-10-29', '08:30:47', 'sdrfuihyeuiohyyuyhew'),
(54, 20, 22, '2024-10-29', '11:34:52', 'gddg re ge54665'),
(55, 20, 22, '2024-10-29', '11:45:03', 'efwfewfwfe'),
(56, 20, 21, '2024-10-29', '11:45:09', 'wefwfwef w fwwef wefw '),
(57, 20, 21, '2024-10-29', '11:52:29', 'efwfe'),
(58, 20, 21, '2024-10-29', '11:52:33', 'wfrbertnhre jyjrt y ryj erjryj re jyrej ety jt'),
(59, 20, 21, '2024-10-29', '11:52:47', 'ergwe we weg werg we gweg werg wer gweg weg wewfg wtwer wer gwer gwerg weg ewr'),
(60, 20, 22, '2024-10-29', '11:54:22', 'weffewfwfe wefwq'),
(61, 20, 22, '2024-10-31', '05:52:29', 'wefwefwqfw'),
(62, 20, 24, '2024-10-31', '06:06:30', 'hii'),
(63, 20, 21, '2024-10-31', '06:09:44', 'bbbb'),
(64, 21, 24, '2024-10-31', '07:38:27', 'hii'),
(65, 21, 24, '2024-10-31', '07:38:31', 'hello'),
(66, 21, 24, '2024-11-05', '06:07:46', 'fgsdgdg dgdfgdgd'),
(67, 22, 21, '2024-11-05', '11:56:54', 'efwefwef'),
(68, 22, 21, '2024-11-05', '11:56:56', 'fwe fwefwefwfwe'),
(69, 20, 24, '2024-11-05', '12:01:19', 'hii'),
(70, 20, 25, '2024-11-05', '12:01:30', 'hello');

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
(22, 0, 'Post sample post', 'senectus curabitur scelerisque fusce, tempor sodales est varius pellentesque at cum convallis ut dis conubia. Cum mattis suspendisse quis hac mauris placerat vitae at sociosqu, vulputate primis orci suscipit aliquet curabitur sodales luctus interdum, dapi', '2024-10-28', '14:50:42', '20241028102042happy-cute-brunette-caucasian-grad-260nw-789412666.png'),
(23, 0, 'graduation', 'ewfqwfwfqwfq', '2024-10-30', '15:02:02', '20241030103202asefe.jpg'),
(24, 0, 'ubgowbqgwgwegofwerqoi geqg wergwe g', 'ecenas lobortis lacinia convallis tempor odio facilisis magnis. Urna nisl ac magna sollicitudin massa sodales turpis dis viverra feugiat eros quis netus, curabitur egestas lectus rutrum faucibus scelerisque tempus phasellus et ultricies facilisi laoreet m', '2024-10-30', '15:02:17', '20241030103217pexels-photo-267885.jpeg');

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
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `member_renewal`
--
ALTER TABLE `member_renewal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
