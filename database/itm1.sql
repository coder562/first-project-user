-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 08:50 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itm1`
--

-- --------------------------------------------------------

--
-- Table structure for table `btech`
--

CREATE TABLE `btech` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `qualifications` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btech`
--

INSERT INTO `btech` (`id`, `name`, `email`, `number`, `gender`, `stream`, `qualifications`, `address`, `image`, `date`) VALUES
(7, 'abhi', 'abhi@gmail.com', '890765', 'male', 'Civil', 'iit mains,iit adavnced', ',datia', 'upload/Screenshot (13).png', '2021-06-25 03:52:34'),
(8, 'vaishali', 'vaishalijain@gmail.com', '8', 'female', 'IT', '12th,iit mains', 'gh', 'upload/', '2021-06-25 03:53:06'),
(9, 'trisha', 'trisha@gmail.com', '45677', 'female', 'E.E', '10th,iit mains,iit adavnced', 'wer', 'upload/', '2021-06-27 06:08:03'),
(10, 'rishi', 'rishi@gmail.com', '78', 'male', 'E.E', 'iit mains,iit adavnced', 'rt', 'upload/', '2021-06-27 06:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`) VALUES
(20, 'vaishali', 'vaishalijain@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'upload/fa3b112e2d7a3d0fc565f0e5ef02f733.Sketchpad.png'),
(21, 'trisha', 'trisha@gmail.com', '37693cfc748049e45d87b8c7d8b9aacd', 'upload/6d1cdb66b5fc17c1bd9723ff3ac53a54.me.png'),
(22, 's', 'sg@gmail.com', '3295c76acbf4caaed33c36b1b5fc2cb1', 'upload/979ce3ece190ebacd12bf856c6ac52db.daddy.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `btech`
--
ALTER TABLE `btech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `btech`
--
ALTER TABLE `btech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
