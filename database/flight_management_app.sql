/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : flight_management_app

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 15/04/2023 15:38:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aircraft
-- ----------------------------
DROP TABLE IF EXISTS `aircraft`;
CREATE TABLE `aircraft`  (
  `ma_phi_co` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_phi_co` char(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kc_bay` int NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ma_phi_co`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aircraft
-- ----------------------------
INSERT INTO `aircraft` VALUES ('A320', 'Airbus A320', 6100, '2023-04-14 10:55:45', '2023-04-14 10:55:45');
INSERT INTO `aircraft` VALUES ('A330', 'Airbus A330', 13430, '2023-04-14 10:56:44', '2023-04-14 10:56:44');
INSERT INTO `aircraft` VALUES ('A350', 'Airbus A350', 14815, '2023-04-14 10:56:58', '2023-04-14 10:56:58');
INSERT INTO `aircraft` VALUES ('B737', 'Boeing 737', 5455, '2023-04-14 10:57:13', '2023-04-14 10:57:13');
INSERT INTO `aircraft` VALUES ('B747', 'Boeing 747', 13430, '2023-04-14 10:57:26', '2023-04-14 10:57:26');
INSERT INTO `aircraft` VALUES ('B777', 'Boeing 777', 15700, '2023-04-14 10:57:38', '2023-04-14 10:57:38');
INSERT INTO `aircraft` VALUES ('B787', 'Boeing 787', 15700, '2023-04-14 10:57:50', '2023-04-14 10:57:50');

-- ----------------------------
-- Table structure for certification
-- ----------------------------
DROP TABLE IF EXISTS `certification`;
CREATE TABLE `certification`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ma_phi_cong` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ma_phi_co` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `certification_ma_phi_cong_foreign`(`ma_phi_cong`) USING BTREE,
  INDEX `certification_ma_phi_co_foreign`(`ma_phi_co`) USING BTREE,
  CONSTRAINT `certification_ma_phi_co_foreign` FOREIGN KEY (`ma_phi_co`) REFERENCES `aircraft` (`ma_phi_co`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `certification_ma_phi_cong_foreign` FOREIGN KEY (`ma_phi_cong`) REFERENCES `pilot` (`ma_phi_cong`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of certification
-- ----------------------------
INSERT INTO `certification` VALUES (4, 'PQ246', 'A320', '2023-04-14 11:19:46', '2023-04-15 08:33:00');
INSERT INTO `certification` VALUES (10, 'JC532', 'B777', '2023-04-15 08:33:41', '2023-04-15 08:33:41');
INSERT INTO `certification` VALUES (11, 'JC532', 'A330', '2023-04-15 08:34:03', '2023-04-15 08:34:03');
INSERT INTO `certification` VALUES (12, 'NT124', 'B747', '2023-04-15 08:35:17', '2023-04-15 08:35:17');
INSERT INTO `certification` VALUES (14, 'JC532', 'B747', '2023-04-15 08:36:31', '2023-04-15 08:36:31');
INSERT INTO `certification` VALUES (15, 'HD135', 'B777', '2023-04-15 08:36:37', '2023-04-15 08:36:37');
INSERT INTO `certification` VALUES (16, 'PQ246', 'B777', '2023-04-15 08:37:07', '2023-04-15 08:37:07');
INSERT INTO `certification` VALUES (17, 'HD135', 'A350', '2023-04-15 08:37:14', '2023-04-15 08:37:14');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for flight
-- ----------------------------
DROP TABLE IF EXISTS `flight`;
CREATE TABLE `flight`  (
  `ma_cb` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_xp` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `noi_den` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gio_xp` datetime(0) NOT NULL,
  `gio_den` datetime(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ma_cb`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of flight
-- ----------------------------
INSERT INTO `flight` VALUES ('ABCD1', 'Bắc Kạn', 'Quảng Ninh', '2023-04-11 12:58:00', '2023-04-11 14:58:00', '2023-04-11 05:59:01', '2023-04-11 05:59:01');
INSERT INTO `flight` VALUES ('AH256', 'Tuyên Quang', 'Hà Nội', '2023-04-14 17:30:00', '2023-04-14 19:00:00', '2023-04-14 18:18:49', '2023-04-14 18:18:49');
INSERT INTO `flight` VALUES ('BK975', 'Hà Giang', 'Hà Nội', '2023-04-14 01:00:00', '2023-04-14 05:30:00', '2023-04-14 18:18:15', '2023-04-14 18:18:15');
INSERT INTO `flight` VALUES ('CH278', 'Cao Bằng', 'Đà Nẵng', '2023-04-14 04:00:00', '2023-04-14 07:00:00', '2023-04-14 18:21:32', '2023-04-14 18:21:32');
INSERT INTO `flight` VALUES ('HN223', 'Hà Nội', 'Cà Mau', '2023-04-11 21:00:00', '2023-04-11 04:00:00', '2023-04-10 14:04:45', '2023-04-11 05:58:17');
INSERT INTO `flight` VALUES ('HU298', 'Hà Giang', 'Đà Nẵng', '2023-04-14 07:00:00', '2023-04-14 10:00:00', '2023-04-14 18:22:55', '2023-04-14 18:22:55');
INSERT INTO `flight` VALUES ('KH983', 'Sơn La', 'Đà Nẵng', '2023-04-14 20:30:00', '2023-04-14 22:00:00', '2023-04-14 18:19:17', '2023-04-14 18:19:17');
INSERT INTO `flight` VALUES ('KY346', 'Hà Nội', 'Hồ Chí Minh', '2023-04-14 05:00:00', '2023-04-14 21:30:00', '2023-04-14 18:19:55', '2023-04-14 18:19:55');

-- ----------------------------
-- Table structure for location
-- ----------------------------
DROP TABLE IF EXISTS `location`;
CREATE TABLE `location`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tinh_thanh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of location
-- ----------------------------
INSERT INTO `location` VALUES (1, ' Hà Nội', NULL, NULL);
INSERT INTO `location` VALUES (2, ' Hà Giang', NULL, NULL);
INSERT INTO `location` VALUES (3, ' Cao Bằng', NULL, NULL);
INSERT INTO `location` VALUES (4, ' Bắc Kạn', NULL, NULL);
INSERT INTO `location` VALUES (5, ' Tuyên Quang', NULL, NULL);
INSERT INTO `location` VALUES (6, ' Lào Cai', NULL, NULL);
INSERT INTO `location` VALUES (7, ' Điện Biên', NULL, NULL);
INSERT INTO `location` VALUES (8, ' Lai Châu', NULL, NULL);
INSERT INTO `location` VALUES (9, ' Sơn La', NULL, NULL);
INSERT INTO `location` VALUES (10, ' Yên Bái', NULL, NULL);
INSERT INTO `location` VALUES (11, ' Hoà Bình', NULL, NULL);
INSERT INTO `location` VALUES (12, ' Thái Nguyên', NULL, NULL);
INSERT INTO `location` VALUES (13, ' Lạng Sơn', NULL, NULL);
INSERT INTO `location` VALUES (14, ' Quảng Ninh', NULL, NULL);
INSERT INTO `location` VALUES (15, ' Bắc Giang', NULL, NULL);
INSERT INTO `location` VALUES (16, ' Phú Thọ', NULL, NULL);
INSERT INTO `location` VALUES (17, ' Vĩnh Phúc', NULL, NULL);
INSERT INTO `location` VALUES (18, ' Bắc Ninh', NULL, NULL);
INSERT INTO `location` VALUES (19, ' Hải Dương', NULL, NULL);
INSERT INTO `location` VALUES (20, ' Hải Phòng', NULL, NULL);
INSERT INTO `location` VALUES (21, ' Hưng Yên', NULL, NULL);
INSERT INTO `location` VALUES (22, ' Thái Bình', NULL, NULL);
INSERT INTO `location` VALUES (23, ' Hà Nam', NULL, NULL);
INSERT INTO `location` VALUES (24, ' Nam Định', NULL, NULL);
INSERT INTO `location` VALUES (25, ' Ninh Bình', NULL, NULL);
INSERT INTO `location` VALUES (26, ' Thanh Hóa', NULL, NULL);
INSERT INTO `location` VALUES (27, ' Nghệ An', NULL, NULL);
INSERT INTO `location` VALUES (28, ' Hà Tĩnh', NULL, NULL);
INSERT INTO `location` VALUES (29, ' Quảng Bình', NULL, NULL);
INSERT INTO `location` VALUES (30, ' Quảng Trị', NULL, NULL);
INSERT INTO `location` VALUES (31, ' Thừa Thiên Huế', NULL, NULL);
INSERT INTO `location` VALUES (32, ' Đà Nẵng', NULL, NULL);
INSERT INTO `location` VALUES (33, ' Quảng Nam', NULL, NULL);
INSERT INTO `location` VALUES (34, ' Quảng Ngãi', NULL, NULL);
INSERT INTO `location` VALUES (35, ' Bình Định', NULL, NULL);
INSERT INTO `location` VALUES (36, ' Phú Yên', NULL, NULL);
INSERT INTO `location` VALUES (37, ' Khánh Hòa', NULL, NULL);
INSERT INTO `location` VALUES (38, ' Ninh Thuận', NULL, NULL);
INSERT INTO `location` VALUES (39, ' Bình Thuận', NULL, NULL);
INSERT INTO `location` VALUES (40, ' Kon Tum', NULL, NULL);
INSERT INTO `location` VALUES (41, ' Gia Lai', NULL, NULL);
INSERT INTO `location` VALUES (42, ' Đắk Lắk', NULL, NULL);
INSERT INTO `location` VALUES (43, ' Đắk Nông', NULL, NULL);
INSERT INTO `location` VALUES (44, ' Lâm Đồng', NULL, NULL);
INSERT INTO `location` VALUES (45, ' Bình Phước', NULL, NULL);
INSERT INTO `location` VALUES (46, ' Tây Ninh', NULL, NULL);
INSERT INTO `location` VALUES (47, ' Bình Dương', NULL, NULL);
INSERT INTO `location` VALUES (48, ' Đồng Nai', NULL, NULL);
INSERT INTO `location` VALUES (49, ' Bà Rịa - Vũng Tàu', NULL, NULL);
INSERT INTO `location` VALUES (50, ' Hồ Chí Minh', NULL, NULL);
INSERT INTO `location` VALUES (51, ' Long An', NULL, NULL);
INSERT INTO `location` VALUES (52, ' Tiền Giang', NULL, NULL);
INSERT INTO `location` VALUES (53, ' Bến Tre', NULL, NULL);
INSERT INTO `location` VALUES (54, ' Trà Vinh', NULL, NULL);
INSERT INTO `location` VALUES (55, ' Vĩnh Long', NULL, NULL);
INSERT INTO `location` VALUES (56, ' Đồng Tháp', NULL, NULL);
INSERT INTO `location` VALUES (57, ' An Giang', NULL, NULL);
INSERT INTO `location` VALUES (58, ' Kiên Giang', NULL, NULL);
INSERT INTO `location` VALUES (59, ' Cần Thơ', NULL, NULL);
INSERT INTO `location` VALUES (60, ' Hậu Giang', NULL, NULL);
INSERT INTO `location` VALUES (61, ' Sóc Trăng', NULL, NULL);
INSERT INTO `location` VALUES (62, ' Bạc Liêu', NULL, NULL);
INSERT INTO `location` VALUES (63, ' Cà Mau', NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_04_09_032209_create_flight_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_04_09_032331_create_aircraft_table', 1);
INSERT INTO `migrations` VALUES (8, '2023_04_09_032420_create_pilot_table', 1);
INSERT INTO `migrations` VALUES (9, '2023_04_09_032522_create_certification_table', 1);
INSERT INTO `migrations` VALUES (10, '2023_04_10_021307_create_location_table', 2);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `expires_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for pilot
-- ----------------------------
DROP TABLE IF EXISTS `pilot`;
CREATE TABLE `pilot`  (
  `ma_phi_cong` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_phi_cong` char(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `luong` int NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ma_phi_cong`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pilot
-- ----------------------------
INSERT INTO `pilot` VALUES ('HD135', 'Phan Ngọc Diệp', 10000000, '2023-04-14 10:47:55', '2023-04-14 10:47:55');
INSERT INTO `pilot` VALUES ('HS159', 'Hoàng Phan Sơn', 15000000, '2023-04-13 02:55:10', '2023-04-13 02:55:10');
INSERT INTO `pilot` VALUES ('JC532', 'Jessica', 35000000, '2023-04-14 10:50:00', '2023-04-14 10:50:00');
INSERT INTO `pilot` VALUES ('NT124', 'Ngọc Trinh', 25000000, '2023-04-14 10:49:25', '2023-04-14 10:49:25');
INSERT INTO `pilot` VALUES ('PQ246', 'Đồng Phú Quốc', 12000000, '2023-04-14 10:48:48', '2023-04-14 10:48:48');
INSERT INTO `pilot` VALUES ('SH951', 'Hoàng Sơn Phan', 25000000, '2023-04-13 02:55:38', '2023-04-13 02:55:38');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@example.net', NULL, '$2y$10$mT7bqNAlYBXTqqm3qwb4LOzoSUjhMKDm5zPXCCnN1UW7HgDZv/goC', NULL, '2023-04-09 05:53:16', '2023-04-09 05:53:16');

SET FOREIGN_KEY_CHECKS = 1;
