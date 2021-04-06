-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for admin_ser
CREATE DATABASE IF NOT EXISTS `admin_ser` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `admin_ser`;

-- Dumping structure for table admin_ser.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin_ser.category: ~4 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Đời Sống', '2021-04-05 07:32:59', '2021-04-05 07:32:59'),
	(2, 'Du lịch', '2021-04-05 15:36:29', '2021-04-05 15:36:29'),
	(3, 'Xã hội', '2021-04-05 15:36:52', '2021-04-05 15:36:52'),
	(4, 'Khoa học & Công nghệ', '2021-04-05 15:37:01', '2021-04-05 15:37:01'),
	(5, 'Ẩm thực', '2021-04-05 15:37:21', '2021-04-05 15:37:21');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table admin_ser.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin_ser.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table admin_ser.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin_ser.migrations: ~5 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2021_03_29_144322_update_post_table', 1),
	(6, '2014_10_12_000000_create_users_table', 2),
	(7, '2021_03_27_140641_create_category_table', 2),
	(8, '2021_03_27_140843_create_post_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table admin_ser.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Avatar',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên đầy đủ',
  `slug` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Chuỗi không dấu',
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Số điện thoại',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ Email',
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Địa chỉ',
  `gender` tinyint(4) DEFAULT NULL COMMENT 'Giới tính',
  `birthday` datetime DEFAULT '1912-01-01 00:00:00' COMMENT 'Ngày sinh',
  `info` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Thông tin thêm',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mật khẩu đăng nhập',
  `level` tinyint(4) NOT NULL DEFAULT '2' COMMENT 'Cấp độ phân quyền: 1: Tài khoản hệ thống - 2: Tài khoản viết bài - 3: Tài khoản quản lý bài viết - 4: Tài khoản biên tập sản phẩm/dự án - 5: Tài khoản quản lý sản phẩm/dự án ',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin_ser.users: ~4 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `image`, `name`, `slug`, `phone`, `email`, `address`, `gender`, `birthday`, `info`, `password`, `level`, `created_at`, `updated_at`) VALUES
	(1, 'IMAGE-USER1617613052IMAGE-SLIDE-1596601351cach-trang-diem-cho-mui-to-2.png', 'Quang Merce', 'quang-merce', '0969030421', 'dvq.dev@gmail.com', NULL, 1, '1998-07-26 21:30:30', '22 Year Old', '$2y$10$jbep9dBNU1JudvarqzWpvu5Zxcnwk6.OB4uRJZwvCQ0mwYxW5qtZK', 1, '2021-04-05 07:32:59', '2021-04-05 07:32:59'),
	(2, 'IMAGE-USER1617611897IMAGE-AUTHOR-1596949117pham-nhat-vuong-giau-tu-dau-giau-nhu-the-nao-bytuong-com.jpg', 'Đào Minh Hoa', 'dao-minh-hoa', '09753445342', 'daominhhoa@gmail.com', NULL, NULL, '1912-01-01 00:00:00', NULL, '$2y$10$Dfjbx/ghus11pTnFl1tkN.QqgqeybyjOK7R.Polk4Ttg7ewseR0GS', 3, '2021-04-05 15:38:17', '2021-04-05 15:38:17'),
	(3, 'IMAGE-USER1617612038IMAGE-AUTHOR-1596948782100496736-steve-jobs-march-2011-getty.jpg', 'Mai Hải Vương', 'mai-hai-vuong', '099999999', 'haivuong@gmail.com', NULL, NULL, '1912-01-01 00:00:00', NULL, '$2y$10$62cQe/Jra2O9nJ8BGJw2ROwBOHKH871jmkYSOT8E/06p63jLpvkma', 2, '2021-04-05 15:40:38', '2021-04-05 15:40:38'),
	(4, 'IMAGE-USER1617612803IMAGE-SLIDE-1596948955im-105325.jpg', 'Author1', 'author1', '099888888', 'author1@gmail.com', NULL, NULL, '1912-01-01 00:00:00', NULL, '$2y$10$vcbsY734UfOfCRvBkkNTieYueLcn6TA1oZsuCokk5F1R7WWhEK0nq', 2, '2021-04-05 15:53:24', '2021-04-05 15:53:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- Dumping structure for table admin_ser.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contentHot` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'thời gian tạo bài viết',
  `tag` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci COMMENT 'nội dung bài viết dạng html',
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `cate_id` bigint(20) unsigned DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '2' COMMENT 'trạng thái: 1:Bản nháp, 2:chờ duyệt, 3: đã xuất bản',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `post_id_index` (`id`),
  KEY `post_tag_index` (`tag`),
  KEY `post_user_id_index` (`user_id`),
  KEY `post_cate_id_index` (`cate_id`),
  CONSTRAINT `post_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin_ser.post: ~3 rows (approximately)
DELETE FROM `post`;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id`, `title`, `contentHot`, `slug`, `image`, `postDate`, `tag`, `content`, `user_id`, `cate_id`, `status`, `created_at`, `updated_at`) VALUES
  (1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'Lorem ipsum sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit-aenean-commodo-ligula-eget-dolor', 'IMAGE-POST1617612075IMAGE-SLIDE-1596249258r1m1.jpg', '2020-01-01 00:00:00', 'eee', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.', 1, 1, 2, '2021-04-05 07:33:00', '2021-04-05 07:33:00'),
  (2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'Lorem ipsum sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit-aenean-commodo-ligula-eget-dolor', 'IMAGE-POST1617612099IMAGE-SLIDE-1596794889yamaha-r1m-do-nhay-ben-voi-phong-cach-monster-gp-2019-7121-1560845028-5d089ae45dcfb.jpg', '2020-01-01 00:00:00', 'eee', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.', 1, 1, 2, '2021-04-05 07:33:00', '2021-04-05 07:33:00'),
  (3, 'Bài viết mới 1', 'Nội dung bài viết mới 1', 'bai-viet-moi-1', 'IMAGE-SLIDE-1596794889yamaha-r1m-do-nhay-ben-voi-phong-cach-monster-gp-2019-7121-1560845028-5d089ae45dcfb.jpg', '2021-04-05 15:48:59', 'bai ,viet,mới', 'Nội dung bài viết mới 1', 2, 1, 2, '2021-04-05 15:48:59', '2021-04-05 15:48:59');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
