-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4445
-- Generation Time: Nov 24, 2019 at 11:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts1`
--

CREATE TABLE `accounts1` (
  `id` int(11) NOT NULL,
  `firstName2` varchar(20) NOT NULL,
  `lastName2` varchar(20) NOT NULL,
  `email2` varchar(40) NOT NULL,
  `username2` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts1`
--

INSERT INTO `accounts1` (`id`, `firstName2`, `lastName2`, `email2`, `username2`, `password2`) VALUES
(1, 'Agne', 'Macyte', 'agnemac97@gmail.com', 'agnemacyte', 'hello'),
(2, 'Kellie', 'Aour', 'kellie@gmail.com', 'kellie', 'kellie'),
(3, 'Julia', 'Ro', 'julia@gmail.com', 'julia', 'julia'),
(4, 'Martin', 'Ganchev', 'macytemail@gmail.com', 'martinukas', 'hello'),
(5, 'test', 'test', 'test@gmail.com', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts1`
--
ALTER TABLE `accounts1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts1`
--
ALTER TABLE `accounts1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
