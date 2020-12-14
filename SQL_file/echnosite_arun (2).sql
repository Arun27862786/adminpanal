-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2019 at 06:45 PM
-- Server version: 10.1.41-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echnosite_arun`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` text,
  `str` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `str`) VALUES
(1, 'sasa', 'agra', 'puru'),
(2, 'ddsafsd', 'fdsfdsf', 'ddsafsd'),
(3, 'manisha', 'soni', 'manisha');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `category`) VALUES
(1, 47, 'AAA'),
(2, 47, 'BBB'),
(3, 47, 'Item2'),
(4, 47, 'Item3'),
(6, 47, 'Item5');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `department_id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(50) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_date` date NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `department_id`, `name`, `email`, `password`, `phone`, `address`, `city`, `state`, `postcode`, `country`, `photo`, `created_date`, `updated_date`, `ip_address`, `timestamp`) VALUES
(108, 8, 'varun kumar', 'varun@admin.com', '$2y$10$Je3rTU0ltf.XSMjoJWFQ5.W06YlgWjQuAD2tnj9M4hCpcgDv8rE/.', '8445082065', 'delhi', 'Agra', 'up', 222210, 'indian', '1562567413_1551524644.png', '1561967119', '0000-00-00', '171.79.25.176', '2019-08-07 12:05:36'),
(121, 4, 'shashi', 'shashibala@iwcnetwork.com', '$2y$10$DgJx/x0ODjuRj07LUnwxCufXruISXAbfwb95bmWXm4Di/rjQym3B6', '8218240605', 'b4-maharani bagh', 'Agra', 'Agra', 282001, 'India', '1565180550_logo (20).png', '1561978591', '0000-00-00', '171.79.25.176', '2019-08-07 12:22:30'),
(123, 6, 'Kapil', 'admin@admin.com', '$2y$10$.Vs27x8f3zfIwUy4ZimiIORhq4FmN8fkbElQqwXyqnT.X/YA/sD7a', '8445082065', 'delhi', 'Agra', 'up', 222211, 'indian', '1562567486_1562142729_pass.jpg', '1561987140', '0000-00-00', '171.79.25.176', '2019-08-07 12:05:49'),
(129, 6, 'vimal', 'vimal@admin.com', '$2y$10$CPGn.d5mANzsRC2ce5kzou7ukcD0AIl73RbTEakFTo0i/Nv5/LxRK', '8445206511', 'Agra ', 'Agra', 'U.P.', 222211, 'indian', '1562570839_1562142729_pass.jpg', '1562069846', '0000-00-00', '171.79.25.176', '2019-08-07 12:07:21'),
(130, 9, 'Pratap', 'pratap@admin.com', '$2y$10$ZKmnHi51xE9awxOQwOVXq.qeVUbUcfbKxNgams4duFgyyqq0tmd0S', '8445082065', 'Maruti estate,Agra', 'Agra', 'up', 222211, 'indian', '1562567547_icons8-inactive-state-208.png', '1562069898', '0000-00-00', '171.79.25.176', '2019-08-07 12:06:48'),
(133, 6, 'kamal', 'kamal@admin.com', '$2y$10$pcu6CogFPZetESuGl6AuCev9FetK/5xk9Jx51LG98JHXnjnxOg3jm', '8445082065', 'Agra ', 'Agra', 'up', 222211, 'indian', '1562567524_icons8-more-208.png', '1562070071', '0000-00-00', '171.79.25.176', '2019-08-07 12:07:35'),
(134, 5, 'rajat', 'rajat@gmail.com', '$2y$10$y0rdVRdCZUjTsyYTh1pBCOEqz2aeOvFDULKOsqLyDEHEtSio4Ie62', '9876543213', 'qsqws', 'agra', 'xyz', 111111, '111111', '1562662275_1551524644.png', '1562231193', '0000-00-00', '171.79.25.176', '2019-08-07 12:06:34'),
(140, 9, 'tarun1', 'tarun1@admin.com', '$2y$10$TAJZ8x5L271kawL4M/.Q5.G2fWnhnctIZ6zHenXuw0zHNhQWRNJV.', '8445082065', 'agra', 'Agra', 'up', 282010, 'indian', '1562333668_1551525073.jpg', '1562333669', '0000-00-00', '171.79.119.184', '2019-08-07 12:06:02'),
(143, 6, 'sdasd', 'adminr@admin.com', '$2y$10$Yxu7Nc0YxprrfRx62JUAFOEadTE1ve5qhgVHSv4fw0k0U73cHneIq', '9876543213', 'delhi', 'Agra', 'up', 222244, 'indian', '1562404776_1551528566.gif', '1562404776', '0000-00-00', '171.79.119.184', '2019-08-07 12:07:11'),
(144, 4, 'Tarun kumar', 'Tarun@admin.com', '$2y$10$CzT07QDU1Q6UHSw0s3.GLOls8FKoJ85qs8yiLNFgYOYz09EnJVrJ.', '8445082065', 'delhi', 'Agra dfsdfsdf', 'up', 222222, 'indian', '1562409862_1551421516.jpg', '1562409862', '0000-00-00', '171.79.119.184', '2019-08-07 12:07:01'),
(150, 6, 'adminqq', 'adminqq@admin.com', '$2y$10$ngYYBbYiNbV84.lkeR.onemldH/LhqlEuV79q9UjD9nSldOlQOPpK', '9876543213', 'Panjab', 'Agra', 'up', 2222, 'indian', '1562421928_1551421516.jpg', '1562421928', '0000-00-00', '171.79.119.184', '2019-08-07 12:08:50'),
(152, 9, 'admiwwwwn', 'admiwwwwn@admin.com', '$2y$10$9w1jH.ON/J1kSVdKYMPbouHNT4tyNKMLXBQgEIuBvqoiGcxtFybgG', '9876543213', 'ZzzZ', 'Agra', 'up', 2222, 'indian', '1562422370_1551524644.png', '1562422370', '0000-00-00', '171.79.119.184', '2019-08-07 12:08:39'),
(153, 4, 'shakshi', 'shakshi@admin.com', '$2y$10$j5wds6ZAIAClfRfh6SFavOksZqJQB3IlyjwM2xNcVq.yZX4xUoEFC', '8954565220', 'qqqqqqqqqqqqqqqqq', 'Agra', 'up', 222211, 'indian', '1562564487_1551528566.gif', '1562564488', '0000-00-00', '171.79.119.184', '2019-08-07 12:08:44'),
(155, 6, 'Rahul Kumar', 'arunkumardhangar2786@gmail.com', '$2y$10$QT23JJmlVVedkQyu8vcFNeEVK68UUlHUMPtEvWWHsrqQWsISwzH7.', '9876543213', 'Panjab', 'NCR', 'up', 222222, 'indian', '1563270068_1551421516.jpg', '1562573388', '0000-00-00', '171.79.119.184', '2019-08-07 12:08:20'),
(161, 8, 'shaksderhi', 'adminpp@admin.com', '$2y$10$SlTIE6AfYRPDg7IBdOHoEenVVUk6zUriWdoNPaCvPVz/2Teghz.oG', '9876543213', 'Panjab', 'Agra', 'up', 222277, 'IN', '1562589037_1551524644.png', '1562589037', '0000-00-00', '171.79.119.184', '2019-08-07 12:08:25'),
(166, 4, 'Vimal Kumar', 'arunkumardangar@gmail.com', '$2y$10$98ZlKu9iwIguVTM7v29LLOjFj/L0Asj/EMBuVo.PbU7lP09HUgky2', '9874563212', 'Agra', 'Agra', 'u.p.', 111111, 'Indian', '1564134448_1551528566.gif', '1564134448', '0000-00-00', '122.180.202.95', '2019-08-07 13:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `department` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_date` date NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `user_id`, `client_id`, `department`, `description`, `thumbnail`, `time_stamp`, `create_date`, `ip_address`) VALUES
(4, 47, 0, 'Machanical Engineering', 'new york', '1563022307_1551525073.jpg', '2019-07-13 12:12:13', '0000-00-00', '122.162.30.139'),
(5, 52, 0, 'Computer Science', 'ssssqsqs', '1563022404_1551524644.png', '2019-07-13 12:53:24', '0000-00-00', '122.162.30.139'),
(6, 67, 0, 'Civil Engineering ', 'qwqwqwqwqwqwqw', '1563022429_logo (12).png', '2019-07-13 12:53:49', '0000-00-00', '122.162.30.139'),
(8, 56, 0, 'Artificial Inteligency', 'wqwwqwqwqw', '1563024498_1551421516.jpg', '2019-07-13 13:28:18', '0000-00-00', '122.162.30.139'),
(9, 63, 0, 'Methametics', 'AAAAAAAAAAAAA', '1563024537_1562591622_1551421516.jpg', '2019-07-13 13:28:57', '0000-00-00', '122.162.30.139');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `project_id` int(100) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `recurring` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `recurring_cycle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notes` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `terms` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `final_amount` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `item_details` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `payment_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `client_id`, `project_id`, `invoice_number`, `recurring`, `date`, `due_date`, `status`, `recurring_cycle`, `notes`, `terms`, `final_amount`, `discount`, `item_details`, `payment_method`, `paid_amount`, `due_amount`, `payment_date`, `create_date`, `time_stamp`, `ip_address`) VALUES
(130, 47, 0, 4, 'INV-107', 'NO', '2019-08-05', '2019-08-05', 'partialy paid', 'monthly', '<p>hgsfghgfhfgh</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 200, 10, '[{\"item_name\":\"Product 5\",\"item_description\":\"dfgdfgdf\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 2\",\"item_description\":\"ukjghk\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', 'Paypal', 50, 150, '2019-08-07T11:02', '1564985069', '2019-08-05 06:04:29', '122.162.19.120'),
(125, 47, 0, 9, 'INV-102', 'NO', '2019-08-04', '2019-08-31', 'paid', 'quaterty', '<p>dhdfghghdg</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 206, 4, '[{\"item_name\":\"Product 2\",\"item_description\":\"sgdfgsd\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 3\",\"item_description\":\"fgsdfgsdfg\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', 'Stripe', 206, 0, '2019-08-02', '1564752544', '2019-08-02 13:29:04', '122.162.19.120'),
(129, 0, 134, 15, 'INV-106', 'YES', '2019-08-03', '2019-08-17', 'partialy paid', 'monthly', '<p>ukukyukyuk</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 200, 10, '[{\"item_name\":\"Product 3\",\"item_description\":\"ghvhdhhh\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 4\",\"item_description\":\"fhdfggh\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', 'Paypal', 100, 100, '2019-08-03', '1564828388', '2019-08-03 10:33:08', '122.162.19.120'),
(123, 47, 0, 7, 'INV-100', 'YES', '2019-08-09', '2019-08-31', 'partialy paid', 'quaterty', '<p>sdfgsdfgdfgfg</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 206, 4, '[{\"item_name\":\"Product 4\",\"item_description\":\"dsdsa\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 3\",\"item_description\":\"mvbnmvbnm\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', 'Paypal', 100, 106, '2019-08-02', '1564749786', '2019-08-02 12:43:06', '122.162.19.120'),
(124, 47, 0, 5, 'INV-101', 'YES', '2019-08-02', '2019-08-25', 'unpaid', 'quaterty', '<p>mhgmfhghnfghng</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 206, 4, '[{\"item_name\":\"Product 4\",\"item_description\":\"ghjj\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 3\",\"item_description\":\"ghjghj\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 206, '', '1564751577', '2019-08-02 13:12:57', '122.162.19.120'),
(128, 0, 123, 13, 'INV-105', 'NO', '2019-08-03', '2019-08-31', 'unpaid', 'monthly', '<p>hfghhgh</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 105, 0, '[{\"item_name\":\"Product 3\",\"item_description\":\"fgdfgdsf\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"\",\"item_description\":\"\",\"item_quantity\":\"1\",\"item_price\":\"\",\"item_tax\":\"\",\"item_total\":\"\"}]', '', 0, 105, '', '1564820738', '2019-08-03 08:25:38', '122.162.19.120'),
(131, 47, 134, 14, 'INV-108', 'NO', '2019-08-05', '2019-08-31', 'unpaid', 'monthly', '<p>dyhjtyjfhjfghjdfghfghdfghfghfghhd</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 285, 30, '[{\"item_name\":\"Product 4\",\"item_description\":\"gffgdfg\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 3\",\"item_description\":\"ghjkghkghjk\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 422\",\"item_description\":\"werewrwer\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 285, '', '1565163371', '2019-08-05 06:08:26', '122.162.36.34'),
(132, 47, 0, 12, 'INV-109', 'NO', '2019-08-05', '2019-08-31', 'unpaid', 'monthly', '<p>yjjfhjfghjfghjhjhg</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 206, 4, '[{\"item_name\":\"Product 3\",\"item_description\":\"ytutyu\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 4\",\"item_description\":\"tyutyu\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 206, '', '1564985377', '2019-08-05 06:09:37', '122.162.19.120'),
(133, 47, 0, 11, 'INV-110', 'NO', '2019-08-05', '2019-08-31', 'unpaid', 'monthly', '<p>fjhfhjghj</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 206, 4, '[{\"item_name\":\"Product 4\",\"item_description\":\"fyjfghj\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 2\",\"item_description\":\"ghjfghj\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 206, '', '1564985447', '2019-08-05 06:10:47', '122.162.19.120'),
(135, 47, 0, 17, 'INV-112', 'NO', '2019-08-06', '2019-08-31', 'unpaid', 'monthly', '<p>cbnmbnmvbnm</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 200, 10, '[{\"item_name\":\"Product 2\",\"item_description\":\"mbvnm\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 4\",\"item_description\":\"bnmbvnm\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 200, '', '1565078645', '2019-08-06 08:04:05', '122.162.36.34'),
(139, 47, 0, 8, 'INV-114', 'NO', '2019-08-07', '2019-08-31', 'unpaid', 'monthly', '<p>hgbnbncb</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 103, 2, '[{\"item_name\":\"Product 2\",\"item_description\":\"fdghgh\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 103, '', '1565157899', '2019-08-07 06:04:59', '122.162.36.34'),
(143, 47, 108, 6, 'INV-118', 'NO', '2019-08-07', '2019-08-24', 'unpaid', 'monthly', '<p>fghghgfghgfh</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 210, 0, '[{\"item_name\":\"Product 422\",\"item_description\":\"sdfsdf\",\"item_quantity\":\"2\",\"item_price\":\"100\",\"item_tax\":\"10\",\"item_total\":\"200\"}]', '', 0, 210, '', '1565273681', '2019-08-07 06:51:49', '171.48.49.26'),
(144, 47, 134, 10, 'INV-119', 'NO', '2019-08-07', '2019-08-31', 'unpaid', 'monthly', '<p>Normal</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 210, 0, '[{\"item_name\":\"Product 422\",\"item_description\":\"fghfghfg\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 5\",\"item_description\":\"gfdsgfdsgsdfg\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 210, '', '1565337762', '2019-08-07 06:52:28', '122.162.247.63'),
(142, 47, 134, 16, 'INV-117', 'NO', '2019-08-07', '2019-08-31', 'partialy paid', 'monthly', '<p>Normal</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 711, 14, '[{\"item_name\":\"Product 23\",\"item_description\":\"cfbgdfghdg\",\"item_quantity\":\"2\",\"item_price\":\"200\",\"item_tax\":\"10\",\"item_total\":\"400\"},{\"item_name\":\"Product 4\",\"item_description\":\"ertertert\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 3\",\"item_description\":\"cvbcvbxc\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"},{\"item_name\":\"Product 4\",\"item_description\":\"gdsfgdsfg\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', 'Paypal', 100, 711, '2019-08-07', '1565273858', '2019-08-07 06:08:37', '171.48.49.26'),
(151, 47, 0, 21, 'INV-121', 'NO', '2019-08-09', '2019-08-31', 'unpaid', 'monthly', '<p>Normal</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 102, 3, '[{\"item_name\":\"Product 5\",\"item_description\":\"this is description\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 102, '', '1565356235', '2019-08-09 13:10:35', '182.64.255.77'),
(150, 47, 0, 18, 'INV-120', 'NO', '2019-08-09', '2019-08-31', 'unpaid', 'monthly', '<p>Normal</p>', '<p>NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</p>', 100, 5, '[{\"item_name\":\"Product 5\",\"item_description\":\"tertert\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_tax\":\"5\",\"item_total\":\"100\"}]', '', 0, 100, '', '1565329196', '2019-08-09 05:39:56', '171.48.49.26');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `department_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `user_id`, `department_id`, `question`, `create_date`, `ip_address`, `time_stamp`) VALUES
(12, 47, 4, 'question', '1563281707', '122.180.195.238', '2019-07-16 12:55:07'),
(13, 47, 5, 'knowledge base', '1563281716', '122.180.195.238', '2019-07-16 12:55:16'),
(14, 47, 6, 'question1', '1563281728', '122.180.195.238', '2019-07-16 12:55:28'),
(15, 47, 8, 'question2', '1563281744', '122.180.195.238', '2019-07-16 12:55:44'),
(16, 47, 9, 'question3', '1563281757', '122.180.195.238', '2019-07-16 12:55:57'),
(17, 47, 6, 'question2', '1563281964', '122.180.195.238', '2019-07-16 12:59:24'),
(19, 48, 4, 'question2', '1563282343', '122.180.195.238', '2019-07-16 13:05:43'),
(20, 47, 5, 'knowledge base', '1563538093', '122.180.195.238', '2019-07-19 12:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `know_reply`
--

CREATE TABLE `know_reply` (
  `id` int(100) NOT NULL,
  `knowledge_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `answer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `know_reply`
--

INSERT INTO `know_reply` (`id`, `knowledge_id`, `user_id`, `client_id`, `answer`, `create_date`, `time_stamp`, `ip_address`) VALUES
(26, 12, 47, 0, '<p>AAA<strong>AAAAAAAAAAA</strong><i><strong>AAAAAAAA</strong></i></p>', '1563281707', '2019-07-16 12:55:07', '122.180.195.238'),
(27, 13, 47, 0, '<p><strong>AAAAAAAAA</strong></p>', '1563281716', '2019-07-16 12:55:16', '122.180.195.238'),
(28, 14, 47, 0, '<p>AAAA</p>', '1563281728', '2019-07-16 12:55:28', '122.180.195.238'),
(29, 15, 47, 0, '<p>AAAAAAAA<strong>AAAAAAAAAAAAAA</strong></p>', '1563281744', '2019-07-16 12:55:44', '122.180.195.238'),
(30, 16, 47, 0, '<p>AAAAAAAAAAAAAAAA<strong>AAAAAAAAAAA</strong></p>', '1563281757', '2019-07-16 12:55:57', '122.180.195.238'),
(31, 16, 0, 134, '&lt;p&gt;sdafasdfsadfsdafsdfdsf&lt;strong&gt;sdfsadfsdafdsfsadf&lt;/strong&gt;&lt;i&gt;&lt;strong&gt;sdfsdf&lt;/strong&gt;&lt;/i&gt;&lt;/p&gt;', '1563281909', '2019-07-16 12:58:29', '122.180.195.238'),
(32, 17, 47, 0, '<p>qqqqqqqqq</p>', '1563281964', '2019-07-16 12:59:24', '122.180.195.238'),
(33, 15, 0, 134, '&lt;p&gt;eeeeeeeeee&lt;/p&gt;', '1563281990', '2019-07-16 12:59:50', '122.180.195.238'),
(34, 15, 0, 134, '&lt;p&gt;eeeeeeeeee&lt;/p&gt;', '1563282014', '2019-07-16 13:00:14', '122.180.195.238'),
(35, 15, 47, 0, '&lt;p&gt;sdfasdfasasdf&lt;strong&gt;asdfasdfasdfdsfd&lt;/strong&gt;&lt;/p&gt;', '1563282038', '2019-07-16 13:00:38', '122.180.195.238'),
(36, 15, 48, 0, '&lt;p&gt;ssadasdasdsdas&lt;strong&gt;dsadasdasdasdsadass&lt;/strong&gt;&lt;i&gt;&lt;strong&gt;dssadasdsadasd&lt;/strong&gt;&lt;/i&gt;&lt;/p&gt;', '1563282135', '2019-07-16 13:02:15', '122.180.195.238'),
(37, 18, 48, 0, '<p>12121212</p>', '1563282330', '2019-07-16 13:05:30', '122.180.195.238'),
(38, 19, 48, 0, '<p>asdasdfsfsdf</p>', '1563282343', '2019-07-16 13:05:43', '122.180.195.238'),
(39, 19, 0, 134, '&lt;p&gt;asdfadfasdfsadf&lt;/p&gt;', '1563282896', '2019-07-16 13:14:56', '122.180.195.238'),
(40, 19, 48, 0, '&lt;p&gt;AAAAAAAAAAAA&lt;/p&gt;', '1563283870', '2019-07-16 13:31:10', '122.180.195.238'),
(41, 19, 48, 0, '&lt;p&gt;aaaxaxa&lt;/p&gt;', '1563285012', '2019-07-16 13:50:12', '122.180.195.238'),
(42, 19, 48, 0, '<p>asdfads</p>', '1563285123', '2019-07-16 13:52:03', '122.180.195.238'),
(43, 19, 47, 0, '<p>asdfadfsadf</p>', '1563285725', '2019-07-16 14:02:05', '122.180.195.238'),
(44, 19, 47, 0, '&lt;p&gt;&lt;strong&gt;AAAAAAAAAA&lt;/strong&gt;&lt;/p&gt;', '1563286992', '2019-07-16 14:23:12', '122.180.195.238'),
(45, 19, 47, 0, '&lt;p&gt;&lt;i&gt;&lt;strong&gt;AAAAAAAQQQQQQQQQQQQ&lt;/strong&gt;&lt;/i&gt;&lt;/p&gt;', '1563287022', '2019-07-16 14:23:42', '122.180.195.238'),
(46, 15, 0, 134, '&lt;ul&gt;&lt;li&gt;sssssss&lt;strong&gt;AAAAA&lt;/strong&gt;&lt;i&gt;&lt;strong&gt;AAA&lt;/strong&gt;&lt;/i&gt;&lt;/li&gt;&lt;/ul&gt;', '1563287212', '2019-07-16 14:26:52', '122.180.195.238'),
(47, 15, 0, 134, '&lt;p&gt;AAAAAAAAAAAAAAA&lt;/p&gt;', '1563287243', '2019-07-16 14:27:23', '122.180.195.238'),
(48, 15, 0, 134, '&lt;figure class=&quot;table&quot;&gt;&lt;table&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;aa&lt;/td&gt;&lt;td&gt;aa&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;aa&lt;/td&gt;&lt;td&gt;aa&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/figure&gt;', '1563287260', '2019-07-16 14:27:40', '122.180.195.238'),
(49, 15, 0, 134, '&lt;p&gt;AAAAAAAAAAAAAAA&lt;/p&gt;', '1563287298', '2019-07-16 14:28:18', '122.180.195.238'),
(50, 20, 47, 0, '<p>aaaaaaaaaaaa</p>', '1563538093', '2019-07-19 12:08:13', '122.180.195.238'),
(51, 20, 47, 0, '&lt;p&gt;gdfg&lt;/p&gt;', '1565169114', '2019-08-07 09:11:54', '122.162.36.34');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `client_id`, `user_email`) VALUES
(1, 134, 'arunkumardhangar2786@gmail.com'),
(2, 134, 'arunkumardhangar2786@gmail.com'),
(3, 134, 'arunkumardhangar2786@gmail.com'),
(4, 123, 'arunkumardhangar2786@gmail.com'),
(5, 123, 'arunkumardhangar2786@gmail.com'),
(6, 166, 'arunkumardhangar2786@gmail.com'),
(7, 166, 'arunkumardhangar2786@gmail.com'),
(8, 166, 'arunkumardhangar2786@gmail.com'),
(9, 166, 'arunkumardhangar2786@gmail.com'),
(15, 166, 'arunkumardhangar2786@gmail.com'),
(22, 166, 'arunkumardhangar2786@gmail.com'),
(20, 166, 'arunkumardhangar2786@gmail.com'),
(21, 166, 'arunkumardhangar2786@gmail.com'),
(18, 166, 'arunkumardhangar2786@gmail.com'),
(23, 166, 'arunkumardhangar2786@gmail.com'),
(24, 166, 'arunkumardhangar2786@gmail.com'),
(25, 166, 'arunkumardhangar2786@gmail.com'),
(26, 166, 'arunkumardhangar2786@gmail.com'),
(27, 166, 'arunkumardhangar2786@gmail.com'),
(28, 166, 'arunkumardhangar2786@gmail.com'),
(29, 166, 'arunkumardhangar2786@gmail.com'),
(30, 166, 'arunkumardhangar2786@gmail.com'),
(31, 166, 'admin@admin.com'),
(32, 166, 'arunkumardhangar2786@gmail.com'),
(33, 166, 'arunkumardhangar2786@gmail.com'),
(34, 166, 'arunkumardhangar2786@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tax` int(100) NOT NULL,
  `created_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `product_name`, `category_id`, `quantity`, `price`, `thumbnail`, `description`, `tax`, `created_date`, `time_stamp`, `ip_address`) VALUES
(1, 47, 'aaa', 2, 1, 200, '1563371636_1551524644.png', 'AAAAAAAAAAA', 0, '1563371636', '2019-07-17 13:53:56', '122.180.195.238'),
(2, 47, 'BBBBBBBB', 1, 1, 400, '1563371717_1551421516.jpg', 'AAAAAAAAAAAAAAAA', 0, '1563371717', '2019-07-17 13:55:17', '122.180.195.238'),
(4, 47, 'text', 2, 1, 600, '1563373924_1562142729_pass.jpg', 'Asdsdfgdsfgdfgdfgfg', 0, '1563373924', '2019-07-17 14:32:04', '122.180.195.238'),
(5, 47, 'Item 2', 2, 1, 500, '1563373992_logo (20).png', 'ergfaesrdesadrfesafgefrgteagtqreretrtre', 0, '1563373992', '2019-07-17 14:33:12', '122.180.195.238'),
(6, 47, 'eqwrewqer', 2, 1, 300, '1563374050_1562591622_1551421516.jpg', '232323', 0, '1563374050', '2019-07-17 14:34:10', '122.180.195.238'),
(7, 47, 'BBBBBBBB', 2, 1, 800, '1563374105_1551524644.png', 'adaSDASDASD', 0, '1563374105', '2019-07-17 14:35:05', '122.180.195.238'),
(8, 47, 'text22', 3, 1, 900, '1563444251_1560758176_1551525073.jpg', 'qwqw11212', 0, '1563444251', '2019-07-18 10:04:11', '122.180.195.238'),
(9, 47, 'text2', 3, 1, 1000, '1563444319_1560758176_1551525073.jpg', 'qwqw11212', 0, '1563444319', '2019-07-18 10:05:19', '122.180.195.238'),
(10, 47, 'Item 3', 1, 1, 100, '1563601823_1551524644.png', 'sdfadfsadf', 0, '1563601823', '2019-07-20 05:50:23', '122.180.195.238');

-- --------------------------------------------------------

--
-- Table structure for table `product_fields`
--

CREATE TABLE `product_fields` (
  `id` int(255) NOT NULL,
  `invoice_id` int(255) NOT NULL,
  `client_id` int(255) NOT NULL,
  `product` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `tax` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_fields`
--

INSERT INTO `product_fields` (`id`, `invoice_id`, `client_id`, `product`, `description`, `quantity`, `price`, `tax`, `total`) VALUES
(117, 63, 123, 'product 3', 'dsfgdgdf', 1, 100, 5, 100),
(120, 65, 129, 'Product 2', 'werrqwe', 1, 100, 5, 100),
(121, 65, 129, 'Product 4', 'rqwrqwerqwer', 1, 100, 3, 100),
(122, 66, 129, 'Product 2', 'werrqwe', 1, 100, 5, 100),
(123, 66, 129, 'Product 4', 'rqwrqwerqwer', 1, 100, 3, 100),
(124, 67, 123, 'reterwt', 'lk;kl;lkj;', 1, 100, 5, 100),
(125, 67, 123, 'Product 4', 'gdsfgfgdf', 1, 100, 19, 100),
(126, 68, 129, 'Product 23', 'sdsadsadas', 1, 100, 19, 100),
(127, 68, 129, 'Product 2 ', 'fhgjfjhjh', 1, 100, 5, 100),
(128, 68, 129, 'Product 4', 'yttyutyutyu', 1, 100, 5, 100),
(129, 73, 130, 'fdsfgdfgdsf', 'dsfgsdfgdsf', 1, 100, 0, 100),
(130, 73, 130, 'fgdfgdf', 'gdfgdfgdfg', 1, 100, 0, 100),
(131, 74, 128, 'Product 2', 'fghfdhg', 1, 100, 5, 101),
(132, 74, 128, 'Product 3', 'hfghfghfgh', 1, 101, 3, 100),
(133, 75, 128, 'Product 2', 'fghfdhg', 1, 100, 5, 101),
(135, 75, 128, 'Product 4', 'fghfghfghfgh', 1, 100, 5, 200),
(139, 77, 129, 'fghfhgfh 3', 'ghghjghjgh', 1, 100, 0, 100),
(142, 78, 129, 'fghfhgfh 3', 'ghghjghjgh', 1, 100, 0, 100),
(143, 78, 129, 'fhghfgh', 'jghjghjg', 1, 100, 0, 100),
(144, 78, 129, 'hfghfgh', 'hjghjghjg', 1, 100, 0, 100),
(146, 79, 129, 'fhghfgh', 'jghjghjg', 1, 100, 0, 100),
(147, 79, 129, 'hfghfgh', 'hjghjghjg', 1, 100, 0, 100),
(150, 80, 129, 'hfghfgh', 'hjghjghjg', 1, 100, 0, 100),
(151, 81, 129, 'fghfhgfh 3', 'ghghjghjgh', 1, 100, 0, 100),
(152, 81, 129, 'fhghfgh', 'jghjghjg', 1, 100, 0, 100),
(153, 81, 129, 'hfghfgh', 'hjghjghjg', 1, 100, 0, 100),
(154, 82, 129, 'fghfhgfh 3', 'ghghjghjgh', 1, 100, 0, 100),
(155, 82, 129, 'fhghfgh', 'jghjghjg', 1, 100, 0, 100),
(156, 82, 129, 'hfghfgh', 'hjghjghjg', 1, 100, 0, 100),
(157, 83, 129, 'fghfhgfh 3', 'ghghjghjgh', 1, 100, 0, 100),
(158, 83, 129, 'fhghfgh', 'jghjghjg', 1, 100, 0, 100),
(159, 83, 129, 'hfghfgh', 'hjghjghjg', 1, 100, 0, 100),
(160, 84, 129, 'fghfhgfh 3', 'ghghjghjgh', 1, 100, 0, 100),
(161, 84, 129, 'fhghfgh', 'jghjghjg', 1, 100, 0, 100),
(162, 84, 129, 'hfghfgh', 'hjghjghjg', 1, 100, 0, 100),
(163, 85, 129, 'Product 4', 'vbnvbnvbnvbn', 1, 100, 5, 100),
(164, 85, 129, 'Product 2', 'ffgdsfgdsfgdsfg', 1, 100, 5, 100),
(165, 85, 129, 'Product 3', 'dfsgsfgfgfg', 1, 100, 5, 100),
(166, 86, 108, 'Product 1', 'khjlhjklkl', 1, 100, 18, 100),
(167, 86, 108, 'Product 2', 'hklhkjlhjkl', 1, 100, 18, 100),
(168, 87, 129, 'Product 2', 'dfgdfgdfsg', 1, 100, 5, 100),
(169, 87, 129, 'Product 3', 'gdhfgh', 1, 100, 5, 100),
(170, 88, 129, 'Product 2', 'dfgdfgdfsg', 1, 100, 5, 1),
(171, 89, 108, 'Product 23', 'dhfghgfhgfh', 1, 100, 5, 100),
(172, 89, 108, 'Product 3', 'sfdgdfsgfg', 1, 100, 3, 100),
(173, 90, 129, 'Product 4', 'asdfsdfsdaf', 1, 100, 5, 100),
(174, 90, 129, 'Product 2', 'sfdfasdf', 1, 100, 3, 100),
(175, 91, 128, 'Product 2', 'l;jlklk;kl;', 1, 100, 5, 100),
(176, 91, 128, 'Product 3', 'kghjkjkj', 1, 100, 5, 100),
(177, 92, 108, 'Product 2', 'ghfghfgh', 1, 100, 5, 100),
(178, 92, 108, 'Product 3', 'fghdfghdfghfd', 1, 100, 5, 100),
(179, 93, 123, 'Product 1', 'dddddddd', 1, 100, 5, 100),
(180, 93, 123, 'Product 2', 'edeg', 1, 100, 5, 100),
(181, 94, 130, 'Product 2', 'bcvbcvbc', 1, 100, 5, 100),
(182, 94, 130, 'Product 3', 'vbxcvbxcvbc', 1, 100, 5, 100),
(183, 94, 130, 'Product 4', 'vbcvbcvbcvb', 1, 100, 5, 100),
(184, 95, 123, 'Product 2', 'fghfghfg', 1, 100, 5, 100),
(185, 95, 123, 'Product 3', 'hfghfdgh', 1, 100, 5, 100),
(186, 96, 108, 'Product 2', 'dfdfgdf', 1, 100, 5, 100),
(187, 96, 108, 'Product 3', 'gdfgdfgds', 1, 100, 5, 100),
(188, 97, 129, 'Product 2', 'AAAAAAAAAA', 1, 100, 5, 100),
(189, 97, 129, 'Product 3', 'BBBBBBBBBB', 1, 100, 5, 100),
(190, 98, 108, 'Product 2', 'cvcvbcvb', 1, 100, 5, 100),
(191, 98, 108, 'Product 3', 'xcbvcvbcvb', 1, 100, 5, 100),
(192, 98, 108, 'Product 4', 'cvbxvbxcv', 1, 100, 5, 100),
(193, 99, 123, 'Product 2', 'ssssssssssss', 1, 100, 5, 100),
(194, 99, 123, 'Product 3', 'swswsw', 1, 100, 3, 100),
(195, 100, 128, 'Product 2', 'AAAAAAAAfsfsdfsdf', 1, 100, 5, 100),
(196, 100, 128, 'Product 3', 'fdfdsfdsfsdf', 1, 100, 5, 100);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `project_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(255) NOT NULL,
  `per_hour` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  `created_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `client_id`, `project_name`, `currency`, `per_hour`, `status`, `created_date`, `time_stamp`, `ip_address`) VALUES
(4, 47, 121, 'MY Project', 'USD', 100, 0, '1564565165', '2019-08-01 06:07:41', '122.162.19.120'),
(6, 47, 108, 'Welcome', 'USD', 434, 1, '1564580983', '2019-08-07 09:53:32', '122.162.19.120'),
(5, 47, 123, 'Project 5', 'STD', 100, 0, '1564573952', '2019-08-01 09:06:45', '122.162.19.120'),
(7, 47, 123, 'website', 'USD', 1000, 1, '1564638595', '2019-08-01 09:49:10', '122.162.19.120'),
(8, 47, 123, 'Project Next for website', 'USD', 100, 0, '1564655601', '2019-08-01 10:52:58', '122.162.19.120'),
(9, 47, 133, 'This is project', 'ALL', 100, 0, '1564656929', '2019-08-01 11:18:03', '122.162.19.120'),
(10, 47, 134, 'Normal project', 'USD', 1000, 1, '1564657462', '2019-08-07 09:13:19', '122.162.19.120'),
(11, 47, 130, 'New project', 'RON', 100, 0, '1564725719', '2019-08-02 06:01:59', '122.162.19.120'),
(12, 47, 121, 'neww', 'AFL', 100, 0, '1564733869', '2019-08-02 08:17:49', '122.162.19.120'),
(16, 0, 134, 'New my project', 'SBD', 0, 0, '1564829281', '2019-08-07 09:53:41', '122.162.19.120'),
(13, 47, 123, 'ertw', 'PHP', 0, 0, '1564744913', '2019-08-02 11:21:53', '122.162.19.120'),
(14, 0, 134, 'test', '', 0, 0, '1564756075', '2019-08-02 14:41:43', '122.162.19.120'),
(15, 0, 134, 'iwcn test 2', 'ALL', 0, 0, '1564756168', '2019-08-02 14:29:28', '122.162.19.120'),
(19, 47, 140, 'New my pp', 'AFL', 0, 0, '1565180887', '2019-08-07 12:28:07', '122.162.36.34'),
(17, 47, 155, 'AAAAAAAAAA', 'ALL', 0, 0, '1565078422', '2019-08-06 08:00:22', '122.162.36.34'),
(18, 47, 166, 'New my project', 'ALL', 0, 0, '1565078511', '2019-08-06 08:01:51', '122.162.36.34'),
(20, 47, 130, 'Homiopathic store', 'ALL', 0, 0, '1565249874', '2019-08-08 07:37:54', '171.48.49.26'),
(21, 47, 130, 'asdasdsads', 'ALL', 0, 0, '1565249904', '2019-08-08 07:38:24', '171.48.49.26');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `report_file` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `client_id`, `description`, `report_file`, `timestamp`) VALUES
(59, 127, 'sadsadasd', '1562163315_1551421516.jpg', '2019-07-03 14:15:15'),
(71, 146, 'xvbxcvb', '1562591622_1551421516.jpg', '2019-07-08 13:13:42'),
(72, 146, 'dfasddsfdsf', '1562592755_.~lock.Oct_2018_Monthly_Reprt (5).xlsx#', '2019-07-08 13:32:35'),
(61, 108, 'ereqwrqwer', '1565177651_1565177590_1565177518_abc.xlsx', '2019-08-07 11:34:11'),
(35, 133, 'dfhfdhtyty', '1562153075_crmadmin.sql', '2019-07-03 11:24:35'),
(73, 150, 'ssqsqs', '1565177611_1565177478_1562139989_test.xlsx', '2019-08-07 11:33:31'),
(37, 121, 'ertyertyert', '1562153087_1562139989_test (1).xlsx', '2019-07-03 11:24:47'),
(68, 123, 'sadsadf', '1565177590_1565177518_abc.xlsx', '2019-08-07 11:33:10'),
(70, 146, 'fdsdfdsafadsf', '1562591203_.~lock.Oct_2018_Monthly_Reprt (6).xlsx#', '2019-07-08 13:06:43'),
(54, 124, 'asadsad', '1562162379_.~lock.Foo  double(foo_double) (1).csv#', '2019-07-03 13:59:39'),
(55, 121, 'ddddddddd', '1565177518_abc.xlsx', '2019-08-07 11:31:58'),
(56, 113, 'sadadsads', '1562162887_.~lock.08-2018 To 10-2018_Cumulative_Report (2).xlsx#', '2019-07-03 14:08:07'),
(57, 108, 'dsaadsads', '1565177571_1565177543_1565177478_1562139989_test.xlsx', '2019-08-07 11:32:51'),
(58, 123, 'sdsdas', '1562163304_1551530840 (1).png', '2019-07-03 14:15:04'),
(60, 108, 'sssssss', '1562164133_1551524644.png', '2019-07-03 14:28:53'),
(62, 108, 'ereqwrqwer', '1565177543_1565177478_1562139989_test.xlsx', '2019-08-07 11:32:24'),
(63, 126, 'gfhgfgfhfghfgh', '1562227655_1562142729_pass.jpg', '2019-07-04 08:07:35'),
(64, 134, 'trwrwerwewerwefwefe', '1565177478_1562139989_test.xlsx', '2019-08-07 11:31:18'),
(69, 146, 'dfthyrtyrty', '1562590601_.~lock.payroll_cpf (3).csv#', '2019-07-08 12:56:41'),
(67, 121, 'vimal', '1562423302_1551525073.jpg', '2019-07-06 14:28:22'),
(76, 155, 'sdsdsdsds', '1565183719_1560758176_1551525073.jpg', '2019-08-07 13:15:19'),
(77, 155, 'hdfghfgh', '1565183915_1562139989_test (2).xlsx', '2019-08-07 13:18:35'),
(138, 129, 'uiyh', '1565343339_1565185474_1565177478_1562139989_test.xlsx', '2019-08-09 09:35:39'),
(136, 155, 'sadas', '1565343272_1565330914_1562153087_1562139989_test (1) (1).xlsx', '2019-08-09 09:34:32'),
(137, 155, 'sdasd', '1565343295_1565185474_1565177478_1562139989_test.xlsx', '2019-08-09 09:34:55'),
(81, 155, 'tyutyutyu', '1565184398_1551530840.png', '2019-08-07 13:26:38'),
(82, 108, 'dsfvdsfgsdfg', '1565185089_1551530840 (1) (1).png', '2019-08-07 13:38:09'),
(83, 155, 'fgfgdfgdf', '1565185105_1562135976_1551530840.png', '2019-08-07 13:38:25'),
(84, 108, 'sdfsdfsdf', '1565185183_1562139989_test.xlsx', '2019-08-07 13:39:43'),
(85, 166, 'vbnvbn', '1565185218_1562139989_test.xlsx', '2019-08-07 13:40:18'),
(86, 155, 'dsfvdsfgsdfgsdsfdf', '1565185348_1562139989_test.xlsx', '2019-08-07 13:42:28'),
(87, 155, 'fgdsfgsdfg', '1565185474_1565177478_1562139989_test.xlsx', '2019-08-07 13:44:34'),
(102, 155, 'dfghbsfghsdf', '1565338768_1562139989_test.xlsx', '2019-08-09 08:19:28'),
(101, 155, 'adsada', '1565338693_1562139989_test.xlsx', '2019-08-09 08:18:13'),
(96, 155, 'dfgdgh', '1565330914_1562153087_1562139989_test (1) (1).xlsx', '2019-08-09 06:08:34'),
(98, 155, 'h', '1565332801_1562153087_1562139989_test (1) (1).xlsx', '2019-08-09 06:40:01'),
(106, 155, 'This is Description', '1565340046_icons8-line-208.png', '2019-08-09 08:40:46'),
(100, 155, 'hgjghghj', '1565333122_1551525073.jpg', '2019-08-09 06:45:22'),
(103, 155, 'Description', '1565339126_1562139989_test (1).xlsx', '2019-08-09 08:25:26'),
(104, 155, 'Description', '1565339237_logo (12).png', '2019-08-09 08:27:17'),
(105, 155, 'This is Description', '1565339305_icons8-line-208.png', '2019-08-09 08:28:25'),
(107, 155, 'Description', '1565340065_logo (12).png', '2019-08-09 08:41:05'),
(108, 108, 'this sfgdagdfgdsfg', '1565340136_1562135976_1551530840.html', '2019-08-09 08:42:16'),
(109, 155, 'dfgsdfg', '1565340145_1562135976_1551530840.png', '2019-08-09 08:42:25'),
(110, 155, 'dsasdasdsad', '1565340344_1551421516.jpg', '2019-08-09 08:45:44'),
(118, 155, 'fghfghfdh', '1565340794_1562139989_test.xlsx', '2019-08-09 08:53:14'),
(120, 155, 'dvfdsvxc', '1565340870_1562153087_1562139989_test (1) (1).xlsx', '2019-08-09 08:54:30'),
(125, 134, 'qwerfwqer', '1565341090_1562135976_1551530840.png', '2019-08-09 08:58:10'),
(128, 155, 'dfghdfgh', '1565342590_1565177478_1562139989_test.xlsx', '2019-08-09 09:23:10'),
(130, 108, 'fghgfh', '1565342638_1562135976_1551530840.html', '2019-08-09 09:23:58'),
(132, 155, 'cvbcxvbcv', '1565342702_1562153075_crmadmin.sql', '2019-08-09 09:25:02'),
(133, 129, 'gsdfgsdfgsdfgsdfg', '1565342727_1562139989_test (2).xlsx', '2019-08-09 09:25:27'),
(139, 108, 'thisss', '1565343388_1562139989_test (1).xlsx', '2019-08-09 09:36:28'),
(135, 155, 'fghfghgfh', '1565343016_router (3).php', '2019-08-09 09:30:16'),
(140, 155, 'wqwwwqe', '1565343398_1562139989_test (2).xlsx', '2019-08-09 09:36:38'),
(141, 155, 'fgdfgsd', '1565343473_1565185474_1565177478_1562139989_test.xlsx', '2019-08-09 09:37:53'),
(142, 155, 'dsfgdsaf', '1565343812_1551530840 (1) (1) (1) (1) (1) (1) (1).png', '2019-08-09 09:43:32'),
(143, 155, 'dfghfg', '1565344031_1551528566.gif', '2019-08-09 09:47:11'),
(144, 155, 'dfgdsfg', '1565344316_1551530840.png', '2019-08-09 09:51:56'),
(145, 155, 'gfgh', '1565344450_1551525073.jpg', '2019-08-09 09:54:10'),
(146, 155, 'fgh', '1565344603_1551524644.png', '2019-08-09 09:56:43'),
(147, 155, 'dudgh', '1565344801_1565338768_1562139989_test.xlsx', '2019-08-09 10:00:01'),
(148, 155, 'dfgdagfds', '1565344972_1551530840 (1).png', '2019-08-09 10:02:52'),
(149, 108, 'dfrgdfg', '1565345015_1562139989_test (2).xlsx', '2019-08-09 10:03:35'),
(150, 155, 'sfsdfsdf', '1565345025_1562139989_test (1).xlsx', '2019-08-09 10:03:45'),
(151, 155, 'AAAAAAA', '1565345191_1551528566.gif', '2019-08-09 10:06:31'),
(152, 155, 'dfgdfg', '1565345314_1565338768_1562139989_test.xlsx', '2019-08-09 10:08:34'),
(153, 155, 'sdsadfd', '1565345332_1565330914_1562153087_1562139989_test (1) (1).xlsx', '2019-08-09 10:08:52'),
(154, 155, 'dsfghdfg', '1565345694_1551524644.png', '2019-08-09 10:14:54'),
(155, 155, 'ghjghjghj', '1565345788_1551530840 (1) (1).png', '2019-08-09 10:16:28'),
(156, 155, 'hl;kl;kl;', '1565345831_1551525073.jpg', '2019-08-09 10:17:11'),
(157, 155, 'dsfgdsfgfdg', '1565345863_1551530840.png', '2019-08-09 10:17:43'),
(158, 155, 'fdgsdfg', '1565346020_1551530840 (1) (1).png', '2019-08-09 10:20:20'),
(159, 155, 'saasd', '1565346441_1562139989_test.xlsx', '2019-08-09 10:27:21'),
(160, 155, 'sfgdsfgdfg', '1565346613_1551530840.png', '2019-08-09 10:30:13'),
(161, 155, 'sfgdsfgdfg', '1565346677_1551530840.png', '2019-08-09 10:31:17'),
(162, 155, 'sfgdsfgdfg', '1565346758_1551530840.png', '2019-08-09 10:32:38'),
(163, 155, 'sfgdsfgdfg', '1565346775_1551530840.png', '2019-08-09 10:32:55'),
(164, 155, 'sddsfg', '1565347118_1551530840 (1) (1) (1) (1) (1) (1) (1).png', '2019-08-09 10:38:38'),
(165, 155, 'sfgsdfg', '1565347335_1551421516.jpg', '2019-08-09 10:42:15'),
(166, 155, 'l;jlk;kl', '1565347399_1565185474_1565177478_1562139989_test.xlsx', '2019-08-09 10:43:19'),
(167, 155, 'dghdg', '1565347644_1551421516.jpg', '2019-08-09 10:47:24'),
(168, 155, 'dfgdsfg', '1565347698_1562139989_test (2).xlsx', '2019-08-09 10:48:18'),
(169, 155, 'hkhjkjhkjh', '1565347757_1551421516.jpg', '2019-08-09 10:49:17'),
(170, 155, 'AAAAA', '1565347842_1551421516.jpg', '2019-08-09 10:50:42'),
(171, 155, 'dfgsfgsgfg', '1565347954_1551530840 (1).png', '2019-08-09 10:52:34'),
(172, 155, 'fdsgdf', '1565348012_1551525073.jpg', '2019-08-09 10:53:32'),
(173, 155, 'AAAAAA', '1565348070_1551530840.png', '2019-08-09 10:54:30'),
(174, 155, 'fgsdfgfsdg', '1565348170_1551530840 (1).png', '2019-08-09 10:56:10'),
(175, 155, 'fghdf', '1565348184_1551524644.png', '2019-08-09 10:56:24'),
(176, 155, 'fghdf', '1565348218_1551524644.png', '2019-08-09 10:56:58'),
(177, 155, 'Massage', '1565348253_1562139989_test (2).xlsx', '2019-08-09 10:57:33'),
(178, 155, 'New File', '1565348360_1551530840.png', '2019-08-09 10:59:20'),
(179, 155, 'fhgfdhfg', '1565348683_1551421516.jpg', '2019-08-09 11:04:43'),
(180, 155, 'Messangar', '1565348870_1551530840 (1) (1).png', '2019-08-09 11:07:50'),
(181, 155, 'AAAAAA', '1565349080_1551530840.png', '2019-08-09 11:11:20'),
(182, 155, 'AAAAAAAAAA', '1565349411_1551525073.jpg', '2019-08-09 11:16:51'),
(183, 155, 'AAAAASSSS', '1565349464_1551525073.jpg', '2019-08-09 11:17:44'),
(184, 130, 'AAAAbv', '1565349535_1551530840 (1) (1).png', '2019-08-09 11:18:55'),
(185, 155, 'Abvb', '1565349631_1551530840 (1) (1) (1) (1) (1) (1).png', '2019-08-09 11:20:31'),
(186, 155, 'Abvbvb', '1565349820_1551530840.png', '2019-08-09 11:23:40'),
(187, 155, 'Atyu', '1565349891_1551530840.png', '2019-08-09 11:24:51'),
(188, 155, 'Acxd', '1565349958_1560758176_1551525073.jpg', '2019-08-09 11:25:58'),
(189, 155, 'Atul', '1565350025_1551525073.jpg', '2019-08-09 11:27:05'),
(190, 155, 'Aman', '1565350096_1551524644.png', '2019-08-09 11:28:16'),
(191, 155, 'Message', '1565350298_1551530840 (1).png', '2019-08-09 11:31:38'),
(192, 155, 'Rahul', '1565350535_1551421516.jpg', '2019-08-09 11:35:35'),
(193, 155, 'rone', '1565350697_1551525073.jpg', '2019-08-09 11:38:17'),
(194, 155, 'AAAA', '1565350962_1551525073.jpg', '2019-08-09 11:42:42'),
(195, 155, 'message', '1565351082_1551528566.gif', '2019-08-09 11:44:42'),
(198, 155, 'BBBBBBBBBB', '1565351709_1551530840 (1).png', '2019-08-09 11:55:09'),
(197, 155, 'Amar', '1565351531_1551421516.jpg', '2019-08-09 11:52:11'),
(202, 155, 'Atul', '1565352796_1551528566.gif', '2019-08-09 12:13:16'),
(201, 155, 'Aaa', '1565351995_1551530840 (1) (1) (1) (1) (1) (1).png', '2019-08-09 11:59:55'),
(203, 155, 'AAA', '1565353670_1551528566.gif', '2019-08-09 12:27:50'),
(204, 155, 'zxzxz', '1565353828_1551528566.gif', '2019-08-09 12:30:28'),
(211, 155, 'Aevf', '1565354695_1551528566.gif', '2019-08-09 12:44:55'),
(206, 155, 'Aaaa', '1565353993_1551528566.gif', '2019-08-09 12:33:13'),
(212, 108, 'Aaaa', '1565354772_1551528566.gif', '2019-08-09 12:46:12'),
(213, 155, 'AAA', '1565354831_1551421516.jpg', '2019-08-09 12:47:11'),
(214, 155, 'Amar', '1565354925_1551530840 (1).png', '2019-08-09 12:48:45'),
(215, 155, 'AAqwq', '1565354976_1562139989_test.xlsx', '2019-08-09 12:49:36'),
(216, 155, 'sdf', '1565355105_1551530840 (1) (1).png', '2019-08-09 12:51:45'),
(217, 108, 'fgdfdfsdf', '1565355129_1562139989_test (2).xlsx', '2019-08-09 12:52:09'),
(218, 155, 'Asasas', '1565355436_1562139989_test.xlsx', '2019-08-09 12:57:16'),
(219, 155, 'Artyu', '1565355487_1565340344_1551421516.jpg', '2019-08-09 12:58:07'),
(220, 155, 'AAA', '1565355634_1551530840 (1).png', '2019-08-09 13:00:34'),
(221, 155, 'sadf', '1565355753_1562139989_test.xlsx', '2019-08-09 13:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'name of company',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timezone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cookie_expire` int(10) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdflogo` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'logo for pdf and print',
  `date_format` tinyint(1) NOT NULL COMMENT '1 is for dd/mm/yy 2 is for mm/dd/yy 3 is for full date',
  `create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `website`, `address`, `country`, `city`, `state`, `zip`, `telephone1`, `telephone2`, `timezone`, `currency_symbol`, `cookie_expire`, `logo`, `pdflogo`, `date_format`, `create_date`, `ip_address`, `time_stamp`) VALUES
(1, 'IWCN', 'contact@iwcnetwork.com', 'www.iwcnetwork.com', 'Agra U.P.', 'IN', 'Agra', 'UP', '282010', '9876543212', '9876543210', 'Asia/Kolkata', 'INR', 30, '1548413585.png', '1562827438.gif', 3, '', '', '2019-08-07 14:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(100) NOT NULL,
  `tax_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `tax_name`, `value`) VALUES
(1, 'NONE', 0),
(2, 'GST', 5),
(3, 'SGST', 3),
(4, 'VAT5%', 5),
(5, '1GST', 18),
(6, 'VAT19%', 19),
(7, 'TAX1', 34),
(8, 'CGST', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `department_id` int(100) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `priority` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `client_id`, `department_id`, `subject`, `priority`, `status`, `timestamp`, `update_time`, `ip_address`) VALUES
(176, 130, 5, 'heading', 'high', 'open', '2019-07-13 07:50:17', '2019-07-13 13:29:57', '122.162.30.139'),
(178, 108, 8, 'subject', 'high', 'closed', '2019-07-13 07:55:01', '2019-07-13 13:30:05', '122.162.30.139'),
(179, 129, 9, 'vimal', 'low', 'closed', '2019-07-13 07:56:14', '2019-07-13 13:30:08', '122.162.30.139'),
(181, 123, 8, 'This subject12', 'medium', 'open', '2019-07-13 08:43:52', '2019-07-26 12:14:06', '122.162.30.139'),
(183, 108, 4, 'heading', 'high', 'open', '2019-07-13 09:15:16', '2019-07-13 13:30:41', '122.162.30.139'),
(184, 108, 5, 'heading44', 'high', 'open', '2019-07-13 10:22:04', '2019-07-26 12:12:48', '122.162.30.139'),
(185, 108, 8, 'Welcome2', 'low', 'closed', '2019-07-13 10:23:11', '2019-07-26 12:12:26', '122.162.30.139'),
(186, 108, 5, 'Welcome', 'high', 'open', '2019-07-13 10:23:15', '2019-07-26 12:12:20', '122.162.30.139'),
(187, 134, 4, 'Welcome234', 'high', 'open', '2019-07-13 11:10:10', '2019-07-26 12:12:59', '122.162.30.139'),
(188, 134, 8, 'Welcome2', 'low', 'closed', '2019-07-13 11:26:10', '2019-07-26 12:12:36', '122.162.30.139'),
(189, 123, 5, 'heading', 'medium', 'open', '2019-07-13 13:11:58', '0000-00-00 00:00:00', '122.162.30.139'),
(195, 123, 6, 'Welcome33', 'high', 'closed', '2019-07-15 11:21:17', '2019-07-26 12:12:43', '122.162.30.139'),
(191, 134, 4, 'Subject99', 'low', 'open', '2019-07-13 13:50:28', '2019-07-26 12:12:01', '122.162.30.139'),
(193, 134, 5, 'This 2 subject1', 'medium', 'open', '2019-07-15 06:22:10', '2019-07-26 12:14:17', '122.162.30.139'),
(194, 134, 8, 'heading123', 'low', 'open', '2019-07-15 06:22:30', '2019-07-15 06:26:14', '122.162.30.139'),
(203, 166, 4, 'sdrgsdfg', 'high', 'open', '2019-08-06 06:17:25', '0000-00-00 00:00:00', '122.162.36.34'),
(204, 166, 4, 'sdrgsdfg', 'high', 'open', '2019-08-06 06:17:49', '0000-00-00 00:00:00', '122.162.36.34'),
(205, 166, 4, 'subject1', 'high', 'open', '2019-08-06 06:20:46', '0000-00-00 00:00:00', '122.162.36.34'),
(202, 166, 4, 'subject', 'high', 'open', '2019-08-06 06:15:22', '0000-00-00 00:00:00', '122.162.36.34');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_reply`
--

CREATE TABLE `ticket_reply` (
  `id` int(100) NOT NULL,
  `ticket_id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_reply`
--

INSERT INTO `ticket_reply` (`id`, `ticket_id`, `client_id`, `user_id`, `description`, `create_date`, `ip_address`, `time_stamp`) VALUES
(152, 172, 123, 0, 'dfdfgdfgfdg', '1563003245', '122.162.30.139', '2019-07-13 07:34:05'),
(166, 181, 123, 0, 'this is description2', '1563007432', '122.162.30.139', '2019-07-13 08:43:52'),
(169, 181, 0, 47, 'fdgadfgdf', '1563008459', '122.162.30.139', '2019-07-13 09:00:59'),
(170, 179, 0, 47, 'dsfgsdfgdfgdf Reply', '1563008511', '122.162.30.139', '2019-07-13 09:01:51'),
(161, 176, 0, 47, 'qqqqqqqqqqqqqqqq111111', '1563004217', '122.162.30.139', '2019-07-13 07:50:17'),
(163, 178, 0, 47, 'this is description', '1563004501', '122.162.30.139', '2019-07-13 07:55:01'),
(164, 179, 0, 47, 'this is description', '1563004574', '122.162.30.139', '2019-07-13 07:56:14'),
(172, 178, 108, 0, 'sadsasdsdssad', '1563008714', '122.162.30.139', '2019-07-13 09:05:14'),
(173, 178, 0, 47, 'gsfdgdsfgddd', '1563008777', '122.162.30.139', '2019-07-13 09:06:17'),
(174, 178, 108, 0, 'chbncvbn', '1563008801', '122.162.30.139', '2019-07-13 09:06:41'),
(175, 183, 0, 47, 'dfddfd', '1563009316', '122.162.30.139', '2019-07-13 09:15:16'),
(176, 183, 108, 0, 'dsfdfdf', '1563009331', '122.162.30.139', '2019-07-13 09:15:31'),
(177, 183, 0, 48, 'sdsdsdds', '1563009643', '122.162.30.139', '2019-07-13 09:20:43'),
(178, 181, 0, 48, 'errererwrwr', '1563011420', '122.162.30.139', '2019-07-13 09:50:20'),
(179, 183, 0, 53, 'qswsqsqs', '1563011636', '122.162.30.139', '2019-07-13 09:53:56'),
(180, 183, 108, 0, 'fgsgdsgfgfd', '1563012332', '122.162.30.139', '2019-07-13 10:05:32'),
(181, 184, 0, 53, 'asqsasqas', '1563013324', '122.162.30.139', '2019-07-13 10:22:04'),
(182, 185, 108, 0, 'asdasdadsad', '1563013391', '122.162.30.139', '2019-07-13 10:23:11'),
(183, 186, 108, 0, 'sadasdasd', '1563013395', '122.162.30.139', '2019-07-13 10:23:15'),
(184, 185, 0, 53, 'dsfdffdsffd', '1563013635', '122.162.30.139', '2019-07-13 10:27:15'),
(185, 185, 0, 47, 'sdsdsa', '1563014459', '122.162.30.139', '2019-07-13 10:40:59'),
(186, 187, 134, 0, 'qqqqq', '1563016210', '122.162.30.139', '2019-07-13 11:10:10'),
(187, 188, 134, 0, 'wwwwwwwww', '1563017170', '122.162.30.139', '2019-07-13 11:26:10'),
(188, 188, 134, 0, 'ddsdsd', '1563017444', '122.162.30.139', '2019-07-13 11:30:44'),
(189, 188, 0, 47, 'xvxcvsfgsfsd', '1563017478', '122.162.30.139', '2019-07-13 11:31:18'),
(190, 189, 0, 47, 'ssasasaas', '1563023518', '122.162.30.139', '2019-07-13 13:11:58'),
(200, 195, 0, 47, 'wwwww', '1563189677', '122.162.30.139', '2019-07-15 11:21:17'),
(192, 191, 134, 0, 'aaaa', '1563025828', '122.162.30.139', '2019-07-13 13:50:28'),
(194, 193, 134, 0, 'aaaaaaaaa', '1563171730', '122.162.30.139', '2019-07-15 06:22:10'),
(195, 194, 0, 47, 'aaaaaaa', '1563171750', '122.162.30.139', '2019-07-15 06:22:30'),
(196, 194, 134, 0, 'sqsaqs', '1563171773', '122.162.30.139', '2019-07-15 06:22:53'),
(197, 194, 134, 0, 'sqsaqs', '1563171802', '122.162.30.139', '2019-07-15 06:23:22'),
(198, 194, 0, 47, 'fdgfgdfgfdggfgf', '1563171839', '122.162.30.139', '2019-07-15 06:23:59'),
(199, 194, 134, 0, 'sqsaqs', '1563171974', '122.162.30.139', '2019-07-15 06:26:14'),
(202, 195, 123, 0, 'dwdwdw', '1563191221', '122.162.30.139', '2019-07-15 11:47:01'),
(214, 202, 166, 0, 'AAAAAAAAAAAAA', '1565072122', '122.162.36.34', '2019-08-06 06:15:22'),
(215, 203, 166, 0, 'dfgdsfg', '1565072245', '122.162.36.34', '2019-08-06 06:17:25'),
(216, 204, 166, 0, 'dfgdsfg', '1565072269', '122.162.36.34', '2019-08-06 06:17:49'),
(217, 205, 166, 0, 'edqswdasdasd', '1565072446', '122.162.36.34', '2019-08-06 06:20:46'),
(218, 202, 0, 47, 'dsfgfgdsg', '1565165816', '122.162.36.34', '2019-08-07 08:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'id of user who is login.',
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_photo_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '0 for admin 1 for staff',
  `create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `random` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'encrypt id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_photo_file`, `email`, `password`, `phone`, `address`, `type`, `create_date`, `ip_address`, `timestamp`, `random`) VALUES
(47, 'Amar', 'kumar', '1562585517_1551421516.jpg', 'admin@admin.com', '$2y$10$5.O0hC582nPignzUYg/wSePi2jycCgMZHlMcdc7vqkj/TkCIF7rN.', '8954565220', 'delhi', 0, '1562413188', '171.79.119.184', '2019-07-08 11:31:57', '0'),
(52, 'gimmy', 'kumar', '1562573010_1551524644.png', 'gimmy@admin.com', '$2y$10$TExvcnMWPSWekNPVBk6oXeofmvonq1NsDSv2acU2Q1bTzpQazuwAG', '8954565220', 'delhi', 0, '1562573010', '171.79.119.184', '2019-07-26 10:44:22', '0'),
(55, 'Amar ', 'kumar', '1562574784_1551524644.png', 'manishasosssni@iwcnetwork.com', '$2y$10$FArBlYGEl6BeTdw1UAKaKOmFtrksaphJb1hesa0BrdGS4Tfh4onye', '8445082065', 'Maruti estate,Agra', 0, '1562573333', '171.79.119.184', '2019-07-08 08:33:04', '0'),
(56, 'shakshi', 'kumar', '1562671834_1551421516.jpg', 'admin@admin.comqqq', '$2y$10$J3z3yiasbeRPyQ7zcZHz8OwNsDlS5zvYmyjys/BFwbU1wJ5PeLTdW', '9876543213', 'Panjab', 0, '1562671835', '122.162.239.36', '2019-07-09 11:30:35', '0'),
(63, 'shakshi', 'kumar', '1562676021_1551524644.png', 'adminfrr@admin.com', '$2y$10$/zTiUd3lkStDBh.r5cw1U.A/qrDAPjOrgL0wVKhOemJD8nOLbW3gy', '9876543213', 'Panjab', 0, '1562676021', '122.162.239.36', '2019-07-09 12:40:21', '0'),
(67, 'Arun', 'Kumar Dhangar', '1564127281_1562662862_1551421516.jpg', 'arunkumardhangar2786@gmail.com', '$2y$10$b7MtUjOytnXY02C2DkoyjenSipA4bU/phxZIYvwfKVdSfZHqMTshq', '8445082065', 'Agra', 1, '1564127281', '122.180.202.95', '2019-07-26 10:39:30', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `know_reply`
--
ALTER TABLE `know_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_fields`
--
ALTER TABLE `product_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `know_reply`
--
ALTER TABLE `know_reply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_fields`
--
ALTER TABLE `product_fields`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of user who is login.', AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
