-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 08:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regnum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'niloy', 'admin@gmail.com', '12345', '2021-03-04 08:30:01', '2021-03-04 08:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Niloy', 'ewu.niloy.roy@gmail.com', 'discuss3', 'gmj,', '2021-03-03 01:10:54', '2021-03-03 01:10:54'),
(2, 'rubel', 'rubel@gmail.com', 'axle', 'fggg89', '2021-03-03 01:16:23', '2021-03-03 01:16:23'),
(3, 'Niloy7', 'royniloy14@gmail.com', 'smart parking', 'hhgjhk', '2021-03-03 01:32:10', '2021-03-03 01:32:10'),
(4, 'asif', 'ewu.niloy.roy@gmail.com', 'discuss3', 'it is not a', '2021-03-03 01:37:47', '2021-03-03 01:37:47');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `date`, `image`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'Manikgonj signning ceremony', 'November 5, 2020', '1613935723.jpg', 'http://127.0.0.1:8000/gallery/mj_signing', '2021-02-21 13:28:43', '2021-02-21 13:38:35'),
(2, 'Signning ceremony of Axle load control station at Sitakund', 'November 5, 2020', '1613936431.jpg', 'http://127.0.0.1:8000/gallery/axleload_signing', '2021-02-21 13:40:31', '2021-02-21 13:40:31'),
(3, 'Sitakunda Signning ceremony', 'November 5, 2020', '1613936480.jpg', 'http://127.0.0.1:8000/gallery/sitakund_signing', '2021-02-21 13:41:21', '2021-02-21 13:41:21'),
(4, 'Opening ceremony by video conference system from ministry of Road communication and Bridge', 'November 5, 2020', '1613936529.jpg', 'http://127.0.0.1:8000/gallery/opening_signing', '2021-02-21 13:42:09', '2021-02-21 13:42:09');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_02_17_150108_create_slider_categories_table', 1),
(8, '2021_02_17_172631_create_sliders_table', 2),
(10, '2021_02_21_170456_create_galleries_table', 3),
(13, '2021_02_22_073220_create_regnumarchitectures_table', 4),
(14, '2021_02_22_093124_create_portfolios_table', 4),
(16, '2021_02_24_045754_create_our_projects_table', 5),
(19, '2021_02_25_105932_create_regnum_i_t_testomonials_table', 6),
(22, '2021_02_25_105909_create_regnum_i_t_services_table', 8),
(25, '2021_02_25_105540_create_regnum_i_t_portfolios_table', 9),
(28, '2021_02_27_073614_create_regnum_i_t_contactuses_table', 10),
(29, '2021_02_27_074123_create_contactuses_table', 10),
(30, '2021_03_04_072200_create_admins_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssub_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kf_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kf_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kf_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `category`, `image`, `sub_image`, `ssub_image`, `kf_title`, `kf_image`, `kf_description`, `created_at`, `updated_at`) VALUES
(10, 'Axle Load Control System', '1614236770.jpg', NULL, NULL, 'WIM SYSTEM', '1614236770.jpg', '‘Our WIM Systems provides highly accurate weighing data of vehicles essential for pavement management as the damage by over-loaded trucks to the pavement is exponential as 10% increase in weight results in 40% increase in pavement damage.', '2021-02-25 01:06:10', '2021-02-25 01:11:59'),
(11, 'Axle Load Control System', '', NULL, NULL, 'SSWIM SYSTEM', '1614237201.jpg', '‘RRL’s Slow Speed Weigh-in-Motion (SSWIM) System is a high accuracy low speed weighing approach ideally suited for commercial fleet axle weight monitoring and axle compliance.', '2021-02-25 01:13:21', '2021-02-25 02:29:47'),
(12, 'Axle Load Control System', '', NULL, NULL, 'HSWIM SYSTEM', '1614237253.jpg', '‘RRL has installed a fully functional WIM system (for demonstration) at Batholi, Manikganj. The system was installed in 2008 and has been working without any fault with an average vehicle weight accuracy recorded at 99%. High Speed Weigh-in-Motion System (HSWIM).', '2021-02-25 01:14:13', '2021-02-25 02:30:05'),
(13, 'Axle Load Control System', '', NULL, NULL, 'SENSORS LOOP', '1614237294.jpg', '‘HSWIM (High Speed Weigh In Motion) including traffic sensor loop which will accurately detect car position and helps to identify vehicle class.', '2021-02-25 01:14:54', '2021-02-25 02:30:18'),
(14, 'Toll Management System', '1614246270.jpg', '1614246270.jpg', NULL, NULL, NULL, NULL, '2021-02-25 03:44:30', '2021-02-25 03:44:30'),
(15, 'Smart Parking Solution', '1614249038.jpg', '1614249038.jpg', '1614249038.png', NULL, NULL, NULL, '2021-02-25 04:30:38', '2021-02-25 04:30:38');

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagetext` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `image`, `imagetext`, `created_at`, `updated_at`) VALUES
(1, 'BENI BAZAR CANCER HOSPITAL IN SYLHET', '1614013592.jpg', 'beani bazar', '2021-02-22 16:56:24', '2021-02-22 11:06:32'),
(2, 'EXCELSLOR SYLHET', '1614013664.jpg', 'A.K.KHAN GROUP', '2021-02-22 11:07:44', '2021-02-22 11:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `regnumarchitectures`
--

CREATE TABLE `regnumarchitectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regnumarchitectures`
--

INSERT INTO `regnumarchitectures` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Regnum Architecture', 'Regnum Architects is an architect consultancy based in the Dhaka area. We provide all kinds of services related to the planning and design of a building, including serving as supervisors and coordinators during the construction process to make sure your design and standards are executed sufficiently and efficiently. When you think about constructing or updating your home, office or any purposeful structure, it is essential to get expert advice on best utilizing the space you have. Not only does the building need to have a proper design that ensures smooth functionality, the aesthetic aspects of the building need to also suit your taste.', '1613988037.png', '2021-02-22 04:00:38', '2021-02-22 04:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `regnum_i_t_contactuses`
--

CREATE TABLE `regnum_i_t_contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regnum_i_t_contactuses`
--

INSERT INTO `regnum_i_t_contactuses` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Niloy7', 'royniloy14@gmail.com', 'discuss3', 'wddfg', '2021-03-03 01:44:59', '2021-03-03 01:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `regnum_i_t_portfolios`
--

CREATE TABLE `regnum_i_t_portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `butn_data_filter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_filter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagetitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regnum_i_t_portfolios`
--

INSERT INTO `regnum_i_t_portfolios` (`id`, `button`, `butn_data_filter`, `category`, `class`, `data_filter`, `image`, `imagetitle`, `created_at`, `updated_at`) VALUES
(1, 'ALL', '*', 'Toll & Axle', 'filter-active', 'filter-toll', '1614365751.jpg', 'Regnum Toll Software', '2021-02-26 12:55:51', '2021-02-26 12:55:51'),
(2, 'Website', '.filter-web', 'Toll & Axle', NULL, 'filter-toll', '1614366410.png', 'Regnum Parking Solution', '2021-02-26 13:06:51', '2021-02-26 13:29:59'),
(3, 'Toll & Axle', '.filter-toll', 'Toll & Axle', NULL, 'filter-toll', '1614366472.png', 'Regnum Toll App', '2021-02-26 13:07:53', '2021-02-26 13:30:11'),
(4, 'Others', '.filter-other', 'Toll & Axle', NULL, 'filter-toll', '1614366530.jpg', 'HSWIM', '2021-02-26 13:08:50', '2021-02-26 13:30:36'),
(5, NULL, NULL, 'Toll & Axle', NULL, 'filter-toll', '1614366566.jpg', 'WIM SYSTEM', '2021-02-26 13:09:26', '2021-02-26 13:09:26'),
(6, NULL, NULL, 'Toll & Axle', NULL, 'filter-toll', '1614366618.jpg', 'SSWIM-SYSTEM', '2021-02-26 13:10:18', '2021-02-26 13:10:18'),
(7, NULL, NULL, 'Toll & Axle', NULL, 'filter-toll', '1614366672.jpg', 'Traffic-Sensor', '2021-02-26 13:11:12', '2021-02-26 13:11:12'),
(8, NULL, NULL, 'Toll & Axle', NULL, 'filter-toll', '1614366729.jpg', 'Operation-Terminal', '2021-02-26 13:12:09', '2021-02-26 13:12:09'),
(9, NULL, NULL, 'Toll & Axle', NULL, 'filter-toll', '1614366777.jpg', 'Camera-of-HSWIM', '2021-02-26 13:12:57', '2021-02-26 13:12:57'),
(10, NULL, NULL, 'Website', NULL, 'filter-web', '1614366890.png', 'Custom Truck', '2021-02-26 13:14:50', '2021-02-26 13:14:50'),
(11, NULL, NULL, 'Website', NULL, 'filter-web', '1614366930.png', 'Happy Home Chef', '2021-02-26 13:15:30', '2021-02-26 13:15:30'),
(12, NULL, NULL, 'Website', NULL, 'filter-web', '1614366969.png', 'Tuff Coconut', '2021-02-26 13:16:09', '2021-02-26 13:16:09'),
(13, NULL, NULL, 'Website', NULL, 'filter-web', '1614367036.png', 'Davids Computer Repairs', '2021-02-26 13:17:16', '2021-02-26 13:17:16'),
(14, NULL, NULL, 'Website', NULL, 'filter-web', '1614367116.png', 'Bargainbarrelhire', '2021-02-26 13:18:36', '2021-02-26 13:18:36'),
(15, NULL, NULL, 'Website', NULL, 'filter-web', '1614367155.png', 'Lamb Care', '2021-02-26 13:19:15', '2021-02-26 13:19:15'),
(16, NULL, NULL, 'Others', NULL, 'filter-other', '1614367238.jpg', 'Fingerprint and Face Detector', '2021-02-26 13:20:39', '2021-02-26 13:20:39'),
(17, NULL, NULL, 'Others', NULL, 'filter-other', '1614367312.jpg', 'Automated vechile Scanning System', '2021-02-26 13:21:52', '2021-02-26 13:21:52'),
(18, NULL, NULL, 'Others', NULL, 'filter-other', '1614367363.jpg', 'Parking solution', '2021-02-26 13:22:43', '2021-02-26 13:22:43'),
(19, NULL, NULL, 'Others', NULL, 'filter-other', '1614367426.jpg', 'Car parking Solution', '2021-02-26 13:23:47', '2021-02-26 13:23:47'),
(20, NULL, NULL, 'Others', NULL, 'filter-other', '1614367471.jpg', 'Fingerprint and Face Detector', '2021-02-26 13:24:31', '2021-02-26 13:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `regnum_i_t_services`
--

CREATE TABLE `regnum_i_t_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regnum_i_t_services`
--

INSERT INTO `regnum_i_t_services` (`id`, `title`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'fal fa-caret-circle-right', 'Our web development team looks beyond the visual effect of the website and takes other factors into consideration such as the user-friendliness of the website, ease of maintenance and adhering to the best practices and website development standards. we make sure that the website serves and meets its main objectives.', '2021-02-26 08:20:24', '2021-02-26 08:20:24'),
(2, 'Graphic Design', 'fal fa-columns', 'We know the necessity of graphic design to represent a company among the customers or consumers. We provide creative, excellent and innovative design ideas and perform our work with full responsibility and dedication.', '2021-02-26 08:21:16', '2021-02-26 08:22:24'),
(3, 'Software Development', 'fal fa-file-alt', 'Explore the software idea and perform market analysis, and based on that define the software concept and strategy.Implementing the software as per the detailed design.', '2021-02-26 08:22:03', '2021-02-26 08:22:03'),
(4, 'Android Development', 'fal fa-clock', 'Our Android Development team looks beyond the visual effect of the website and takes other factors into consideration such as the user-friendliness of the apps, ease of maintenance and adhering to the best practices and apps development standards. we make sure that the apps serves and meets its main objectives.', '2021-02-26 08:23:40', '2021-02-26 08:23:40'),
(5, 'Hardware Solution', 'fal fa-line-columns', 'We know the necessity of Hardware Solution to represent a company among the customers or consumers. We provide creative, excellent and innovative design ideas and perform our work with full responsibility and dedication.', '2021-02-26 08:24:41', '2021-02-26 08:24:41'),
(6, 'Digital Marketing', 'fal fa-users', 'Explore the Digital Marketing idea and perform market analysis, and based on that define the Digital Marketing concept and strategy.Implementing the website as per the detailed Digital Marketing.', '2021-02-26 08:25:38', '2021-02-26 08:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `regnum_i_t_testomonials`
--

CREATE TABLE `regnum_i_t_testomonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regnum_i_t_testomonials`
--

INSERT INTO `regnum_i_t_testomonials` (`id`, `image`, `title`, `subtitle`, `description`, `created_at`, `updated_at`) VALUES
(1, '1614284820.jpg', 'Saul Goodman', 'Ceo & Founder', 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2021-02-25 14:27:01', '2021-02-25 14:27:01'),
(3, '1614285094.jpg', 'Sara Wilsson', 'Designer', 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2021-02-25 14:31:34', '2021-02-25 14:31:34'),
(4, '1614285163.jpg', 'Jena Karlis', 'Store Owner', 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2021-02-25 14:32:43', '2021-02-25 14:32:43'),
(5, '1614285222.jpg', 'Matt Brandon', 'Freelencer', 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2021-02-25 14:33:43', '2021-02-25 14:33:43'),
(6, '1614285285.jpg', 'Jhon Larson', 'Entrepreneur', 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2021-02-25 14:34:45', '2021-02-25 14:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `description`, `category`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Axle Load Control System', '1613676003.jpg', '‘REGNUM’ AR Dynamic Axle Weighing Scales enable both static and dynamic weighing of vehicles.System is capable of easily handling even the busiest weighing traffic', 'solution', 1, '2021-02-18 13:20:03', '2021-02-18 13:20:03'),
(2, 'Toll Management System', '1613676049.jpg', 'The core of our Toll Management System (TMS), AVC validates the toll collector and provides the management and audit for better monitoring and controls.Regnum Resource Limited “Toll Management Solutions” is one of the best toll management systems available today', 'solution', 2, '2021-02-18 13:20:49', '2021-02-18 13:20:49'),
(3, 'Smart Parking Solutions', '1613676098.jpg', 'All Our automatic parking management systems are comprehensive and cost effective. Our range of parking control systems includes first-class parking management system (PMS)', 'solution', 3, '2021-02-18 13:21:38', '2021-02-18 13:21:38'),
(4, 'Regnum Architecture', '1613676137.jpg', 'Regnum Architects is an architect consultancy based in the Dhaka area. We provide all kinds of services related to the planning and design of a building, including serving as supervisors and coordinators during the construction process to make sure your design and standards are executed sufficiently and efficiently.', 'solution', 4, '2021-02-18 13:22:17', '2021-02-18 13:22:17'),
(5, 'Regnum IT Limited', '1613676177.jpg', 'Regnum IT is a sister concern of Regnum Resource Ltd and Sony Chocolate Industries. REGNUM IT started the journey during the year 2010. We are well reputed and internationally recognized.', 'solution', 5, '2021-02-18 13:22:57', '2021-02-18 13:22:57'),
(6, NULL, '1613676620.jpg', NULL, 'partner', 1, '2021-02-18 13:30:20', '2021-02-18 13:31:12'),
(7, NULL, '1613676699.jpg', NULL, 'partner', 2, '2021-02-18 13:31:39', '2021-02-18 13:31:39'),
(8, NULL, '1613676721.jpg', NULL, 'partner', 3, '2021-02-18 13:32:01', '2021-02-18 13:32:01'),
(9, NULL, '1613676761.jpg', NULL, 'partner', 4, '2021-02-18 13:32:41', '2021-02-18 13:32:41'),
(11, NULL, '1613676960.jpg', NULL, 'partner', 5, '2021-02-18 13:36:00', '2021-02-18 13:36:00'),
(12, NULL, '1613677338.jpg', NULL, 'certificate', 1, '2021-02-18 13:42:18', '2021-02-18 13:42:18'),
(13, NULL, '1613677365.jpg', NULL, 'certificate', 2, '2021-02-18 13:42:45', '2021-02-18 13:42:45'),
(14, NULL, '1613677381.jpg', NULL, 'certificate', 3, '2021-02-18 13:43:01', '2021-02-18 13:43:01'),
(15, NULL, '1613677395.jpg', NULL, 'certificate', 4, '2021-02-18 13:43:15', '2021-02-18 13:43:15'),
(16, NULL, '1613677411.jpg', NULL, 'certificate', 5, '2021-02-18 13:43:32', '2021-02-18 13:43:32'),
(17, NULL, '1613677426.jpg', NULL, 'certificate', 6, '2021-02-18 13:43:47', '2021-02-18 13:43:47'),
(18, NULL, '1613677445.jpg', NULL, 'certificate', 7, '2021-02-18 13:44:06', '2021-02-18 13:44:06'),
(19, NULL, '1613677460.jpg', NULL, 'certificate', 8, '2021-02-18 13:44:20', '2021-02-18 13:44:20'),
(23, 'Axle Load Control System', '1613680755.PNG', 'With Latest Technology and device Regnum Resource are controlling about 98% over loaded vehical all around Bangladesh.', 'Top_slider', 1, '2021-02-18 14:39:16', '2021-02-18 14:39:16'),
(24, 'Smart Toll Management System', '1613681496.jpg', 'Installed Smart Toll Management Software with Electronic Toll Collection (ETC) at Charsindur, Narsingdi', 'Top_slider', 2, '2021-02-18 14:51:36', '2021-02-18 14:51:36'),
(25, 'Biggest ITS Solution Provider', '1613681730.jpg', 'With Latest Technology and device Regnum Resource are controlling about 98% over loaded vehicel all around Bangladesh.', 'Top_slider', 3, '2021-02-18 14:55:30', '2021-02-18 14:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `slider_categories`
--

CREATE TABLE `slider_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_categories`
--

INSERT INTO `slider_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Top_slider', '2021-02-17 16:08:29', '2021-02-17 16:08:29'),
(2, 'solution', '2021-02-17 10:38:37', '2021-02-17 10:38:37'),
(3, 'certificate', '2021-02-17 10:40:54', '2021-02-17 10:40:54'),
(4, 'partner', '2021-02-17 10:43:44', '2021-02-17 10:43:44');

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
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regnumarchitectures`
--
ALTER TABLE `regnumarchitectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regnum_i_t_contactuses`
--
ALTER TABLE `regnum_i_t_contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regnum_i_t_portfolios`
--
ALTER TABLE `regnum_i_t_portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regnum_i_t_services`
--
ALTER TABLE `regnum_i_t_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regnum_i_t_testomonials`
--
ALTER TABLE `regnum_i_t_testomonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_categories`
--
ALTER TABLE `slider_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regnumarchitectures`
--
ALTER TABLE `regnumarchitectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regnum_i_t_contactuses`
--
ALTER TABLE `regnum_i_t_contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regnum_i_t_portfolios`
--
ALTER TABLE `regnum_i_t_portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `regnum_i_t_services`
--
ALTER TABLE `regnum_i_t_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regnum_i_t_testomonials`
--
ALTER TABLE `regnum_i_t_testomonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `slider_categories`
--
ALTER TABLE `slider_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
