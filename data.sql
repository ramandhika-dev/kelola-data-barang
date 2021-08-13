/*
 Navicat Premium Data Transfer

 Source Server         : MySQL - Localhost
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : localhost:3306
 Source Schema         : data

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 13/08/2021 22:36:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `stok` decimal(10, 0) NULL DEFAULT NULL,
  `harga` decimal(10, 0) NULL DEFAULT NULL,
  `berat` decimal(10, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES (1, '12ghfd4', 'Indomie', 'Indomie seleraku, Indomie dari dan bagi, Indonesia', 200, 2500, 250);
INSERT INTO `barang` VALUES (2, '12g567y', 'Sarimie', 'Sarimie Saingan Indomie Sejak Doeloe', 200, 2300, 250);
INSERT INTO `barang` VALUES (3, '13ghfd5', 'Mie Sedap', 'Mie saingan Indomie dan Sarimie', 200, 2400, 250);
INSERT INTO `barang` VALUES (4, '12ghfd3', 'Samyang', 'Rasanya sepedas kenangan', 200, 13000, 250);

SET FOREIGN_KEY_CHECKS = 1;
