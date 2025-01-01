-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 07:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regest`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `adults` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `dateFrom`, `dateTo`, `adults`, `price`) VALUES
(2, '2022-12-26', '2022-12-28', 3, 2100),
(3, '2022-12-26', '2023-01-06', 1, 3850),
(53, '2022-12-27', '2022-12-30', 6, 6300),
(54, '2023-12-16', '2023-12-13', 1, -1050);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `messeage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `phone`, `email`, `messeage`) VALUES
(1, 'Ahmed', '0121233454', 'ahmed@gmail.com', 'Thank you');

-- --------------------------------------------------------

--
-- Table structure for table `infromation`
--

CREATE TABLE `infromation` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `visa` varchar(20) NOT NULL,
  `cvv` int(11) NOT NULL,
  `mon` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infromation`
--

INSERT INTO `infromation` (`id`, `name`, `phone`, `email`, `address`, `visa`, `cvv`, `mon`, `year`) VALUES
(13, 'maged eshak', '0121233454', 'magedsaa@gmail.com', 'Assuit', '12345678912345', 356, 8, 23),
(14, 'maged eshak', '0121233454', 'magedn@gmail.com', 'asasa', '45446446444444', 333, 10, 23),
(15, 'maged eshak', '0121233454', 'magedn@gmail.com', 'zZ', '34444444444444', 433, 11, 23),
(16, 'maged eshak', '0121233454', 'magedn@gmail.com', 'as', '22222', 22, 11, 24),
(17, 'maged eshak', '0121233454', 'magedn@gmail.com', 'aas', '33333333333333', 333, 12, 26),
(18, 'maged eshak', '0121233454', 'magedn@gmail.com', 'Khaled Ibn El Walid Street, P.O.Box (28), Luxor City Center, Luxor, Egypt', '44444', 444, 11, 22),
(19, 'maged eshak', '0121233454', 'magedn@gmail.com', 'kkk', '22222222222', 222, 6, 25),
(20, 'maged eshak', '0121233454', 'magedn@gmail.com', 'kl', '555', 33, 10, 22),
(21, 'maged eshak', '0121233454', 'magedn@gmail.com', 'lkkll', '554555', 555, 8, 22),
(22, 'maged eshak', '0121233454', 'magedn@gmail.com', 'sa', '5', 4, 10, 23),
(23, 'maged eshak', '0121233454', 'magedn@gmail.com', 'as', '555', 55, 10, 22),
(24, 'maged eshak', '0121233454', 'magedn@gmail.com', 'as', '5555555', 555, 10, 25),
(25, 'maged eshak', '0121233454', 'magedn@gmail.com', 'ds', '444', 44, 7, 25),
(26, 'maged eshak', '0121233454', 'magedn@gmail.com', 'saa', '', 0, 11, 26),
(27, 'maged eshak', '0121233454', 'magedn@gmail.com', 'as', '555555555', 444, 9, 22),
(28, 'maged eshak', '0121233454', 'magedn@gmail.com', 'mjkj', '2222', 22, 9, 23),
(29, 'maged eshak', '0121233454', 'magedn@gmail.com', 'lll', '5555', 55, 11, 22),
(30, 'maged eshak', '0121233454', 'magedn@gmail.com', 'c', '1', 1, 12, 22),
(31, 'maged eshak', '0121233454', 'magedn@gmail.com', 'saa', '7878787878', 788, 11, 22),
(32, 'maged eshak', '0121233454', 'magedn@gmail.com', 'we', '0321032', 44, 12, 23),
(33, 'maged eshak', '0121233454', 'magedn@gmail.com', 'hgh', '44444444444444', 744, 11, 25),
(34, 'mina eshak', '01212334541', 'magedsass@gmail.com', 'Assuit', '126345464897', 333, 11, 22),
(35, 'mina eshak', '01212334541', 'magedsass@gmail.com', 'amsjasbbaj', '2653265236', 333, 7, 24),
(36, 'maged', '0121233454', 'maged@gmail.com', 'Assuit', '44444444444444', 414, 9, 23),
(37, 'maged', '0123456789', 'magedsaas5@gmail.com', 'ghgh', '151555', 221, 9, 22),
(38, 'Maged Eshak', '01234684523', 'magedes900@gmail.com', 'jkn', '6', 666, 11, 22);

-- --------------------------------------------------------

--
-- Table structure for table `inserttrip`
--

CREATE TABLE `inserttrip` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `photo4` varchar(100) NOT NULL,
  `trip` text NOT NULL,
  `address` text NOT NULL,
  `descrition` text NOT NULL,
  `trip_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inserttrip`
--

INSERT INTO `inserttrip` (`id`, `photo`, `photo2`, `photo3`, `photo4`, `trip`, `address`, `descrition`, `trip_price`) VALUES
(1, 'off1.jpg', '3.jpeg', 'OIP.jpeg', 'EGSSEACLA_NABQ-88---aquapark.jpg', 'ZYA Regina Resort and Aqua Park', '139 Sheraton Road, Hurghada Waterfront, Hurghada, Egypt', 'Conveniently situated in the Hurghada Waterfront part of Hurghada, this property puts you close to attractions\r\n          and interesting dining options. Don\'t leave before paying a visit to the famous Hurghada International\r\n          Airport. Rated with 4 stars, this high-quality property provides guests with access to massage, restaurant and\r\n          indoor pool on-site.', 350),
(2, 'off2.png', '8.jpeg', '', '', 'Sunrise Remal Resort', 'Ras Nasrani, Sharm El Sheikh', '   The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please.\r\n          Conveniently situated in the Ras Nasrani part of Sharm El Sheikh, this property puts you close to attractions\r\n          and interesting dining options. Don\'t leave before paying a visit to the famous Sharm el-Sheikh International\r\n          Airport. Rated with 4 stars.', 1500),
(3, 'off3.jpg', '6.jpeg', '7.jpeg', '', 'Iberotel Luxor', 'Khaled Ibn El Walid Street, P.O.Box (28), Luxor City Center, Luxor, Egypt', '   Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms.\r\n          Conveniently situated in the Luxor City Center part of Luxor, this property puts you close to attractions and\r\n          interesting dining options. Don\'t leave before paying a visit to the famous Luxor International Airport. Rated\r\n          with 4 stars, this high-quality property provides guests with access to massage, restaurant and outdoor pool\r\n          on-site.', 750),
(5, '1.jpeg', '4.jpeg', 'OIP.jpg', 'download.jpg', 'Ras Muhammad National Park', 'Ras Muhammad, Sharm El Sheikh ', 'Take a full day snorkeling trip to Ras Muhammad National Park to explore the underwater world surrounding White Island. Meet the marine inhabitants and marvel at the colorful flora and fauna before enjoying lunch on board.', 800),
(14, '6.jpeg', '7.jpeg', '222.jpg', '55.jpg', 'assiutt ', 'assiut university', 'vist assiu', 200),
(15, '6.jpeg', '7.jpeg', '55.jpg', '66.jpg', 'sa', 'as', 'a', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '0123456789', '123456'),
(2, 'as', 'mageds@gmail.com', '0121233454', '12345'),
(28, 'Maged Eshak', 'magedes900@gmail.com', '01234684523', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infromation`
--
ALTER TABLE `infromation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inserttrip`
--
ALTER TABLE `inserttrip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `infromation`
--
ALTER TABLE `infromation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `inserttrip`
--
ALTER TABLE `inserttrip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
