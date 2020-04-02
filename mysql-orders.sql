-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4445
-- Generation Time: Nov 24, 2019 at 11:33 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders1`
--

CREATE TABLE `orders1` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postcode` varchar(8) NOT NULL,
  `spirits` varchar(200) NOT NULL,
  `quantity1` varchar(20) NOT NULL,
  `wines` varchar(200) NOT NULL,
  `quantity2` varchar(20) NOT NULL,
  `beers` varchar(200) NOT NULL,
  `quantity3` varchar(20) NOT NULL,
  `softDrinks` varchar(200) NOT NULL,
  `quantity4` varchar(20) NOT NULL,
  `additional` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders1`
--

INSERT INTO `orders1` (`id`, `firstName`, `lastName`, `email`, `age`, `address`, `postcode`, `spirits`, `quantity1`, `wines`, `quantity2`, `beers`, `quantity3`, `softDrinks`, `quantity4`, `additional`) VALUES
(1, 'Agne', 'Macyte', 'agnemac97@gmail.com', 18, '2F2 6 Wardlaw Street', 'EH111TS', 'None', '', 'Nirabell Pinot Grigio 1l', '3', 'None', '', 'None', '', 'Nothing to say'),
(2, 'Martin', 'Ganchev', 'martin@gmail.com', 20, '2F2 6 Wardlaw Street', 'EH111TS', 'Tanqueray Gin 0,7l', '5', 'Nirabell Pinot Grigio 1l', '3', 'Peroni 4 Pack', '5', 'Diet Coke 1l', '3', 'Also 2 bottles of Sprite'),
(3, 'Kellie', 'Aour', 'kellie@gmail.com', 20, '15 Acacia street', 'ae111ys', 'Mount Gay Rum 1l', '2', 'Nirabell Pinot Grigio 1l', '2', 'Peroni 4 Pack', '3', 'None', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders1`
--
ALTER TABLE `orders1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders1`
--
ALTER TABLE `orders1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
