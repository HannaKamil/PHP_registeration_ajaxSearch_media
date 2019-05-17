-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 07:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `password`, `mail`, `phone`, `url`, `country`) VALUES
(1, 'jesus', 'christ', 'e10adc3949ba59abbe56e057f20f883e', 'jesus@jesus.com', '01279514048', 'https://www.youtube.com/watch?v=4pc6cgisbKE', 'nassra'),
(2, 'mena', 'kamil', 'e10adc3949ba59abbe56e057f20f883e', 'jesus@christ.com', '01279514048', 'https://www.youtube.com/watch?v=4pc6cgisbKE', 'cairo'),
(3, 'hanna', 'kamil', 'e10adc3949ba59abbe56e057f20f883e', 'hannakami2017@gmail.com', '01279514048', 'https://www.youtube.com/watch?v=4pc6cgisbKE', 'cairo'),
(4, 'hanna', 'kamil', 'e10adc3949ba59abbe56e057f20f883e', 'test@gmail.com', '01279514048', 'https://www.facebook.com', 'assiut'),
(5, 'hanna', 'kamil', 'e10adc3949ba59abbe56e057f20f883e', 'test2@gmail.com', '01279514048', 'https://www.facebook.com', 'assiut'),
(6, 'jesus', 'jesus', 'fcea920f7412b5da7be0cf42b8c93759', 'jes@jes.com', '01279514048', 'https://www.youtube.com/watch?v=4pc6cgisbKE', 'egypt'),
(7, 'hanna', 'kamil', 'e10adc3949ba59abbe56e057f20f883e', 'hannakami2ee017@gmail.com', '01279514048', 'https://www.youtube.com/watch?v=4pc6cgisbKE', 'cairo'),
(8, 'fouad', 'kamal', 'e10adc3949ba59abbe56e057f20f883e', 'fouad@tt.com', '010000011111', 'https://www.youtube.com', 'Qena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
