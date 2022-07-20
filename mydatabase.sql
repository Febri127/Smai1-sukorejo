/*
 Navicat Premium Data Transfer

 Source Server         : My Server 3306
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : mydatabase

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 14/06/2022 05:33:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `npm` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_semester` int(11) NOT NULL,
  `kd_prodi` int(11) NOT NULL,
  PRIMARY KEY (`npm`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for prodi
-- ----------------------------
DROP TABLE IF EXISTS `prodi`;
CREATE TABLE `prodi`  (
  `kd_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kd_prodi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of prodi
-- ----------------------------
INSERT INTO `prodi` VALUES (55201, 'Ilmu Komputer');
INSERT INTO `prodi` VALUES (57201, 'Sistem Informasi');
INSERT INTO `prodi` VALUES (59201, 'Teknologi Informasi');

-- ----------------------------
-- Table structure for semester
-- ----------------------------
DROP TABLE IF EXISTS `semester`;
CREATE TABLE `semester`  (
  `kd_semester` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sebaran_semester` enum('ganjil','genap') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_prodi` int(11) NOT NULL,
  PRIMARY KEY (`kd_semester`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
