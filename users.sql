-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2017 at 11:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(80) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `country` text NOT NULL,
  `mobile` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `country`, `mobile`, `firstname`, `lastname`, `regdate`) VALUES
(1, 'suku', 'suku', 'computersuku@gmail.com', '', '', '', 'suku', '', '2017-09-08 12:21:42'),
(2, 'comsuku', 'suku', 'sukumark@sinexsystems.com', '', '', '', 'sukumar', '', '2017-09-09 04:09:08'),
(3, 'ram', 'ram', 'ram@ram.com', '', '', '', 'ram', '', '2017-09-09 04:14:27'),
(4, 'raj', 'raj', 'raj@rj.com', '', '', '', 'raj', '', '2017-09-09 05:23:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `UNIQUE` (`email`(20)),
  ADD KEY `IN` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
