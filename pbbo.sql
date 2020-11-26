-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 08:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeID` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `employeeType` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `name`, `birthdate`, `employeeType`, `created_at`, `updated_at`, `password`) VALUES
('C1', 'Anwar', '2020-11-06', 1, '2020-11-11 08:01:32', '2020-11-11 08:01:32', NULL),
('K1', 'Agus', '2020-11-01', 3, '2020-11-11 08:01:32', '2020-11-11 08:01:32', NULL),
('W1', 'Bina', '2020-11-08', 2, '2020-11-11 08:02:28', '2020-11-11 08:02:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employeetypes`
--

CREATE TABLE `employeetypes` (
  `employeetype` int(11) NOT NULL,
  `employeename` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeetypes`
--

INSERT INTO `employeetypes` (`employeetype`, `employeename`, `created_at`, `updated_at`) VALUES
(1, 'Cheff', '2020-11-11 08:00:37', '2020-11-11 08:00:37'),
(2, 'Waiter', '2020-11-11 08:00:37', '2020-11-11 08:00:37'),
(3, 'Kasir', '2020-11-11 08:01:05', '2020-11-11 08:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mejas`
--

CREATE TABLE `mejas` (
  `tableId` int(11) NOT NULL,
  `tableName` varchar(10) DEFAULT NULL,
  `statusMeja` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mejas`
--

INSERT INTO `mejas` (`tableId`, `tableName`, `statusMeja`, `created_at`, `updated_at`) VALUES
(1, 'A1', 1, '2020-11-11 07:59:27', '2020-11-11 07:59:27'),
(2, 'A2', 1, '2020-11-11 07:59:27', '2020-11-25 23:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menuId` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menuId`, `name`, `price`, `created_at`, `updated_at`) VALUES
('495111', 'makanan1', 15000, '2020-11-10 20:01:53', '2020-11-10 20:01:53'),
('547775', 'makanan2', 20000, '2020-11-11 01:00:09', '2020-11-11 01:00:09'),
('582897', 'makanan3', 35000, '2020-11-10 20:03:18', '2020-11-10 20:03:18'),
('592479', 'makanan4', 10000, '2020-11-11 01:00:17', '2020-11-11 01:00:17'),
('636589', 'makanan5', 55000, NULL, NULL),
('640941', 'makanan6', 23000, NULL, NULL),
('642605', 'makanan7', 15000, NULL, NULL),
('644387', 'makanan8', 30000, '2020-11-10 20:47:30', '2020-11-10 20:47:30'),
('689502', 'makanan9', 30000, '2020-11-10 20:03:18', '2020-11-10 20:03:18'),
('715392', 'makanan10', 46000, '2020-11-10 20:47:30', '2020-11-10 20:47:30'),
('715415', 'makanan11', 46000, NULL, NULL),
('715446', 'makanan12', 12000, NULL, NULL),
('715497', 'makanan13', 27000, '2020-11-10 20:47:30', '2020-11-10 20:47:30'),
('715540', 'makanan14', 21000, NULL, NULL),
('715594', 'makanan15', 13000, '2020-11-10 20:47:30', '2020-11-10 20:47:30'),
('715769', 'makanan16', 23000, NULL, NULL),
('716268', 'makanan17', 43000, '2020-11-10 20:47:30', '2020-11-10 20:47:30'),
('716381', 'makanan18', 26000, '2020-11-10 20:47:30', '2020-11-10 20:47:30'),
('716408', 'makanan19', 12500, NULL, NULL),
('716426', 'makanan20', 15000, '2020-11-10 20:47:30', '2020-11-10 20:47:30'),
('716627', 'makanan21', 24000, NULL, NULL),
('729366', 'makanan22', 11000, NULL, NULL),
('756814', 'makanan23', 22000, NULL, NULL),
('766453', 'makanan24', 22000, NULL, NULL),
('777037', 'makanan25', 42000, '2020-11-10 20:03:18', '2020-11-10 20:03:18'),
('782600', 'makanan26', 17000, NULL, NULL),
('782601', 'makanan27', 12000, '2020-11-10 20:47:30', '2020-11-10 20:47:30'),
('794349', 'makanan28', 20000, '2020-11-16 14:09:27', '2020-11-16 14:09:27'),
('795751', 'makanan29', 56000, NULL, NULL),
('798400', 'makanan30', 22500, NULL, NULL),
('801710', 'makanan31', 22000, '2020-11-10 20:03:18', '2020-11-10 20:03:18'),
('818941', 'makanan32', 25000, '2020-11-10 20:01:53', '2020-11-10 20:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `menu_order`
--

CREATE TABLE `menu_order` (
  `ID` int(11) NOT NULL,
  `order_orderID` varchar(20) DEFAULT NULL,
  `menu_menuId` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `note` varchar(225) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_order`
--

INSERT INTO `menu_order` (`ID`, `order_orderID`, `menu_menuId`, `qty`, `note`, `stat`, `created_at`, `updated_at`) VALUES
(1, '19112020192853', '715415', 8, NULL, 1, '2020-11-19 06:11:41', '2020-11-19 21:11:47'),
(2, '19112020192853', '766453', 15, NULL, 1, '2020-11-19 06:11:45', '2020-11-19 21:32:22'),
(3, '19112020192853', '794349', 8, NULL, 1, '2020-11-19 21:04:31', '2020-11-20 20:52:55'),
(4, '19112020192853', '715446', 8, NULL, 1, '2020-11-19 21:04:34', '2020-11-21 22:27:48'),
(5, '19112020192853', '640941', 1, NULL, 1, '2020-11-19 21:42:16', '2020-11-19 21:42:16'),
(6, '19112020192853', '795751', 10, NULL, 1, '2020-11-19 21:42:45', '2020-11-21 22:28:56'),
(7, '19112020192853', '715594', 1, NULL, 1, '2020-11-22 22:58:24', '2020-11-22 22:58:24'),
(8, '19112020192853', '716426', 1, NULL, 2, '2020-11-22 22:58:49', '2020-11-22 22:58:49'),
(15, '24112020100918', '592479', 5, NULL, 1, '2020-11-24 04:13:20', '2020-11-24 05:32:11'),
(16, '24112020100918', '547775', 11, NULL, 1, '2020-11-24 04:13:24', '2020-11-24 05:32:11'),
(17, '24112020100918', '495111', 18, NULL, 1, '2020-11-24 04:13:27', '2020-11-24 05:32:11'),
(18, '26112020063237', '716426', 7, NULL, 1, '2020-11-25 23:33:13', '2020-11-25 23:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` varchar(20) NOT NULL,
  `tableID` int(11) DEFAULT NULL,
  `orderDate` datetime NOT NULL,
  `stat` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `tableID`, `orderDate`, `stat`, `amount`, `created_at`, `updated_at`) VALUES
('19112020192853', 1, '2020-11-19 19:28:55', 1, 1721500, '2020-11-19 12:28:55', '2020-11-22 22:59:18'),
('24112020100918', 1, '2020-11-24 10:10:08', 0, 594000, '2020-11-24 03:10:08', '2020-11-24 04:31:22'),
('26112020063237', 2, '2020-11-26 06:32:37', 0, 115500, '2020-11-25 23:32:37', '2020-11-25 23:47:56'),
('O1', 2, '2020-11-11 15:04:12', 1, NULL, '2020-11-11 08:04:12', '2020-11-11 08:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethods`
--

CREATE TABLE `paymentmethods` (
  `paymentType` int(11) NOT NULL,
  `paymentName` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentmethods`
--

INSERT INTO `paymentmethods` (`paymentType`, `paymentName`, `created_at`, `updated_at`) VALUES
(1, 'Cash', '2020-11-11 08:03:04', '2020-11-11 08:03:04'),
(2, 'Gopay', '2020-11-11 08:03:04', '2020-11-11 08:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentID` varchar(20) NOT NULL,
  `paymenttype` int(11) DEFAULT NULL,
  `orderID` varchar(20) DEFAULT NULL,
  `kasir` varchar(20) DEFAULT NULL,
  `statusPayment` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentID`, `paymenttype`, `orderID`, `kasir`, `statusPayment`, `created_at`, `updated_at`) VALUES
('119112020192853', 1, '19112020192853', NULL, 1, '2020-11-22 23:02:15', '2020-11-22 23:02:15'),
('124112020100918', 2, '24112020100918', NULL, 1, '2020-11-24 04:48:36', '2020-11-24 05:32:53'),
('226112020063237', 2, '26112020063237', NULL, 1, '2020-11-25 23:48:17', '2020-11-25 23:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `statuspemesanans`
--

CREATE TABLE `statuspemesanans` (
  `statusId` int(11) NOT NULL,
  `statusName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuspemesanans`
--

INSERT INTO `statuspemesanans` (`statusId`, `statusName`) VALUES
(1, 'Sedang dimasak'),
(2, 'Sudah dimasak'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `employeeType` (`employeeType`);

--
-- Indexes for table `employeetypes`
--
ALTER TABLE `employeetypes`
  ADD PRIMARY KEY (`employeetype`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mejas`
--
ALTER TABLE `mejas`
  ADD PRIMARY KEY (`tableId`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menuId`);

--
-- Indexes for table `menu_order`
--
ALTER TABLE `menu_order`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `order_orderID` (`order_orderID`),
  ADD KEY `menu_menuId` (`menu_menuId`),
  ADD KEY `stat` (`stat`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `tableID` (`tableID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  ADD PRIMARY KEY (`paymentType`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `paymenttype` (`paymenttype`),
  ADD KEY `kasir` (`kasir`),
  ADD KEY `orderID` (`orderID`) USING BTREE;

--
-- Indexes for table `statuspemesanans`
--
ALTER TABLE `statuspemesanans`
  ADD PRIMARY KEY (`statusId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_order`
--
ALTER TABLE `menu_order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`employeeType`) REFERENCES `employeetypes` (`employeetype`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_order`
--
ALTER TABLE `menu_order`
  ADD CONSTRAINT `menu_order_ibfk_1` FOREIGN KEY (`order_orderID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `menu_order_ibfk_2` FOREIGN KEY (`menu_menuId`) REFERENCES `menus` (`menuId`),
  ADD CONSTRAINT `menu_order_ibfk_3` FOREIGN KEY (`stat`) REFERENCES `statuspemesanans` (`statusId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`tableID`) REFERENCES `mejas` (`tableId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`paymenttype`) REFERENCES `paymentmethods` (`paymentType`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`kasir`) REFERENCES `employees` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_4` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
