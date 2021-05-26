-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021 年 05 月 22 日 12:21
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `estate70`
--

-- --------------------------------------------------------

--
-- 資料表結構 `equipments`
--

CREATE TABLE `equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rent_id` bigint(20) UNSIGNED NOT NULL,
  `air` tinyint(1) NOT NULL,
  `lundry` tinyint(1) NOT NULL,
  `refrigerator` tinyint(1) NOT NULL,
  `gas` tinyint(1) NOT NULL,
  `bed` tinyint(1) NOT NULL,
  `closet` tinyint(1) NOT NULL,
  `sofa` tinyint(1) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `elevator` tinyint(1) NOT NULL,
  `pet` tinyint(1) NOT NULL,
  `TV` tinyint(1) NOT NULL,
  `tvCable` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `notRooftop` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `equipments`
--

INSERT INTO `equipments` (`id`, `rent_id`, `air`, `lundry`, `refrigerator`, `gas`, `bed`, `closet`, `sofa`, `balcony`, `elevator`, `pet`, `TV`, `tvCable`, `wifi`, `notRooftop`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, '2021-05-21 01:11:47', '2021-05-21 01:11:47'),
(2, 2, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 0, 1, 1, '2021-05-22 00:49:48', '2021-05-22 00:49:48'),
(3, 3, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, '2021-05-22 00:55:19', '2021-05-22 00:55:19'),
(4, 4, 1, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, '2021-05-22 00:57:39', '2021-05-22 00:57:39'),
(5, 5, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, '2021-05-22 01:01:20', '2021-05-22 01:01:20'),
(6, 6, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, '2021-05-22 01:03:28', '2021-05-22 01:03:28'),
(7, 7, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, '2021-05-22 01:06:28', '2021-05-22 01:06:28'),
(8, 8, 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, '2021-05-22 01:10:37', '2021-05-22 01:10:37'),
(9, 9, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, '2021-05-22 01:13:44', '2021-05-22 01:13:44'),
(10, 10, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, '2021-05-22 01:15:15', '2021-05-22 01:15:15'),
(11, 11, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 1, 0, '2021-05-22 01:53:06', '2021-05-22 01:53:06');

-- --------------------------------------------------------

--
-- 資料表結構 `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rent_id` bigint(20) UNSIGNED NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `images`
--

INSERT INTO `images` (`id`, `rent_id`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'property-images/le2sYmu4qcma8fk8FbfTC8GyN7sCo0xdWm1uUuWk.jpg', '2021-05-21 01:11:47', '2021-05-21 01:11:47'),
(2, 2, 'property-images/ARib4lDZa5bxU3v1JSXkUstCPm6boLoqqQV1ayDW.jpg', '2021-05-22 00:49:48', '2021-05-22 00:49:48'),
(3, 2, 'property-images/JFPfjVaSAQI2Bsitnc9UenhdjFOxuTcXMpjWqs0K.jpg', '2021-05-22 00:49:48', '2021-05-22 00:49:48'),
(4, 3, 'property-images/YhCEx65zR3IWWreoMgV1vc3irf46ykGHzHYNsyid.jpg', '2021-05-22 00:55:19', '2021-05-22 00:55:19'),
(5, 4, 'property-images/QqLCehrApqXJLkgNWkpUPzQH6bt5VhUb6jr3qTS5.jpg', '2021-05-22 00:57:39', '2021-05-22 00:57:39'),
(6, 5, 'property-images/dt1YkYrQ55ca5VD1MIjj4MiWSk3fZUg0aWE27JlZ.jpg', '2021-05-22 01:01:20', '2021-05-22 01:01:20'),
(7, 6, 'property-images/MmIxkOirFXQi6SG1cd7rgg2Rpq8gyI1I2Oa2dA2U.jpg', '2021-05-22 01:03:28', '2021-05-22 01:03:28'),
(8, 7, 'property-images/pUvhcBRDbIaDpUuqKyA7SfcEC0DoVW5uTKaacgxD.jpg', '2021-05-22 01:06:28', '2021-05-22 01:06:28'),
(9, 8, 'property-images/fkkuzZG8tfH9UTTj0FgaHZEd5dsRJvMeK2kn6Jgl.jpg', '2021-05-22 01:10:37', '2021-05-22 01:10:37'),
(10, 9, 'property-images/2HRUIas5m2Va9xxXy3yzmuksfInZWCwojmwuPTfJ.jpg', '2021-05-22 01:13:44', '2021-05-22 01:13:44'),
(11, 10, 'property-images/TVQXhjYffwAbmZnYExCSnHWCe6JX3SOyMBTJEbp0.jpg', '2021-05-22 01:15:15', '2021-05-22 01:15:15'),
(12, 11, 'property-images/gwfs6DykSwfF29xgHb4vGfPCFKIsKtonZYRNxitL.jpg', '2021-05-22 01:53:06', '2021-05-22 01:53:06');

-- --------------------------------------------------------

--
-- 資料表結構 `landlords`
--

CREATE TABLE `landlords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `landlords`
--

INSERT INTO `landlords` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '歐陽安媛', '0966580680', 'cat357998@gmail.com', '2021-05-21 01:11:47', '2021-05-21 01:11:47'),
(2, '拉拉熊', '0911222345', 'abcd@gmail.com', '2021-05-22 00:49:48', '2021-05-22 00:49:48'),
(3, '布丁狗', '0988555888', '5858@gmail.com', '2021-05-22 00:55:19', '2021-05-22 00:55:19'),
(4, '蛋黃哥', '0977666555', 'aaa@mail', '2021-05-22 00:57:39', '2021-05-22 00:57:39'),
(5, 'Hello Kitty', '0988123456', 'kitty@gmail.com', '2021-05-22 01:01:20', '2021-05-22 01:01:20'),
(6, '大耳狗', '0912345678', 'dog@gmail.com', '2021-05-22 01:03:28', '2021-05-22 01:03:28'),
(7, '美樂蒂', '0952520520', 'love@mail.com', '2021-05-22 01:06:28', '2021-05-22 01:06:28'),
(8, '酷企鵝', '0933555678', 'penguin@mail.com', '2021-05-22 01:10:37', '2021-05-22 01:10:37'),
(9, '歐陽安媛', '0966580680', 'm093040067@nsysu.edu.tw', '2021-05-22 01:13:44', '2021-05-22 01:13:44');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(51, '2021_04_29_140833_create-landlords-table', 1),
(52, '2021_04_29_150059_create-tenants-table', 1),
(53, '2021_04_29_151154_create-rents-table', 1),
(54, '2021_05_03_083102_create_equipments_table', 1),
(55, '2021_05_15_082927_create_images_table', 1),
(56, '2021_05_21_072904_create_orders_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `landlord_id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `rent_id` bigint(20) UNSIGNED NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`id`, `landlord_id`, `tenant_id`, `rent_id`, `state`, `created_at`, `updated_at`) VALUES
(8, 1, 9, 1, 1, '2021-05-22 01:44:51', '2021-05-22 01:44:51'),
(9, 1, 10, 10, 1, '2021-05-22 01:46:05', '2021-05-22 01:46:05'),
(10, 1, 11, 11, 0, '2021-05-22 01:58:23', '2021-05-22 01:58:23'),
(11, 1, 12, 11, 1, '2021-05-22 01:59:27', '2021-05-22 01:59:27'),
(12, 1, 13, 1, 1, '2021-05-22 02:04:04', '2021-05-22 02:04:04');

-- --------------------------------------------------------

--
-- 資料表結構 `rents`
--

CREATE TABLE `rents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 1,
  `size` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `type` enum('獨立套房','分租套房','雅房','整層住家','獨棟') COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `photo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`photo`)),
  `location_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landlord_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `rents`
--

INSERT INTO `rents` (`id`, `state`, `size`, `room`, `type`, `price`, `floor`, `photo`, `location_city`, `location_detail`, `landlord_id`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 3, '整層住家', 9000, 4, NULL, '鼓山區', '蓮海路70號', 1, '2021-05-21 01:11:47', '2021-05-22 00:35:01'),
(2, 1, 10, 1, '獨立套房', 3000, 4, NULL, '鹽埕區', '五福四路146號', 2, '2021-05-22 00:49:48', '2021-05-22 00:49:48'),
(3, 1, 30, 3, '整層住家', 9000, 10, NULL, '前金區', '六合二路186號', 3, '2021-05-22 00:55:19', '2021-05-22 00:55:19'),
(4, 1, 7, 1, '雅房', 2000, 2, NULL, '鼓山區', '建國四路79號', 4, '2021-05-22 00:57:39', '2021-05-22 00:57:39'),
(5, 1, 55, 4, '獨棟', 15000, 4, NULL, '鹽埕區', '五福四路268號', 5, '2021-05-22 01:01:20', '2021-05-22 01:01:20'),
(6, 1, 5, 1, '分租套房', 5000, 2, NULL, '鼓山區', '鼓山一路25號', 6, '2021-05-22 01:03:28', '2021-05-22 01:03:28'),
(7, 1, 11, 1, '獨立套房', 4500, 3, NULL, '鼓山區', '登山街34-1號', 7, '2021-05-22 01:06:28', '2021-05-22 01:06:28'),
(8, 1, 3, 1, '雅房', 3300, 7, NULL, '鼓山區', '鼓波街46之4號', 8, '2021-05-22 01:10:37', '2021-05-22 01:10:37'),
(9, 1, 10, 1, '獨立套房', 6300, 3, NULL, '鹽埕區', '新樂街147號', 9, '2021-05-22 01:13:44', '2021-05-22 01:13:44'),
(10, 0, 4, 1, '雅房', 3800, 11, NULL, '鹽埕區', '大公路78號', 1, '2021-05-22 01:15:15', '2021-05-22 01:15:15'),
(11, 1, 7, 1, '分租套房', 5000, 3, NULL, '鼓山區', '延平街64-3號', 1, '2021-05-22 01:53:06', '2021-05-22 01:53:06');

-- --------------------------------------------------------

--
-- 資料表結構 `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `tenants`
--

INSERT INTO `tenants` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(9, '櫻桃小丸子', '0988123456', 'm093040067@nsysu.edu.tw', '2021-05-22 01:44:51', '2021-05-22 01:44:51'),
(10, '野口', '0911234567', 'cat357998@gmail.com', '2021-05-22 01:46:05', '2021-05-22 01:46:05'),
(11, '花輪', '0988168168', 'money888@gmail.com', '2021-05-22 01:58:23', '2021-05-22 01:58:23'),
(12, '美環', '0911567890', 'may789@gmail.com', '2021-05-22 01:59:27', '2021-05-22 01:59:27'),
(13, '大野', '0922567890', 'm093040067@nsysu.edu.tw', '2021-05-22 02:04:04', '2021-05-22 02:04:04');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipments_rent_id_foreign` (`rent_id`);

--
-- 資料表索引 `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_rent_id_foreign` (`rent_id`);

--
-- 資料表索引 `landlords`
--
ALTER TABLE `landlords`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_landlord_id_foreign` (`landlord_id`),
  ADD KEY `orders_tenant_id_foreign` (`tenant_id`),
  ADD KEY `orders_rent_id_foreign` (`rent_id`);

--
-- 資料表索引 `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rents_landlord_id_foreign` (`landlord_id`);

--
-- 資料表索引 `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `landlords`
--
ALTER TABLE `landlords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rents`
--
ALTER TABLE `rents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `equipments_rent_id_foreign` FOREIGN KEY (`rent_id`) REFERENCES `rents` (`id`);

--
-- 資料表的限制式 `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_rent_id_foreign` FOREIGN KEY (`rent_id`) REFERENCES `rents` (`id`);

--
-- 資料表的限制式 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_landlord_id_foreign` FOREIGN KEY (`landlord_id`) REFERENCES `landlords` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_rent_id_foreign` FOREIGN KEY (`rent_id`) REFERENCES `rents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE;

--
-- 資料表的限制式 `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_landlord_id_foreign` FOREIGN KEY (`landlord_id`) REFERENCES `landlords` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
