-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 07:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'The Retro', 'This is The Retro brand description', 'admin/assets/img/brand-images/brand-1.png', 1, 'the-retro', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(2, 'Design Hub', 'This is Design Hub brand description', 'admin/assets/img/brand-images/brand-2.png', 1, 'design-hub', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(3, 'Travel', 'This is Travel brand description', 'admin/assets/img/brand-images/brand-3.png', 1, 'travel', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(4, 'Mock up', 'This is Mock up brand description', 'admin/assets/img/brand-images/brand-4.png', 1, 'mock-up', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(5, 'The Backyard', 'This is The Backyard brand description', 'admin/assets/img/brand-images/brand-5.png', 1, 'the-backyard', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(6, 'Shutter Speed', 'This is Shutter Speed brand description', 'admin/assets/img/brand-images/brand-6.png', 1, 'shutter-speed', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(7, 'Aarong', 'This is Aarong brand description', 'admin/assets/img/brand-images/aarong.webp', 1, 'aarong', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(8, 'Kay Kraft', 'This is Kay Kraft brand description', 'admin/assets/img/brand-images/kay-kraft.png', 1, 'kay-kraft', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(9, 'Dorji Bari', 'This is Dorji Bari description', 'admin/assets/img/brand-images/dorji-bari.png', 1, 'dorji-bari', '2024-06-05 07:09:38', '2024-06-05 07:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `slug` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'This is Mobile category description', 'admin/assets/img/category-images/category-1.svg', 'mobile', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(2, 'Electronics', 'This is Electronics category description', 'admin/assets/img/category-images/category-2.svg', 'electronics', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(3, 'Ladies & Clothes Fashion', 'This is Ladies & Clothes Fashion description', 'admin/assets/img/category-images/category-3.svg', 'ladies-&-clothes-fashion', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(4, 'Men Fashion', 'This is Men Fashion description', 'admin/assets/img/category-images/man-fashion.jpg', 'men-fashion', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(5, 'Sports & Gym', 'This is Sports & Gym  description', 'admin/assets/img/category-images/category-9.svg', 'sports-&-gym', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(6, 'Pet & Animals', 'This is Pet & Animals  description', 'admin/assets/img/category-images/category-11.svg', 'pet-&-animals', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(7, 'Real State', 'This is Real State description', 'admin/assets/img/category-images/category-7.svg', 'real-state', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(8, 'House Hold', 'This is House Hold description', 'admin/assets/img/category-images/category-1.svg', 'house-hold', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_22_144344_add_two_factor_columns_to_users_table', 1),
(5, '2024_05_22_144437_create_personal_access_tokens_table', 1),
(6, '2024_05_24_062444_create_brands_table', 1),
(7, '2024_05_24_062453_create_categories_table', 1),
(8, '2024_05_24_062502_create_sub_categories_table', 1),
(9, '2024_05_24_062525_create_units_table', 1),
(10, '2024_05_24_062533_create_products_table', 1),
(11, '2024_05_24_115739_create_other_images_table', 1),
(12, '2024_05_26_062705_create_shoppingcart_table', 1),
(13, '2024_05_26_142256_create_wishlists_table', 1),
(14, '2024_06_04_141910_create_orders_table', 1),
(15, '2024_06_04_141918_create_order_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tax_total` int(11) NOT NULL,
  `shipping_total` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` text NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_address` text NOT NULL,
  `delivery_date` text DEFAULT NULL,
  `delivery_timestamp` text DEFAULT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_method` varchar(255) NOT NULL,
  `payment_date` text DEFAULT NULL,
  `payment_timestamp` text DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `currency` varchar(255) DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `tax_total`, `shipping_total`, `order_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_date`, `delivery_timestamp`, `delivery_status`, `payment_method`, `payment_date`, `payment_timestamp`, `payment_status`, `currency`, `transaction_id`, `slug`, `created_at`, `updated_at`) VALUES
(5, 4, 511, 6, 6386, '2024-06-05', '1717545600', 'Cancel', 'Jatrabari, Dhaka,', NULL, NULL, 'Cancel', '2', NULL, NULL, 'Cancel', NULL, NULL, 'OFPKL4dTShGydsuDvTbm3VKy9uRJ8nshcZZtPxgAKQtj', '2024-06-05 11:21:48', '2024-06-05 11:33:36'),
(6, 4, 545, 6, 6818, '2024-06-05', '1717545600', 'Pending', 'Mirpur', NULL, NULL, 'Pending', '2', NULL, NULL, 'Pending', NULL, NULL, 'KtDbnt40pEkWyg6Iwvtse3Tv40uwmOsSyBZZ38SZ0eaI', '2024-06-05 11:47:06', '2024-06-05 11:47:06'),
(7, 5, 359, 6, 4493, '2024-08-12', '1723420800', 'Pending', 'Hello world', NULL, NULL, 'Pending', '2', NULL, NULL, 'Pending', NULL, NULL, 'H596U0X7O9JVA7GDZ6MbqhhyGZmHCpB6KJPvLenVh9uq', '2024-08-11 23:02:53', '2024-08-11 23:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(8, 5, 6, 'Formal Check Shirt', 1761, 1, '2024-06-05 11:21:48', '2024-06-05 11:21:48'),
(9, 5, 2, 'Band Collar Shirt Men Black Solid Cotton Mandarin Collar - Shirt For Men - Shirt', 2628, 1, '2024-06-05 11:21:48', '2024-06-05 11:21:48'),
(10, 5, 5, 'Xperia 1 V 256GB, factory unlocked smartphone, 6.5” 4K 120Hz display, 4K 120fps HDR, true optical zoom, 5G', 1997, 1, '2024-06-05 11:21:48', '2024-06-05 11:21:48'),
(11, 6, 7, 'Stylish Khimar Borka Hijab With Scart And Niqub Full Set Khimar Borka', 1176, 3, '2024-06-05 11:47:06', '2024-06-05 11:47:06'),
(12, 6, 8, 'Black T-Shirt', 1645, 2, '2024-06-05 11:47:06', '2024-06-05 11:47:06'),
(13, 7, 6, 'Formal Check Shirt', 1761, 2, '2024-08-11 23:02:53', '2024-08-11 23:02:53'),
(14, 7, 3, 'Samsung S22 Ultra', 971, 1, '2024-08-11 23:02:53', '2024-08-11 23:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `other_images`
--

CREATE TABLE `other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_images`
--

INSERT INTO `other_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'email/assets/img/product-other-images/product-1-1.webp', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(2, 1, 'email/assets/img/product-other-images/product-1-2.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(3, 1, 'email/assets/img/product-other-images/product-1-3.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(4, 2, 'email/assets/img/product-other-images/product-2-1.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(5, 2, 'email/assets/img/product-other-images/product-2-2.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(6, 2, 'email/assets/img/product-other-images/product-2-3.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(7, 2, 'email/assets/img/product-other-images/product-2-4.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(8, 3, 'email/assets/img/product-other-images/product-3-1.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(9, 3, 'email/assets/img/product-other-images/product-3-2.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(10, 3, 'email/assets/img/product-other-images/product-3-3.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(11, 3, 'email/assets/img/product-other-images/product-3-4.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(12, 4, 'email/assets/img/product-other-images/product-4-1.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(13, 4, 'email/assets/img/product-other-images/product-4-2.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(14, 4, 'email/assets/img/product-other-images/product-4-3 .webp', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(15, 5, 'email/assets/img/product-other-images/product-5-1.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(16, 5, 'email/assets/img/product-other-images/product-5-2.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(17, 5, 'email/assets/img/product-other-images/product-5-3.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(18, 5, 'email/assets/img/product-other-images/product-5-4.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(19, 6, 'email/assets/img/product-other-images/product-6-1.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(20, 6, 'email/assets/img/product-other-images/product-6-2.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(21, 6, 'email/assets/img/product-other-images/product-6-3.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(22, 6, 'email/assets/img/product-other-images/product-6-4.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(23, 7, 'email/assets/img/product-other-images/product-7-1.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(24, 7, 'email/assets/img/product-other-images/product-7-2.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(25, 7, 'email/assets/img/product-other-images/product-7-3.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(26, 7, 'email/assets/img/product-other-images/product-7-4.jpg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(27, 8, 'email/assets/img/product-other-images/product-8-1.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(28, 8, 'email/assets/img/product-other-images/product-8-2.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(29, 8, 'email/assets/img/product-other-images/product-8-3.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(30, 9, 'email/assets/img/product-other-images/product-8-1.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(31, 9, 'email/assets/img/product-other-images/product-8-2.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(32, 9, 'email/assets/img/product-other-images/product-8-3.jpeg', '2024-06-05 07:09:38', '2024-06-05 07:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `stoke_amount` int(11) NOT NULL,
  `offer` varchar(255) DEFAULT NULL,
  `regular_price` int(11) NOT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `image` text NOT NULL,
  `slug` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT 'status: 1=active, 0=inactive',
  `click_count` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `stoke_amount`, `offer`, `regular_price`, `selling_price`, `short_description`, `long_description`, `image`, `slug`, `status`, `click_count`, `featured`, `created_at`, `updated_at`) VALUES
(1, 8, 14, 10, 9, 'Band Collar Shirt Men Black Solid Cotton Mandarin Collar - Shirt For Men - Shirt', 'CBDIODGKSORR', 17, NULL, 1915, 1777, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-1.webp', 'band-collar-shirt-men-black-solid-cotton-mandarin-collar---shirt-for-men---shirt-FOlyxW7XvcWGdzTvdklvz4', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(2, 1, 6, 7, 5, 'Band Collar Shirt Men Black Solid Cotton Mandarin Collar - Shirt For Men - Shirt', 'IHSK1V3CHD6X', 72, NULL, 2737, 2628, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-2.jpg', 'band-collar-shirt-men-black-solid-cotton-mandarin-collar---shirt-for-men---shirt-yzmtUGSACzqPaP09AFaXJq', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-06-05 11:21:48'),
(3, 1, 4, 1, 13, 'Samsung S22 Ultra', 'VUYY7NFX4MKN', 79, NULL, 1267, 971, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-3.jpeg', 'samsung-s22-ultra-rQKiblhhCVNrCp5Y2owty8', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-08-11 23:02:53'),
(4, 7, 18, 10, 1, 'Print color Jamdhani Saree', 'LIKL3VGHHYNW', 41, NULL, 1955, 1717, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-4.jpeg', 'print-color-jamdhani-saree-IqITwlfuwK56aRph94PXSs', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(5, 8, 8, 6, 8, 'Xperia 1 V 256GB, factory unlocked smartphone, 6.5” 4K 120Hz display, 4K 120fps HDR, true optical zoom, 5G', 'CGOF7XXPXORI', 20, NULL, 2530, 1997, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-5.jpg', 'xperia-1-v-256gb,-factory-unlocked-smartphone,-6.5”-4k-120hz-display,-4k-120fps-hdr,-true-optical-zoom,-5g-gawV2lTkXUFHJ6vwT9fbZN', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-06-05 11:21:48'),
(6, 5, 5, 5, 6, 'Formal Check Shirt', 'TYLCQIL55USL', 55, NULL, 2200, 1761, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-6.jpg', 'formal-check-shirt-USXXHmt1n2LH9DnW20JCcE', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-08-11 23:02:53'),
(7, 7, 1, 10, 2, 'Stylish Khimar Borka Hijab With Scart And Niqub Full Set Khimar Borka', 'KJPBF9DG71TP', 82, NULL, 1362, 1176, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-7.jpg', 'stylish-khimar-borka-hijab-with-scart-and-niqub-full-set-khimar-borka-0GJDtdqV4Lq3sJG3SZAw4c', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-06-05 11:47:06'),
(8, 5, 14, 7, 2, 'Black T-Shirt', 'PTLQ9O4FYN93', 19, NULL, 1798, 1645, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-8.jpeg', 'black-t-shirt-k1NClBJ7liH6Zh2i4siDJk', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-06-05 11:47:06'),
(9, 4, 11, 1, 12, 'Black T-Shirt', 'KKSARJZW6VL0', 50, NULL, 2931, 2357, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.', 'admin/assets/img/product-images/product-8.jpg', 'black-t-shirt-pOdnGFS8Pg6JsIpnuxaU9g', 1, NULL, NULL, '2024-06-05 07:09:38', '2024-06-05 07:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CBBhYIAKHPfmPNQydV4Yk3QXvz5SCVmuQKpYUK7L', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXpTYzM1R3VqN0tYbGNiM0d3VWE4Nm1kTzFUWXBpZU14MXlvY2lhUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717690081),
('D6SNVc7LOMpzXOXWJ0AtS004mo6Ssi05sogRqLeX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWJiblhtQTBISUNzZWtoMDd4TTUwNFdOdFJ2bEVsSUJaNnUzcDQ2RyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1723439146),
('HjOKVKKbWATYOf9JQ0OBgTNhMgf73H4OalZINNOZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiTkdIODJPekFZSW9haUI0OXZ0ald4YTZyNDFhNkhRckdsMkxJV1VlViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YTowOnt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6MjYyODtzOjk6InRheF90b3RhbCI7ZDoyMTAuMjQ7czoxNDoic2hpcHBpbmdfdG90YWwiO2k6Njt9', 1717693027),
('wv3JVUV7INU4DccyjaFjZxYfmitECcbQX1joV7vB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMW83RkxWRFBYUzNRajZwQUE5c2NxeUdXeElDemZuTWxWaTJMQ1dnUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719065829);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) NOT NULL,
  `instance` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text DEFAULT NULL,
  `slug` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mobile', 'This is Mobile description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'mobile', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(2, 7, 'Computer', 'This is Computer description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'computer', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(3, 5, 'Freeze', 'This is Freeze description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'freeze', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(4, 7, 'Jewelry', 'This is Jewelry description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'jewelry', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(5, 7, 'T-Shirt', 'This is T-Shirt description', 'admin/assets/img/sub-category-images/sub-category.jpg', 't-shirt', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(6, 1, 'Shirt', 'This is Shutter Speed brand description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'shirt', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(7, 8, 'Watch', 'This is Watch description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'watch', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(8, 5, 'Glass', 'This is Glass description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'glass', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(9, 5, 'Pant', 'This is Dorji Bari description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'pant', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(10, 2, 'Panjabi', 'This is Dorji Bari description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'panjabi', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(11, 3, 'Ornaments', 'This is Dorji Bari description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'ornaments', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(12, 1, 'Three piece', 'This is Three piece description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'three-piece', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(13, 7, 'Saree', 'This is Dorji Bari description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'saree', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(14, 3, 'Borkha', 'This is Dorji Bari description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'borkha', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(15, 5, 'Khimar', 'This is Dorji Bari description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'khimar', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(16, 2, 'Borkha', 'This is Dorji Bari description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'borkha', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(17, 5, 'Skin care', 'This is Skin care description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'skin-care', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(18, 5, 'Heel', 'This is Hair description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'heel', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(19, 8, 'Oil', 'This is Hair description', 'admin/assets/img/sub-category-images/sub-category.jpg', 'oil', 1, '2024-06-05 07:09:38', '2024-06-05 07:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `slug` text NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Phone & accessory', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'phone-&-accessory', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(2, 'Computer & Laptop', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'computer-&-laptop', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(3, 'Clothes', 'This unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'clothes', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(4, 'Health', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'health', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(5, 'Skin Care', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'skin-care', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(6, 'Shoes', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'shoes', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(7, 'Wearing', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'wearing', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(8, 'Jewelry', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'jewelry', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(9, 'Weeding', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'weeding', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(10, 'Season', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'season', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(11, 'Sports', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'sports', '2024-06-05 07:09:38', '2024-06-05 07:09:38'),
(12, 'Gym', 'This is unit description', 'admin/assets/img/unit-images/unit.jpg', 1, 'gym', '2024-06-05 07:09:38', '2024-06-05 07:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `billing_address` text DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `google_id` varchar(255) DEFAULT NULL,
  `google_image` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `facebook_image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_slug_unique` (`slug`) USING HASH;

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `other_images`
--
ALTER TABLE `other_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `other_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`) USING HASH;

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `other_images`
--
ALTER TABLE `other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `other_images`
--
ALTER TABLE `other_images`
  ADD CONSTRAINT `other_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
