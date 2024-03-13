-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 08:14 PM
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
-- Database: `telecome(2)`
--

-- --------------------------------------------------------

--
-- Table structure for table `airtel_postpaid`
--

CREATE TABLE `airtel_postpaid` (
  `id` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `validity` varchar(100) NOT NULL,
  `dataperday` varchar(50) NOT NULL,
  `additionaldata` varchar(50) NOT NULL,
  `data_talktime` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airtel_postpaid`
--

INSERT INTO `airtel_postpaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('AIRPOST02', 499, 'Monthly rent', 'NULL', 'NULL', '75GB', 'Platiniumplan', 'Unlimited calls with 75GB data 100 SMS/day with subscription to amazon prime,disney+hotstar.'),
('AIRPOST03', 599, 'Monthly rent', 'NULL', 'NULL', '75GB', 'Postpaid', '100 SMS/day with subscription to amazon prime,disney+hotstar,wynk music and also free addon commection with unlimited calls,1 Regular with 1 free fasmily addons.'),
('AIRPOST04', 599, 'Monthly rent', 'NULL', 'NULL', '100GB', 'Postpaid', '100 SMS/day with subscription to amazon prime and also free addon commection with unlimited calls,1 Regular with 3 free family addons.'),
('AIRPOST01', 399, 'Monthly rent', 'NULL', 'NULL', '40GB', 'IndividualPostpaidPlans', 'Unlimited calls with 40GB data 100 SMS/day.'),
('AIRPOST05', 1199, 'Monthly rent', 'NULL', 'NULL', '150GB', 'Postpaid', '100 SMS/day with subscription to amazon prime, netflix basic  ,disney+hotstar and also free addon commection with unlimited calls,1 Regular with 3 free family addons.'),
('AIRPOST06', 1499, 'Monthly rent', 'NULL', 'NULL', '200GB', 'Postpaid', '100 SMS/day with subscription to amazon prime, netflix basic  ,disney+hotstar and also free addon commection with unlimited calls,1 Regular with 4 free family addons.\r\n');

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
  `data_talktime` varchar(255) DEFAULT NULL,
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
-- Table structure for table `bsnl_postpaid`
--

CREATE TABLE `bsnl_postpaid` (
  `id` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `validity` varchar(100) NOT NULL,
  `dataperday` varchar(50) NOT NULL,
  `additionaldata` varchar(50) NOT NULL,
  `data_talktime` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bsnl_postpaid`
--

INSERT INTO `bsnl_postpaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('BSNLPOST01', 199, '30 days', 'NULL', 'NULL', '25 GB  with 75 GB rollover', 'MonthlyPostpaidPlan', 'Unlimited calls 100 SMS per day,it comes with a Rs 100 activation charge, and security deposits also apply.'),
('BSNLPOST02', 399, '30 days', 'NULL', 'NULL', '75 GB with 210 GB rollover', 'MonthlyPostpaidPlan', 'MonthlyPostpaidPlans\', \'Unlimited calls 100 SMS per day,it comes with a Rs 100 activation charge, and security deposits also apply.'),
('BSNLPOST03', 525, '30 days', 'NULL', 'NULL', '85 GB with 255 GB rollover', 'MonthlyPostpaidPlan', 'Unlimited calls 100 SMS per day with 1 additional family SIM with10 GB data and 20 SMS per day.'),
('BSNLPOST04', 798, '30 days', 'NULL', 'NULL', '50 GB with 150 GB rollover', 'MonthlyPostpaidPlan', 'Unlimited calls 100 SMS per day with 2 additional family SIM with 50 GB data and 100 SMS per day.'),
('BSNLPOST05', 999, '30 days', 'NULL', 'NULL', '75 GB with 225 GB rollover', 'MonthlyPostpaidPlan', 'Unlimited calls 100 SMS per day with 3 additional family SIM with 75 GB data and 100 SMS per day.'),
('BSNLPOST06', 1525, '30 days', 'NULL', 'NULL', 'Unlimited data', 'MonthlyPostpaidPlan', 'Unlimited calls 100 SMS per day with 1 additional family SIM with 75 GB data and 100 SMS per day.\r\n');

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
  `data_talktime` varchar(255) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bsnl_prepaid`
--

INSERT INTO `bsnl_prepaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('BSNPRE01', 16, '1 Day', 0, 0, '2GB', 'Data voucher', '2GB data for 1 day @ 16'),
('BSNPRE02', 94, '30 days', 0, 0, '3GB', 'Data voucher', '3GB data for 30 days @ ₹94'),
('BSNPRE03', 97, '15 days', 2, 0, '2GB/day', 'Data voucher', '2GB/DAY Data for 15 Days @₹97 Pack'),
('BSNPRE04', 98, '18 days', 2, 0, '2GB/day', 'Data voucher', '2GB/DAY Data for 15 Days @₹98 Pack'),
('BSNPRE05', 151, '30 days', 0, 0, '40GB', 'Data voucher', '30GB Data for 30 Days @₹151 Pack'),
('BSNPRE06', 198, '40 days', 2, 0, '2GB/day', 'Data voucher', '2GB/day Data for  40 Days @₹198 Pack'),
('BSNPRE07', 251, '28 days', 0, 0, '70GB', 'Data voucher', '70GB Data for  28 Days @ ₹251 Pack'),
('BSNPRE08', 288, '60 days', 2, 0, '2GB/day', 'Data voucher', '2GB/day Data for  60 Days @₹288 Pack'),
('BSNPRE09', 398, '30 days', 0, 0, '128GB', 'Data voucher', '120GB Data for 30 Days @₹398 Pack'),
('BSNPRE010', 411, '90 days', 2, 0, '2GB/day', 'Data voucher', '2GB/day Data for 90 Days @₹411 Pack'),
('BSNPRE011', 788, '180', 2, 0, '2GB/day', 'Data voucher', '2GB/day Data for 180 Days @₹788 Pack'),
('BSNPRE012', 1515, '365 days', 2, 0, '2GB/day', 'Data voucher', '2GB/day Data for 365 Days @₹1515 Pack'),
('BSNPRE013', 10, 'NV', 0, 0, '₹7.47', 'TopUp', '₹7.47 Talktime Pack'),
('BSNPRE014', 20, 'NV', 0, 0, '₹14.95', 'TopUP', '₹14.95 Talktime Pack'),
('BSNPRE014', 30, 'NV', 0, 0, '₹22.42', 'TopUp', '₹22.42 Talktime Pack'),
('BSNPRE015', 50, 'NV', 0, 0, '₹39.37', 'TopUp', '₹39.37 Talktime Pack'),
('BSNPRE016', 100, 'NV', 0, 0, '₹90.22', 'TopUp', '₹90.22 Talktime Pack'),
('BSNPRE017', 110, 'NV', 0, 0, '₹90.22', 'TopUp', '₹90.22 Talktime Pack'),
('BSNPRE018', 120, 'NV', 0, 0, '₹98.69', 'TopUP', '₹98.69 Talktime Pack'),
('BSNPRE019', 150, 'NV', 0, 0, '₹124.12', 'TpoUp', '₹124.12 Talktime Pack'),
('BSNPRE020', 200, 'NV', 0, 0, '₹166.49', 'TopUp', '₹166.49 Talktime Pack'),
('BSNPRE021', 220, 'NV', 0, 0, '₹220', 'TopUp', '₹220 Talktime Pack'),
('BSNPRE022', 550, 'NV', 0, 0, '₹550', 'TopUp', '₹550 Talktime Pack'),
('BSNPRE023', 1000, 'NV', 0, 0, '₹844.46', 'TopUo', '₹844.46 Talktime Pack '),
('BSNPRE024', 500, 'NV', 0, 0, '₹500', 'TopUp', '₹500 Talktime Pack'),
('BSNPRE027', 88, '35 days', 0, 0, 'NA', 'VOICE vouchers', '₹88 for 35 Days Pack'),
('BSNPRE028', 91, '90 days', 0, 0, 'NA', 'VOICE vouchers', '₹91 for 90 Days Pack'),
('BSNPRE029', 99, '18 days', 0, 0, 'NA', 'VOICE vouchers', '₹99 for 18 Days Pack'),
('BSNPRE030', 118, '20 days', 0, 0, '', 'VOICE Voucher', ''),
('BSNPRE031', 139, '28 days', 1.5, 0, '1.5GB/day', 'VOICE Voucher', '1.5GB/DAY Data for 28 Days Pack'),
('BSNPRE032', 147, '30 days', 0, 0, '10GB', 'VOICE Voucher', '10GB Data for 30 Days Pack'),
('BSNPRE033', 184, '28 adys', 1, 0, '1GB/day', 'VOICE Voucher', '1GB/DAY Data for 28 Days Pack'),
('BSNPRE034', 185, '28 days', 1, 0, '1GB/day', 'VOICE Voucher', '1GB/DAY Data for 28 Days Pack'),
('BSNPRE035', 186, '28 days', 1, 0, '1GB/day', 'VOICE Voucher', '1GB/DAY Data for 28 Days Pack'),
('BSNPRE036', 187, '28 days', 1.5, 0, '1.5GB/day', 'VOICE Voucher', '1.5GB/DAY Data for 28 Days Pack'),
('BSNPRE037', 209, '84 days', 0, 0, 'NA', 'VOICE Voucher', '₹209 for 84 Days Pack'),
('BSNPRE025', 18, '2 days', 1, 0, '1GB/day', 'VOICE voucher', '1GB/day data for 2 days @₹18 pack'),
('BSNPRE026', 87, '14 days', 1, 0, '1GB/day', 'VOICE voucher', '1GB/day data for 14 days @₹87 pack'),
('BSNPRE038\r\n', 228, '30 days', 2, 0, '2GB/day', 'Voice Voucher', '2GB/DAY Data for 1 Month(Recharge on the same date every month) Day Pack'),
('BSNPRE039', 239, '30 days', 2, 0, '2GB/day', 'Voice Voucher', '2GB/DAY Data for 1 Month(Recharge on the same date every month) Day Pack'),
('BSNPRE040', 247, '30 days', 0, 0, '₹10 talk value+50GB', 'Voice Voucher', '₹ 10 Talk value+50GB Data for 30 Days Pack'),
('BSNPRE041\r\n', 269, '28 days', 2, 0, '2GB/day', 'Voice Voucher', '2GB/DAY Data for 28 days(Recharge on the same date every month) Day Pack'),
('BSNPRE042', 298, '52 days', 1, 0, '1GB/day', 'Voice Voucher', '1GB/DAY Data for 52 days(Recharge on the same date every month) Day Pack'),
('BSNPRE043', 299, '30 days', 3, 0, '3GB/day', 'Voice Voucher', '3GB/DAY Data for 30 days(Recharge on the same date every month) Day Pack'),
('BSNPRE044', 319, '65 days', 0, 0, '10GB', 'Voice Voucher', '10GB Data for 65 Days Pack'),
('BSNPRE045', 347, '54 days', 2, 0, '2GB/day', 'Voice Voucher', '2GB/DAY Data for 54 days(Recharge on the same date every month) Day Pack'),
('BSNPRE046', 399, '70 days', 1, 0, '1GB/day', 'Voice Voucher', '1GB/DAY Data for 70 days(Recharge on the same date every month) Day Pack'),
('BSNPRE047', 439, '90 days', 1.5, 0, '', 'Voice Voucher', '₹439 for 90 Days Pack'),
('BSNPRE048', 485, '82 days', 1.5, 0, '1.5GB/day', 'Voice Voucher', '1.5GB/DAY Data for 82 days(Recharge on the same date every month) Day Pack'),
('BSNPRE049', 499, '75 days', 2, 0, '2GB/day', 'Voice Voucher', '2GB/DAY Data for 75 days(Recharge on the same date every month) Day Pack'),
('BSNPRE050', 599, '84 days', 3, 0, '3GB', 'Voice Voucher', '3GB/DAY Data for 84 Days Pack'),
('BSNPRE051', 769, '84 days', 2, 0, '2GB/day', 'Voice Voucher', '2GB/DAY Data for 84 Days Pack'),
('BSNPRE052', 23, '30 days', 0, 0, '0', 'Other Voucher', '23 min of consulation on IVR.'),
('BSNPRE053', 31, '30 days', 0, 0, '0', 'Other Voucher', '21 min of consulation on IVR.'),
('BSNPRE054', 37, '30 days', 0, 0, '0', 'Other Voucher', '₹37 for 30 Days Pack'),
('BSNPRE055', 57, '30 days', 0, 0, '0', 'Other Voucher', '₹57 for 30 Days International Roaming Pack'),
('BSNPRE056', 73, '30 days', 0, 0, '0', 'Other Voucher', '₹73 for 30 Days International Roaming Pack'),
('BSNPRE057', 167, '90 days', 0, 0, '0', 'Other Voucher', '₹167 for 30 Days International Roaming Pack'),
('BSNPRE058', 279, '28 days', 0, 0, '0', 'Other Voucher', '₹279 for 30 Days International Roaming Pack'),
('BSNPRE059', 497, '1 day', 100, 0, '0', 'Other Voucher', '100MB Data for 1 Day @₹497 International Roaming Pack'),
('BSNPRE060', 511, '1 day', 200, 0, '0', 'Other Voucher', '200MB Data for 1 Day @₹511 International Roaming Pack'),
('BSNPRE061', 659, '1 day', 50, 0, '0', 'Other Voucher', '50MB Data for 1 Day @₹659 International Roaming Pack'),
('BSNPRE062', 705, '1 day', 200, 0, '0', 'Other Voucher', '200MB Data for 1 Day @₹705 International Roaming Pack'),
('BSNPRE063', 895, '1 days', 0, 0, '0', 'other Voucher', '200MB Data for 1 Day @₹895 International Roaming Pack'),
('BSNPRE064', 898, '3 days', 200, 0, '0', 'Other Voucher', '200MB Data for 3 Day @₹898 International Roaming Pack'),
('BSNPRE065', 1359, '3 days', 100, 0, '0', 'Other Voucher', '100MB Data for 3 Day @₹1359 International Roaming Pack'),
('BSNPRE066', 1379, '7 days', 500, 0, '0', 'Other Voucher', '500MB Data for 7 Day @₹1379 International Roaming Pack'),
('BSNPRE067', 2199, '7 days', 1000, 0, '0', 'Other Voucher', '1000MB Data for 7 Day @₹2199 International Roaming Pack'),
('BSNPRE068', 2311, '28 days', 2, 0, '0', 'Other Voucher', '2GB Data for 28 Day @₹2311 International Roaming Pack'),
('BSNPRE069', 2875, '7 days', 1, 0, '0', 'Other Voucher', '1 Data for 7 Day @₹2875 International Roaming Pack'),
('BSNPRE070', 2895, '7 days', 1.3, 0, '0', 'Other Voucher', '1.3GB Data for 7 Day @₹2895 International Roaming Pack'),
('BSNPRE071', 3495, '7 days', 500, 0, '0', 'Other Voucher', '500MB Data for 7 Day @₹3495 International Roaming Pack'),
('BSNPRE072', 3905, '28 days', 1.5, 0, '0', 'Other Voucher', '1.5GB Data for 28 Day @₹3905 International Roaming Pack'),
('BSNPRE073', 4895, '28 days', 1, 0, '0', 'Other Voucher', '1GB Data for 28 Day @₹4865 International Roaming Pack'),
('BSNPRE074', 220, 'NA', 0, 0, '₹220', 'Talktime', '₹220 Talktime Pack'),
('BSNPRE075', 500, 'NA', 0, 0, '₹500 ', 'Talktime', '₹500 Talktime Pack'),
('BSNPRE076', 550, 'NA', 0, 0, '', 'Talktime', '₹550 Talktime Pack'),
('BSNPRE077', 1100, 'NA', 0, 0, '₹1100', 'Talktime', '₹1100 Talktime Pack'),
('BSNPRE078', 2000, 'NA', 0, 0, '₹2000', 'Talktime', '₹2000 Talktime Pack'),
('BSNPRE079', 5000, 'NA', 0, 0, '₹5000 ', 'Talktime', '₹5000 Talktime Pack');

-- --------------------------------------------------------

--
-- Table structure for table `jio_postpaid`
--

CREATE TABLE `jio_postpaid` (
  `id` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `validity` varchar(100) NOT NULL,
  `dataperday` varchar(50) NOT NULL,
  `additionaldata` varchar(50) NOT NULL,
  `data_talktime` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jio_postpaid`
--

INSERT INTO `jio_postpaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('JIOPOST01', 1499, 'Bill cycle', 'NULL', 'NULL', '300GB', 'JioPlusPlans', 'Unlimited voice call with 100 SMS/day,subscription to Netflix(Mobile) and Amazon Prime.'),
('JIOPOST02', 699, 'Bill cycle', 'NULL', 'NULL', '100GB/thereafter ₹10/GB', 'JioPlusPlans', 'Unlimited voice call with 100 SMS/day,subscription to Netflix(Mobile) and Amazon Prime,\\n100 GB Data, thereafter ₹10/GB,Add-on Family SIMs ,pto 3 family SIMs,Family SIM Data\\nAdditional 5 GB/month with each SIM,Add-on family SIM will be charged at Rs 99/Month.'),
('JIOPOST03', 599, 'Bill cycle', 'NULL', 'NULL', 'Unlimited', 'JioPlusPlans', 'Unlimited voice call with 100 SMS/day,subscription to Netflix(Mobile) and Amazon Prime,\\nUnlimited 5G Data for eligible Subscribers.'),
('JIOPOST04', 399, 'Bill cycle', 'NULL', 'NULL', '100GB,thereafter ₹10/GB', 'JioPlusPlans', 'Unlimited voice call with 100 SMS/day,75 GB Data, thereafter ₹10/GB,Add-on Family SIMs\\nUpto 3 family SIMs,Family SIM Data,Additional 5 GB/month with each SIM,Add-on family SIM will be charged at Rs 99/Month,unlimited 5G data for eligible Subscribers.'),
('JIOPOST05', 299, 'Bill cycle', 'NULL', 'NULL', '30GB, thereafter ₹10/GB', 'JioPlusPlans', 'Unlimited voice call with 100 SMS/day,unlimited 5G Data for eligible Subscribers.'),
('JIOPOST06', 199, 'Bill cycle', 'NULL', 'NULL', '25GB, thereafter ₹20/GB', 'Regular', 'Unlimited voice call with 100 SMS/day,Subscription to JioTV, JioCinema, JioSecurity & JioCloud 100% refundable security deposit applicable Rs 99 applicable for JioPrime\\nunlimited 5G data for eligible subscribers.'),
('JIOPOST07', 499, '1 day', 'NULL', 'NULL', '250MB', 'In FlightPlans', '100 minsof Outgoing call,No incoming call is allowed,with 100 SMS/day.'),
('JIOPOST08', 699, '1 day', 'NULL', 'NULL', '500MB', 'In FlightPlans', '100 minsof Outgoing call,No incoming call is allowed,with 100 SMS/day.'),
('JIOPOST09', 999, '1 day', 'NULL', 'NULL', '1GB', 'In FlightPlans', '100 minsof Outgoing call,No incoming call is allowed,with 100 SMS/day.'),
('JIOPOST10', 501, '28 days', 'NULL', 'NULL', 'Nil', 'Golbal ISD Plans', 'The plans also come with a validity period ranging from 28 days., with ISD 5 SMS.'),
('JIOPOST11', 121, '2 days', 'NULL', 'NULL', 'Nil', 'IR WiFi calls', '100 mins Wi-Fi (Outgoing Calls to India + Incoming from anywhere) Calls,Enable Wi-Fi calling on your handset and connect to Wi-Fi network to enjoy pack benefits\\nDisable Wi-Fi calling on your handset for making call /SMS to local / outside India numbers. Standard Rates apply.'),
('JIOPOST12', 521, '10 days', 'NULL', 'NULL', 'Nil', 'IR WiFi calls', '500 mins Wi-Fi (Outgoing Calls to India + Incoming from anywhere) Calls,Enable Wi-Fi calling on your handset and connect to Wi-Fi network to enjoy pack benefits\\nDisable Wi-Fi calling on your handset for making call /SMS to local / outside India numbers. S.\r\n');

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
  `data_talktime` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jio_prepaid`
--

INSERT INTO `jio_prepaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('JIOPRE01', 91, '28', 0, 0, '100MB/day + 200MB', 'JioPhone', 'Unlimited Calling with 100MB/day + 200MB Data for 28 Days'),
('JIOPRE02', 666, '84', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 84 Days Pack'),
('JIOPRE03', 10, 'NA', 0, 0, '7.47', 'Top-Up', '₹7.47 Talktime Top-Up Voucher'),
('JIOPRE04', 239, '28', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 28 Days Pack'),
('JIOPRE05', 75, '23', 0, 0, '100MB/Day + 200MB', 'JioPhone', 'Unlimited Calling with 100MB/Day + 200MB Data for 23 Days'),
('JIOPRE06', 26, '28', 0, 2, '2GB', 'Data', 'JP MRP 26'),
('JIOPRE7', 223, '28', 2, 0, '2GB/day', 'JioPhone', 'Unlimited Calling with 2GB/day Data for 28 Days'),
('JIOPRE8', 122, '28', 1, 0, '1GB/day', 'Data', 'JP MRP 122'),
('JIOPRE9', 719, '84', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 84 Days Pack'),
('JIOPRE10', 62, '28', 0, 6, '6GB', 'Data', 'JP MRP 62'),
('JIOPRE11', 999, '7', 0, 1, '1GB', 'International Roaming', 'IR Data Pack-₹999'),
('JIOPRE12', 1559, '336', 0, 24, '24GB', 'Truly Unlimited', 'Rs 1559-12m-24GB'),
('JIOPRE13', 149, '20', 1, 0, '1GB/day', 'Popular Plans', '1GB/day Data for 20 Days Pack'),
('JIOPRE14', 999, '84', 3, 0, '3GB/day', 'Popular Plans', '3GB/day Data for 84 Days Pack'),
('JIOPRE15', 749, '90', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 90 Days Pack'),
('JIOPRE16', 179, '24', 1, 0, '1GB/day', 'Popular Plans', '1GB/day Data for 24 Days Pack'),
('JIOPRE17', 186, '28', 1, 0, '1GB/day', 'JioPhone', 'Unlimited Calling with 1GB/day Data for 28 Days'),
('JIOPRE18', 86, '28', 1, 0, '0.5GB/day', 'Data', 'JP MRP 86'),
('JIOPRE19', 1, '28', 0, 0, '933.9', 'International Roaming', 'Global Pack - 1102'),
('JIOPRE20', 2545, '336', 1.5, 0, '1.5GB/day', 'Annual Plans', '1.5GB/day Data for 336 Days Pack'),
('JIOPRE21', 1101, '28', 0, 0, '933.5', 'International Roaming', 'Global Pack - 1101'),
('JIOPRE22', 2999, '7', 0, 5, '5GB', 'International Roaming', 'IR Data Pack-₹2999'),
('JIOPRE23', 4499, '14', 0, 8, '8GB', 'International Roaming', 'IR Data Pack-₹4499'),
('JIOPRE24', 399, '365', 0, 0, 'NA', 'JioSaavn Pro', 'JioSaavn Pro Plans for 365 Days'),
('JIOPRE25', 2999, '365', 2.5, 0, '2.5GB/day', 'Annual Plans', '2.5GB/day Data for 365 Days Pack'),
('JIOPRE26', 299, '28', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 28 Days Pack'),
('JIOPRE27', 1099, '84', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 84 Days Pack'),
('JIOPRE28', 1499, '84', 3, 0, '3GB/day', 'Popular Plans', '3GB/day Data for 84 Days Pack'),
('JIOPRE29', 399, '28', 3, 0, '3GB/day', 'Popular Plans', '3GB/day Data for 28 Days Pack'),
('JIOPRE30', 349, '30', 2.5, 0, '2.5GB/day', 'Popular Plans', '2.5GB/day Data for 30 Days Pack'),
('JIOPRE31', 269, '28', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 28 Days Pack'),
('JIOPRE32', 739, '84', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 84 Days Pack'),
('JIOPRE33', 529, '56', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 56 Days Pack'),
('JIOPRE34', 479, '56', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 56 Days Pack'),
('JIOPRE35', 259, '1 month', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 1 Month Pack'),
('JIOPRE36', 199, '23', 1.5, 0, '1.5GB/day', 'Popular Plans', '1.5GB/day Data for 23 Days Pack'),
('JIOPRE37', 789, '84', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 84 Days Pack'),
('JIOPRE38', 589, '56', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 56 Days Pack'),
('JIOPRE39', 533, '56', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 56 Days Pack'),
('JIOPRE40', 249, '23', 2, 0, '2GB/day', 'Popular Plans', '2GB/day Data for 23 Days Pack'),
('JIOPRE41', 219, '14', 3, 0, '3GB/day', 'Popular Plans', '3GB/day Data for 14 Days Pack'),
('JIOPRE42', 296, '30', 0, 25, '25GB', 'No Daily Limit', '25GB Data for ₹296 No Daily Limit Pack'),
('JIOPRE43', 895, '336', 0, 0, '2GB/28 days', 'JioPhone', 'Unlimited Calling with 2GB/28 days Data for 336 Days'),
('JIOPRE44', 152, '28', 1, 0, '0.5GB/day', 'JioPhone', 'Unlimited Calling with 0.5GB/day Data for 28 Days'),
('JIOPRE45', 125, '23', 1, 0, '0.5GB/day', 'JioPhone', 'Unlimited Calling with 0.5GB/day Data for 23 Days'),
('JIOPRE46', 182, '28', 2, 0, '2GB/day', 'Data', 'JP MRP 182'),
('JIOPRE47', 501, '28', 0, 0, '424.58', 'ISD', '₹424.58 ISD Talktime for 28 Days Global ISD Pack'),
('JIOPRE48', 2499, '10', 0, 0, '250MB', 'International Roaming', 'Travel Pass- ₹2499'),
('JIOPRE49', 4999, '30', 0, 5, '5GB', 'International Roaming', 'Travel Pass- ₹4999'),
('JIOPRE50', 1499, '14', 0, 1, '1GB', 'International Roaming', 'Roam More - ₹1499'),
('JIOPRE51', 3999, '30', 0, 4, '4GB', 'International Roaming', 'Roam More- ₹3999'),
('JIOPRE52', 5999, '30', 0, 6, '6GB', 'International Roaming', 'Roam More- ₹5999'),
('JIOPRE53', 5899, '21', 0, 10, '10GB', 'International Roaming', 'IR Data Pack-₹5899'),
('JIOPRE54', 499, '1', 0, 0, '250MB', 'In-Flight Packs', '250MB for 1 Day In-Flight Connectivity Packs'),
('JIOPRE55', 699, '1', 0, 1, '500MB', 'In-Flight Packs', '500MB for 1 Day In-Flight Connectivity Packs'),
('JIOPRE56', 999, '1', 0, 1, '1GB', 'In-Flight Packs', '1GB for 1 Day In-Flight Connectivity Packs'),
('JIOPRE57', 1000, 'NA', 0, 0, '844.46', 'Top-Up', '₹844.46 Talktime Top-Up Voucher'),
('JIOPRE58', 500, 'NA', 0, 0, '420.73', 'Top-Up', '₹420.73 Talktime Top-Up Voucher'),
('JIOPRE59', 100, 'NA', 0, 0, '81.75', 'Top-Up', '₹81.75 Talktime Top-Up Voucher'),
('JIOPRE60', 50, 'NA', 0, 0, '39.37', 'Top-Up', '₹39.37 Talktime Top-Up Voucher'),
('JIOPRE61', 20, 'NA', 0, 0, '14.95', 'Top-Up', '₹14.95 Talktime Top-Up Voucher'),
('JIOPRE62', 4199, '196', 5, 96, '5GB/day pack + 96GB', 'JioLink', '5GB/day pack and 96GB Data for 168 and 28 Days JioLink - MRP 4199'),
('JIOPRE63', 2099, '98', 5, 48, '5GB/day pack + 48GB', 'JioLink', '5GB/day pack and 48GB Data for 84 and 14 Days JioLink - MRP 2099'),
('JIOPRE64', 699, '28', 5, 16, '5GB/day + 16GB', 'JioLink', '5GB/day and 16GB Data for 28 Days JioLink - MRP 699'),
('JIOPRE65', 99, '30', 0, 0, 'NA', 'JioSaavn Pro', 'JioSaavn Pro Plans for 30 Days');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telecom_provider` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `phone`, `address`, `telecom_provider`) VALUES
(1, 'tele', '$2y$10$erKNAol4AtZoPVadmXTeV.CewMt/37Ekpup37gCErfVxKMz/fNc7O', '', '', '', NULL),
(2, 'tele', '$2y$10$yDClJxSCdgN9SD8XaeeLguFDJrrEQ//63Fro8EpSD2Uv1RNqFnpZC', 'Abhishek Belagavi', '+918310104531', 'Narasaraj Road, Belagavi Buildings #155 Davanagere', 'Jio'),
(3, 'tele', '$2y$10$y7WKmtHD2aXsJjOx07YyM.uD5pJ.kTP/VcYspDtvqrpXnhhDdj7EW', 'Abhishek Belagavi', '+918310104531', 'Narasaraj Road, Belagavi Buildings #155 Davanagere', 'Jio'),
(4, 'spoorthi', '$2y$10$kXXEyJ6pjUAiOpbMzRMz6e6nN6uXM1m5H5b60sDBlX6drrWzRw9ma', 'Chinmayi R', '+918867618831', 'Davanagere', '8867618831'),
(5, 'test', '$2y$10$h/OHxWvu57P11tV2EGArde3WSyI..0rg.4z1395ilQswvQlZi98wq', 'asdasd', '1234567890', '', 'dsfgsdsdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `vi_postpaid`
--

CREATE TABLE `vi_postpaid` (
  `id` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `validity` varchar(100) NOT NULL,
  `dataperday` varchar(50) NOT NULL,
  `additionaldata` varchar(50) NOT NULL,
  `data_talktime` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vi_postpaid`
--

INSERT INTO `vi_postpaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('VIPOST01', 401, '1 month', 'NULL', 'NULL', '50 GB (unlimited 12 AM to 6 AM) 200GB rollover\'', 'MaxPostpaidPlans', 'Unlimited calls Local,STD,National Roaming,3000 SMS per month  with hungama music with unlimited dowmloads with add free for 6 months ,Vi movies & tv, Vi games &play Esports along with they can choose any one of them disney+hotstar or sony liv or sun nxt.'),
('VIPOST02', 501, '1 month', 'NULL', 'NULL', '90 GB (unlimited 12 AM to 6 AM) 200GB rollover', 'MaxPostpaidPlans', ' Unlimited calls Local,STD,National Roaming,3000 SMS per month  with hungama music with unlimited dowmloads with add free for 6 months,Vi movies & tv, Vi games &play Esports along with they can choose any two of them amazon prime or disney+hotstar or sony liv or sun nxt.'),
('VIPOST03', 701, '1 month', 'NULL', 'NULL', 'Unlimited data', 'MaxPostpaidPlans', 'Unlimited calls Local,STD,National Roaming,3000 SMS per month  with hungama music with unlimited dowmloads with add free for 6 months,Vi movies & tv, Vi games &play Esports along with they can choose any three of them amazon prime or disney+hotstar or sony liv or sun nxt.'),
('VIPOST04', 1101, '1 month', 'NULL', 'NULL', 'unlimited data', 'MaxPostpaidPlans', 'Unlimited calls Local,STD,National Roaming,3000 SMS per month  with hungama music with unlimited dowmloads with add free for 6 months,Vi movies & tv, Vi games &play Esports,MakeMyTrip Hotel &Exckusive coupons,MakeMyTrip Flight & exclusive coupons along with  amazon prime or disney+hotstar or sony liv or sun nxt.'),
('VIPOST05', 601, '1 month', 'NULL', 'NULL', '70 GB (unlimited 12 AM to 6 AM) +10 GB sharing 200', 'Vi MaxFamilyPlans', '1 regular +1 additional connction unlimited calls Local,STD,National Roaming,3000 SMS per month(for both the connections) with Vi movies & tv,Hungama music in Vi app,Vi games along with they can choose any two of them amazon prime or disney+hotstar or sony liv or sun nxt and additional connection will get 40 GB  +10 GB sharing 200GB rollover.'),
('VIPOST06', 1001, '1 month', 'NULL', 'NULL', '140 GB (unlimited 12 AM to 6 AM) +20 GB sharing 20', 'Vi MaxFamilyPlans', '1 regular +3 additional connction unlimited calls Local,STD,National Roaming,3000 SMS per month(for all connections) with Vi movies & tv,Hungama music in Vi app,Vi games along with they can choose any two of them amazon prime or disney+hotstar or sony liv or sun nxt and additional connection will get 40 GB  +20 GB sharing 200GB rollover.'),
('VIPOST07', 1151, '1 month', 'NULL', 'NULL', '140 GB (unlimited 12 AM to 6 AM) +25 GB sharing 20', 'Vi MaxFamilyPlans', '1 regular +4 additional connction unlimited calls Local,STD,National Roaming,3000 SMS per month(for all connections) with Vi movies & tv,Hungama music in Vi app,Vi games along with they can choose any two of them amazon prime or disney+hotstar or sony liv or sun nxt and additional connection will get 40 GB  +25 GB sharing 200GB rollover.');

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
  `data_talktime` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vi_prepaid`
--

INSERT INTO `vi_prepaid` (`id`, `price`, `validity`, `dataperday`, `additionaldata`, `data_talktime`, `type`, `description`) VALUES
('VIPRE02', 179, '28', 0, 2, '2GB', 'Truly Unlimited', 'Unlimited Talktime and 2GB Data for 28 Days Pack'),
('VIPRE04', 155, '24', 0, 1, '1GB', 'Truly Unlimited', 'Unlimited Talktime and 1GB Data for 24 Days Pack'),
('VIPRE05', 459, '84', 0, 6, '6GB', 'Truly Unlimited', 'Unlimited Talktime and 6GB Data for 84 Days Pack'),
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
('VIPRE23', 29, '2', 0, 2, '2GB', 'Data', '2GB Data for 2 Days Pack'),
('VIPRE24', 499, '28', 3, 0, '3GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 3GB/Day Data for 28 Days Pack'),
('VIPRE25', 901, '70', 3, 0, '3GB/Day', 'Disney Hotstar VIP', 'Unlimited Talktime and 3GB/Day Data for 70 Days Pack'),
('VIPRE26', 45, '0 Days', 0, 0, 'NA', 'Entertainment', 'Missed Call Alerts Entertainment Pack for 0 Days'),
('VIPRE27', 66, '28', 0, 0, 'NA', 'ISD', '₹66 ISD Pack for 28 Days'),
('VIPRE28', 50, 'NA', 0, 0, '39.37', 'Talktime', '₹39.37 Talktime Pack'),
('VIPRE29', 141, '1', 0, 0, '₹ 10', 'Plan Voucher', '10 Onnet Night Minutes for 1 Month Pack'),
('VIPRE30', 1799, '365', 0, 24, '24GB', 'Truly Unlimited', 'Unlimited Talktime and 24GB Data for 365 Days Pack'),
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
('VIPRE99', 1999, '250', 2, 0, '1.5GB/Day', 'Truly Unlimited', 'Unlimited Talktime and 1.5GB/Day Data for 250 Days Pack'),
('VIPRE01', 204, '30 days', 500, 0, '₹204 talktime,500MB Data', 'combo', '₹204 Talktime with 500MB Data Combo Pack'),
('VIPRE03', 198, '30 days', 500, 0, '₹198 talktime,500MB Data', 'combo', '₹198 talktime,500MB Data');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
