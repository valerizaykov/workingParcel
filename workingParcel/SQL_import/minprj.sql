-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 яну 2018 в 09:58
-- Версия на сървъра: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minprj`
--

-- --------------------------------------------------------

--
-- Структура на таблица `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1516457941),
('m130524_201442_init', 1516458255);

-- --------------------------------------------------------

--
-- Структура на таблица `parcel`
--

CREATE TABLE `parcel` (
  `id` int(11) NOT NULL,
  `parcel_name` text NOT NULL,
  `culture` text NOT NULL,
  `area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `parcel`
--

INSERT INTO `parcel` (`id`, `parcel_name`, `culture`, `area`) VALUES
(1, 'outdoor area', 'corn', 1000),
(2, 'newParcel', 'tomatoes and cucumbers', 1024);

-- --------------------------------------------------------

--
-- Структура на таблица `tractor`
--

CREATE TABLE `tractor` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `tractor`
--

INSERT INTO `tractor` (`id`, `name`) VALUES
(1, 'tractor1'),
(3, 'tractor2'),
(4, 'tractor3');

-- --------------------------------------------------------

--
-- Структура на таблица `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Valeri Zaykov', '78L7SXeMT0OtlMYtn4xcvCHOemOZ3P4N', '$2y$13$Yzmd6X6rPq6tkCcK9KEHVumR1BPU70vOVnnQAA7Nu6fAU4AV/ChVC', NULL, 'ivan@gmail.bg', 10, 1516463878, 1516463878);

-- --------------------------------------------------------

--
-- Структура на таблица `worked_parcel`
--

CREATE TABLE `worked_parcel` (
  `id` int(11) NOT NULL,
  `worked_area` int(11) NOT NULL,
  `tractor_id` int(11) NOT NULL,
  `parcel_id` int(11) NOT NULL,
  `date_worked` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `worked_parcel`
--

INSERT INTO `worked_parcel` (`id`, `worked_area`, `tractor_id`, `parcel_id`, `date_worked`) VALUES
(1, 10, 1, 1, '2018-01-01'),
(2, 11, 4, 2, '2018-01-31'),
(3, 129, 3, 1, '2018-01-31'),
(4, 123, 1, 2, '2018-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tractor`
--
ALTER TABLE `tractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `worked_parcel`
--
ALTER TABLE `worked_parcel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tractor`
--
ALTER TABLE `tractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `worked_parcel`
--
ALTER TABLE `worked_parcel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
