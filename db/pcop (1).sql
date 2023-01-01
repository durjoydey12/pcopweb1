-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 09:27 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcop`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(20) NOT NULL,
  `title` varchar(500) NOT NULL,
  `history` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `history`, `image`) VALUES
(20, 'Pritilata Waddedar .', 'Pritilata was born in a middle-class Vaidya Brahmin family on 5 May 1911 in Dhalghat village in Patiya upazila of Chittagong (now in Bangladesh).She was a Bengali revolutionary nationalist. After completing her education in Chittagong, she attended the Bethune College in Calcutta. Pritilata graduated in Philosophy with distinction.After a brief stint as a school teacher, Pritilata joined a revolutionary group headed by Surya Sen. She led a 15 man team of revolutionaries in a 1932 attack on the Pahartali European Club, which had a sign board that read ', 'image16.jpeg'),
(23, 'Master The Surya Sen ', 'Surya Sen was a Bengali independence activist who remembered for his daring raid on the British armoury in Chittagong (now in Bangladesh) in 1930. A school teacher, revered by all as ‘Masterda’, an honorific translating to “a teacher and an elder brother”, he was deeply influenced by nationalist ideals even as a student. Even though the Chittagong Armoury raid was largely unsuccessful, it demonstrated to the British the extent of the public anger against them. A brilliant strategist and charismatic leader, he was able to prevail upon the youth and ladies, in particular, to join the Indian independence movement. Betrayed, Surya Sen was arrested, subjected to appalling torture, and then executed by the British who were unable to tame his nationalistic spirit.', 'image15.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(20) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile_no` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `logo`, `text`, `address`, `mobile_no`, `email`) VALUES
(58, 'Pritilata Cultural Organization', 'Pritilata cultural center was built to save the memorial of revolutionary pritilata and his contribution to the freedom of Indian subcontinent from the British government in her village Dhalghat under patiya upazila. The cultural center located beside the east of Dhalghat Railway station. One of the founder of the pritilata cultural center Mr. Chakrobarti amiable person especially take care of this cultural center', 'Dhalghat,patiya,Chottogra', '0125874698', 'Pritilata@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `outsourcisngs`
--

CREATE TABLE `outsourcisngs` (
  `id` int(20) NOT NULL,
  `text` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outsourcisngs`
--

INSERT INTO `outsourcisngs` (`id`, `text`, `title`, `image`) VALUES
(5, 'According to the Outsourcing definition, it is a technique of appointing another firm or company for a specific task. To simplify, we can say that it is the business practice to set specific third-party to give services previously done by the company’s staff. The foremost cause of doing so is to cut down the costs and increase the company’s profitability. It also involves the distribution of labour so that the company outsourcing can focus on more important subjects. It is a matter of controvers', 'Outsourcisng ', 'image17.jpg'),
(6, 'Freelance platforms are a marketplace for businesses and freelance workers from all over the world. They typically make money by taking a cut from both the employer and the freelancer. For the money they charge, these platforms provide a hassle-free and convenient business experience to both parties ', 'Outsourcisng marketplace .', '');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(20) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`) VALUES
(51, 'picture ', 'image3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `mobile_no` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_no`) VALUES
(1, 'Durjoy dey', 'durjoy@gmail.com', '1122', '0125874698'),
(2, 'Dabi Rani Day', 'dabiday@gmail.comm', '2255', '01705698547');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outsourcisngs`
--
ALTER TABLE `outsourcisngs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `outsourcisngs`
--
ALTER TABLE `outsourcisngs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;