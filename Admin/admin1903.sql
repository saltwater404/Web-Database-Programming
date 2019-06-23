-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 10:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin1903`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs_user`
--

CREATE TABLE `cs_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_user`
--

INSERT INTO `cs_user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`) VALUES
(1, 'Kobir Khan', '017988132328', 'kobir@gmail.com', 'kobir', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'Mouli Aktar', '01982832323', 'mouli@gmail.com', 'mouli', 'c4ca4238a0b923820dcc509a6f75849b'),
(4, 'Dipto Ahamed', '01656656565', 'dipto@gmail.com', 'dipto', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(5, 'Faisal Ahmed', '1766489774', 'kalukha25@gmail.com', 'ahmed270', '912ec803b2ce49e4a541068d495ab570'),
(6, 'Ahmed', '123456789', 'kalukha25@gmail.com', 'adfa', '0cc175b9c0f1b6a831c399e269772661'),
(7, 'Sujon', '123', 'jalukha25@gmail.com', 'adf', '912ec803b2ce49e4a541068d495ab570'),
(9, 'rana', '1766489774', 'kalukha25@gmail.com', 'Eer', '912ec803b2ce49e4a541068d495ab570'),
(10, 'Alom', '123456789', 'mfashimanto@yahoo.com', 'ahmed273', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'Helal', '1234567895', 'mfashimanto404@gmai.com', 'fel12', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'sana', '123456789', 'mfashimanto404@gmail.com', 'sana1', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs_user`
--
ALTER TABLE `cs_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs_user`
--
ALTER TABLE `cs_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
