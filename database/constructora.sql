-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2024 a las 02:48:31
-- Versión del servidor: 11.2.2-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `constructora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`company_id`, `name`, `phone`, `contact_name`, `contact_email`, `created_at`, `updated_at`) VALUES
(1, 'CONTRACTOR, INC', '(618)985-7850', 'Dan Schamerhorn', 'merhorn@earsnel.com', '2024-04-13 19:10:40', '2024-04-29 14:51:27'),
(3, 'CONTRACTOR TWO , INC', '(653)289-6532', 'Dan Smith', 'dan@gmail.com', '2024-04-24 04:23:31', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company_contact`
--

CREATE TABLE `company_contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `company_contact`
--

INSERT INTO `company_contact` (`contact_id`, `name`, `email`, `phone`, `company_id`) VALUES
(1, 'Dan Schamerhorn', 'merhorn@earsnel.com', '(618)985-7850', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_tracking`
--

CREATE TABLE `data_tracking` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `station_number` varchar(255) DEFAULT NULL,
  `measured_by` varchar(255) DEFAULT NULL,
  `conc_vendor` varchar(255) DEFAULT NULL,
  `crew_lead` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `other_materials` text DEFAULT NULL,
  `total_conc_used` float(8,2) DEFAULT NULL,
  `total_labor` float(8,2) DEFAULT NULL,
  `total_stamps` float(8,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `inspector_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_tracking_item`
--

CREATE TABLE `data_tracking_item` (
  `id` int(11) NOT NULL,
  `quantity` float(8,2) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL,
  `data_tracking_id` int(11) DEFAULT NULL,
  `project_item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equation`
--

CREATE TABLE `equation` (
  `equation_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `equation` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equation`
--

INSERT INTO `equation` (`equation_id`, `description`, `equation`, `status`) VALUES
(1, 'SW, 4 IN, SY', '(x*4)/36', 1),
(2, 'SW, 4 IN, SF', '(x*4)/324', 1),
(3, 'SW 6 IN, SF', '(x*6)/25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `function`
--

CREATE TABLE `function` (
  `function_id` int(11) NOT NULL,
  `url` varchar(50) DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `function`
--

INSERT INTO `function` (`function_id`, `url`, `description`) VALUES
(1, 'home', 'Home'),
(2, 'rol', 'Roles'),
(3, 'users', 'Users'),
(4, 'log', 'Logs'),
(5, 'unit', 'Unit of Measurement'),
(6, 'item', 'Items'),
(7, 'inspectors', 'Inspectors'),
(8, 'company', 'Companies'),
(9, 'projects', 'Projects'),
(10, 'data_tracking', 'Data Tracking'),
(11, 'invoice', 'Invoices'),
(12, 'notification', 'Notifications'),
(13, 'equation', 'Equations');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inspector`
--

CREATE TABLE `inspector` (
  `inspector_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inspector`
--

INSERT INTO `inspector` (`inspector_id`, `name`, `phone`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Magill', '(678)558-2565', 'gill@arersnl.com', 1, '2024-04-13 00:03:19', '2024-04-13 00:03:50'),
(3, 'Marcel Curbelo Carmona', '(349)995-0162', 'cyborgmnk@gmail.com', 1, '2024-05-15 21:57:30', NULL),
(4, 'Cristián Gwinner', '(025)940-5185', 'cgwinner@canteras.cl', 1, '2024-05-18 16:08:15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `number` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `number`, `start_date`, `end_date`, `notes`, `created_at`, `updated_at`, `project_id`) VALUES
(3, '1', '2024-04-01', '2024-04-30', 'dsds fsdfsdf', '2024-04-23 04:21:25', '2024-04-23 19:01:16', 1),
(4, '2', '2024-03-01', '2024-03-31', 'dsf sdfdsf sdfsdfsdf', '2024-04-23 19:36:18', NULL, 1),
(5, '3', '2024-02-01', '2024-02-29', 'dfdf sdfsdf sdf sdf sdf sdf', '2024-04-23 19:40:22', NULL, 1),
(6, '4', '2024-01-01', '2024-01-31', 'fd dfg df gdfg dfg fdgdfg df gdfg dfg', '2024-04-23 19:40:44', NULL, 1),
(7, '5', '2024-04-01', '2024-04-30', 'fgg dg fdgdf g', '2024-04-24 04:21:24', '2024-04-24 16:59:59', 2),
(8, '6', '2024-04-01', '2024-04-30', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '2024-04-24 04:24:52', '2024-05-08 23:49:36', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice_item`
--

CREATE TABLE `invoice_item` (
  `id` int(11) NOT NULL,
  `quantity` float(8,2) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `invoice_item`
--

INSERT INTO `invoice_item` (`id`, `quantity`, `price`, `invoice_id`, `item_id`) VALUES
(12, 5.00, 1500.00, 3, 19),
(13, 6.00, 29.00, 3, 1),
(14, 3.00, 700.00, 3, 8),
(15, 5.00, 29.00, 3, 1),
(16, 5.00, 2100.00, 3, 16),
(17, 50.00, 70.00, 4, 2),
(18, 5.00, 700.00, 4, 8),
(19, 159.00, 47.18, 4, 17),
(20, 130.00, 16.50, 4, 6),
(21, 25.00, 16.50, 5, 6),
(22, 12.00, 700.00, 5, 8),
(23, 2.00, 2100.00, 5, 16),
(24, 15.00, 150.00, 5, 20),
(25, 25.00, 16.50, 6, 7),
(26, 20.00, 30.00, 6, 14),
(27, 10.00, 70.00, 6, 12),
(28, 22.00, 150.00, 6, 20),
(29, 50.00, 100.00, 7, 13),
(30, 15.00, 16.50, 7, 6),
(31, 100.00, 16.50, 8, 6),
(32, 20.00, 58.00, 8, 4),
(33, 1000.00, 58.00, 8, 4),
(34, 100.00, 150.00, 7, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL,
  `yield_calculation` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `equation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`item_id`, `description`, `price`, `yield_calculation`, `status`, `created_at`, `updated_at`, `unit_id`, `equation_id`) VALUES
(1, 'CONC MEDIAN 4IN', 29.00, NULL, 1, '2024-04-12 20:18:17', NULL, 1, NULL),
(2, 'CONC MEDIAN 6IN', 70.00, NULL, 1, '2024-04-12 20:18:40', NULL, 1, NULL),
(3, 'CONCRETE V GUTTER', 25.00, NULL, 1, '2024-04-12 20:19:00', NULL, 2, NULL),
(4, 'CONC VALLEY GUTTER 6IN', 58.00, NULL, 1, '2024-04-12 20:19:26', NULL, 1, NULL),
(5, 'CONC VALLEY GUTTER 8IN', 77.00, NULL, 1, '2024-04-12 20:19:51', NULL, 1, NULL),
(6, 'CONC CURB & GUTTEER 8INX30IN TP2', 16.50, NULL, 1, '2024-04-12 20:20:29', NULL, 2, NULL),
(7, 'CONC CURB & GUTTEER 8INX30IN TP7', 16.50, NULL, 1, '2024-04-12 20:22:07', NULL, 2, NULL),
(8, 'CLASS B CONCRETE', 700.00, NULL, 1, '2024-04-12 20:22:31', NULL, 3, NULL),
(9, 'CLASS B CONCRETE, INCL REINF STEEL', 0.00, NULL, 1, '2024-04-12 20:23:08', NULL, 3, NULL),
(10, 'CLASS B CONC, BASE OR PVMT WIDENING', 253.00, NULL, 1, '2024-04-12 20:23:35', NULL, 3, NULL),
(11, 'BAR REINF. STEEL ', 0.00, NULL, 1, '2024-04-12 20:23:52', NULL, 4, NULL),
(12, 'CONC DRIVEWAY 8IN', 70.00, NULL, 1, '2024-04-12 20:24:09', NULL, 1, NULL),
(13, 'CONC SLOPE DRAIN ', 100.00, NULL, 1, '2024-04-12 20:24:29', NULL, 1, NULL),
(14, 'CONC SIDEWALK 4IN', 30.00, NULL, 1, '2024-04-12 20:25:08', NULL, 1, NULL),
(15, 'CONC SIDEWALK 8IN', 63.00, NULL, 1, '2024-04-12 20:25:30', NULL, 1, NULL),
(16, 'CONC SPILLWAY TP3', 2100.00, 'none', 1, '2024-04-12 20:25:50', '2024-05-12 19:18:34', 5, NULL),
(17, 'PLAIN CONC DITCH PAVING', 47.18, 'equation', 1, '2024-04-12 20:26:54', '2024-05-12 19:18:15', 1, 2),
(18, 'EXTRA CONCRETE', 208.00, 'equation', 1, '2024-04-12 20:27:17', '2024-05-12 19:18:05', 3, 1),
(19, 'EXTRA LABOR', 1500.00, 'same', 1, '2024-04-12 20:27:37', '2024-05-12 19:17:54', 6, NULL),
(20, 'Cubic Yards of Concrete', 150.00, 'none', 1, '2024-04-12 20:28:15', '2024-05-12 19:17:47', 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `operation` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`log_id`, `operation`, `category`, `description`, `ip`, `created_at`, `user_id`) VALUES
(2, 'Update', 'Rol', 'The rol is modified: Administrator', '::1', '2024-04-12 17:15:24', 1),
(3, 'Update', 'Rol', 'The rol is modified: User', '::1', '2024-04-12 17:15:29', 1),
(4, 'Update', 'Rol', 'The rol is modified: User', '::1', '2024-04-12 17:15:39', 1),
(5, 'Update', 'User', 'The user is modified: Administrator Concrete', '::1', '2024-04-12 18:37:27', 1),
(6, 'Add', 'Unit', 'The unit is added: CU', '::1', '2024-04-12 19:46:36', 1),
(7, 'Update', 'Unit', 'The unit is modified: CU', '::1', '2024-04-12 19:46:41', 1),
(8, 'Delete', 'Unit', 'The unit is deleted: CU', '::1', '2024-04-12 19:46:45', 1),
(9, 'Add', 'Item', 'The item is added: CONC MEDIAN 4IN', '::1', '2024-04-12 20:18:17', 1),
(10, 'Add', 'Item', 'The item is added: CONC MEDIAN 6IN', '::1', '2024-04-12 20:18:40', 1),
(11, 'Add', 'Item', 'The item is added: CONCRETE V GUTTER', '::1', '2024-04-12 20:19:00', 1),
(12, 'Add', 'Item', 'The item is added: CONC VALLEY GUTTER 6IN', '::1', '2024-04-12 20:19:26', 1),
(13, 'Add', 'Item', 'The item is added: CONC VALLEY GUTTER 8IN', '::1', '2024-04-12 20:19:51', 1),
(14, 'Add', 'Item', 'The item is added: CONC CURB & GUTTEER 8INX30IN TP2', '::1', '2024-04-12 20:20:29', 1),
(15, 'Add', 'Item', 'The item is added: CONC CURB & GUTTEER 8INX30IN TP7', '::1', '2024-04-12 20:22:07', 1),
(16, 'Add', 'Item', 'The item is added: CLASS B CONCRETE', '::1', '2024-04-12 20:22:31', 1),
(17, 'Add', 'Item', 'The item is added: CLASS B CONCRETE, INCL REINF STEEL', '::1', '2024-04-12 20:23:08', 1),
(18, 'Add', 'Item', 'The item is added: CLASS B CONC, BASE OR PVMT WIDENING', '::1', '2024-04-12 20:23:35', 1),
(19, 'Add', 'Item', 'The item is added: BAR REINF. STEEL ', '::1', '2024-04-12 20:23:52', 1),
(20, 'Add', 'Item', 'The item is added: CONC DRIVEWAY 8IN', '::1', '2024-04-12 20:24:09', 1),
(21, 'Add', 'Item', 'The item is added: CONC SLOPE DRAIN ', '::1', '2024-04-12 20:24:29', 1),
(22, 'Add', 'Item', 'The item is added: CONC SIDEWALK 4IN', '::1', '2024-04-12 20:25:08', 1),
(23, 'Add', 'Item', 'The item is added: CONC SIDEWALK 8IN', '::1', '2024-04-12 20:25:30', 1),
(24, 'Add', 'Item', 'The item is added: CONC SPILLWAY TP3', '::1', '2024-04-12 20:25:50', 1),
(25, 'Add', 'Item', 'The item is added: PLAIN CONC DITCH PAVING', '::1', '2024-04-12 20:26:54', 1),
(26, 'Add', 'Item', 'The item is added: EXTRA CONCRETE', '::1', '2024-04-12 20:27:17', 1),
(27, 'Add', 'Item', 'The item is added: EXTRA LABOR', '::1', '2024-04-12 20:27:37', 1),
(28, 'Add', 'Item', 'The item is added: Cubic Yards of Concrete', '::1', '2024-04-12 20:28:15', 1),
(29, 'Add', 'Inspector', 'The inspector is added: Carlos Magill', '::1', '2024-04-13 00:03:19', 1),
(30, 'Update', 'Inspector', 'The inspector is modified: Carlos Magill', '::1', '2024-04-13 00:03:44', 1),
(31, 'Update', 'Inspector', 'The inspector is modified: Carlos Magill', '::1', '2024-04-13 00:03:50', 1),
(32, 'Add', 'Contractor', 'The contractor is added: CONTRACTOR, INC', '::1', '2024-04-13 19:10:41', 1),
(33, 'Update', 'Contractor', 'The contractor is modified: CONTRACTOR, INC', '::1', '2024-04-13 19:16:11', 1),
(34, 'Update', 'Contractor', 'The contractor is modified: CONTRACTOR, INC', '::1', '2024-04-13 19:54:24', 1),
(35, 'Add', 'Contractor', 'The contractor is added: Disrupsoft', '::1', '2024-04-13 23:00:10', 1),
(36, 'Delete', 'Contractor', 'The contractor is deleted: Disrupsoft', '::1', '2024-04-13 23:00:20', 1),
(37, 'Update', 'Item', 'The item is modified: Cubic Yards of Concrete', '::1', '2024-04-14 17:54:52', 1),
(38, 'Add', 'Project', 'The project is added: FL COUNTY', '::1', '2024-04-14 20:24:53', 1),
(39, 'Add', 'Project Item Details', 'The item is add: PLAIN CONC DITCH PAVING', '::1', '2024-04-14 21:55:05', 1),
(40, 'Update', 'Project Item Details', 'The item is modified: PLAIN CONC DITCH PAVING', '::1', '2024-04-14 22:15:53', 1),
(41, 'Add', 'Project Item Details', 'The item is add: CLASS B CONC, BASE OR PVMT WIDENING', '::1', '2024-04-14 22:21:23', 1),
(42, 'Delete', 'Item Project', 'The item details project is deleted: CLASS B CONC, BASE OR PVMT WIDENING', '::1', '2024-04-14 22:21:30', 1),
(43, 'Add', 'Project Item Details', 'The item is add: CLASS B CONCRETE', '::1', '2024-04-16 18:38:12', 1),
(44, 'Delete', 'Item Project', 'The item details project is deleted: CLASS B CONCRETE', '::1', '2024-04-16 18:39:12', 1),
(45, 'Add', 'Project Item Details', 'The item is add: CLASS B CONCRETE', '::1', '2024-04-16 18:39:28', 1),
(46, 'Update', 'Project Item Details', 'The item is modified: CLASS B CONCRETE', '::1', '2024-04-16 18:39:38', 1),
(47, 'Delete', 'Item Project', 'The item details project is deleted: CLASS B CONCRETE', '::1', '2024-04-16 18:39:42', 1),
(48, 'Add', 'Project Item Details', 'The item is add: CLASS B CONCRETE', '::1', '2024-04-16 18:39:48', 1),
(49, 'Add', 'Project Item Details', 'The item is add: CONC MEDIAN 4IN', '::1', '2024-04-16 18:44:17', 1),
(50, 'Add', 'Project Item Details', 'The item is add: CONC MEDIAN 4IN', '::1', '2024-04-16 18:44:29', 1),
(51, 'Add', 'Project Item Details', 'The item is add: CONC SPILLWAY TP3', '::1', '2024-04-16 18:44:39', 1),
(52, 'Add', 'Project Item Details', 'The item is add: EXTRA LABOR', '::1', '2024-04-16 18:48:15', 1),
(53, 'Add', 'Invoice', 'The invoice #1 is added', '::1', '2024-04-23 02:39:04', 1),
(54, 'Delete', 'Invoice', 'The invoice #1 is deleted', '::1', '2024-04-23 02:41:16', 1),
(55, 'Add', 'Invoice', 'The invoice #1 is added', '::1', '2024-04-23 04:14:51', 1),
(56, 'Delete', 'Invoice', 'The invoice #1 is deleted', '::1', '2024-04-23 04:19:45', 1),
(57, 'Add', 'Invoice', 'The invoice #1 is added', '::1', '2024-04-23 04:21:25', 1),
(58, 'Update', 'Invoice', 'The invoice #1 is modified', '::1', '2024-04-23 04:21:35', 1),
(59, 'Update', 'Invoice', 'The invoice #1 is modified', '::1', '2024-04-23 17:43:33', 1),
(60, 'Update', 'Invoice', 'The invoice #1 is modified', '::1', '2024-04-23 19:01:16', 1),
(61, 'Add', 'Project Item Details', 'The item is add: CLASS B CONCRETE', '::1', '2024-04-23 19:35:31', 1),
(62, 'Add', 'Project Item Details', 'The item is add: CONC MEDIAN 6IN', '::1', '2024-04-23 19:35:45', 1),
(63, 'Add', 'Invoice', 'The invoice #2 is added', '::1', '2024-04-23 19:36:18', 1),
(64, 'Add', 'Project Item Details', 'The item is add: CONC CURB & GUTTEER 8INX30IN TP2', '::1', '2024-04-23 19:37:31', 1),
(65, 'Add', 'Project Item Details', 'The item is add: CLASS B CONCRETE', '::1', '2024-04-23 19:37:44', 1),
(66, 'Add', 'Project Item Details', 'The item is add: CONC SPILLWAY TP3', '::1', '2024-04-23 19:37:55', 1),
(67, 'Add', 'Project Item Details', 'The item is add: Cubic Yards of Concrete', '::1', '2024-04-23 19:38:09', 1),
(68, 'Update', 'Project Item Details', 'The item is modified: Cubic Yards of Concrete', '::1', '2024-04-23 19:38:20', 1),
(69, 'Add', 'Project Item Details', 'The item is add: CONC CURB & GUTTEER 8INX30IN TP7', '::1', '2024-04-23 19:38:51', 1),
(70, 'Add', 'Project Item Details', 'The item is add: CONC SIDEWALK 4IN', '::1', '2024-04-23 19:39:02', 1),
(71, 'Add', 'Project Item Details', 'The item is add: CONC DRIVEWAY 8IN', '::1', '2024-04-23 19:39:19', 1),
(72, 'Add', 'Project Item Details', 'The item is add: Cubic Yards of Concrete', '::1', '2024-04-23 19:39:35', 1),
(73, 'Add', 'Invoice', 'The invoice #3 is added', '::1', '2024-04-23 19:40:22', 1),
(74, 'Add', 'Invoice', 'The invoice #4 is added', '::1', '2024-04-23 19:40:44', 1),
(75, 'Add', 'Project', 'The project is added: FL MIAMI', '::1', '2024-04-24 04:20:22', 1),
(76, 'Add', 'Project Item Details', 'The item is add: CONC SLOPE DRAIN ', '::1', '2024-04-24 04:20:56', 1),
(77, 'Add', 'Project Item Details', 'The item is add: CONC CURB & GUTTEER 8INX30IN TP2', '::1', '2024-04-24 04:21:06', 1),
(78, 'Add', 'Invoice', 'The invoice #5 is added', '::1', '2024-04-24 04:21:24', 1),
(79, 'Add', 'Contractor', 'The contractor is added: CONTRACTOR TWO , INC', '::1', '2024-04-24 04:23:31', 1),
(80, 'Add', 'Project', 'The project is added: Houston Texas', '::1', '2024-04-24 04:24:02', 1),
(81, 'Add', 'Project Item Details', 'The item is add: CONC CURB & GUTTEER 8INX30IN TP2', '::1', '2024-04-24 04:24:23', 1),
(82, 'Add', 'Project Item Details', 'The item is add: CONC VALLEY GUTTER 6IN', '::1', '2024-04-24 04:24:33', 1),
(83, 'Add', 'Invoice', 'The invoice #6 is added', '::1', '2024-04-24 04:24:52', 1),
(84, 'Update', 'Invoice', 'The invoice #6 is modified', '::1', '2024-04-24 16:59:17', 1),
(85, 'Update', 'Invoice', 'The invoice #5 is modified', '::1', '2024-04-24 16:59:59', 1),
(86, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-04-27 18:37:14', 1),
(87, 'Update', 'Project', 'The project is modified: FL MIAMI', '::1', '2024-04-27 18:37:22', 1),
(88, 'Update', 'Project', 'The project is modified: FL COUNTY', '::1', '2024-04-27 18:37:31', 1),
(89, 'Add', 'Project Notes', 'The notes: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. is add to the project: Houston Texas', '::1', '2024-04-27 21:15:21', 1),
(90, 'Update', 'Project Notes', 'The notes: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. is modified to the project: Houston Texas', '::1', '2024-04-27 21:15:35', 1),
(91, 'Delete', 'Project Notes', 'The notes: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. is delete from project: Houston Texas', '::1', '2024-04-27 21:16:03', 1),
(92, 'Update', 'Company', 'The company is modified: CONTRACTOR, INC', '::1', '2024-04-29 14:51:27', 1),
(93, 'Add', 'Company', 'The company is added: gjhjkl', '::1', '2024-04-29 14:52:29', 1),
(94, 'Delete', 'Company', 'The company is deleted: gjhjkl', '::1', '2024-04-29 14:52:36', 1),
(95, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-04-29 14:53:41', 1),
(96, 'Update', 'Data Tracking', 'The data tracking is modified: CONC VALLEY GUTTER 6IN', '::1', '2024-04-29 14:53:58', 1),
(97, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-04-29 23:38:38', 1),
(98, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-04-29 23:39:10', 1),
(99, 'Delete', 'Project Item', 'The item: CONCRETE V GUTTER of the project is deleted', '::1', '2024-04-29 23:39:45', 1),
(100, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-04-29 23:41:10', 1),
(101, 'Add', 'Project Notes', 'The notes: Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. is add to the project: Houston Texas', '::1', '2024-05-07 18:02:54', 1),
(102, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-05-07 19:17:23', 1),
(103, 'Update', 'Invoice', 'The invoice #6 is modified', '::1', '2024-05-08 23:49:36', 1),
(104, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-05-10 20:55:23', 1),
(105, 'Update', 'Equation', 'The equation is modified: SW, 4 IN, SY', '::1', '2024-05-10 23:06:04', 1),
(106, 'Update', 'Item', 'The item is modified: Cubic Yards of Concrete', '::1', '2024-05-12 19:17:47', 1),
(107, 'Update', 'Item', 'The item is modified: EXTRA LABOR', '::1', '2024-05-12 19:17:54', 1),
(108, 'Update', 'Item', 'The item is modified: EXTRA CONCRETE', '::1', '2024-05-12 19:18:05', 1),
(109, 'Update', 'Item', 'The item is modified: PLAIN CONC DITCH PAVING', '::1', '2024-05-12 19:18:15', 1),
(110, 'Update', 'Item', 'The item is modified: CONC SPILLWAY TP3', '::1', '2024-05-12 19:18:34', 1),
(111, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-05-12 20:53:23', 1),
(112, 'Update', 'Project', 'The project is modified: FL COUNTY', '::1', '2024-05-14 15:21:02', 1),
(113, 'Delete', 'Project Item', 'The item: Test item of the project is deleted', '::1', '2024-05-14 15:22:13', 1),
(114, 'Delete', 'Item', 'The item is deleted: Test item', '::1', '2024-05-14 15:22:27', 1),
(115, 'Update', 'Project', 'The project is modified: FL COUNTY', '::1', '2024-05-14 15:23:15', 1),
(116, 'Delete', 'Project Item', 'The item: Test item of the project is deleted', '::1', '2024-05-14 15:23:26', 1),
(117, 'Delete', 'Item', 'The item is deleted: Test item', '::1', '2024-05-14 15:23:37', 1),
(118, 'Update', 'Project', 'The project is modified: FL MIAMI', '::1', '2024-05-14 15:52:43', 1),
(119, 'Update', 'Project', 'The project is modified: FL COUNTY', '::1', '2024-05-14 15:52:54', 1),
(120, 'Add', 'Inspector', 'The inspector is added: ', '::1', '2024-05-15 21:54:53', 1),
(121, 'Add', 'Inspector', 'The inspector is added: Marcel Curbelo Carmona', '::1', '2024-05-15 21:57:30', 1),
(122, 'Update', 'Data Tracking', 'The data tracking is modified: CONC CURB & GUTTEER 8INX30IN TP2', '::1', '2024-05-15 22:01:08', 1),
(123, 'Update', 'Data Tracking', 'The data tracking is modified: CONC CURB & GUTTEER 8INX30IN TP2', '::1', '2024-05-15 22:02:15', 1),
(124, 'Update', 'Data Tracking', 'The data tracking is modified: CONC SLOPE DRAIN ', '::1', '2024-05-15 22:02:20', 1),
(125, 'Add', 'Data Tracking', 'The data tracking is add: Cubic Yards of Concrete', '::1', '2024-05-16 03:08:03', 1),
(126, 'Add', 'Data Tracking', 'The data tracking is add: CONC CURB & GUTTEER 8INX30IN TP2', '::1', '2024-05-16 03:53:30', 1),
(127, 'Add', 'Data Tracking', 'The data tracking is add: Cubic Yards of Concrete', '::1', '2024-05-17 15:05:17', 1),
(128, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-05-17 18:24:44', 1),
(129, 'Update', 'Project', 'The project is modified: Houston Texas', '::1', '2024-05-17 18:31:58', 1),
(130, 'Add', 'Data Tracking', 'The data tracking is add: CONCRETE V GUTTER', '::1', '2024-05-17 20:06:16', 1),
(131, 'Update', 'Data Tracking', 'The data tracking is modified: CONCRETE V GUTTER', '::1', '2024-05-17 20:18:21', 1),
(132, 'Add', 'Inspector', 'The inspector is added: Cristián Gwinner', '::1', '2024-05-18 16:08:15', 1),
(133, 'Add', 'Equation', 'The equation is added: SW 6 IN, SF', '::1', '2024-05-18 16:31:11', 1),
(134, 'Add', 'Unit', 'The unit is added: ZX', '::1', '2024-05-18 16:55:58', 1),
(135, 'Delete', 'Unit', 'The unit is deleted: ZX', '::1', '2024-05-18 16:56:25', 1),
(136, 'Add', 'Unit', 'The unit is added: ZY', '::1', '2024-05-18 18:46:54', 1),
(137, 'Delete', 'Unit', 'The unit is deleted: ZY', '::1', '2024-05-18 18:47:10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notification`
--

INSERT INTO `notification` (`id`, `content`, `readed`, `created_at`, `user_id`) VALUES
(2, 'Generate april invoice', 1, '2024-04-16 13:23:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_number` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `subcontract` varchar(255) DEFAULT NULL,
  `federal_funding` tinyint(1) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `resurfacing` tinyint(1) DEFAULT NULL,
  `invoice_contact` varchar(255) DEFAULT NULL,
  `certified_payrolls` tinyint(1) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `manager` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `po_number` varchar(255) DEFAULT NULL,
  `po_cg` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `inspector_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`project_id`, `project_number`, `name`, `location`, `owner`, `subcontract`, `federal_funding`, `county`, `resurfacing`, `invoice_contact`, `certified_payrolls`, `start_date`, `end_date`, `due_date`, `manager`, `status`, `po_number`, `po_cg`, `created_at`, `updated_at`, `company_id`, `inspector_id`) VALUES
(1, '0009001', 'FL COUNTY', 'FL COUNTY', '', '', 0, '', 0, '', 0, NULL, NULL, '2024-05-31', 'Andres', 0, 'B3C210052148-0', 'ERS025', '2024-04-14 20:24:53', '2024-05-14 15:52:54', 1, 1),
(2, '0009002', 'FL MIAMI', 'FL MIAMI', '', '', 0, '', 0, '', 0, NULL, NULL, '2024-05-28', 'Dan', 1, '896532', '896532', '2024-04-24 04:20:22', '2024-05-14 15:52:43', 1, 1),
(3, '0009003', 'Houston Texas', 'Houston Texas', 'Marcel', '896532', 1, 'Florida', 1, 'Marcel Curbelo Carmona', 1, '2024-04-01', '2024-04-30', '2024-05-30', 'Carlos', 1, '86532', '89653', '2024-04-24 04:24:02', '2024-05-17 18:31:58', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_item`
--

CREATE TABLE `project_item` (
  `id` int(11) NOT NULL,
  `quantity` float(8,2) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL,
  `yield_calculation` varchar(50) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `equation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `project_item`
--

INSERT INTO `project_item` (`id`, `quantity`, `price`, `yield_calculation`, `project_id`, `item_id`, `equation_id`) VALUES
(1, 1500.00, 16.50, 'none', 3, 6, NULL),
(2, 2000.00, 63.00, 'same', 3, 15, NULL),
(4, 1600.00, 150.00, 'equation', 3, 20, 2),
(5, NULL, 253.00, 'none', 1, 10, NULL),
(8, 2500.00, 25.00, 'equation', 3, 3, 1),
(9, 2500.00, 16.50, 'none', 3, 7, NULL),
(10, 5000.00, 70.00, 'equation', 3, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_notes`
--

CREATE TABLE `project_notes` (
  `id` int(11) NOT NULL,
  `notes` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `project_notes`
--

INSERT INTO `project_notes` (`id`, `notes`, `date`, `project_id`) VALUES
(2, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '2024-05-07', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `name`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permission`
--

CREATE TABLE `rol_permission` (
  `id` int(11) NOT NULL,
  `view_permission` tinyint(1) DEFAULT NULL,
  `add_permission` tinyint(1) DEFAULT NULL,
  `edit_permission` tinyint(1) DEFAULT NULL,
  `delete_permission` tinyint(1) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `function_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol_permission`
--

INSERT INTO `rol_permission` (`id`, `view_permission`, `add_permission`, `edit_permission`, `delete_permission`, `rol_id`, `function_id`) VALUES
(9, 1, 1, 1, 1, 1, 1),
(10, 1, 1, 1, 1, 1, 2),
(11, 1, 1, 1, 1, 1, 3),
(12, 1, 1, 1, 1, 1, 4),
(14, 1, 1, 1, 1, 2, 1),
(15, 1, 0, 0, 0, 2, 4),
(16, 1, 1, 1, 1, 1, 5),
(17, 1, 1, 1, 1, 1, 6),
(18, 1, 1, 1, 1, 1, 7),
(19, 1, 1, 1, 1, 1, 8),
(20, 1, 1, 1, 1, 1, 9),
(21, 1, 1, 1, 1, 1, 10),
(22, 1, 1, 1, 1, 1, 11),
(23, 1, 1, 1, 1, 1, 12),
(24, 1, 1, 1, 1, 2, 12),
(25, 1, 1, 1, 1, 1, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unit`
--

INSERT INTO `unit` (`unit_id`, `description`, `status`) VALUES
(1, 'SY', 1),
(2, 'LF', 1),
(3, 'CY', 1),
(4, 'LB', 1),
(5, 'EA', 1),
(6, 'LS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `name`, `lastname`, `email`, `password`, `status`, `phone`, `created_at`, `updated_at`, `rol_id`) VALUES
(1, 'Administrator', 'Concrete', 'admin@concrete.com', '$2y$12$ojiMWHh/4xuvv0D8JdpY7OnlBd5TuYTW76SyWlR5QNbOAgtBt64dy', 1, '', '2024-04-12 09:24:44', '2024-04-12 18:37:27', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_permission`
--

CREATE TABLE `user_permission` (
  `id` int(11) NOT NULL,
  `view_permission` tinyint(1) DEFAULT NULL,
  `add_permission` tinyint(1) DEFAULT NULL,
  `edit_permission` tinyint(1) DEFAULT NULL,
  `delete_permission` tinyint(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `function_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_permission`
--

INSERT INTO `user_permission` (`id`, `view_permission`, `add_permission`, `edit_permission`, `delete_permission`, `user_id`, `function_id`) VALUES
(5, 1, 1, 1, 1, 1, 1),
(6, 1, 1, 1, 1, 1, 2),
(7, 1, 1, 1, 1, 1, 3),
(8, 1, 1, 1, 1, 1, 4),
(9, 1, 1, 1, 1, 1, 5),
(10, 1, 1, 1, 1, 1, 6),
(11, 1, 1, 1, 1, 1, 7),
(12, 1, 1, 1, 1, 1, 8),
(13, 1, 1, 1, 1, 1, 9),
(14, 1, 1, 1, 1, 1, 10),
(15, 1, 1, 1, 1, 1, 11),
(16, 1, 1, 1, 1, 1, 12),
(17, 1, 1, 1, 1, 1, 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indices de la tabla `company_contact`
--
ALTER TABLE `company_contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `Ref6474` (`company_id`);

--
-- Indices de la tabla `data_tracking`
--
ALTER TABLE `data_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inspector_id` (`inspector_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indices de la tabla `data_tracking_item`
--
ALTER TABLE `data_tracking_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ref7185` (`data_tracking_id`),
  ADD KEY `Ref7686` (`project_item_id`);

--
-- Indices de la tabla `equation`
--
ALTER TABLE `equation`
  ADD PRIMARY KEY (`equation_id`);

--
-- Indices de la tabla `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`function_id`);

--
-- Indices de la tabla `inspector`
--
ALTER TABLE `inspector`
  ADD PRIMARY KEY (`inspector_id`);

--
-- Indices de la tabla `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `Ref6665` (`project_id`);

--
-- Indices de la tabla `invoice_item`
--
ALTER TABLE `invoice_item`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `Ref6969` (`invoice_id`),
  ADD KEY `Ref6770` (`item_id`);

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `Ref6864` (`unit_id`),
  ADD KEY `equation_id` (`equation_id`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `Ref135434` (`user_id`);

--
-- Indices de la tabla `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ref1377` (`user_id`);

--
-- Indices de la tabla `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `Ref6467` (`company_id`),
  ADD KEY `Ref6573` (`inspector_id`);

--
-- Indices de la tabla `project_item`
--
ALTER TABLE `project_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ref6679` (`project_id`),
  ADD KEY `Ref6780` (`item_id`),
  ADD KEY `equation_id` (`equation_id`);

--
-- Indices de la tabla `project_notes`
--
ALTER TABLE `project_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ref6678` (`project_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `rol_permission`
--
ALTER TABLE `rol_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ref151` (`rol_id`),
  ADD KEY `Ref192` (`function_id`);

--
-- Indices de la tabla `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `Ref156` (`rol_id`);

--
-- Indices de la tabla `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ref133` (`user_id`),
  ADD KEY `Ref194` (`function_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `company_contact`
--
ALTER TABLE `company_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `data_tracking`
--
ALTER TABLE `data_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `data_tracking_item`
--
ALTER TABLE `data_tracking_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equation`
--
ALTER TABLE `equation`
  MODIFY `equation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `function`
--
ALTER TABLE `function`
  MODIFY `function_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `inspector`
--
ALTER TABLE `inspector`
  MODIFY `inspector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `invoice_item`
--
ALTER TABLE `invoice_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT de la tabla `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `project_item`
--
ALTER TABLE `project_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `project_notes`
--
ALTER TABLE `project_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol_permission`
--
ALTER TABLE `rol_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `company_contact`
--
ALTER TABLE `company_contact`
  ADD CONSTRAINT `Refcontractor74` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Filtros para la tabla `data_tracking`
--
ALTER TABLE `data_tracking`
  ADD CONSTRAINT `Refinspector158` FOREIGN KEY (`inspector_id`) REFERENCES `inspector` (`inspector_id`),
  ADD CONSTRAINT `Refproject25` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Filtros para la tabla `data_tracking_item`
--
ALTER TABLE `data_tracking_item`
  ADD CONSTRAINT `Refdata_tracking85` FOREIGN KEY (`data_tracking_id`) REFERENCES `data_tracking` (`id`),
  ADD CONSTRAINT `Refproject_item86` FOREIGN KEY (`project_item_id`) REFERENCES `project_item` (`id`);

--
-- Filtros para la tabla `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `Refproject65` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Filtros para la tabla `invoice_item`
--
ALTER TABLE `invoice_item`
  ADD CONSTRAINT `Refinvoice69` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`),
  ADD CONSTRAINT `Refitem70` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`);

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `Refequation10` FOREIGN KEY (`equation_id`) REFERENCES `equation` (`equation_id`),
  ADD CONSTRAINT `Refunit64` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`);

--
-- Filtros para la tabla `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `Refuser434` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Filtros para la tabla `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `Refuser77` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Filtros para la tabla `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `Refcontractor67` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `Refinspector73` FOREIGN KEY (`inspector_id`) REFERENCES `inspector` (`inspector_id`);

--
-- Filtros para la tabla `project_item`
--
ALTER TABLE `project_item`
  ADD CONSTRAINT `Refequation11` FOREIGN KEY (`equation_id`) REFERENCES `equation` (`equation_id`),
  ADD CONSTRAINT `Refitem80` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`),
  ADD CONSTRAINT `Refproject79` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Filtros para la tabla `project_notes`
--
ALTER TABLE `project_notes`
  ADD CONSTRAINT `Refproject78` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Filtros para la tabla `rol_permission`
--
ALTER TABLE `rol_permission`
  ADD CONSTRAINT `Reffunction2` FOREIGN KEY (`function_id`) REFERENCES `function` (`function_id`),
  ADD CONSTRAINT `Refrol1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `Refrol6` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`);

--
-- Filtros para la tabla `user_permission`
--
ALTER TABLE `user_permission`
  ADD CONSTRAINT `Reffunction4` FOREIGN KEY (`function_id`) REFERENCES `function` (`function_id`),
  ADD CONSTRAINT `Refuser3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
