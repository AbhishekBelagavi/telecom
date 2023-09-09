-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 08:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `airtel_prepaid`
--

CREATE TABLE `airtel_prepaid` (
  `id` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `validity` varchar(100) NOT NULL,
  `dataperday` float NOT NULL,
  `additionaldata` int(11) NOT NULL,
  `data_talktime` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airtel_prepaid`
--

INSERT INTO `airtel_prepaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('AIRPRE01', 19, '1', 0, 1, '1GB', 'Data', '1GB Data for 1 Day Pack'),
('AIRPRE02', 181, '30', 1, 0, '1GB Per Day', 'Data', '1GB Per Day Data for 30 Days Pack'),
('AIRPRE03', 118, 'EXISTING PLAN', 0, 12, '12GB', 'Data', '₹118 for Existing 12GB Data Pack'),
('AIRPRE04', 155, '24', 0, 1, '1GB', 'Truly Unlimited', 'Unlimited Talktime and 1GB Data Pack'),
('AIRPRE05', 100, 'EXISTING PLAN', 0, 0, '81.75', 'Talktime', '₹81.75 Talktime Pack'),
('AIRPRE06', 65, 'EXISTING PLAN', 0, 4, '4GB', 'Data', '₹65 for Existing 4GB Data Pack'),
('AIRPRE07', 301, 'EXISTING PLAN', 0, 50, '50GB', 'Data', '50GB Data for Existing Pack'),
('AIRPRE08', 179, '28', 0, 2, '2GB', 'Truly Unlimited', 'Unlimited Talktime and 2GB Data Pack'),
('AIRPRE09', 29, '1', 0, 2, '2GB', 'Data', '2GB Data for 1 Day Pack'),
('AIRPRE10', 455, '84', 0, 6, '6GB', 'Truly Unlimited', 'Unlimited Talktime and 6GB Data Pack'),
('AIRPRE11', 899, '10', 0, 0, 'NA', 'International Roaming', '₹899 International Roaming Pack'),
('AIRPRE12', 299, '28', 2, 0, '2GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data Pack'),
('AIRPRE13', 18, '28', 0, 0, 'NA', 'Other Packs', '₹18 ISD Pack'),
('AIRPRE14', 58, 'EXISTING PLAN', 0, 3, '3GB', 'Data', '3GB Data for Existing Pack'),
('AIRPRE15', 719, '84', 1.5, 0, '1.5GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data For 84 Days @₹719 Pack'),
('AIRPRE16', 10, 'EXISTING PLAN', 0, 0, '7.47', 'Talktime', '₹7.47 Talktime Pack'),
('AIRPRE17', 2999, '365', 2, 0, '2GB Per Day', 'Plan Vouchers', 'Unlimited'),
('AIRPRE18', 20, 'EXISTING PLAN', 0, 0, '14.95', 'Talktime', '₹14.95 Talktime Pack'),
('AIRPRE19', 2997, '365', 0, 0, 'NA', 'International Roaming', '₹2997 International Roaming Pack'),
('AIRPRE20', 98, 'EXISTING PLAN', 0, 5, '5GB', 'Data', '5GB Data for Existing Pack'),
('AIRPRE21', 1799, '365', 0, 24, '24GB', 'Plan Vouchers', 'Unlimited local, STD & Roaming'),
('AIRPRE22', 49, '1', 0, 6, '6GB', 'Data', '₹49 for 1 Day 6GB Data Pack'),
('AIRPRE23', 149, 'EXISTING PLAN', 0, 1, '1GB', 'Data', '1GB Data for Existing Pack'),
('AIRPRE24', 209, '21', 1, 0, '1GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 1GB/Day Data Pack'),
('AIRPRE25', 239, '24', 1, 0, '1GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 1GB/Day Data For 24 Days @₹239 Pack'),
('AIRPRE26', 479, '56', 1.5, 0, '1.5GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data Pack'),
('AIRPRE27', 519, '60', 1.5, 0, '1.5GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data For 60 Days @₹519 Pack'),
('AIRPRE28', 500, 'EXISTING PLAN', 0, 0, '423.73', 'Talktime', '₹423.73 Talktime Pack'),
('AIRPRE29', 649, '1', 0, 0, 'NA', 'International Roaming', '₹649 International Roaming Pack'),
('AIRPRE30', 755, '5', 0, 0, 'NA', 'International Roaming', '₹755 International Roaming Pack'),
('AIRPRE31', 756, '5', 0, 0, 'NA', 'International Roaming', '₹756 International Roaming Pack'),
('AIRPRE32', 99, '1', 0, 0, 'NA', 'Data', 'NA Data for 1 Day Pack'),
('AIRPRE33', 549, '56', 2, 0, '2GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data For 56 Days @₹549 Pack'),
('AIRPRE34', 199, '1 month', 0, 3, '3GB', 'Truly Unlimited', 'Unlimited Talktime and 3GB Data Pack'),
('AIRPRE35', 265, '28', 1, 0, '1GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 1GB/Day Data For 28 Days @₹265 Pack'),
('AIRPRE36', 289, '35', 0, 4, '4GB', 'Truly Unlimited', 'Unlimited Talktime and 4GB Data Pack'),
('AIRPRE37', 296, '30', 0, 25, '25GB', 'Truly Unlimited', 'Unlimited Talktime and 25GB Data Pack'),
('AIRPRE38', 319, '1 month', 2, 0, '2GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data For 1 Month @₹319 Pack'),
('AIRPRE39', 666, '77', 1.5, 0, '1.5GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data For 77 Days @₹666 Pack'),
('AIRPRE40', 779, '90', 1.5, 0, '1.5GB Per Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data For 90 Days @₹779 Pack'),
('AIRPRE41', 499, '28', 3, 0, '3GB Per Day', 'Disney Hotstar VIP', 'Unlimited'),
('AIRPRE42', 3, '365', 2.5, 0, '2.5GB Per Day', 'Disney Hotstar VIP', 'Unlimited'),
('AIRPRE43', 839, '84', 2, 0, '2GB Per Day', 'Disney Hotstar VIP', 'Unlimited local & STD'),
('AIRPRE44', 489, '30', 0, 50, '50GB', 'Plan Vouchers', 'Unlimited local STD & Roaming'),
('AIRPRE45', 509, '1 month', 0, 60, '60GB', 'Plan Vouchers', 'Unlimited local STD & Roaming'),
('AIRPRE46', 148, 'EXISTING PLAN', 0, 15, '15GB', 'Entertainment', '0 Entertainment Pack for Existing'),
('AIRPRE47', 359, '1 month', 2, 0, '2GB Per Day', 'Entertainment', '5 Entertainment Pack for 1 Month'),
('AIRPRE48', 399, '288', 3, 0, '3GB Per Day', 'Entertainment', 'Unlimited Entertainment Pack for 28 Days'),
('AIRPRE49', 699, '56', 3, 0, '3GB Per Day', 'Entertainment', 'Unlimited Entertainment Pack for 56 Days'),
('AIRPRE50', 999, '84', 2.5, 0, '2.5GB Per Day', 'Entertainment', 'Unlimited Entertainment Pack for 84 Days'),
('AIRPRE51', 1000, 'EXISTING PLAN', 0, 0, '₹ 847.46', 'Talktime', '₹847.46 Talktime Pack'),
('AIRPRE52', 5000, 'EXISTING PLAN', 0, 0, '₹ 4,237.29', 'Talktime', '₹4,237.29 Talktime Pack'),
('AIRPRE53', 2998, '30', 0, 0, 'NA', 'International Roaming', '₹2998 International Roaming Pack');

-- --------------------------------------------------------

--
-- Table structure for table `bsnl_prepaid`
--

CREATE TABLE `bsnl_prepaid` (
  `id` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `validity` varchar(100) NOT NULL,
  `dataperday` float NOT NULL,
  `additionaldata` int(11) NOT NULL,
  `data_talktime` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bsnl_prepaid`
--

INSERT INTO `bsnl_prepaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('BSNPRE01', 108, '60', 1, 0, '1GB/DAY', 'Truly Unlimited', '1GB/DAY Data for 60 Days Plan Extension Pack'),
('BSNPRE02', 321, '365', 0, 15, '15GB', 'Data  ', '15GB Data for 365 Days Plan Extension Pack'),
('BSNPRE03', 48, '30', 0, 0, 'NA', 'VOICE Vouchers', '₹48 for 30 Days Pack'),
('BSNPRE04', 107, '35', 0, 3, '3GB', 'Data', '3GB Data for 35 Days Plan Extension Pack'),
('BSNPRE05', 397, '180', 2, 0, '2GB/DAY', 'Truly Unlimited', '2GB/DAY Data for 180 Days Plan Extension Pack'),
('BSNPRE06', 48, '30', 0, 5, '5GB', 'Data', '5GB Data for 30 Days @₹48 Pack'),
('BSNPRE07', 197, '70', 2, 0, '2GB/DAY', 'Truly Unlimited', '2GB/DAY Data for 70 Days Plan Extension Pack'),
('BSNPRE08', 19, '90', 0, 0, '50MB', 'Truly Unlimited', '50MB Data for 90 Days Plan Extension Pack'),
('BSNPRE09', 183, '90', 0, 0, 'NA', 'Truly Unlimited', '₹183 for 90 Days Pack'),
('BSNPRE10', 13, '1', 0, 2, '2GB', 'Data', '2GB Data for 1 Day @₹13 Pack'),
('BSNPRE100', 1, '365', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 365 Days Pack'),
('BSNPRE101', 66, '21', 0, 0, 'NA', 'VOICE Vouchers', '₹66 for 21 Days Pack'),
('BSNPRE102', 397, '180', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 180 Days Pack'),
('BSNPRE103', 97, '15', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 15 Days Pack'),
('BSNPRE104', 499, '75', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 75 Days Pack'),
('BSNPRE105', 269, '28', 0, 0, 'NA', 'VOICE Vouchers', '₹269 for 28,28 Days Pack'),
('BSNPRE106', 209, '84', 0, 0, 'NA', 'VOICE Vouchers', '₹209 for 84 Days Pack'),
('BSNPRE107', 66, '30', 0, 0, 'NA', 'VOICE Vouchers', '₹66 for 30 Days Pack'),
('BSNPRE108', 88, '35', 0, 0, 'NA', 'VOICE Vouchers', '₹88 for 35 Days Pack'),
('BSNPRE109', 209, '84', 0, 0, 'NA', 'VOICE Vouchers', '₹209 for 84 Days Pack'),
('BSNPRE11', 139, '38', 1.5, 0, '1.5GB/DAY', 'Truly Unlimited', '1.5GB/DAY Data for 28 Days Pack'),
('BSNPRE110', 44, '26', 0, 0, 'NA', 'VOICE Vouchers', '₹44 for 26 Days Pack'),
('BSNPRE111', 66, '30', 0, 0, 'NA', 'VOICE Vouchers', '₹66 for 30 Days Pack'),
('BSNPRE112', 143, '30', 0, 2, '2GB', 'VOICE Vouchers', '2GB Data for 30 Days Pack'),
('BSNPRE113', 187, '28', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 28 Days Pack'),
('BSNPRE114', 138, '20', 0.5, 0, '0.5GB/DAY', 'VOICE Vouchers', '0.5GB/DAY Data for 20 Days Pack'),
('BSNPRE115', 209, '90', 0, 0, 'NA', 'VOICE Vouchers', '₹209 for 90 Days Pack'),
('BSNPRE116', 348, '75', 0, 10, '10GB', 'Data', '10GB Data for 75 Days Pack'),
('BSNPRE117', 498, '180', 0, 0, 'NA', 'VOICE Vouchers', '₹498 for 180 Days Pack'),
('BSNPRE118', 498, '82', 1.5, 0, '1.5GB/DAY', 'VOICE Vouchers', '1.5GB/DAY Data for 82 Days Pack'),
('BSNPRE119', 149, '28', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 28 Days Pack'),
('BSNPRE12', 1, '365', 0, 3, '3GB', 'Data', '3GB Data for 365 Days Plan Extension Pack'),
('BSNPRE120', 228, '30', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 30 Days Pack'),
('BSNPRE121', 45, '28', 0, 0, 'NA', 'VOICE Vouchers', '₹45 for 28 Days Pack'),
('BSNPRE122', 149, '28', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 28 Days Pack'),
('BSNPRE123', 228, '30', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 30 Days Pack'),
('BSNPRE124', 239, '30', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 30 Days Pack'),
('BSNPRE125', 94, '30', 0, 3, '3GB', 'VOICE Vouchers', '3GB Data for 30 Days Pack'),
('BSNPRE126', 97, '15', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 15 Days Pack'),
('BSNPRE127', 65, '30', 0, 0, 'NA', 'ISD Vouchers', '₹65 for 30 Days ISD Pack'),
('BSNPRE128', 18, '30', 0, 0, 'NA', 'ISD Vouchers', '₹18 for 30 Days ISD Pack'),
('BSNPRE129', 12, '12', 0, 0, 'NA', 'OTHERS Vouchers', '₹12 for 12 Days International Roaming Pack'),
('BSNPRE13', 1, '365', 2, 0, '2GB/DAY', 'Data Vouchers', '2GB/DAY Data for 365 Days @₹1,515 Pack'),
('BSNPRE130', 15, '3', 0, 0, 'NA', 'OTHERS Vouchers', '₹15 for 3 Days International Roaming Pack'),
('BSNPRE131', 19, '21', 0, 0, 'NA', 'OTHERS Vouchers', '₹19 for 21 Days International Roaming Pack'),
('BSNPRE132', 23, '30', 0, 0, 'NA', 'OTHERS Vouchers', '₹23 for 30 Days International Roaming Pack'),
('BSNPRE133', 31, '30', 0, 0, 'NA', 'OTHERS Vouchers', '₹31 for 30 Days International Roaming Pack'),
('BSNPRE134', 36, '30', 0, 0, 'NA', 'OTHERS Vouchers', '₹36 for 30 Days International Roaming Pack'),
('BSNPRE135', 45, '15', 0, 0, 'NA', 'OTHERS Vouchers', '₹45 for 15 Days International Roaming Pack'),
('BSNPRE136', 73, '30', 0, 0, 'NA', 'OTHERS Vouchers', '₹73 for 30 Days International Roaming Pack'),
('BSNPRE137', 85, '30', 0, 0, 'NA', 'OTHERS Vouchers', '₹85 for 30 Days International Roaming Pack'),
('BSNPRE138', 167, '90', 0, 0, 'NA', 'OTHERS Vouchers', '₹167 for 90 Days International Roaming Pack'),
('BSNPRE139', 511, '1', 0, 0, '200MB', 'OTHERS Vouchers', '200MB Data for 1 Day @₹511 International Roaming Pack'),
('BSNPRE14', 10, 'NA', 0, 0, '₹ 7.47', 'General TOPUP', '₹7.47 Talktime Pack'),
('BSNPRE140', 705, '1', 0, 0, '200MB', 'OTHERS Vouchers', '200MB Data for 1 Day @₹705 International Roaming Pack'),
('BSNPRE141', 895, '1', 0, 0, '200MB', 'OTHERS Vouchers', '200MB Data for 1 Day @₹895 International Roaming Pack'),
('BSNPRE142', 898, '3', 0, 0, '250MB', 'OTHERS Vouchers', '250MB Data for 3 Days @₹898 International Roaming Pack'),
('BSNPRE143', 1, '7', 0, 1, '500MB', 'OTHERS Vouchers', '500MB Data for 7 Days @₹1,379 International Roaming Pack'),
('BSNPRE144', 2, '7', 0, 1, '1000MB', 'OTHERS Vouchers', '1000MB Data for 7 Days @₹2,199 International Roaming Pack'),
('BSNPRE145', 2, '28', 0, 0, '200MB', 'OTHERS Vouchers', '200MB Data for 28 Days @₹2,311 International Roaming Pack'),
('BSNPRE146', 2, '7', 0, 1, '1GB', 'OTHERS Vouchers', '1GB Data for 7 Days @₹2,875 International Roaming Pack'),
('BSNPRE147', 2, '7', 0, 1, '500MB', 'OTHERS Vouchers', '500MB Data for 7 Days @₹2,895 International Roaming Pack'),
('BSNPRE148', 3, '28', 0, 2, '1.5GB', 'OTHERS Vouchers', '1.5GB Data for 28 Days @₹3,905 International Roaming Pack'),
('BSNPRE149', 4, '28', 0, 1, '1GB', 'OTHERS Vouchers', '1GB Data for 28 Days @₹4,865 International Roaming Pack'),
('BSNPRE15', 209, '84', 0, 0, 'NA', 'VOICE Vouchers', '₹209 for 84 Days Pack'),
('BSNPRE150', 37, '30', 0, 0, 'NA', 'OTHERS Vouchers', '₹37 for 30 Days International Roaming Pack'),
('BSNPRE151', 57, '30', 0, 0, 'NA', 'OTHERS Vouchers', '₹57 for 30 Days International Roaming Pack'),
('BSNPRE152', 279, '28', 0, 0, 'NA', 'OTHERS Vouchers', '₹279 for 28 Days International Roaming Pack'),
('BSNPRE153', 497, '1', 0, 0, '100MB', 'OTHERS Vouchers', '100MB Data for 1 Day @₹497 International Roaming Pack'),
('BSNPRE154', 659, '1', 0, 0, '50MB', 'OTHERS Vouchers', '50MB Data for 1 Day @₹659 International Roaming Pack'),
('BSNPRE155', 1, '3', 0, 0, '100MB', 'OTHERS Vouchers', '100MB Data for 3 Days @₹1,359 International Roaming Pack'),
('BSNPRE156', 2, '28', 0, 2, '2GB', 'OTHERS Vouchers', '2GB Data for 28 Days @₹2,311 International Roaming Pack'),
('BSNPRE157', 3, '7', 0, 1, '500MB', 'OTHERS Vouchers', '500MB Data for 7 Days @₹3,495 International Roaming Pack'),
('BSNPRE158', 659, '1', 0, 1, '500MB', 'OTHERS Vouchers', '500MB Data for 1 Day @₹659 International Roaming Pack'),
('BSNPRE159', 1, '3', 0, 0, '100MB', 'OTHERS Vouchers', '100MB Data for 3 Days @₹1,359 International Roaming Pack'),
('BSNPRE16', 485, '82', 1.5, 0, '1.5GB/DAY', 'VOICE Vouchers', '1.5GB/DAY Data for 82 Days Pack'),
('BSNPRE160', 3, '28', 0, 15, '15GB', 'Data', '15GB Data for 28 Days @₹3,905 International Roaming Pack'),
('BSNPRE161', 3, '7', 0, 1, '500MB', 'OTHERS Vouchers', '500MB Data for 7 Days @₹3,495 International Roaming Pack'),
('BSNPRE162', 57, '30', 0, 0, 'NA', 'OTHERS Vouchers', '₹57 for 30 Days International Roaming Pack'),
('BSNPRE163', 659, '1', 0, 0, 'NA', 'OTHERS Vouchers', '₹659 for 1 Day International Roaming Pack'),
('BSNPRE164', 898, '1', 0, 0, 'NA', 'OTHERS Vouchers', '₹898 for 1 Day International Roaming Pack'),
('BSNPRE165', 1, '7', 0, 0, 'NA', 'OTHERS Vouchers', '₹1,361 for 7 Days International Roaming Pack'),
('BSNPRE166', 1, '7', 0, 0, 'NA', 'OTHERS Vouchers', '₹1,379 for 7 Days International Roaming Pack'),
('BSNPRE167', 2, '7', 0, 0, 'NA', 'OTHERS Vouchers', '₹2,199 for 7 Days International Roaming Pack'),
('BSNPRE168', 2, '7', 0, 0, 'NA', 'OTHERS Vouchers', '₹2,875 for 7 Days International Roaming Pack'),
('BSNPRE169', 3, '7', 0, 0, 'NA', 'OTHERS Vouchers', '₹3,495 for 7 Days International Roaming Pack'),
('BSNPRE17', 201, '90', 0, 6, '6GB', 'Data', '6GB Data for 90 Days Plan Extension Pack'),
('BSNPRE170', 4, '7', 0, 0, 'NA', 'OTHERS Vouchers', '₹4,865 for 7 Days International Roaming Pack'),
('BSNPRE171', 97, '18', 2, 0, '2GB/DAY', 'Tr', '2GB/DAY Data for 18 Days Plan Extension Pack'),
('BSNPRE172', 199, '30', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 30 Days Plan Extension Pack'),
('BSNPRE173', 201, '60', 0, 6, '6GB', 'PLAN Extension', '6GB Data for 60 Days Plan Extension Pack'),
('BSNPRE174', 229, '1 month', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 1 month(recharge on the same date every month) Day Plan Extension Pack'),
('BSNPRE175', 249, '45', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 45 Days Plan Extension Pack'),
('BSNPRE176', 666, '105', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 105 Days Plan Extension Pack'),
('BSNPRE177', 699, '130', 1, 0, '0.5GB/DAY', 'PLAN Extension', '0.5GB/DAY Data for 130 Days Plan Extension Pack'),
('BSNPRE178', 997, '160', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 160 Days Plan Extension Pack'),
('BSNPRE179', 1, '336', 0, 24, '24GB', 'Data', '24GB Data for 336 Days Plan Extension Pack'),
('BSNPRE18', 98, '22', 2, 0, '2GB/DAY', 'Data Vouchers', '2GB/DAY Data for 22 Days Pack'),
('BSNPRE180', 1, '336', 0, 24, '24GB', 'Data', '24GB Data for 336 Days Plan Extension Pack'),
('BSNPRE181', 2, '395', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 395 Days Plan Extension Pack'),
('BSNPRE182', 2, '365', 3, 0, '3GB/DAY', 'PLAN Extension', '3GB/DAY Data for 365 Days Plan Extension Pack'),
('BSNPRE183', 666, '105', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 105 Days Plan Extension Pack'),
('BSNPRE184', 1, '365', 0, 3, '3GB', 'Data', '3GB Data for 12 months(365 days) Days Plan Extension Pack'),
('BSNPRE185', 108, '28', 1, 0, '1GB/DAY', 'PLAN Extension', '1GB/DAY Data for 28 Days Plan Extension Pack'),
('BSNPRE186', 2, '365', 0, 0, 'NA', 'PLAN Extension', '₹2,999 for 30 Days Plan Extension Pack'),
('BSNPRE187', 1, '365', 0, 24, '24GB', 'Data', '24GB Data for 336 Days Plan Extension Pack'),
('BSNPRE188', 2, '365', 0, 0, 'NA', 'PLAN Extension', '₹2,999 for 30 Days Plan Extension Pack'),
('BSNPRE189', 37, '30', 0, 0, 'NA', 'PLAN Extension', '₹37 for 30 Days Plan Extension Pack'),
('BSNPRE19', 99, '18', 0, 0, 'NA', 'VOICE Vouchers', '₹99 for 18 Days Pack'),
('BSNPRE190', 108, '30', 0, 0, '100MB', 'PLAN Extension', '100MB Data for 30 Days Plan Extension Pack'),
('BSNPRE191', 141, '30', 1.5, 0, '1.5GB / DAY', 'PLAN Extension', '1.5GB / DAY Data for 30 Days Plan Extension Pack'),
('BSNPRE192', 169, '30', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 30 Days Plan Extension Pack'),
('BSNPRE193', 180, '30', 0, 1, '1GB', 'PLAN Extension', '1GB Data for 30 Days Plan Extension Pack'),
('BSNPRE194', 776, '180', 1.5, 0, '1.5GB/DAY', 'PLAN Extension', '1.5GB/DAY Data for 180 Days Plan Extension Pack'),
('BSNPRE195', 930, '180', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 180 Days Plan Extension Pack'),
('BSNPRE196', 1, '365', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 365 Days Plan Extension Pack'),
('BSNPRE197', 1, '365', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 365 Days Plan Extension Pack'),
('BSNPRE198', 107, '40', 0, 3, '3GB', 'Data', '3GB Data for 40 Days Plan Extension Pack'),
('BSNPRE199', 148, '30', 2, 0, '2.2GB/DAY', 'Truly Unlimited', '2.2GB/DAY Data for 30 Days Plan Extension Pack'),
('BSNPRE20', 147, '30', 0, 10, '10GB', 'Data', '10GB Data for 30 Days Pack'),
('BSNPRE200', 292, '60', 2, 0, '2.2GB/DAY', 'Truly Unlimited', '2.2GB/DAY Data for 60 Days Plan Extension Pack'),
('BSNPRE201', 398, '90', 2, 0, '2.2GB/DAY', 'Truly Unlimited', '2.2GB/DAY Data for 90 Days Plan Extension Pack'),
('BSNPRE202', 1, '365', 0, 120, '120GB', 'Data', '120GB Data for 365 Days Plan Extension Pack'),
('BSNPRE203', 2, '425', 2, 0, '2GB/DAY', 'Truly Unlimited', '2GB/DAY Data for 425 Days Plan Extension Pack'),
('BSNPRE204', 2, '455', 3, 0, '3GB/DAY', 'Truly Unlimited', '3GB/DAY Data for 455 Days Plan Extension Pack'),
('BSNPRE205', 2, 'NA', 0, 0, 'NA', 'Truly Unlimited', '₹2,999 Plan Extension Pack'),
('BSNPRE206', 131, '30', 0, 0, '400MB', 'Truly Unlimited', '400MB Data for 30 Days Plan Extension Pack'),
('BSNPRE207', 141, '30', 0, 0, '200MB', 'Truly Unlimited', '200MB Data for 30 Days Plan Extension Pack'),
('BSNPRE208', 145, '30', 0, 1, '1GB', 'Truly Unlimited', '1GB Data for 30 Days Plan Extension Pack'),
('BSNPRE209', 97, '15', 2, 0, '2GB/DAY', 'Truly Unlimited', '2GB/DAY Data for 15 Days Plan Extension Pack'),
('BSNPRE21', 153, '26', 1, 0, '1GB/DAY', 'PLAN Extension', '1GB/DAY Data for 26 Days Plan Extension Pack'),
('BSNPRE210', 108, '20', 1, 0, '0.5GB/DAY', 'Truly Unlimited', '0.5GB/DAY Data for 20 Days Plan Extension Pack'),
('BSNPRE211', 201, '60', 2, 0, '2GB/DAY', 'Truly Unlimited', '2GB/DAY Data for 60 Days Plan Extension Pack'),
('BSNPRE212', 249, '45', 0, 0, 'NA', 'Truly Unlimited', '₹249 for 30 Days Plan Extension Pack'),
('BSNPRE213', 141, '30', 0, 10, '10GB', 'Data', '10GB Data for 30 Days Plan Extension Pack'),
('BSNPRE214', 102, '30', 0, 1, '1GB', 'Truly Unlimited', '1GB Data for 30 Days Plan Extension Pack'),
('BSNPRE215', 301, '60', 2, 0, '2GB/DAY', 'Truly Unlimited', '2GB/DAY Data for 60 Days Plan Extension Pack'),
('BSNPRE22', 198, '40', 2, 0, '2GB/DAY', 'Data Vouchers', '2GB/DAY Data for 40 Days @₹198 Pack'),
('BSNPRE23', 439, '90', 0, 0, 'NA', 'VOICE Vouchers', '₹439 for 90 Days Pack'),
('BSNPRE24', 220, 'NA', 0, 0, '₹ 220', 'General TOPUP', '₹220 Talktime Pack'),
('BSNPRE25', 198, '40', 2, 0, '2GB/DAY', 'Data Vouchers', '2GB/DAY Data for 40 Days @₹198 Pack'),
('BSNPRE26', 16, '1', 2, 2, '2GB', 'Data', '2GB Data for 1 Day @₹16 Pack'),
('BSNPRE27', 16, '1', 2, 2, '2GB', 'Data', '2GB Data for 1 Day @₹16 Pack'),
('BSNPRE28', 25, '7', 0, 0, 'NA', 'SMS Vouchers', '130 SMS for 7 Days @₹25 Pack'),
('BSNPRE29', 18, '30', 0, 0, 'NA', 'ISD Vouchers', '₹18 for 30 Days ISD Pack'),
('BSNPRE30', 393, '90', 2, 2, '2GB/DAY', 'Data', '2GB/DAY Data for 90 Days @₹393 Plan Migration Pack'),
('BSNPRE31', 150, 'NA', 0, 0, '₹ 124.12', 'General TOPUP', '₹124.12 Talktime Pack'),
('BSNPRE32', 151, '28', 0, 40, '40GB', 'Data', '40GB Data for 28 Days @₹151 Pack'),
('BSNPRE33', 97, '15', 2, 0, '2GB/DAY', 'Data Vouchers', '2GB/DAY Data for 15 Days @₹97 Pack'),
('BSNPRE34', 98, '22', 2, 0, '2GB/DAY', 'Data Vouchers', '2GB/DAY Data for 22 Days @₹98 Pack'),
('BSNPRE35', 18, '2', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 2 Days Pack'),
('BSNPRE36', 87, '14', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 14 Days Pack'),
('BSNPRE37', 88, '35', 0, 0, 'NA', 'VOICE Vouchers', '₹88 for 35 Days Pack'),
('BSNPRE38', 319, '65', 0, 10, '10GB', 'Data', '10GB Data for 65 Days Pack'),
('BSNPRE39', 399, '70', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 70 Days Pack'),
('BSNPRE40', 599, '84', 3, 0, '3GB/DAY', 'VOICE Vouchers', '3GB/DAY Data for 84 Days Pack'),
('BSNPRE41', 66, '30', 0, 0, 'NA', 'VOICE Vouchers', '₹66 for 30 Days Pack'),
('BSNPRE42', 57, '30', 0, 0, 'NA', 'ISD Vouchers', '₹57 for 30 Days ISD Pack'),
('BSNPRE43', 43, '45', 0, 0, 'NA', 'OTHERS Vouchers', '₹43 for 45 Days International Roaming Pack'),
('BSNPRE44', 797, '300', 2, 0, '2GB/DAY', 'PLAN Extension', '2GB/DAY Data for 300 Days Plan Extension Pack'),
('BSNPRE45', 999, '200', 0, 0, 'NA', 'PLAN Extension', '₹999 for 30 Days Plan Extension Pack'),
('BSNPRE46', 1, '365', 0, 600, '600GB', 'Data', '600GB Data for 365 Days Plan Extension Pack'),
('BSNPRE47', 20, 'NA', 0, 0, '₹ 14.95', 'General TOPUP', '₹14.95 Talktime Pack'),
('BSNPRE48', 30, 'NA', 0, 0, '₹ 22.42', 'General TOPUP', '₹22.42 Talktime Pack'),
('BSNPRE49', 50, 'NA', 0, 0, '₹ 39.37', 'General TOPUP', '₹39.37 Talktime Pack'),
('BSNPRE50', 100, 'NA', 0, 0, '₹ 81.75', 'General TOPUP', '₹81.75 Talktime Pack'),
('BSNPRE51', 110, 'NA', 0, 0, '₹ 90.22', 'General TOPUP', '₹90.22 Talktime Pack'),
('BSNPRE52', 120, 'NA', 0, 0, '₹ 98.69', 'General TOPUP', '₹98.69 Talktime Pack'),
('BSNPRE53', 200, 'NA', 0, 0, '₹ 166.49', 'General TOPUP', '₹166.49 Talktime Pack'),
('BSNPRE54', 500, 'NA', 0, 0, '₹ 420.73', 'General TOPUP', '₹420.73 Talktime Pack'),
('BSNPRE55', 550, 'NA', 0, 0, '₹ 550', 'General TOPUP', '₹550 Talktime Pack'),
('BSNPRE56', 1, 'NA', 0, 0, '₹ 844.46', 'General TOPUP', '₹844.46 Talktime Pack'),
('BSNPRE57', 1, 'NA', 0, 0, '₹ 1,100', 'General TOPUP', '₹1,100 Talktime Pack'),
('BSNPRE58', 2, 'NA', 0, 0, '₹ 2,000', 'General TOPUP', '₹2,000 Talktime Pack'),
('BSNPRE59', 5, 'NA', 0, 0, '₹ 4,234.29', 'General TOPUP', '₹4,234.29 Talktime Pack'),
('BSNPRE60', 200, 'NA', 0, 0, '₹ 164.49', 'General TOPUP', '₹164.49 Talktime Pack'),
('BSNPRE61', 500, 'NA', 0, 0, '₹ 500', 'General TOPUP', '₹500 Talktime Pack'),
('BSNPRE62', 5, 'NA', 0, 0, '₹ 5,000', 'General TOPUP', '₹5,000 Talktime Pack'),
('BSNPRE63', 1, 'NA', 0, 0, '₹ 844.45', 'General TOPUP', '₹844.45 Talktime Pack'),
('BSNPRE64', 1, 'NA', 0, 0, '₹ 1,000', 'General TOPUP', '₹1,000 Talktime Pack'),
('BSNPRE65', 300, 'NA', 0, 0, '₹ 251.23', 'General TOPUP', '₹251.23 Talktime Pack'),
('BSNPRE66', 750, 'NA', 0, 0, '₹ 632.59', 'General TOPUP', '₹632.59 Talktime Pack'),
('BSNPRE67', 73, '21', 0, 0, '200MB', 'Data Vouchers', '200MB Data for 21 Days @₹73 Pack'),
('BSNPRE68', 94, '30', 0, 3, '3GB', 'Data', '3GB Data for 30 Days @₹94 Pack'),
('BSNPRE69', 139, '25', 0, 4, '4GB', 'Data', '4GB Data for 25 Days Pack'),
('BSNPRE70', 251, '28', 0, 70, '70GB', 'Data', '70GB Data for 28 Days @₹251 Pack'),
('BSNPRE71', 398, '30', 0, 120, '120GB', 'Data', '120GB Data for 30 Days @₹398 Pack'),
('BSNPRE72', 73, '21', 0, 0, '200MB', 'Data Vouchers', '200MB Data for 21 Days @₹73 Pack'),
('BSNPRE73', 19, '1', 0, 0, '2000MB', 'Data Vouchers', '2000MB Data for 1 Day @₹19 Pack'),
('BSNPRE74', 701, '90', 0, 5, '5GB', 'Data', '5GB Data for 90 Days @₹701 Pack'),
('BSNPRE75', 199, '30', 0, 1, '500MB', 'Data Vouchers', '500MB Data for 30 Days Pack'),
('BSNPRE76', 398, '28', 0, 1, '1GB', 'Data', '1GB Data for 28 Days Pack'),
('BSNPRE77', 118, '20', 1, 0, '0.5GB/DAY', 'VOICE Vouchers', '0.5GB/DAY Data for 20 Days Pack'),
('BSNPRE78', 139, '28', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 28 Days Pack'),
('BSNPRE79', 184, '28', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 28 Days Pack'),
('BSNPRE80', 185, '28', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 28 Days Pack'),
('BSNPRE81', 247, '30', 0, 50, '50GB', 'Data', '50GB Data for 30 Days Pack'),
('BSNPRE82', 269, '28', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 28 Days Pack'),
('BSNPRE83', 299, '30', 3, 0, '3GB/DAY', 'VOICE Vouchers', '3GB/DAY Data for 30 Days Pack'),
('BSNPRE84', 347, '54', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 54 Days Pack'),
('BSNPRE85', 399, '70', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 70 Days Pack'),
('BSNPRE86', 769, '84', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 84 Days Pack'),
('BSNPRE87', 35, '30', 0, 0, 'NA', 'VOICE Vouchers', '₹35 for 30 Days Pack'),
('BSNPRE88', 105, '18', 0, 2, '2GB', 'VOICE Vouchers', '2GB Data for 18 Days Pack'),
('BSNPRE89', 181, '30', 0, 0, 'NA', 'VOICE Vouchers', '₹181 for 30 Days Pack'),
('BSNPRE90', 187, '28', 2, 0, '1.5GB/DAY', 'VOICE Vouchers', '1.5GB/DAY Data for 28 Days Pack'),
('BSNPRE91', 228, '1 month ', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 1 Month(Recharge on the same date every month) Day Pack'),
('BSNPRE92', 239, '1 month ', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 1 Month(Recharge on the same date every month) Day Pack'),
('BSNPRE93', 298, '52', 1, 0, '1GB/DAY', 'VOICE Vouchers', '1GB/DAY Data for 52 Days Pack'),
('BSNPRE94', 401, '60', 0, 0, 'NA', 'VOICE Vouchers', '₹401 for 60 Days Pack'),
('BSNPRE95', 499, '75', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 75 Days Pack'),
('BSNPRE96', 85, '15', 0, 0, 'NA', 'VOICE Vouchers', '₹85 for 15 Days Pack'),
('BSNPRE97', 397, '150', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 150 Days Pack'),
('BSNPRE98', 769, '90', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 90 Days Pack'),
('BSNPRE99', 140, '30', 2, 0, '2GB/DAY', 'VOICE Vouchers', '2GB/DAY Data for 30 Days Pack');

-- --------------------------------------------------------

--
-- Table structure for table `jio_prepaid`
--

CREATE TABLE `jio_prepaid` (
  `id` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `validity` varchar(100) NOT NULL,
  `dataperday` float NOT NULL,
  `additionaldata` int(11) NOT NULL,
  `data_talktime` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jio_prepaid`
--

INSERT INTO `jio_prepaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('JIOPRE01', 91, '28', 0, 0, '100MB/day + 200MB', 'JioPhone', 'Unlimited Calling with 100MB/day + 200MB Data for 28 Days'),
('JIOPRE02', 395, '84', 0, 6, '6GB', 'Truly Unlimited', 'Rs 395-3m-6GB'),
('JIOPRE03', 209, '28', 1, 0, '1GB/day', 'Popular Plans', '1GB/day Data for 28 Days Pack'),
('JIOPRE04', 155, '28', 0, 2, '2GB', 'Truly Unlimited', 'Rs 155-1m-2GB'),
('JIOPRE05', 666, '84', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 84 Days Pack'),
('JIOPRE06', 10, 'NA', 0, 0, '7.47', 'Top-Up', '₹7.47 Talktime Top-Up Voucher'),
('JIOPRE07', 239, '28', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 28 Days Pack'),
('JIOPRE08', 75, '23', 0, 0, '100MB/Day + 200MB', 'JioPhone', 'Unlimited Calling with 100MB/Day + 200MB Data for 23 Days'),
('JIOPRE09', 26, '28', 0, 2, '2GB', 'Data', 'JP MRP 26'),
('JIOPRE10', 223, '28', 2, 0, '2GB/day', 'JioPhone', 'Unlimited Calling with 2GB/day Data for 28 Days'),
('JIOPRE11', 122, '28', 1, 0, '1GB/day', 'Data', 'JP MRP 122'),
('JIOPRE12', 719, '84', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 84 Days Pack'),
('JIOPRE13', 62, '28', 0, 6, '6GB', 'Data', 'JP MRP 62'),
('JIOPRE14', 999, '7', 0, 1, '1GB', 'International Roaming', 'IR Data Pack-₹999'),
('JIOPRE15', 1559, '336', 0, 24, '24GB', 'Truly Unlimited', 'Rs 1559-12m-24GB'),
('JIOPRE16', 149, '20', 1, 0, '1GB/day', 'Popular Plans', '1GB/day Data for 20 Days Pack'),
('JIOPRE17', 999, '84', 3, 0, '3GB/day', 'Popular Plans', '3GB/day Data for 84 Days Pack'),
('JIOPRE18', 749, '90', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 90 Days Pack'),
('JIOPRE19', 179, '24', 1, 0, '1GB/day', 'Popular Plans', '1GB/day Data for 24 Days Pack'),
('JIOPRE20', 186, '28', 1, 0, '1GB/day', 'JioPhone', 'Unlimited Calling with 1GB/day Data for 28 Days'),
('JIOPRE21', 86, '28', 1, 0, '0.5GB/day', 'Data', 'JP MRP 86'),
('JIOPRE22', 1, '28', 0, 0, '933.9', 'International Roaming', 'Global Pack - 1102'),
('JIOPRE23', 2545, '336', 1.5, 0, '1.5GB/day', 'Annual Plans', '1.5GB/day Data for 336 Days Pack'),
('JIOPRE24', 1101, '28', 0, 0, '933.5', 'International Roaming', 'Global Pack - 1101'),
('JIOPRE25', 2999, '7', 0, 5, '5GB', 'International Roaming', 'IR Data Pack-₹2999'),
('JIOPRE26', 4499, '14', 0, 8, '8GB', 'International Roaming', 'IR Data Pack-₹4499'),
('JIOPRE27', 399, '365', 0, 0, 'NA', 'JioSaavn Pro', 'JioSaavn Pro Plans for 365 Days'),
('JIOPRE28', 2999, '365', 2.5, 0, '2.5GB/day', 'Annual Plans', '2.5GB/day Data for 365 Days Pack'),
('JIOPRE29', 299, '28', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 28 Days Pack'),
('JIOPRE30', 1099, '84', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 84 Days Pack'),
('JIOPRE31', 1499, '84', 3, 0, '3GB/day', 'Popular Plans', '3GB/day Data for 84 Days Pack'),
('JIOPRE32', 399, '28', 3, 0, '3GB/day', 'Popular Plans', '3GB/day Data for 28 Days Pack'),
('JIOPRE33', 349, '30', 2.5, 0, '2.5GB/day', 'Popular Plans', '2.5GB/day Data for 30 Days Pack'),
('JIOPRE34', 269, '28', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 28 Days Pack'),
('JIOPRE35', 739, '84', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 84 Days Pack'),
('JIOPRE36', 529, '56', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 56 Days Pack'),
('JIOPRE37', 479, '56', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 56 Days Pack'),
('JIOPRE38', 259, '1 month', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 1 Month Pack'),
('JIOPRE39', 199, '23', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 23 Days Pack'),
('JIOPRE40', 789, '84', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 84 Days Pack'),
('JIOPRE41', 589, '56', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 56 Days Pack'),
('JIOPRE42', 533, '56', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 56 Days Pack'),
('JIOPRE43', 249, '23', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 23 Days Pack'),
('JIOPRE44', 219, '14', 3, 0, '3GB/day', 'Popular Plans', '3GB/day Data for 14 Days Pack'),
('JIOPRE45', 296, '30', 0, 25, '25GB', 'No Daily Limit', '25GB Data for ₹296 No Daily Limit Pack'),
('JIOPRE46', 895, '336', 0, 0, '2GB/28 days', 'JioPhone', 'Unlimited Calling with 2GB/28 days Data for 336 Days'),
('JIOPRE47', 152, '28', 1, 0, '0.5GB/day', 'JioPhone', 'Unlimited Calling with 0.5GB/day Data for 28 Days'),
('JIOPRE48', 125, '23', 1, 0, '0.5GB/day', 'JioPhone', 'Unlimited Calling with 0.5GB/day Data for 23 Days'),
('JIOPRE49', 182, '28', 2, 0, '2GB/day', 'Data', 'JP MRP 182'),
('JIOPRE50', 501, '28', 0, 0, '424.58', 'ISD', '₹424.58 ISD Talktime for 28 Days Global ISD Pack'),
('JIOPRE51', 2499, '10', 0, 0, '250MB', 'International Roaming', 'Travel Pass- ₹2499'),
('JIOPRE52', 4999, '30', 0, 5, '5GB', 'International Roaming', 'Travel Pass- ₹4999'),
('JIOPRE53', 1499, '14', 0, 1, '1GB', 'International Roaming', 'Roam More - ₹1499'),
('JIOPRE54', 3999, '30', 0, 4, '4GB', 'International Roaming', 'Roam More- ₹3999'),
('JIOPRE55', 5999, '30', 0, 6, '6GB', 'International Roaming', 'Roam More- ₹5999'),
('JIOPRE56', 5899, '21', 0, 10, '10GB', 'International Roaming', 'IR Data Pack-₹5899'),
('JIOPRE57', 499, '1', 0, 0, '250MB', 'In-Flight Packs', '250MB for 1 Day In-Flight Connectivity Packs'),
('JIOPRE58', 699, '1', 0, 1, '500MB', 'In-Flight Packs', '500MB for 1 Day In-Flight Connectivity Packs'),
('JIOPRE59', 999, '1', 0, 1, '1GB', 'In-Flight Packs', '1GB for 1 Day In-Flight Connectivity Packs'),
('JIOPRE60', 1000, 'NA', 0, 0, '844.46', 'Top-Up', '₹844.46 Talktime Top-Up Voucher'),
('JIOPRE61', 500, 'NA', 0, 0, '420.73', 'Top-Up', '₹420.73 Talktime Top-Up Voucher'),
('JIOPRE62', 100, 'NA', 0, 0, '81.75', 'Top-Up', '₹81.75 Talktime Top-Up Voucher'),
('JIOPRE63', 50, 'NA', 0, 0, '39.37', 'Top-Up', '₹39.37 Talktime Top-Up Voucher'),
('JIOPRE64', 20, 'NA', 0, 0, '14.95', 'Top-Up', '₹14.95 Talktime Top-Up Voucher'),
('JIOPRE65', 4199, '196', 5, 96, '5GB/day pack + 96GB', 'JioLink', '5GB/day pack and 96GB Data for 168 and 28 Days JioLink - MRP 4199'),
('JIOPRE66', 2099, '98', 5, 48, '5GB/day pack + 48GB', 'JioLink', '5GB/day pack and 48GB Data for 84 and 14 Days JioLink - MRP 2099'),
('JIOPRE67', 699, '28', 5, 16, '5GB/day + 16GB', 'JioLink', '5GB/day and 16GB Data for 28 Days JioLink - MRP 699'),
('JIOPRE68', 99, '30', 0, 0, 'NA', 'JioSaavn Pro', 'JioSaavn Pro Plans for 30 Days');

-- --------------------------------------------------------

--
-- Table structure for table `vi_prepaid`
--

CREATE TABLE `vi_prepaid` (
  `id` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `validity` varchar(100) NOT NULL,
  `dataperday` int(11) NOT NULL,
  `additionaldata` int(11) NOT NULL,
  `data_talktime` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vi_prepaid`
--

INSERT INTO `vi_prepaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('VIPRE01', 99, '28', 0, 0, '200MB', 'Combo', '₹99 Talktime with 200MB Data Combo Pack'),
('VIPRE02', 179, '28', 0, 2, '2GB', 'Truly Unlimited', 'Unlimited Talktime and 2GB Data for 28 Days Pack'),
('VIPRE03', 107, '30', 0, 0, '200MB', 'Combo', '₹107 Talktime with 200MB Data Combo Pack'),
('VIPRE04', 155, '24', 0, 1, '1GB', 'Truly Unlimited', 'Unlimited Talktime and 1GB Data for 24 Days Pack'),
('VIPRE05', 459, '84', 0, 6, '6GB', 'Truly Unlimited', 'Unlimited Talktime and 6GB Data for 84 Days Pack'),
('VIPRE06', 99, '15', 0, 0, '200MB', 'Combo', '₹99 Talktime with 200MB Data Combo Pack'),
('VIPRE07', 118, '28', 0, 12, '12GB', 'Data', '12GB Data for 28 Days Pack'),
('VIPRE08', 299, '28', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 28 Days Pack'),
('VIPRE09', 181, '30', 1, 0, '1GB/Day', 'Data', '1GB/Day Data for 30 Days Pack'),
('VIPRE10', 58, '28', 0, 3, '3GB', 'Data', '3GB Data for 28 Days Pack'),
('VIPRE100', 2899, '365', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 365 Days Pack'),
('VIPRE101', 949, '180', 0, 12, '12GB', 'Truly Unlimited', 'Unlimited Talktime and 12GB Data for 180 Days Pack'),
('VIPRE102', 409, '28', 4, 0, '3.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 3.5GB/Day Data for 28 Days Pack'),
('VIPRE103', 1449, '180', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 180 Days Pack'),
('VIPRE104', 296, '30', 0, 25, '25GB', 'Truly Unlimited', 'Unlimited Talktime and 25GB Data for 30 Days Pack'),
('VIPRE105', 537, '60', 0, 50, '50GB', 'Truly Unlimited', 'Unlimited Talktime and 50GB Data for 60 Days Pack'),
('VIPRE106', 98, '14', 0, 0, '200MB', 'Truly Unlimited', 'Unlimited Talktime and 200MB Data for 14 Days Pack'),
('VIPRE107', 329, '56', 0, 4, '4GB', 'Truly Unlimited', 'Unlimited Talktime and 4GB Data for 56 Days Pack'),
('VIPRE108', 249, '21', 2, 2, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 21 Days Pack'),
('VIPRE109', 209, '28', 0, 4, '4GB', 'Truly Unlimited', 'Unlimited Talktime and 4GB Data for 28 Days Pack'),
('VIPRE11', 19, '1', 0, 1, '1GB', 'Data', '1GB Data for 24 Hours Pack'),
('VIPRE110', 599, '70', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 70 Days Pack'),
('VIPRE111', 199, '18', 1, 0, '1GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1GB/Day Data for 18 Days Pack'),
('VIPRE112', 129, '18', 0, 0, '200MB', 'Truly Unlimited', 'Unlimited Talktime and 200MB Data for 18 Days Pack'),
('VIPRE113', 219, '21', 1, 0, '1GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1GB/Day Data for 21 Days Pack'),
('VIPRE114', 429, '78', 0, 6, '6GB', 'SMS', 'Unlimited Calls+6GB Data+1000 SMS. Valid for 78 Days. for 78 Days Pack'),
('VIPRE12', 10, 'NA', 0, 0, '7.47', 'Talktime', '₹7.47 Talktime Pack'),
('VIPRE13', 42, '28', 0, 0, 'NA', 'SMS', 'Get Unlimited SMS score alerts for on-going Cricket match and Chance to talk to Sports celebrity (Min 5 event in a month). Â Pack validity 28 Days for 28 Days Pack'),
('VIPRE14', 719, '84', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 84 Days Pack'),
('VIPRE15', 289, '48', 0, 4, '4GB', 'SMS', 'Unlimited Calls+4GB Data+600 SMS. Valid for 48 Days. for 48 Days Pack'),
('VIPRE16', 39, '7', 0, 3, '3GB', 'Data', '3GB Data for 7 Days Pack'),
('VIPRE17', 18, '28', 0, 0, 'NA', 'ISD', '₹18 ISD Pack for 28 Days'),
('VIPRE18', 100, 'NA', 0, 0, '81.75', 'Talktime', '₹81.75 Talktime Pack'),
('VIPRE19', 479, '56', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 56 Days Pack'),
('VIPRE20', 142, '1 month', 0, 0, '250MB', 'Combo', '₹117 Talktime with 250MB Data Combo Pack'),
('VIPRE21', 279, '90', 0, 1, '500MB', 'Combo', '₹279 Talktime with 500MB Data Combo Pack'),
('VIPRE22', 111, '1 month', 0, 0, '200MB', 'Combo', '₹111 Talktime with 200MB Data Combo Pack'),
('VIPRE23', 29, '2', 0, 2, '2GB', 'Data', '2GB Data for 2 Days Pack'),
('VIPRE24', 499, '28', 3, 0, '3GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 3GB/Day Data for 28 Days Pack'),
('VIPRE25', 901, '70', 3, 0, '3GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 3GB/Day Data for 70 Days Pack'),
('VIPRE26', 45, '0 Days', 0, 0, 'NA', 'Entertainment', 'Missed Call Alerts Entertainment Pack for 0 Days'),
('VIPRE27', 66, '28', 0, 0, 'NA', 'ISD', '₹66 ISD Pack for 28 Days'),
('VIPRE28', 50, 'NA', 0, 0, '39.37', 'Talktime', '₹39.37 Talktime Pack'),
('VIPRE29', 141, '1', 0, 0, '₹ 10', 'Plan Voucher', '10 Onnet Night Minutes for 1 Month Pack'),
('VIPRE30', 1799, '365', 0, 24, '24GB', 'Truly Unlimited', 'Unlimited Talktime and 24GB Data for 365 Days Pack'),
('VIPRE31', 138, '30', 0, 0, '250MB', 'Combo', '₹114 Talktime with 250MB Data Combo Pack'),
('VIPRE32', 198, '30', 0, 1, '500MB', 'Combo', 'Talktime with 500MB Data Combo Pack'),
('VIPRE33', 204, '1 month', 0, 1, '500MB', 'Combo', 'Talktime with 500MB Data Combo Pack'),
('VIPRE34', 198, '30', 0, 1, '500MB', 'Combo', '₹198 Talktime with 500MB Data Combo Pack'),
('VIPRE35', 204, '1 month', 0, 1, '500MB', 'Combo', '₹204 Talktime with 500MB Data Combo Pack'),
('VIPRE36', 127, '28', 0, 0, '250MB', 'Combo', '₹105 Talktime with 250MB Data Combo Pack'),
('VIPRE37', 128, '18', 0, 0, 'NA', 'Combo', 'Talktime Combo Pack'),
('VIPRE38', 128, '18', 0, 0, '₹ 10', 'Combo', '10 Local Onnet Night Minutes Talktime Combo Pack'),
('VIPRE39', 24, '1', 0, 0, 'Unlimited', 'Data', 'Unlimited Data for 1 Hour Pack'),
('VIPRE40', 49, '24', 0, 6, '6GB', 'Data', '6GB Data for 24 Hours Pack'),
('VIPRE41', 108, '15', 0, 6, '6GB', 'Data', '6GB Data for 15 Days Pack'),
('VIPRE42', 17, '1', 0, 0, 'Night Free', 'Data', 'Night Free Data for 1 Day Pack'),
('VIPRE43', 57, '7', 0, 0, 'Night Free', 'Data', 'Night Free Data for 7 Days Pack'),
('VIPRE44', 98, '21', 0, 9, '9GB', 'Data', '9GB Data for 21 Days Pack'),
('VIPRE45', 75, '7', 0, 6, '6GB', 'Data', '6GB Data for 7 Days Pack'),
('VIPRE46', 82, '14', 0, 4, '4GB', 'Data', '4GB Data for 14 Days Pack'),
('VIPRE47', 698, '28', 0, 10, '10GB', 'Data', '10GB Data for 28 Days Pack'),
('VIPRE48', 298, '28', 0, 50, '50GB', 'Data', '50GB Data for 28 Days Pack'),
('VIPRE49', 25, '1', 0, 1, '1.1GB', 'Data', '1.1GB Data for 1 Day Pack'),
('VIPRE50', 418, '56', 0, 100, '100GB', 'Data', '100GB Data for 56 Days Pack'),
('VIPRE51', 999, '365', 0, 50, '50GB', 'Data', '50GB Data for 365 Days Pack'),
('VIPRE52', 839, '84', 2, 0, '2GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 2GB/Day Data for 84 Days Pack'),
('VIPRE53', 3099, '365', 2, 0, '2GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 2GB/Day Data for 365 Days Pack'),
('VIPRE54', 151, '30', 0, 8, '8GB', 'Disney Hotstar VIP', '8GB Data for 30 Days Pack'),
('VIPRE55', 399, '28', 3, 0, '2.5GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 2.5GB/Day Data for 28 Days Pack'),
('VIPRE56', 601, '28', 3, 0, '3GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 3GB/Day Data for 28 Days Pack'),
('VIPRE57', 1066, '84', 2, 0, '2GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 2GB/Day Data for 84 Days Pack'),
('VIPRE58', 47, '28', 0, 0, 'NA', 'Entertainment', 'Caller Tunes Entertainment Pack for 28 Days'),
('VIPRE59', 78, '89', 0, 0, 'NA', 'Entertainment', 'Caller Tunes Entertainment Pack for 89 Days'),
('VIPRE60', 32, '28', 0, 0, 'NA', 'Entertainment', 'Games Entertainment Pack for 28 Days'),
('VIPRE61', 43, '0', 0, 0, 'NA', 'Entertainment', 'Contest Entertainment Pack for 0 Days'),
('VIPRE62', 52, '28', 0, 0, 'NA', 'Entertainment', 'Star Talk Entertainment Pack for 28 Days'),
('VIPRE63', 62, '89', 0, 0, 'NA', 'Entertainment', 'Games Long Validity Entertainment Pack for 89 Days'),
('VIPRE64', 72, '89', 0, 0, 'NA', 'Entertainment', 'Sports Long Validity Entertainment Pack for 89 Days'),
('VIPRE65', 103, '89', 0, 0, 'NA', 'Entertainment', 'Star Talk Long Validity Entertainment Pack for 89 Days'),
('VIPRE66', 79, '10', 0, 0, '100MB', 'Entertainment', 'Truly Unlimited Entertainment Pack for 10 Days'),
('VIPRE67', 149, '21', 0, 1, '1GB', 'Entertainment', 'Truly Unlimited Entertainment Pack for 21 Days'),
('VIPRE68', 18, '0', 0, 0, 'NA', 'ISD', '₹18 ISD Pack for 0 Days'),
('VIPRE69', 27, '28', 0, 0, 'NA', 'ISD', '₹27 ISD Pack for 28 Days'),
('VIPRE70', 11, '7', 0, 0, 'NA', 'ISD', '₹11 ISD Pack for 7 Days'),
('VIPRE71', 18, '1', 0, 0, 'NA', 'ISD', '₹18 ISD Pack for 1 Hour'),
('VIPRE72', 34, '56', 0, 0, 'NA', 'ISD', '₹34 ISD Pack for 56 Days'),
('VIPRE73', 31, '28', 0, 0, 'NA', 'ISD', '₹31 ISD Pack for 28 Days'),
('VIPRE74', 63, '28', 0, 0, 'NA', 'ISD', '₹63 ISD Pack for 28 Days'),
('VIPRE75', 100, 'NA', 0, 0, '₹ 81.75', 'Talktime', '₹81.75 Talktime Pack'),
('VIPRE76', 500, 'NA', 0, 0, '₹ 423.75', 'Talktime', '₹423.75 Talktime Pack'),
('VIPRE77', 500, 'NA', 0, 0, '₹ 423.73', 'Talktime', '₹423.73 Talktime Pack'),
('VIPRE78', 1000, 'NA', 0, 0, '₹ 847.46', 'Talktime', '₹847.46 Talktime Pack'),
('VIPRE79', 20, 'NA', 0, 0, '₹ 14.95', 'Talktime', '₹14.95 Talktime Pack'),
('VIPRE80', 30, 'NA', 0, 0, '₹ 22.42', 'Talktime', '₹22.42 Talktime Pack'),
('VIPRE81', 128, '28', 0, 0, '₹ 10', 'Plan Voucher', '10 Local Onnet Night Minutes for 28 Days Pack'),
('VIPRE82', 224, '30', 0, 4, '4GB', 'Plan Voucher', 'Truly Unlimited for 30 Days Pack'),
('VIPRE83', 232, '1 month', 0, 4, '4GB', 'Plan Voucher', 'Truly Unlimited for 1 Month Pack'),
('VIPRE84', 137, '30', 0, 0, '₹ 10', 'Plan Voucher', '10 Onnet Night Minutes for 30 Days Pack'),
('VIPRE85', 359, '28', 3, 0, '3GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 3GB/Day Data for 28 Days Pack'),
('VIPRE86', 195, '1 month', 0, 3, '3GB', 'Truly Unlimited', 'Unlimited Talktime and 3GB Data for 1 Month Pack'),
('VIPRE87', 269, '28', 1, 0, '1GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1GB/Day Data for 28 Days Pack'),
('VIPRE88', 368, '30', 2, 0, '2GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data for 30 Days Pack'),
('VIPRE89', 369, '30', 2, 0, '2GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data for 30 Days Pack'),
('VIPRE90', 902, '90', 2, 0, '2GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data for 90 Days Pack'),
('VIPRE91', 903, '90', 2, 0, '2GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data for 90 Days Pack'),
('VIPRE92', 2999, '365', 0, 850, '850GB', 'Truly Unlimited', 'Unlimited Talktime and 850GB Data for 365 Days Pack'),
('VIPRE93', 666, '77', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 77 Days Pack'),
('VIPRE94', 239, '24', 1, 0, '1GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1GB/Day Data for 24 Days Pack'),
('VIPRE95', 319, '1 month', 2, 0, '2GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data for 1 Month Pack'),
('VIPRE96', 699, '56', 3, 0, '3GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 3GB/Day Data for 56 Days Pack'),
('VIPRE97', 475, '28', 4, 0, '4GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 4GB/Day Data for 28 Days Pack'),
('VIPRE98', 539, '56', 2, 0, '2GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 2GB/Day Data for 56 Days Pack'),
('VIPRE99', 1999, '250', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 250 Days Pack');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airtel_prepaid`
--
ALTER TABLE `airtel_prepaid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsnl_prepaid`
--
ALTER TABLE `bsnl_prepaid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jio_prepaid`
--
ALTER TABLE `jio_prepaid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vi_prepaid`
--
ALTER TABLE `vi_prepaid`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
