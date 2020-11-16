-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 07:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `billID` varchar(20) NOT NULL,
  `orderID` varchar(20) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`billID`, `orderID`, `amount`, `created_at`, `updated_at`) VALUES
('B1', 'O1', 50000, '2020-11-11 08:05:38', '2020-11-11 08:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `orderID` varchar(20) DEFAULT NULL,
  `menuID` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `note` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartitems`
--

INSERT INTO `cartitems` (`orderID`, `menuID`, `qty`, `note`, `created_at`, `updated_at`) VALUES
('O1', '547775', 2, 'ga pedes', '2020-11-11 08:04:52', '2020-11-11 08:04:52'),
('O1', '592479', 1, 'setengah mateng', '2020-11-11 08:04:52', '2020-11-11 08:04:52');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mejas`
--

INSERT INTO `mejas` (`tableId`, `tableName`, `created_at`, `updated_at`) VALUES
(1, 'A1', '2020-11-11 07:59:27', '2020-11-11 07:59:27'),
(2, 'A2', '2020-11-11 07:59:27', '2020-11-11 07:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menuId` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menuId`, `price`, `created_at`, `updated_at`) VALUES
('495111', 15000, '2020-11-11 03:01:53', '2020-11-11 03:01:53'),
('547775', 20000, '2020-11-11 08:00:09', '2020-11-11 08:00:09'),
('582897', 35000, '2020-11-11 03:03:18', '2020-11-11 03:03:18'),
('592479', 10000, '2020-11-11 08:00:17', '2020-11-11 08:00:17'),
('644387', 30000, '2020-11-11 03:47:30', '2020-11-11 03:47:30'),
('689502', 30000, '2020-11-11 03:03:18', '2020-11-11 03:03:18'),
('715392', 46000, '2020-11-11 03:47:30', '2020-11-11 03:47:30'),
('715497', 27000, '2020-11-11 03:47:30', '2020-11-11 03:47:30'),
('715594', 13000, '2020-11-11 03:47:30', '2020-11-11 03:47:30'),
('716268', 43000, '2020-11-11 03:47:30', '2020-11-11 03:47:30'),
('716381', 26000, '2020-11-11 03:47:30', '2020-11-11 03:47:30'),
('716426', 15000, '2020-11-11 03:47:30', '2020-11-11 03:47:30'),
('777037', 42000, '2020-11-11 03:03:18', '2020-11-11 03:03:18'),
('782601', 12000, '2020-11-11 03:47:30', '2020-11-11 03:47:30'),
('801710', 22000, '2020-11-11 03:03:18', '2020-11-11 03:03:18'),
('818941', 25000, '2020-11-11 03:01:53', '2020-11-11 03:01:53');

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
  `stat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `tableID`, `orderDate`, `stat`, `created_at`, `updated_at`) VALUES
('O1', 1, '2020-11-11 15:04:12', 4, '2020-11-11 08:04:12', '2020-11-11 08:04:12');

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
  `billID` varchar(20) DEFAULT NULL,
  `kasir` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentID`, `paymenttype`, `billID`, `kasir`, `created_at`, `updated_at`) VALUES
('P1', 1, 'B1', 'K1', '2020-11-11 08:06:12', '2020-11-11 08:06:12');

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
(1, 'Order Dibuat'),
(2, 'Payment berhasil'),
(3, 'Makanan Dimasak'),
(4, 'Makanan Diantar');

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
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`billID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD KEY `orderID` (`orderID`),
  ADD KEY `menuID` (`menuID`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `tableID` (`tableID`),
  ADD KEY `orders_ibfk_2` (`stat`);

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
  ADD KEY `billID` (`billID`),
  ADD KEY `kasir` (`kasir`);

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
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD CONSTRAINT `cartitem_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cartitem_ibfk_2` FOREIGN KEY (`menuID`) REFERENCES `menus` (`menuId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`employeeType`) REFERENCES `employeetypes` (`employeetype`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`tableID`) REFERENCES `mejas` (`tableId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`stat`) REFERENCES `statuspemesanans` (`statusId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`paymenttype`) REFERENCES `paymentmethods` (`paymentType`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`billID`) REFERENCES `bills` (`billID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`kasir`) REFERENCES `employees` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
